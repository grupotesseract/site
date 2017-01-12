<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class EquipeController extends Controller
{

  public function index(){
    return view('layouts.equipe');
  }

}
