<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminWorkController extends Controller
{

    function index_owens(){
        $workProgress = null;
        $workList = DB::table('work_lists')->get();
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        if($role == '1'){
            return redirect(route('emp.work'))->with('fail', 'Bạn không thể truy cập vào trang giám đốc!!!');
        }
        elseif($role == '2'){
            return view('dashboard_Owens.work.index_View')->with(compact( 'workList', 'workProgress'));
        }
    }

    function index_Emp()
    {
        $empID = account::where('id','=', session('LoggedAdmin'))->first()->EmployeeID ;
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;

        $workProgress = null;
        $workList = DB::table('work_lists')
            ->where('EmpID','=',$empID)
            ->get();
        if($role == '1'){
            return view('dashboard_Employee.work.index_View')->with(compact( 'workList', 'workProgress'));
        }
        elseif($role == '2'){
            return redirect(route('owens.work'))->with('fail', 'Bạn không thể truy cập vào trang nhân viên!!!');
        }
    }

    public function progress_owens(){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $workList = null;
        $workProgress = DB::table('work_details')->get();
        if($role == '1'){
            return redirect(route('emp.work_progress'))->with('fail', 'Bạn không thể truy cập vào trang giám đốc!!!');;
        }
        elseif($role == '2'){
            return view('dashboard_Owens.work.index_View')->with(compact('workProgress', 'workList'));
        }
    }

    public function progress_emp(){
        $empID = account::where('id','=', session('LoggedAdmin'))->first()->EmployeeID ;
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;

        $workList = null;
        $workProgress = DB::table('work_details')
            ->where('EmpID','=',$empID)
            ->get();
        if($role == '1'){
            return view('dashboard_Employee.work.index_View')->with(compact('workProgress', 'workList'));
        }
        elseif($role == '2'){
            return redirect(route('owens.work_progress'))->with('fail', 'Bạn không thể truy cập vào trang nhân viên!!!');
        }
    }

    public function edit_owens(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
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


        if($role == '1'){
            return back()->with('fail', 'Bạn không thể truy cập vào trang giám đốc!!!');;
        }
        elseif($role == '2'){
            return view('dashboard_Owens.work.form_View')
                ->with(compact(
                    'workDetail',
                    'workList',
                    'customer',
                    'Emp',
                    'count',
                ));
        }

    }

    public function edit_emp(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
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


        if($role == '1'){
            return view('dashboard_Employee.work.form_View')
                ->with(compact(
                    'workDetail',
                    'workList',
                    'customer',
                    'Emp',
                    'count',
                ));
        }
        elseif($role == '2'){
            return back()->with('fail', 'Bạn không thể truy cập vào trang nhân viên!!!');;
        }
    }

    public function update(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $WorkID = $request->route()->parameter('WorkID');
        $data = $request->all();
        $thongbao = "Update Thành Công!!!";

        $request->validate([
            'WorkName'=>'required',
            'Address'=>'required|min:4|max:50',
            'Price'=>'required|min:1|max:50',
            'Price_Int'=>'required|min:1|max:50',
            'WorkDesc'=>'required|min:10|max:50',
            'CusName'=>'required|min:2|max:50',
            'CusPhone'=>'required|min:9|max:50',
            'registration'=>'required',
            'construction'=>'required',
            'Architecture'=>'required',
            'Progress'=>'required',
        ]);

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

        if($role == '1'){
            if(isset($upd_custDetail, $upd_workDetail, $upd_workLists)){
                return redirect(route('emp.work'))->with(compact('thongbao'));
            }
            else{
                $thongbao = "Update Thất Bại!!!";
                return redirect(route('emp.work_progress'))->with(compact('thongbao'));
            }
        }
        elseif($role == '2'){
            if(isset($upd_custDetail, $upd_workDetail, $upd_workLists)){
                return redirect(route('owens.work'))->with(compact('thongbao'));
            }
            else{
                $thongbao = "Update Thất Bại!!!";
                return redirect(route('owens.work_progress'))->with(compact('thongbao'));
            }
        }
    }

    function create_owens(){
            return view('dashboard_Owens.work.insertWork_Form');
    }
    function create(Request $request){
        $data = $request->all();
        return view('dashboard_Owens.work.insertWork_Form');
    }
}
