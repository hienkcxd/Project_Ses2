<?php

namespace App\Http\Controllers\user\project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        return view('Project.Project');
    }

    public function detail(){
        return view('Project.ProjectDetail');
    }
}
