<?php

namespace App\Http\Controllers\user\news;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(){
        $data = DB::table('news_lists')->orderBy('id', 'desc')->paginate(3);
        return view('News.News', compact('data'));
    }

    public function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('news_lists')->orderBy('id', 'desc')->paginate(3);
            return view('News.ListNews', compact('data'))->render();
        }
    }

    public function newsDetail(Request $request){
        $id = $request->route()->parameter('NewsDetailID');
        $detail = DB::table('news_details')
            ->join('news_lists','news_lists.NewsID','=', 'news_details.NewsID')
            ->select('news_details.*', 'news_lists.NewsName')
            ->get()->where('NewsDetailID', '=', $id);
        return view('News.DetailNews')->with(compact('detail'));
    }

}
