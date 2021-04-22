<?php

namespace App\Http\Controllers\user\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homepageController extends Controller
{
    public function index(){
        $arr = ['DCH01', 'DCH02', 'NP01', 'NP02'];
        $gallery = DB::table('project_lists')
                ->whereIn('ProjectID', $arr)
                ->get();
        return view('homepage.homepage')->with(compact('gallery'));
    }

    public function projectDetail(Request $request){
        $id = $request->route()->parameter('ProDetailID');
        $detail = DB::table('project_details')
            ->join('project_lists','project_lists.ProjectID','=', 'project_details.ProjectID')
            ->select('project_details.*', 'project_lists.ProjectName')
            ->get()->where('ProDetailID', '=', $id);
        return view('Project.ProjectDetail')->with(compact('detail'));
    }
}
