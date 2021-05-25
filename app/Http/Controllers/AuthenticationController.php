<?php

namespace App\Http\Controllers;

use App\Models\admin\account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    function register(){
        return view('dashboard_Owens.employee.register_view');
    }

    function save(Request $request){
        //validate request
        $request->validate([
            'EmployeeID'=>'required|unique:accounts',
            'Account'=>'required|unique:accounts|min:8|max:20',
            'Email'=>'required|email|unique:accounts',
            'Password'=>'required|min:8|max:20',
            'Role'=>'required',
        ]);

        //insert data to database
        $admin = new account();
        $admin->EmployeeID = $request->EmployeeID;
        $admin->Account = $request->Account;
        $admin->Email = $request->Email;
        $admin->Password = Hash::make($request->Password);
        $admin->Role = $request->Role;
        $save = $admin->save();
        if($save){
            return back()->with('success','New account has been register successfully!!!');
        }else{
            return back()->with('fail', 'Something were wrong, try again later...');
        }
    }

    function check(Request $request){
        //validate request
        $request->validate([

            'Account'=>'required|min:8|max:20',
            'Password'=>'required|min:4|max:20',
        ]);

        $userInfor = account::where('Account', '=', $request->Account)->first();
        if(!$userInfor){
            return back()->with('fail', 'We do not recognize your account!!!');
        }
        else{
            //check password
            if(Hash::check($request->Password, $userInfor->Password)){
                $request->session()->put('LoggedAdmin', $userInfor->id);
                return redirect('/Admin/owens');
            }
            else{
                return back()->with('fail', 'Incorrect password!!!');
            }
        }
    }

    function dashboard_owens(){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $account = account::where('id','=', session('LoggedAdmin'))->first();
        $name = DB::table('employee_lists')
                        ->where('EmployeeID', '=', $account ->EmployeeID)
                        ->first();
        $empList = DB::table('work_details')
                    ->selectRaw("	EmpID, EmpName, EmpPhone, COUNT(EmpName) as total_Work")
                    ->groupBy('EmpID','EmpName', 'EmpPhone')
                    ->get();

        $cusList = DB::table('customers')
                ->selectRaw("CusName,CusPhone, SUM(Price) as total_Price")
                ->selectRaw("CusName,CusPhone, COUNT(CusPhone) as total_CusPhone")
                ->groupBy('CusName', 'CusPhone')
                ->get();

        if($role == '1'){
            return redirect(route('index.admin_employee'));
        }
        elseif($role == '2'){
            return view('dashboard_Owens.index')->with(compact('empList', 'cusList','account', 'name'));
        }
    }

    function dashboard_Emp()
    {
        $account = account::where('id','=', session('LoggedAdmin'))->first();
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $name = DB::table('employee_lists')
            ->where('EmployeeID', '=', $account ->EmployeeID)
            ->first();

        $workList = DB::table('work_details')
            ->where('EmpID','=', $account->EmployeeID )
            ->get();

        $cusList = DB::table('customers')
            ->where('EmpID','=', $account->EmployeeID )
            ->selectRaw("CusName,CusPhone, COUNT(CusPhone) as total_CusPhone")
            ->groupBy('CusName', 'CusPhone')
            ->get();
        if($role == '1'){
            return view('dashboard_Employee.index')->with(compact('cusList','account', 'name', 'workList'));
        }
        elseif($role == '2'){
            return redirect(route('index.admin_owens'));
        }
    }

    function logout(){
        if(session()->has('LoggedAdmin')){
            session()->pull('LoggedAdmin');
            return redirect('/Admin');
        }
    }
}
