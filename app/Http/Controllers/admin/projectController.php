<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\account;
use App\Models\Project\ProjectDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class projectController extends Controller
{

    function index_owens(){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        if($role == '1'){
            return redirect(route('emp.project'))->with('fail', 'Bạn Không thể truy cập vào trang giám đốc!!!');
        }
        elseif($role == '2'){
            return view('dashboard_Owens.project.index_View');
        }
    }


    function index_Emp()
    {
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        if($role == '1'){
            return view('dashboard_Employee.project.index_View');
        }
        elseif($role == '2'){
            return redirect(route('owens_project'))->with('fail', 'Bạn Không thể truy cập vào trang nhân viên!!!');
        }
    }

    public function edit_owens(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $ProjectID = $request->route()->parameter('ProjectID');
        $projectList = DB::table('project_lists')
            ->where('ProjectID','=', $ProjectID)
            ->first();
        $projectDetail = DB::table('project_details')
            ->where('ProjectID','=', $ProjectID)
            ->first();
            if($role == '1'){
                return back()->with('fail', 'Bạn Không thể truy cập vào trang giám đốc!!!');
            }
            else{
                return view('dashboard_Owens.project.form_View')->with(compact('projectList', 'projectDetail'));
            }
    }

    public function edit_emp(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $ProjectID = $request->route()->parameter('ProjectID');
        $projectList = DB::table('project_lists')
            ->where('ProjectID','=', $ProjectID)
            ->first();
        $projectDetail = DB::table('project_details')
            ->where('ProjectID','=', $ProjectID)
            ->first();

            if($role == '1'){
                return view('dashboard_Employee.project.form_View')->with(compact('projectList', 'projectDetail'));
            }
            else{
                return back()->with('fail', 'Bạn Không thể truy cập vào trang nhân viên!!!');
            }
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

    public function update(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $id_Project = $request->route()->parameter('ProjectID');
        $data =$request->all();
        $thongbao = "Update Thành Công!!!";

        $request->validate([
            'ProjectName'=>'required',
            'images_inp'=>'image|mimes:jpg, png, jpeg, gif, svg',
            'imageTop_inp'=>'image|mimes:jpg, png, jpeg, gif, svg',
            'imageBot_inp'=>'image|mimes:jpg, png, jpeg, gif, svg',
            'Client'=>'required',
            'Location'=>'required',
            'DateFinish'=>'required',
            'Price'=>'required',
            'TagName'=>'required',
            'tagName'=>'required',
            'images'=>'required',
            'imageTop'=>'required',
            'imageBot'=>'required',
            'contentTop'=>'required',
            'contentBot'=>'required',
        ]);

        $upd_ProList = DB::table('project_lists')
            ->where('ProjectID','=', $id_Project)
            ->update([
                'ProjectName'=>$data['ProjectName'],
                'TagName'    =>$data['TagName'],
                'images'     =>$data['images'],
            ]);

        $upd_ProDetail = DB::table('project_details')
            ->where('ProjectID','=', $id_Project)
            ->update([
                'DateFinish'=>$data['DateFinish'],
                'Location'  =>$data['Location'],
                'Price'     =>$data['Price'],
                'Client'    =>$data['Client'],
                'tagName'   =>$data['tagName'],
                'imageTop'  =>$data['imageTop'],
                'imageBot'  =>$data['imageBot'],
                'contentTop'=>$data['contentTop'],
                'contentBot'=>$data['contentBot'],
            ]);

        if($role == '1'){
            if(isset($upd_ProList, $upd_ProDetail)){
                return redirect(route('emp.project'))->with(compact('thongbao'));
            }
            else{
                $thongbao = "Update Thất Bại!!!";
                return redirect(route('emp.project'))->with(compact('thongbao'));
            }
        }
        elseif($role == '2'){
            if(isset($upd_ProList, $upd_ProDetail)){
                return redirect(route('owens_project'))->with(compact('thongbao'));
            }
            else{
                $thongbao = "Update Thất Bại!!!";
                return redirect(route('owens_project'))->with(compact('thongbao'));
            }
        }
    }

    function create_owens(){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        if($role == '1'){
            return back()->with('fail', 'Bạn Không thể truy cập vào trang giám đốc!!!');
        }
        elseif($role == '2'){
            return view('dashboard_Owens.project.insertProject_Form');
        }
    }

    function create_emp(){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        if($role == '1'){
            return view('dashboard_Owens.project.index_View');
        }
        elseif($role == '2'){
            return back()->with('fail', 'Bạn Không thể truy cập vào trang nhân viên!!!');
        }
    }

    public function create_project(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $thongbao = "Update Thành Công!!!";
        $id_Project = $request->route()->parameter('ProjectID');

        $data =$request->all();
        $thongbao = "Update Thành Công!!!";
        $request->validate([
            'ProjectID'=>'required|unique:project_lists|unique:project_details',
            'ProjectName'=>'required|min:8|max:50',
            'Client'=>'required|min:4|max:50',
            'Location'=>'required|min:8|max:50',
            'DateFinish'=>'required|min:8|max:50',
            'Price'=>'required|min:6|max:50',
            'TagName'=>'required',
            'tagName'=>'required',
            'images'=>'required',
            'imageTop'=>'required',
            'imageBot'=>'required',
            'contentTop'=>'required|min:30',
            'contentBot'=>'required|min:30',
            'images_inp'=>'required|image|mimes:jpg, png, jpeg, gif, svg',
            'imageTop_inp'=>'required|image|mimes:jpg, png, jpeg, gif, svg',
            'imageBot_inp'=>'required|image|mimes:jpg, png, jpeg, gif, svg',
        ]);

        $create_ProLists = DB::table('project_lists')->insert([
            'ProjectID' => $data['ProjectID'],
            'ProjectName' => $data['ProjectName'],
            'TagName' => $data['TagName'],
            'images' => $data['images'],
        ]);

        $create_ProDetail = DB::table('project_details')->insert([
            'ProDetailID' => $data['ProjectID'],
            'ProjectID' => $data['ProjectID'],
            'DateFinish' => $data['DateFinish'],
            'Location' => $data['Location'],
            'Price' => $data['Price'],
            'Client' => $data['Client'],
            'tagName' => $data['tagName'],
            'imageTop' => $data['imageTop'],
            'imageBot' => $data['imageBot'],
            'contentTop' => $data['contentTop'],
            'contentBot' => $data['contentBot'],
        ]);

        if($role == '1'){
            if(isset($create_ProLists, $create_ProDetail)){
                return redirect(route('emp.project'))->with(compact('thongbao'));
            }
            else{
                $thongbao = "Tạo mới Thất Bại!!!";
                return redirect(route('emp.project'))->with(compact('thongbao'));
            }
        }
        elseif($role == '2'){
            if(isset($create_ProLists, $create_ProDetail)){
                return redirect(route('owens_project'))->with(compact('thongbao'));
            }
            else{
                $thongbao = "Update Thất Bại!!!";
                return redirect(route('owens_project'))->with(compact('thongbao'));
            }
        }
    }

    public function delete(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $id = $request->route()->parameter('ProjectID');
        $del_Pdetail = DB::table('project_details')->where('ProjectID', '=', $id)->delete();
        if(isset($del_Pdetail)){
            $del_PList = DB::table('project_lists')->where('ProjectID', '=', $id)->delete();
            if($role == 1){
                return redirect(route('emp.project'))->with('success', 'Xoá thành công!!!');
            }
            if($role == 2){
                return redirect(route('owens_project'))->with('success', 'Xoá thành công!!!');
            }
        }
        else{
            if($role == 1){
                return redirect(route('emp.project'))->with('fail', 'Xoá thất bại!!!');
            }
            if($role == 2){
                return redirect(route('owens_project'))->with('success', 'Xoá thất bại!!!');
            }
        }
    }
}
