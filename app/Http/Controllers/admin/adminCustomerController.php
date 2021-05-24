<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminCustomerController extends Controller
{

    function index_owens(){
        $cusList = DB::table('customers')->get();
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        if($role == '1'){
            return redirect(route('emp.customer'));
        }
        elseif($role == '2'){
            return view('dashboard_Owens.customer.index_View')->with(compact('cusList'));
        }
    }

    function index_Emp()
    {
        $cusList = DB::table('customers')->get();
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        if($role == '1'){
            return view('dashboard_Employee.customer.index_View')->with(compact('cusList'));
        }
        elseif($role == '2'){
            return redirect(route('owens.customer'));
        }
    }

    public function blacklist(){
        $blackList = DB::table('black_lists')->get();
        return view('dashboard_Owens.customer.blackList_View')->with(compact('blackList'));
    }



    public function edit(Request $request){
        $CusID = $request->route()->parameter('customerID');
        $BlackCusID = $request->route()->parameter('BlackCusID');

        $CusDetail = DB::table('customers')
                ->where('CusID', '=', $CusID)
                ->first();
        $blackCusDetail = DB::table('black_lists')
            ->where('BlackCusID', '=', $BlackCusID)
            ->first();
        return view('dashboard_Owens.customer.form_View')->with(compact('CusDetail','blackCusDetail'));
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
        $upd_Customer = DB::table('customers')
            ->where('CusID', '=', $CusID)
            ->update(
                [
                    'CusName' => $data['CusName'],
                    'CusPhone' => $data['CusPhone'],
                    'WorkName' => $data['WorkName'],
                    'Address' => $data['Address'],
                    'EmpID' => $data['EmpID'],
                    'EmpName' => $data['EmpName'],
                    'EmpPhone' => $data['EmpPhone'],
                    'Price' => $data['Price'],
                ],
            );

        $upd_Work = DB::table('work_lists')
            ->where('CusID', '=', $CusID)
            ->update(
                [
                    'WorkName' => $data['WorkName'],
                    'Address' => $data['Address'],
                    'EmpID' => $data['EmpID'],
                ],
            );

        $upd_WorkDetail = DB::table('work_details')
            ->where('CusID', '=', $CusID)
            ->update(
                [
                    'CusPhone' => $data['CusPhone'],
                    'Address' => $data['Address'],
                    'EmpID' => $data['EmpID'],
                    'EmpName' => $data['EmpName'],
                    'EmpPhone' => $data['EmpPhone'],
                    'Price_Int' => $data['Price'],
                ],
            );

        if(isset($upd_Customer, $upd_Work,  $upd_WorkDetail )){
            $thongbao = 'Update Thành Công!!!';
            return redirect(route('owens.customer'))->with(compact('thongbao'));
        }
        else{
            $thongbao = 'Update Thất Bại!!!';
            return redirect(route('owens.customer'))->with(compact('thongbao'));
        }
    }
}
