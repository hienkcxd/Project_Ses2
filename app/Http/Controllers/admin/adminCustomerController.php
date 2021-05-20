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
}
