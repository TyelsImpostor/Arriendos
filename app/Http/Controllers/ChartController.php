<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;

class ChartController extends Controller
{
    public function index()
    {
        $category = DB::table('articles')
                  ->join('categories','categories.id', '=', 'articles.category_id')
                  ->select(DB::raw('count(category_id) as article_count, categories.name'))
                  ->groupBy('categories.name')
                  ->get();

        return view('admin.graficos.index',['category'=>$category]);
    }

    public function create()
    {
        $article = DB::table('articles')
                  ->select(DB::raw('count(articles.title) as article_count, articles.region'))
                  ->groupBy('articles.region')
                  ->get();

        return view('admin.graficos.create',['article'=>$article]);
    }
}
