<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

// Controladores que redireccionan informacion a las vistas en la carpeta resources/views/

class UsersController extends Controller
{
  public function index(){
    $users = User::orderBy('id', 'ASC') -> paginate(5);
    return view('admin.users.index') -> with('users', $users);
  }
}
