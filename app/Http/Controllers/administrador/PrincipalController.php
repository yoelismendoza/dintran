<?php

namespace App\Http\Controllers\administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrincipalController extends Controller
{
   public function index()
    {
    	 session_start();
        return view('administrador.index');
    }
}
