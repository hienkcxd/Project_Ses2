<?php

namespace App\Http\Controllers;

use App\Models\admin\account;
use Illuminate\Http\Request;
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
            'Account'=>'required|unique:accounts',
            'Email'=>'required|email|unique:accounts',
            'Password'=>'required|min:4|max:12',
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

            'Account'=>'required',
            'Password'=>'required|min:2|max:12',
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
        $data = ['LoggedAdminInfo'=>account::where('id','=', session('LoggedAdmin'))->first()];
        if($role == '1'){
            return redirect(route('index.admin_employee'));
        }
        elseif($role == '2'){
            return view('dashboard_Owens.index', $data);
        }
    }

    function dashboard_Emp()
    {
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $data = ['LoggedAdminInfo'=>account::where('id','=', session('LoggedAdmin'))->first()];
        if($role == '1'){
            return view('dashboard_Employee.index', $data);
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
