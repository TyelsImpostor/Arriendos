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

class ArticlesController extends Controller
{
  public function index(Request $request){
    $articles = Article::Search($request -> title) -> orderBy('id', 'DESC') -> paginate(5);
    $articles -> each(function($articles){
      $articles -> category;
      $articles -> user;
    });
    return view('admin.articles.index') -> with('articles', $articles);
  }

  public function create(){
    $categories = Category::orderBy('id', 'ASC') -> pluck('name', 'id');
    $tags = Tag::orderBy('id', 'ASC') -> pluck('name', 'id');

    return view('admin.articles.create')
      -> with('categories', $categories)
      -> with('tags', $tags);
  }

  public function store(ArticleRequest $request){
    if($request -> file('image'))
    {
      $file = $request -> file('image');
      $name = 'Arriendos_' . time() . '.' . $file -> getClientOriginalextension();
      $path = public_path() . '/images/articles/';
      $file -> move($path, $name);
    }

    $article = new Article($request -> all());
    $article -> user_id = \Auth::user() -> id;
    $article -> save();

    $article -> tags() -> sync($request -> tags);

    $image = new Image();
    $image -> name = $name;
    $image -> article() -> associate($article);
    $image -> save();

    Flash::success("El Articulo " . $article -> title . " ha sido creada de forma exitosa!");
    return redirect() -> route('home.index');
  }

  public function destroy($id){
    $article = Article::find($id);
    $article -> delete();

    Flash::warning('El Articulo ' . $article -> title . ' ha sido borrado exitosamente!');
    return redirect() -> route('home.index');
  }

  public function edit($id){
    $article = Article::find($id);
    $article -> category;
    $categories = Category::orderBy('name', 'ASC') -> pluck('name', 'id');
    $tags = Tag::orderBy('name', 'ASC') -> pluck('name', 'id');

    $my_tags = $article -> tags -> pluck('id') -> ToArray();

    return view('admin.articles.edit')
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
