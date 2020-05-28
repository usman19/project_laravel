<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	return view('index');
    }

    public function about(){
    	return view('about', ['nama' => 'wahyu usman']);
    }

    public function input(){
    	return view('mahasiswa/input');
    }

}
