<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Tag;

// Controladores que redireccionan informacion a las vistas en la carpeta resources/views/

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::orderby('id', 'ASC') -> paginate(5);
        $articles -> each(function($articles){
          $articles -> category;
          $articles -> user;
          $articles -> image;
        });
        return view('welcome') ->with('articles', $articles);
    }
/*
    public function searchCategory($name)
    {
      $category = Category::SearchCategory($name) -> first();
      $articles = $category -> articles() -> paginate(4);
      $articles = each(function($articles){
        $articles -> category;
        $articles -> images;
      });
      return view('welcome')
        ->with('articles', $articles);
    }

    public function searchTag($name)
    {
      $tag = Tag::SearchTag($name) -> first();
      $articles = $tag -> articles() -> paginate(4);
      $articles = each(function($articles){
        $articles -> category;
        $articles -> images;
      });
      return view('welcome')
        ->with('articles', $articles);
    }
  */
}
