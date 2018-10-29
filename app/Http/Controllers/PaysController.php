<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pay;
use App\User;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;

// Controladores que redireccionan informacion a las vistas en la carpeta resources/views/

class PaysController extends Controller
{
  public function index(Request $request){
    $pays = Pay::orderBy('id', 'DESC') -> paginate(5);
    $pays -> each(function($pays){
      $pays -> user;
    });
    return view('admin.pay.index') -> with('pays', $pays);
  }

  public function create(){
    return view('admin.pay.create');
  }

  public function store(Request $request){
    $pay = new Pay($request -> all());
    $pay -> user_id = \Auth::user() -> id;
    $pay -> save();
    Flash::success("Compra de " . $pay -> title . " ha sido realizada de forma exitosa!");
    return redirect() -> route('myarticles.index');
  }
}
