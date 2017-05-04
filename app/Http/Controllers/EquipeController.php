<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class EquipeController extends Controller
{

  public function index(){
    return view('layouts.equipe');
  }

  public function requerir_membro($id){
    $membroEspecifico = Users::findById($id);
    return view('layouts.equipe.individual', compact('membroEspecifico'));
  }

}
