<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NotificationController;
use App\Models\AboutUs\EmployeeDetail;
use App\Models\AboutUs\EmployeeList;
use App\Models\admin\account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminEmployeeController extends Controller
{
    public function index(){
        $dataNoti = (new NotificationController)->renderNotification();
        return view('dashboard_Owens.employee.index_View', compact('dataNoti'));
    }


    public function edit(Request $request){
        $EmpID = $request->route()->parameter('EmployeeID');
        $dataNoti = (new NotificationController)->renderNotification();
        $empDetail = DB::table('employee_details')
                    ->where('EmployeeID', '=', $EmpID)
                    ->first();
        return view('dashboard_Owens.employee.form_View')->with(compact('empDetail', 'dataNoti'));
    }


    public function update(Request $request){
        $id_Emp= $request->route()->parameter('EmployeeID');
        $data = $request->all();
        $thongbao = "";
        $upd_empLists = DB::table('employee_lists')
                        ->where('EmployeeID', '=', $id_Emp)
                        ->update(
                            ['empName' => $data['empName'],
                             'Position' => $data['position'],
                            ],
                        );

        $upd_empDetail = DB::table('employee_details')
            ->where('EmployeeID', '=', $id_Emp)
            ->update(
                [   'empName' => $data['empName'],
                    'Position' => $data['position'],
                    'describe' => $data['describe'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'facebook' => $data['facebook'],
                    'zalo' => $data['zalo'],
                ],
            );

         $upd_empForworkDetail = DB::table('work_details')
            ->where('EmpID', '=', $id_Emp)
            ->update(
                [   'EmpName' => $data['empName'],
                    'EmpPhone' => $data['phone'],
                ],
            );

        $upd_empForCustomer = DB::table('customers')
            ->where('EmpID', '=', $id_Emp)
            ->update(
                [   'EmpName' => $data['empName'],
                    'EmpPhone' => $data['phone'],
                ],
            );


        if(isset($upd_empDetail, $upd_empLists, $upd_empForCustomer, $upd_empForworkDetail )){
            $thongbao = 'Update Thành Công!!!';
            (new NotificationController)->sendNotification('update information employee with id', $id_Emp, $data['empName']);
            return redirect(route('owens_Emp'))->with(compact('thongbao'));
        }
        else{
            $thongbao = 'Update Thất Bại!!!';
            return redirect(route('owens_Emp'))->with(compact('thongbao'));
        }
    }

    public function getEmployee(Request $request)
    {
        ## Read value
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = EmployeeList::select('count(*) as allcount')->count();
        $totalRecordswithFilter = EmployeeList::select('count(*) as allcount')
            ->where('EmpName', 'like', '%' . $searchValue . '%')
            ->orWhere('Position', 'like', '%' . $searchValue . '%')
            ->count();

        // Fetch records: lấy data
        $records = EmployeeList::orderBy($columnName, $columnSortOrder)
            ->where('EmpName', 'like', '%' . $searchValue . '%')
            ->orWhere('Position', 'like', '%' . $searchValue . '%')
            ->select('employee_lists.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach ($records as $record) {
            $EmployeeID = $record->EmployeeID;
            $EmpName = $record->EmpName;
            $Position = $record->Position;

            $data_arr[] = array(
                "EmployeeID" => $EmployeeID,
                "EmpName" => $EmpName,
                "Position" => $Position,
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );

        echo json_encode($response);
        exit;
    }

    public function create_owens(){
        $dataNoti = (new NotificationController)->renderNotification();
        return view('dashboard_Owens.employee.insertEmp_View', compact('dataNoti'));
    }

    public function createEmp(Request $request){
        $data = $request->all();
        $request->validate([
            "EmployeeID"=>"required|unique:employee_lists",
            "empName"=>"required|min:4",
            "describe"=>"required|min:10",
            "position"=>"required|min:10",
            "email"=>"required|email|unique:employee_details",
            "phone"=>"required|min:9|max:11|unique:employee_details",
            "facebook"=>"required|min:9",
            "zalo"=>"required|min:9|max:11|unique:employee_details",
            "images"=>"required|min:9",
        ]);

        $updEmp = DB::table('employee_lists')->insert([
            "EmployeeID"=>$data['EmployeeID'],
            "EmpName"=>$data['empName'],
            "Position"=>$data['position'],
        ]);

        if(isset($updEmp)){
            $updEmp_detail = DB::table('employee_details')->insert([
                "EmployeeID"=>$data['EmployeeID'],
                "empName"=>$data['empName'],
                "position"=>$data['position'],
                "describe"=>$data['describe'],
                "email"=>$data['email'],
                "facebook"=>$data['facebook'],
                "phone"=>$data['phone'],
                "zalo"=>$data['zalo'],
                "images"=>$data['images'],
            ]);
            if(isset($updEmp_detail)){
                (new NotificationController)->sendNotification('create new employee with id', $data['EmployeeID'], $data['empName']);
                return redirect(route('owens_Emp'))->with('success', 'Thêm nhân viên mới thành công!!!');
            }
            else{
                return back()->with('fail', 'Thêm nhân viên mới thất bại!!!');
            }
            }
        else{
            return back()->with('fail', 'Thêm nhân viên mới thất bại!!!');
        }
        }

        public function delete(Request $request){
            $empID = $request->route()->parameter('EmployeeID');
            $empInCus = DB::table('customers')->where('EmpID', '=', $empID)->get()->toArray();
            $empInWDetail = DB::table('work_details')->where('EmpID', '=', $empID)->get()->toArray();
            $empInWList = DB::table('work_lists')->where('EmpID', '=', $empID)->get()->toArray();
            if($empInCus == null && $empInCus == null && $empInCus == null){
                $del_empDetail = DB::table('employee_details')->where('EmployeeID', '=', $empID)->delete();
                $del_account = DB::table('accounts')->where('EmployeeID', '=', $empID)->delete();
                if(isset($del_empDetail, $del_account)){
                    $del_empList = DB::table('employee_lists')->where('EmployeeID', '=', $empID)->delete();
                    (new NotificationController)->sendNotification('delete employee with id', $empID, "");
                    return redirect(route('owens_Emp'))->with('success', 'Xóa Thành Công!!');
                }
                else{
                    return redirect(route('owens_Emp'))->with('fail', 'Xóa Thất Bại!!');
                }
            }
            else{
                return redirect(route('owens_Emp'))->with('fail', 'Nhân viên này còn đang đảm nhận công việc, hãy chuyển giao trước khi xóa!!');
            }
        }
}
