<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class siswaController extends Controller
{
    public function index(){
    	$tampil = Siswa::all();
    	return view('home',compact('tampil'));
    }
}
