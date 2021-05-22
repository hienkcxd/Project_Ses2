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
        $workList = DB::table('work_lists')
            ->where('WorkID', '=', $WorkID)
            ->first();
        $workDetail = DB::table('work_details')
                ->where('WorkID', '=', $WorkID)
                ->first();
        $customer = DB::table('customers')
            ->where('CusID', '=', $workList->CusID )
            ->first();
        $Emp = DB::table('employee_lists')
            ->where('EmployeeID', '=', $customer->EmpID )
            ->first();

        $count = DB::table('customers')
            ->where('CusPhone', '=', $workDetail->CusPhone )
            ->count();

        return view('dashboard_Owens.work.form_View')
            ->with(compact(
                'workDetail',
                 'workList',
                            'customer',
                            'Emp',
                            'count',
            ));

    }

    public function update(Request $request){
        $WorkID = $request->route()->parameter('WorkID');
        $data = $request->all();
        $thongbao = "Update Thành Công!!!";
        $upd_workLists = DB::table('work_lists')
            ->where('WorkID', '=', $WorkID)
            ->update(
                [
                    'WorkName' => $data['WorkName'],
                    'Address' => $data['Address'],
                    'CusID' => $data['CusID'],
                    'EmpID' => $data['EmpID'],
                    'WorkDesc' => $data['WorkDesc'],
                ],
            );

        $upd_workDetail = DB::table('work_details')
            ->where('WorkID', '=', $WorkID)
            ->update(
                [
                    'CusPhone' => $data['CusPhone'],
                    'Address' => $data['Address'],
                    'Price_Int' => $data['Price_Int'],
                    'EmpName' => $data['EmpName'],
                    'EmpPhone' => $data['EmpPhone'],
                    'registration' => $data['registration'],
                    'construction' => $data['construction'],
                    'Architecture' => $data['Architecture'],
                    'Progress' => $data['Progress'],
                ],
            );

        $upd_custDetail = DB::table('customers')
            ->where('CusID', '=', $data['CusID'])
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
        if(isset($upd_custDetail, $upd_workDetail, $upd_workLists)){
            return redirect(route('owens.work'))->with(compact('thongbao'));
        }
        else{
            $thongbao = "Update Thất Bại!!!";
            return redirect(route('owens.work'))->with(compact('thongbao'));
        }
    }

}
