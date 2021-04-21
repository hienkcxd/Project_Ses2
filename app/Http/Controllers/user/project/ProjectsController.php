<?php

namespace App\Http\Controllers\user\project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    public function index(){
        $all_project = DB::table('project_lists')->get();
        return view('Project.Project')->with(compact('all_project'));
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
