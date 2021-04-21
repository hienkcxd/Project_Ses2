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

    public function detail(){
        return view('Project.ProjectDetail');
    }
}
