<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\News\NewsList;
use Illuminate\Http\Request;

class adminNewsController extends Controller
{
    public function index(){
        return view('dashboard_Owens.news.index_View');
    }

    public function edit(Request $request){
        $NewsID = $request->route()->parameter('NewsID');
        return view('dashboard_Owens.news.form_View')->with(compact('NewsID'));
    }

    public function getNews(Request $request)
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
        $totalRecords = NewsList::select('count(*) as allcount')->count();
        $totalRecordswithFilter = NewsList::select('count(*) as allcount')
            ->where('NewsTagName', 'like', '%' . $searchValue . '%')
            ->count();

        // Fetch records: lấy data
        $records = NewsList::orderBy($columnName, $columnSortOrder)
            ->where('NewsTagName', 'like', '%' . $searchValue . '%')
            ->select('news_lists.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach ($records as $record) {
            $NewsID = $record->NewsID;
            $NewsName = $record->NewsName;
            $NewsTagName = $record->NewsTagName;
            $Description = $record->Description;
            $Day = $record->Day;
            $Year = $record->Year;
            $images = $record->images;

            $data_arr[] = array(
                "NewsID" => $NewsID,
                "NewsName" => $NewsName,
                "NewsTagName" => $NewsTagName,
                "Description" => $Description,
                "Day" => $Day,
                "Year" => $Year,
                "images" => $images,
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
