<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs\EmployeeList;
use Illuminate\Http\Request;

class adminEmployeeController extends Controller
{
    public function index(){
        $empList = EmployeeList::all();
        return view('dashboard_Owens.employee.index_View')->with(compact('empList'));
    }
}
