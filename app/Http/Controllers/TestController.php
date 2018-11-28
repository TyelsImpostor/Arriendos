<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;

class TestController extends Controller
{
    public function index()
    {
        return view('admin.test.index');
    }

    public function create()
    {
        $user = DB::table('articles')
                  ->join('users','users.id', '=', 'articles.user_id')
                  ->select(DB::raw('count(user_id) as user_count, users.name'))
                  ->groupBy('users.name')
                  ->get();

        return view('admin.test.create',['user'=>$user]);
    }
}
