<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;

// Controladores que redireccionan informacion a las vistas en la carpeta resources/views/

class ImagesController extends Controller
{
  public function index(Request $request){
    $images = Image::all();
    $images -> each(function($images){
      $images -> article;
    });
    return view('admin.images.index') -> with('images', $images);
  }
}
