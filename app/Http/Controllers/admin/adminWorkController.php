<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminWorkController extends Controller
{
    public function index(){
        $workProgress = null;
        $workList = DB::table('work_lists')->get();
        return view('dashboard_Owens.work.index_View')->with(compact( 'workList', 'workProgress'));
    }
    public function progress(){
        $workList = null;
        $workProgress = DB::table('work_details')->get();
        return view('dashboard_Owens.work.index_View')->with(compact('workProgress', 'workList'));
    }

    public function edit(Request $request){
        $WorkID = $request->route()->parameter('WorkID');
        $workDetail = DB::table('work_details')
                ->where('WorkID', '=', $WorkID)
                ->first();
        return view('dashboard_Owens.work.form_View')->with(compact('workDetail'));
    }

}
