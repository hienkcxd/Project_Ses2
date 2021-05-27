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
            return redirect(route('emp.customer'))->with('fail', 'Bạn không thể truy cập vào trang giám đốc!!!');
        }
        elseif($role == '2'){
            return view('dashboard_Owens.customer.index_View')->with(compact('cusList'));
        }
    }

    function index_Emp()
    {
        $empID = account::where('id','=', session('LoggedAdmin'))->first()->EmployeeID ;
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $cusList = DB::table('customers')
                    ->where('EmpID', '=', $empID)
                    ->get();
        if($role == '1'){
            return view('dashboard_Employee.customer.index_View')->with(compact('cusList'));
        }
        elseif($role == '2'){
            return redirect(route('owens.customer'))->with('fail', 'Bạn không thể truy cập vào trang nhân viên!!!');
        }
    }

    public function bList_owens(){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $blackList = DB::table('black_lists')->get();
        if($role == '1'){
            return redirect(route('emp.black_lists'))->with('fail', 'Bạn không thể truy cập vào trang giám đốc!!!');
        }
        elseif($role == '2'){
            return view('dashboard_Owens.customer.blackList_View')->with(compact('blackList'));
        }
    }

    public function bList_emp(){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $blackList = DB::table('black_lists')->get();

        if($role == '1'){
            return view('dashboard_Employee.customer.blackList_View')->with(compact('blackList'));
        }
        elseif($role == '2'){
            return redirect(route('owens.black_lists'))->with('fail', 'Bạn không thể truy cập vào trang nhân viên!!!');
        }
    }


    public function editCus_owens(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $empList = DB::table('employee_details')->get();
        $CusID = $request->route()->parameter('customerID');
        $BlackCusID = $request->route()->parameter('BlackCusID');
        $CusDetail = DB::table('customers')
                ->where('CusID', '=', $CusID)
                ->first();
        $blackCusDetail = DB::table('black_lists')
            ->where('BlackCusID', '=', $BlackCusID)
            ->first();

        if($role == '1'){
            return back()->with('fail', 'Bạn không thể truy cập vào trang giám đốc!!!');
        }
        elseif($role == '2'){
            return view('dashboard_Owens.customer.form_View')->with(compact('CusDetail','blackCusDetail', 'empList'));
        }
    }

    public function editCus_emp(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $empList = DB::table('employee_details')->get();
        $CusID = $request->route()->parameter('customerID');
        $BlackCusID = $request->route()->parameter('BlackCusID');
        $CusDetail = DB::table('customers')
            ->where('CusID', '=', $CusID)
            ->first();
        $blackCusDetail = DB::table('black_lists')
            ->where('BlackCusID', '=', $BlackCusID)
            ->first();
        if($role == '1'){
            return view('dashboard_Employee.customer.form_View')->with(compact('CusDetail','blackCusDetail', 'empList'));
        }
        elseif($role == '2'){
            return back()->with('fail', 'Bạn không thể truy cập vào trang nhân viên.');
        }
    }

    public function editBCust_owens(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $CusID = $request->route()->parameter('customerID');
        $BlackCusID = $request->route()->parameter('BlackCusID');
        $CusDetail = DB::table('customers')
            ->where('CusID', '=', $CusID)
            ->first();
        $blackCusDetail = DB::table('black_lists')
            ->where('BlackCusID', '=', $BlackCusID)
            ->first();
        if($role == '1'){
            return back()->with('fail', 'Bạn không thể truy cập vào trang giám đốc!!!');
        }
        elseif($role == '2'){
            return view('dashboard_Owens.customer.form_View')->with(compact('CusDetail','blackCusDetail'));
        }
    }

    public function editBCust_emp(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $CusID = $request->route()->parameter('customerID');
        $BlackCusID = $request->route()->parameter('BlackCusID');
        $CusDetail = DB::table('customers')
            ->where('CusID', '=', $CusID)
            ->first();
        $blackCusDetail = DB::table('black_lists')
            ->where('BlackCusID', '=', $BlackCusID)
            ->first();
        if($role == '1'){
            return view('dashboard_Employee.customer.form_View')->with(compact('CusDetail','blackCusDetail'));
        }
        elseif($role == '2'){
            return back()->with('fail', 'Bạn không thể truy cập vào trang nhân viên.');
        }
    }

    public function update(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $CusID = $request->route()->parameter('customerID');
        $data = $request->all();

        $request->validate([
            'CusName'=>'required',
            'CusPhone'=>'required',
            'WorkName'=>'required',
            'Address'=>'required',
            'EmpID'=>'required',
            'EmpName'=>'required',
            'EmpPhone'=>'required',
            'Price'=>'required',
        ]);

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

        if($role == '1'){
            if(isset($upd_Customer, $upd_Work,  $upd_WorkDetail )){
                $thongbao = 'Update Thành Công!!!';
                return redirect(route('emp.customer'))->with(compact('thongbao'));
            }
            else{
                $thongbao = 'Update Thất Bại!!!';
                return redirect(route('emp.customer'))->with(compact('thongbao'));
            }
        }
        elseif($role == '2'){
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


    public function upd_BlackCust(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $CusID = $request->route()->parameter('BlackCustID');
        $data = $request->all();
        $upd_bCust = DB::table('black_lists')
            ->where('BlackCusID', '=', $CusID)
            ->update(
                [
                    'BlackCusName' => $data['BlackCusName'],
                    'BlackCusPhone' => $data['BlackCusPhone'],
                    'BlackCusDesc' => $data['BlackCusDesc'],
                ],
            );

        if($role == '1'){
            if(isset($upd_bCust)){
                $thongbao = 'Update Thành Công!!!';
                return redirect(route('emp.black_lists'))->with(compact('thongbao'));
            }
            else{
                $thongbao = 'Update Thất Bại!!!';
                return redirect(route('emp.black_lists'))->with(compact('thongbao'));
            }
        }
        elseif($role == '2'){
            if(isset($upd_bCust)){
                $thongbao = 'Update Thành Công!!!';
                return redirect(route('owens.black_lists'))->with(compact('thongbao'));
            }
            else{
                $thongbao = 'Update Thất Bại!!!';
                return redirect(route('owens.black_lists'))->with(compact('thongbao'));
            }
        }
    }

    public function empDetail(Request $request){
        $empID = $request->route()->parameter('EmployeeID');
        $empDetail = DB::table('employee_details')
            ->where('EmployeeID', '=', $empID)
            ->get();
        echo json_encode($empDetail);
    }

    public function create_owens(){
            $empList = DB::table('employee_details')->get();
            return view('dashboard_Owens.customer.insertCus_View')->with(compact('empList'));
    }

    public function createBcust_owens(){

        return view('dashboard_Owens.customer.insertBlackCust_View');
    }

    public function createCust(Request $request){
        $data = $request->all();
        $request->validate([
            'CusID'=>'required|unique:customers',
            'CusName'=>'required|min:2',
            'CusPhone'=>'required|min:9|max:12',
            'WorkName'=>'required|min:9',
            'Address'=>'required|min:9|unique:customers',
            'Price'=>'required|integer|gt:0',
        ]);

        $upd_cust = DB::table('customers')->insert([
            'CusID'=>$data['CusID'],
            'CusName'=>$data['CusName'],
            'CusPhone'=>$data['CusPhone'],
            'WorkName'=>$data['WorkName'],
            'Address'=>$data['Address'],
            'EmpID'=>$data['EmpID'],
            'EmpName'=>$data['EmpName'],
            'EmpPhone'=>$data['EmpPhone'],
            'Price'=>$data['Price'],
        ]);
        if(isset($upd_cust)){
            return redirect(route('owens.customer'))->with('success', 'Thêm khách hàng mới thành công!!!');
        }
        else{
            return redirect(route('owens.customer'))->with('fail', 'Thêm khách hàng mới thất bại!!!');
        }

    }

    public function createBlackCust(Request $request){
        $data = $request->all();
        $request->validate([
            'BlackCusName'=>'required|min:2',
            'BlackCusPhone'=>'required|min:9|max:12|unique:black_lists',
            'BlackCusDesc'=>'required|min:15',
        ]);

        $upd_blackCust = DB::table('black_lists')->insert([
            'BlackCusName'=>$data['BlackCusName'],
            'BlackCusPhone'=>$data['BlackCusPhone'],
            'BlackCusDesc'=>$data['BlackCusDesc'],
        ]);
        if(isset($upd_blackCust)){
            return redirect(route('owens.black_lists'))->with('success', 'Thêm danh sách đen thành công!!!');
        }
        else{
            return redirect(route('owens.black_lists'))->with('fail', 'Thêm danh sách đen mới thất bại!!!');
        }

    }
}
