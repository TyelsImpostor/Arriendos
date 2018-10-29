<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

// Controladores que redireccionan informacion a las vistas en la carpeta resources/views/ 

class RegisterController extends Controller
{
  public function create(){
    return view('registers.register');
  }

  public function store(UserRequest $request){
    $user = new User($request -> all());
    $user -> password = bcrypt($request -> password);
    $user -> save();

    Flash::success("Se ha Registrado " . $user -> name . " de forma exitosa!");
    return redirect() -> route('home.index');
  }
}
