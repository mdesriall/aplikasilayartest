<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datapengguna;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DatapenggunaController extends Controller
{
    public function index(){
        $data = users::paginate(5);
        return view ('datapengguna', compact('data'));
    }
}
