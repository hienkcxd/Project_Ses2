<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project\ProjectDetail;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index(){
        return view('dashboard_Owens.project.index_View');
    }

    public function edit(Request $request){
        $ProjectID = $request->route()->parameter('ProjectID');
        return view('dashboard_Owens.project.form_View')->with(compact('ProjectID'));
    }
    public function getProject(Request $request)
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
        $totalRecords = ProjectDetail::select('count(*) as allcount')->count();
        $totalRecordswithFilter = ProjectDetail::select('count(*) as allcount')
            ->where('ProjectID', 'like', '%' . $searchValue . '%')
            ->orWhere('project_details.ProDetailID', 'like', '%' . $searchValue . '%')
            ->count();

        // Fetch records: lấy data
        $records = ProjectDetail::orderBy($columnName, $columnSortOrder)
            ->where('project_details.ProDetailID', 'like', '%' . $searchValue . '%')
            ->orWhere('project_details.ProjectID', 'like', '%' . $searchValue . '%')
            ->select('project_details.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach ($records as $record) {
            $ProDetailID = $record->ProDetailID;
            $ProjectID = $record->ProjectID;
            $DateFinish = $record->DateFinish;
            $Location = $record->Location;
            $Price = $record->Price;
            $Client = $record->Client;
            $tagName = $record->tagName;
            $contentTop = $record->contentTop;
            $contentBot = $record->contentBot;
            $imageTop = $record->imageTop;
            $imageBot = $record->imageBot;

            $data_arr[] = array(
                "ProDetailID" => $ProDetailID,
                "ProjectID" => $ProjectID,
                "DateFinish" => $DateFinish,
                "Location" => $Location,
                "Price" => $Price,
                "Client" => $Client,
                "tagName" => $tagName,
                "contentTop" => $contentTop,
                "contentBot" => $contentBot,
                "imageTop" => $imageTop,
                "imageBot" => $imageBot,
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
