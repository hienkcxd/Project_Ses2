<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NotificationController;
use App\Models\admin\account;
use App\Models\News\NewsList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminNewsController extends Controller
{

    function index_owens(){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $dataNoti = (new NotificationController)->renderNotification();
        if($role == '1'){
            return redirect(route('emp.news'))->with('fail', 'Bạn Không thể truy cập vào trang giám đốc!!!');
        }
        elseif($role == '2'){
            return view('dashboard_Owens.news.index_View', compact('dataNoti'));
        }
    }

    function index_Emp()
    {
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        if($role == '1'){
            return view('dashboard_Employee.news.index_View');
        }
        elseif($role == '2'){
            return redirect(route('owens.news'))->with('fail', 'Bạn Không thể truy cập vào trang nhân viên!!!');
        }
    }

    public function edit_owens(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $NewsID = $request->route()->parameter('NewsID');
        $dataNews = DB::table('news_lists')->where('NewsID', '=', $NewsID)->first();
        $newsDetail = DB::table('news_details')->where('NewsID', '=', $NewsID)->first();
        $getday = str_replace('/', '-', $dataNews->Day.'-'.$dataNews->Year);
        $cvDate = date('Y-m-d', strtotime($getday));

        $dataNoti = (new NotificationController)->renderNotification();
        if($role == '1'){
            return back()->with('fail', 'Bạn Không thể truy cập vào trang giám đốc!!!');
        }
        elseif($role == '2'){
            return view('dashboard_Owens.news.form_View')->with(compact('dataNews', 'newsDetail', 'cvDate', 'dataNoti'));
        }
    }

    public function edit_emp(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $NewsID = $request->route()->parameter('NewsID');
        $dataNews = DB::table('news_lists')->where('NewsID', '=', $NewsID)->first();
        $newsDetail = DB::table('news_details')->where('NewsID', '=', $NewsID)->first();
        $getday = str_replace('/', '-', $dataNews->Day.'-'.$dataNews->Year);
        $cvDate = date('Y-m-d', strtotime($getday));
        if($role == '1'){
            return view('dashboard_Employee.news.form_View')->with(compact('dataNews', 'newsDetail', 'cvDate'));
        }
        elseif($role == '2'){
            return back()->with('fail', 'Bạn Không thể truy cập vào trang nhân viên!!!');
        }
    }

    public  function update(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $id_News = $request->route()->parameter('NewsID');
        $data = $request->all();
        $thongbao = "";
        $request->validate([
            'NewsName'=>'required|min:6',
            'NewsTagName'=>'required',
            'Description'=>'required|min:6',
            'content'=>'required',
        ]);
        $dateValue = strtotime($data['date']);
        $date = date("d/m", $dateValue);
        $year = date("Y", $dateValue);
        preg_match('/(http|https):\/\/[^ ]+(\.gif|\.jpg|\.jpeg|\.png)/',$data['images'], $urlImage);

        $NewsList = DB::table('news_lists')
                    ->where('NewsID', '=', $id_News)
                    ->update([
                        'NewsName' => $data['NewsName'],
                        'NewsTagName' => $data['NewsTagName'],
                        'Description' => $data['Description'],
                        'Day' => $date,
                        'Year' => $year,
                        'images' => $urlImage[0],
                    ]);
        $NewsDetail = DB::table('news_details')
            ->where('NewsID', '=', $id_News)
            ->update([
                'content' => $data['content'],
            ]);

        if($role == '1'){
            if(isset($NewsList, $NewsDetail)){
                $thongbao = "Update Thành Công!!!";
                (new NotificationController)->sendNotification('update news with id', $id_News, $data['NewsName']);
                return redirect(route('emp.news'))->with(compact('thongbao'));
            }
            else{
                $thongbao = "Update Thất Bại!!!";
                return redirect(route('emp.news'))->with(compact('thongbao'));
            }
        }
        elseif($role == '2'){
            if(isset($NewsList, $NewsDetail)){
                $thongbao = "Update Thành Công!!!";
                (new NotificationController)->sendNotification('update news with id', $id_News, $data['NewsName']);
                return redirect(route('owens.news'))->with(compact('thongbao'));
            }
            else{
                $thongbao = "Update Thất Bại!!!";
                return redirect(route('owens.news'))->with(compact('thongbao'));
            }
        }
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



    function create_owens(){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $dataNoti = (new NotificationController)->renderNotification();
        if($role == '1'){
            return back()->with('fail', 'Bạn Không thể truy cập vào trang giám đốc!!!');
        }
        elseif($role == '2'){
            return view('dashboard_Owens.news.insert_Form', compact('dataNoti'));
        }
    }


    function create_Emp()
    {
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        if($role == '1'){
            return view('dashboard_Employee.news.insert_Form');
        }
        elseif($role == '2'){
            return back()->with('fail', 'Bạn Không thể truy cập vào trang nhân viên!!!');
        }
    }

    function create_news(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $data = $request->all();
        $request->validate([
            'NewsID'=>'required|unique:news_details|unique:news_lists',
            'NewsName'=>'required|min:6',
            'NewsTagName'=>'required',
            'Description'=>'required|min:6',
            'content'=>'required',
        ]);
        $dateValue = strtotime($data['date']);
        $date = date("d/m", $dateValue);
        $year = date("Y", $dateValue);
        preg_match('/(http|https):\/\/[^ ]+(\.gif|\.jpg|\.jpeg|\.png|\.PNG)/',$data['images'], $urlImage);

        $NewsList = DB::table('news_lists')->insert([
            'NewsID' => $data['NewsID'],
            'NewsName' => $data['NewsName'],
            'NewsTagName' => $data['NewsTagName'],
            'Description' => $data['Description'],
            'Day' => $date,
            'Year' => $year,
            'images' => $urlImage[0],
        ]);

        if(isset($NewsList)){
            $NewsDetail = DB::table('news_details')->insert([
                'NewsID' => $data['NewsID'],
                'content' => $data['content'],
            ]);

            if($role == '1'){
                if(isset($NewsDetail)){
                    $thongbao = "Taọ bài viết Thành Công!!!";
                    (new NotificationController)->sendNotification('create news with id', $data['NewsID'], $data['NewsName']);
                    return redirect(route('emp.news'))->with(compact('thongbao'));
                }
                else{
                    $thongbao = "Taọ bài viết Thất Bại!!!";
                    return redirect(route('emp.news'))->with(compact('thongbao'));
                }
            }
            elseif($role == '2'){
                if(isset($NewsDetail)){
                    $thongbao = "Taọ bài viết Thành Công!!!";
                    (new NotificationController)->sendNotification('create news with id', $data['NewsID'], $data['NewsName']);
                    return redirect(route('owens.news'))->with(compact('thongbao'));
                }
                else{
                    $thongbao = "Taọ bài viết Thất Bại!!!";
                    return redirect(route('owens.news'))->with(compact('thongbao'));
                }
            }
        }

        else{
            return back()->with('fail', "Taọ bài viết Thất Bại!!!");
        }

    }


    public function delete(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $id = $request->route()->parameter('NewsID');
        $del_NewsDetail = DB::table('news_details')->where('NewsID', '=', $id)->delete();
        if(isset($del_NewsDetail)){
            $del_NewsList = DB::table('news_lists')->where('NewsID', '=', $id)->delete();
            if($role == 1){
                (new NotificationController)->sendNotification('delete news with id', $id, "");
                return redirect(route('emp.news'))->with('success', 'Xoá thành công!!!');
            }
            if($role == 2){
                (new NotificationController)->sendNotification('delete news with id', $id, "");
                return redirect(route('owens.news'))->with('success', 'Xoá thành công!!!');
            }
        }
        else{
            if($role == 1){
                return redirect(route('emp.news'))->with('fail', 'Xoá thất bại!!!');
            }
            if($role == 2){
                return redirect(route('owens.news'))->with('success', 'Xoá thất bại!!!');
            }
        }
    }

}

