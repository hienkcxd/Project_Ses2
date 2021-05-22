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


        //Update work lists
        $upd_workLists = DB::table('work_lists')
            ->where('WorkID', '=', $WorkID)
            ->update(
                [
                    'WorkName' => $data['WorkName'],
                    'Address' => $data['Address'],
                    'WorkDesc' => $data['WorkDesc'],
                ],
            );

        $upd_workDetail = DB::table('work_details')
            ->where('WorkID', '=', $WorkID)
            ->update(
                [
                    'CusPhone' => $data['CusPhone'],
                    'EmpPhone' => $data['EmpPhone'],
                    'EmpName' => $data['EmpName'],
                    'Address' => $data['Address'],
                    'Price_Int' => $data['Price_Int'],
                    'registration' => $data['registration'],
                    'construction' => $data['construction'],
                    'Architecture' => $data['Architecture'],
                    'Progress' => $data['Progress'],
                ],
            );

        //update customer
        $upd_custDetail = DB::table('customers')
            ->where('CusID', '=', $data['CusID'])
            ->update(
                [
                    'CusName' => $data['CusName'],
                    'CusPhone' => $data['CusPhone'],
                    'EmpName' => $data['EmpName'],
                    'EmpPhone' => $data['EmpPhone'],
                    'WorkName' => $data['WorkName'],
                    'Address' => $data['Address'],
                    'Price' => $data['Price'],
                ],
            );

        if(isset($upd_custDetail, $upd_workDetail, $upd_workLists, $upd_empDetail, $upd_empPhoneDetail, $upd_cusPhoneDetail)){
            return redirect(route('owens.work'))->with(compact('thongbao'));
        }
        else{
            $thongbao = "Update Thất Bại!!!";
            return redirect(route('owens.work_progress'))->with(compact('thongbao'));
        }
    }

}
