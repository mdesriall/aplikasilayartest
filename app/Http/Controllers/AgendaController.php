<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function dashboard(Request $request)
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
    public function index(){
        $data = Agenda::paginate(5);
        return view('dataagenda',compact('data'));
    }

    public function index2(){
        $data = Agenda::all();
        return view('welcome',compact('data'));
    }

    public function tambahagenda(){
        return view('tambahagenda');
    }

    public function insertagenda(Request $request)
{
    $data = new Agenda($request->all()); // Create a new instance of the Agenda model
    
    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $filename = $file->getClientOriginalName();
        $file->move('foto/', $filename);
        
        $data->foto = $filename;
        $data->save();
    }
    
    return redirect()->route('agenda')->with('success', 'Agenda Berhasil Di Tambahkan!');
}


    public function tampilkanagenda($id){

        $data = Agenda::find($id);
        return view ('tampilagenda', compact('data'));
       }

       public function updateagenda(Request $request, $id)
       {
           $data = Agenda::find($id);
           
           if ($request->hasFile('foto')) {
               $file = $request->file('foto');
               $filename = $file->getClientOriginalName();
               $file->move('foto/', $filename);
               
               $data->foto = $filename;
               $data->save();
           }
           
           $data->update($request->except('foto')); // Update all fields except 'foto'
           
           return redirect()->route('agenda')->with('success', 'Agenda Berhasil Di Ubah');
       }

       public function deleteagenda($id)
       {
           $data = Agenda::findOrFail($id); // Find the specific agenda by its ID
           $data->delete();
       
           return redirect()->route('agenda')->with('success', 'Agenda Berhasil Dihapus');
       }

       
}
