<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Models\DataKeuangan;
use App\Models\suratpengajuan;
use App\Models\datapenduduk;

class DashboardController extends Controller
{
    // ...

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

        // Retrieve the agenda data and agenda count using the totalagenda() method
        $agendaData = $this->totalagenda($request)['agendaData'];
        $agendaCount = $this->totalagenda($request)['agendaCount'];

        // Retrieve the surat pengajuan data and count using the totalsuratpengajuan() method
        $suratPengajuanData = $this->totalsuratpengajuan($request)['suratPengajuanData'];
        $suratPengajuanCount = $this->totalsuratpengajuan($request)['suratPengajuanCount'];

        // Retrieve the data penduduk data and count using the totaldatapenduduk() method
        $dataPendudukData = $this->totaldatapenduduk($request)['dataPendudukData'];
        $dataPendudukCount = $this->totaldatapenduduk($request)['dataPendudukCount'];

        // Handle sorting
        $sortField = $request->query('sort', 'created_at');
        $sortDirection = $request->query('direction', 'desc');

        $data = DataKeuangan::orderBy($sortField, $sortDirection)->paginate(5);

        return view('dashboard', compact(
            'data',
            'totalAmount',
            'totalSpend',
            'totalMoney',
            'sortField',
            'sortDirection',
            'agendaData',
            'agendaCount',
            'suratPengajuanData',
            'suratPengajuanCount',
            'dataPendudukData',
            'dataPendudukCount'
        ));
    }

    // ... (other methods)

    public function totaldatapenduduk(Request $request)
    {
        // Calculate the total count of DataPenduduk records
        $dataPendudukCount = datapenduduk::count();

        // Retrieve all data without pagination for DataPenduduk
        $dataPendudukData = datapenduduk::all();

        return [
            'dataPendudukData' => $dataPendudukData,
            'dataPendudukCount' => $dataPendudukCount,
        ];
    }
    public function totalagenda(Request $request)
    {
        // Calculate the AgendaCount using the Agenda model
        $agendaCount = Agenda::count();

        // Retrieve all data without pagination for the dashboard
        $agendaData = Agenda::all();

        return [
            'agendaData' => $agendaData,
            'agendaCount' => $agendaCount,
        ];
    }
    public function totalsuratpengajuan(Request $request)
    {
        // Calculate the total count of SuratPengajuan records
        $suratPengajuanCount = suratpengajuan::count();

        // Retrieve all data without pagination for SuratPengajuan
        $suratPengajuanData = suratpengajuan::all();

        return [
            'suratPengajuanData' => $suratPengajuanData,
            'suratPengajuanCount' => $suratPengajuanCount,
        ];
    }
}
