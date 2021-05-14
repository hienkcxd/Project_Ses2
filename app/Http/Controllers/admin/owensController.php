<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class owensController extends Controller
{

    public function index(){
        return view('dashboard_Owens.index');
    }

    public function market(){
        $data = DB::table('market_lists')->get();
        return view('dashboard_Owens.market.admin_market')->with(compact( 'data'));
    }
}
