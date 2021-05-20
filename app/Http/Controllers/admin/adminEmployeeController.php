<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs\EmployeeList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminEmployeeController extends Controller
{
    public function index(){
        return view('dashboard_Owens.employee.index_View');
    }

    public function edit(Request $request){
        $EmployeeID = $request->route()->parameter('EmployeeID');
        return view('dashboard_Owens.employee.form_View')->with(compact('EmployeeID'));
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
