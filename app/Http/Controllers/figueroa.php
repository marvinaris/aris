<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\gente;

class figueroa extends Controller
{
    public function envio($id){

    	$gente= gente::find($id);

    	return view('figueroa',['gente'=>$gente]);


    }
}
