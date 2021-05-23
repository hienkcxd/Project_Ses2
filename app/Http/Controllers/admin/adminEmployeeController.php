<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs\EmployeeDetail;
use App\Models\AboutUs\EmployeeList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminEmployeeController extends Controller
{
    public function index(){
        return view('dashboard_Owens.employee.index_View');
    }


    public function edit(Request $request){
        $EmpID = $request->route()->parameter('EmployeeID');
        $empDetail = DB::table('employee_details')
                    ->where('EmployeeID', '=', $EmpID)
                    ->first();
        return view('dashboard_Owens.employee.form_View')->with(compact('empDetail'));
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
}
