<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Tag;
use App\Image;
use Laracasts\Flash\Flash;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Redirect;

// Controladores que redireccionan informacion a las vistas en la carpeta resources/views/

class MyarticlesController extends Controller
{
  public function index(Request $request){
    $articles = Article::Search($request -> title) -> orderBy('id', 'DESC') -> paginate(5);
    $articles -> each(function($articles){
      $articles -> category;
      $articles -> user;
      $articles -> image;
    });
    return view('myarticles.index') -> with('articles', $articles);
  }
}
