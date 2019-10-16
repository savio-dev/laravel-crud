<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function Salvar(Request $request){

    $input = $request->all();
    //return $input;
    	return view('dados',$input);
    } 
}
