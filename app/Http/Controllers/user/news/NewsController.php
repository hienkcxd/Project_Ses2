<?php

namespace App\Http\Controllers\user\news;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(){
        $news = DB::table('news_lists')->limit(3)->get();
        return view('News.News')->with(compact('news'));
    }

}
