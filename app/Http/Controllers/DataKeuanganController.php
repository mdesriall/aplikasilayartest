<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKeuangan;
use App\Models\Agenda;
use Illuminate\Support\Facades\DB;


class DataKeuanganController extends Controller
{
    public function index(Request $request)
    {
    // Retrieve all data without pagination to calculate the totals
    $allData = DataKeuangan::all();

    // Calculate the total amount by summing up the parsed numeric values from the database for "Debit" and "Saldo" types
    $totalAmount = $allData->whereIn('tipe_dana', ['Debit', 'Saldo'])->sum(function ($item) {
        return (float) str_replace(['.', ','], ['', '.'], $item->nominal);
    });

    // Calculate the total spend (sum of nominal where tipe_dana is "Kredit")
    $totalSpend = $allData->where('tipe_dana', 'Kredit')->sum(function ($item) {
        return (float) str_replace(['.', ','], ['', '.'], $item->nominal);
    });

    // Calculate the total money (difference between totalAmount and totalSpend)
    $totalMoney = $totalAmount - $totalSpend;

    // Format the total amounts back to the desired display format (with commas as separators)
    $totalAmount = number_format($totalAmount, 2, ',', '.');
    $totalSpend = number_format($totalSpend, 2, ',', '.');
    $totalMoney = number_format($totalMoney, 2, ',', '.');

    // Handle sorting
    $sortField = $request->query('sort', 'created_at');
    $sortDirection = $request->query('direction', 'desc');

    $data = DataKeuangan::orderBy($sortField, $sortDirection)->paginate(5);

    return view('datakeuangan', compact('data', 'totalAmount', 'totalSpend', 'totalMoney', 'sortField', 'sortDirection'));
    }

    public function tambahdatakeuangan(){
    return view ('tambahdatakeuangan');
   }

   public function masukdatakeuangan(Request $request){
    //dd($request->all());
    DataKeuangan::create($request->all());
    return redirect()->route('datakeuangan');
   }

   public function deleteAllData()
    {
        // Use the `truncate` method to delete all data from the table.
        // Be very careful with this operation as it cannot be undone.
        DataKeuangan::truncate();

        // Redirect back to the index page or any other page as per your requirement.
        // You may show a success message after the deletion.
        return redirect()->route('datakeuangan')->with('success', 'Data Keuangan Berhasil Di Hapus!');
    }

    public function dashboard(Request $request)
    {
    // Retrieve all data without pagination to calculate the totals
    $allData = DataKeuangan::all();

    // Calculate the total amount by summing up the parsed numeric values from the database for "Debit" and "Saldo" types
    $totalAmount = $allData->whereIn('tipe_dana', ['Debit', 'Saldo'])->sum(function ($item) {
        return (float) str_replace(['.', ','], ['', '.'], $item->nominal);
    });

    // Calculate the total spend (sum of nominal where tipe_dana is "Kredit")
    $totalSpend = $allData->where('tipe_dana', 'Kredit')->sum(function ($item) {
        return (float) str_replace(['.', ','], ['', '.'], $item->nominal);
    });

    // Calculate the total money (difference between totalAmount and totalSpend)
    $totalMoney = $totalAmount - $totalSpend;

    // Format the total amounts back to the desired display format (with commas as separators)
    $totalAmount = number_format($totalAmount, 2, ',', '.');
    $totalSpend = number_format($totalSpend, 2, ',', '.');
    $totalMoney = number_format($totalMoney, 2, ',', '.');

    // Handle sorting
    $sortField = $request->query('sort', 'created_at');
    $sortDirection = $request->query('direction', 'desc');

    $data = DataKeuangan::orderBy($sortField, $sortDirection)->paginate(5);

    return view('dashboard', compact('data', 'totalAmount', 'totalSpend', 'totalMoney', 'sortField', 'sortDirection'));
    return $dashboardData;
    }

    



    
}
