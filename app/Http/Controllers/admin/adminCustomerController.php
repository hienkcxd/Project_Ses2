<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminCustomerController extends Controller
{
    public function index(){
        $cusList = DB::table('customers')->get();
        return view('dashboard_Owens.customer.index_View')->with(compact('cusList'));
    }

    public function indexEmp(){
        $cusList = DB::table('customers')->get();
        return view('dashboard_Employee.customer.index_View')->with(compact('cusList'));
    }

    public function edit(Request $request){
        $CusID = $request->route()->parameter('customerID');
        $CusDetail = DB::table('customers')
                ->where('CusID', '=', $CusID)
                ->first();
        return view('dashboard_Owens.customer.form_View')->with(compact('CusDetail'));
    }

    public function editEmp(Request $request){
        $CusID = $request->route()->parameter('customerID');
        $CusDetail = DB::table('customers')
            ->where('CusID', '=', $CusID)
            ->first();
        return view('dashboard_Employee.customer.form_View')->with(compact('CusDetail'));
    }

    public function update(Request $request){
        $CusID = $request->route()->parameter('customerID');
        $data = $request->all();
        $CusDetail = DB::table('customers')
            ->where('CusID', '=', $CusID)
            ->first();
        return view('dashboard_Owens.customer.form_View')->with(compact('CusDetail'));
    }
}
