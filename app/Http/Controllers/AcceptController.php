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

class AcceptController extends Controller
{
  public function index(Request $request){
    $articles = Article::Search($request -> title) -> orderBy('id', 'DESC') -> paginate(5);
    $articles -> each(function($articles){
      $articles -> category;
      $articles -> user;
      $articles -> image;
    });
    return view('admin.accept.index') -> with('articles', $articles);
  }

  public function edit($id){
    $article = Article::find($id);
    $article -> category;
    $categories = Category::orderBy('name', 'ASC') -> pluck('name', 'id');
    $tags = Tag::orderBy('name', 'ASC') -> pluck('name', 'id');

    $my_tags = $article -> tags -> pluck('id') -> ToArray();

    return view('admin.accept.edit')
      -> with('categories', $categories)
      -> with('article', $article)
      -> with('tags', $tags)
      -> with('my_tags', $my_tags);
  }

  public function update(Request $request, $id){
    $article = Article::find($id);
    $article -> fill($request -> all());
    $article -> save();

    $article -> tags() -> sync($request -> tags);

    Flash::warning('El Articulo '. $article -> name . ' ha sido editado con exito!');
    return redirect() -> route('home.index');
  }
}
