<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\gente;

class controlador extends Controller
{
    public function index(){

    	return view('index');
    }

    public function contacto(){

	return view('contacto');
     }

public function reviews(){

	return view('reviews');
}

public function recibir($id){

$gente= gente::find($id);
dd($gente);
}
}
