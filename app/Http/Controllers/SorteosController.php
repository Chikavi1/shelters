<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SorteosController extends Controller
{
  public function index(){
    return view('sorteos.index');
  }

  public function show(){
    return view('sorteos.show');
  }

  public function privacy(){
    return view('sorteos.privacy');
  }

  public function verify(){
    return view('sorteos.verify');
  }

}
