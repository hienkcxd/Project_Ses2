<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminCustomerController extends Controller
{
    public function index(){
        return view('dashboard_Owens.customer.index_View');
    }
}
