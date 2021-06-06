<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\account;
use App\Models\News\NewsList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminNewsController extends Controller
{

    function index_owens(){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        if($role == '1'){
            return redirect(route('emp.news'))->with('fail', 'Bạn Không thể truy cập vào trang giám đốc!!!');
        }
        elseif($role == '2'){
            return view('dashboard_Owens.news.index_View');
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
        if($role == '1'){
            return back()->with('fail', 'Bạn Không thể truy cập vào trang giám đốc!!!');
        }
        elseif($role == '2'){
            return view('dashboard_Owens.news.form_View')->with(compact('dataNews', 'newsDetail'));
        }
    }

    public function edit_emp(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $NewsID = $request->route()->parameter('NewsID');
        $dataNews = DB::table('news_lists')->where('NewsID', '=', $NewsID)->first();
        $newsDetail = DB::table('news_details')->where('NewsID', '=', $NewsID)->first();
        if($role == '1'){
            return view('dashboard_Employee.news.form_View')->with(compact('dataNews', 'newsDetail'));
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
            "images_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images1_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images2_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images3_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images4_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images5_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images6_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images7_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images8_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images9_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
        ]);
        $upd_NewsDetail = DB::table('news_details')
            ->where('NewsID', '=', $id_News)
            ->update(
                [   'NewsName' => $data['NewsName'],
                    'NewsTagName' => $data['NewsTagName'],
                    'Day' => $data['Day'],
                    'Year' => $data['Year'],
                    'images' => $data['images'],
                    'contentTop' => $data['contentTop'],
                    'image1' => $data['image1'],
                    'image2' => $data['image2'],
                    'image3' => $data['image3'],
                    'contentMiddle' => $data['contentMiddle'],
                    'image4' => $data['image4'],
                    'image5' => $data['image5'],
                    'image6' => $data['image6'],
                    'contentBot' => $data['contentBot'],
                    'image7' => $data['image7'],
                    'image8' => $data['image8'],
                    'image9' => $data['image9'],
                ],
            );
        $upd_NewsList = DB::table('news_lists')
                    ->where('NewsID', '=', $id_News)
                    ->update(
                [   'NewsName' => $data['NewsName'],
                    'NewsTagName' => $data['NewsTagName'],
                    'Description' => $data['Description'],
                    'Day' => $data['Day'],
                    'Year' => $data['Year'],
                    'images' => $data['images'],
                ],
            );

        if($role == '1'){
            if(isset($upd_NewsDetail, $upd_NewsList)){
                $thongbao = "Update Thành Công!!!";
                return redirect(route('emp.news'))->with(compact('thongbao'));
            }
            else{
                $thongbao = "Update Thất Bại!!!";
                return redirect(route('emp.news'))->with(compact('thongbao'));
            }
        }
        elseif($role == '2'){
            if(isset($upd_NewsDetail, $upd_NewsList)){
                $thongbao = "Update Thành Công!!!";
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
        if($role == '1'){
            return back()->with('fail', 'Bạn Không thể truy cập vào trang giám đốc!!!');
        }
        elseif($role == '2'){
            return view('dashboard_Owens.news.insertNews_Form');
        }
    }

    function create2()
    {
        return view('dashboard_Owens.news.create_news');
    }

    function viewtest(){
        $view = DB::table('ckeditor_news')->get();
        return view('test')->with(compact('view'));
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

    function create_news2(Request $request){
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
        preg_match('/(http|https):\/\/[^ ]+(\.gif|\.jpg|\.jpeg|\.png)/',$data['images'], $urlImage);

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
            $NewsDetail = DB::table('ckeditor_news')->insert([
                'NewsID' => $data['NewsID'],
                'content' => $data['content'],
            ]);

            if($role == '1'){
                if(isset($NewsDetail)){
                    $thongbao = "Taọ bài viết Thành Công!!!";
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


    function create_news(Request $request)
    {
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $data = $request->all();
        $request->validate([
            'NewsID'=>'required|unique:news_details|unique:news_lists',
            "images_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images1_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images2_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images3_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images4_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images5_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images6_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images7_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images8_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
            "images9_inp"=>"image|mimes:jpg, png, jpeg, gif, svg",
        ]);

        $create_NewsList = DB::table('news_lists')->insert([
                            'NewsID' => $data['NewsID'],
                            'NewsName' => $data['NewsName'],
                            'NewsTagName' => $data['NewsTagName'],
                            'Description' => $data['Description'],
                            'Day' => $data['Day'],
                            'Year' => $data['Year'],
                            'images' => $data['images'],
                        ]);

        $create_NewsDetail = DB::table('news_details')->insert([
                            'NewsDetailID' => $data['NewsID'],
                            'NewsID' => $data['NewsID'],
                            'NewsName' => $data['NewsName'],
                            'NewsTagName' => $data['NewsTagName'],
                            'Day' => $data['Day'],
                            'Year' => $data['Year'],
                            'images' => $data['images'],
                            'contentTop' => $data['contentTop'],
                            'image1' => $data['image1'],
                            'image2' => $data['image2'],
                            'image3' => $data['image3'],
                            'contentMiddle' => $data['contentMiddle'],
                            'image4' => $data['image1'],
                            'image5' => $data['image2'],
                            'image6' => $data['image3'],
                            'contentBot' => $data['contentBot'],
                            'image7' => $data['image1'],
                            'image8' => $data['image2'],
                            'image9' => $data['image3'],
                        ]);

        if($role == '1'){
            if(isset($create_NewsList, $create_NewsDetail)){
                $thongbao = "Taọ bài viết Thành Công!!!";
                return redirect(route('emp.news'))->with(compact('thongbao'));
            }
            else{
                $thongbao = "Taọ bài viết Thất Bại!!!";
                return redirect(route('emp.news'))->with(compact('thongbao'));
            }
        }
        elseif($role == '2'){
            if(isset($create_NewsList, $create_NewsDetail)){
                $thongbao = "Taọ bài viết Thành Công!!!";
                return redirect(route('owens.news'))->with(compact('thongbao'));
            }
            else{
                $thongbao = "Taọ bài viết Thất Bại!!!";
                return redirect(route('owens.news'))->with(compact('thongbao'));
            }
        }
    }

    public function delete(Request $request){
        $role = account::where('id','=', session('LoggedAdmin'))->first()->Role;
        $id = $request->route()->parameter('NewsID');
        $del_NewsDetail = DB::table('news_details')->where('NewsID', '=', $id)->delete();
        if(isset($del_NewsDetail)){
            $del_NewsList = DB::table('news_lists')->where('NewsID', '=', $id)->delete();
            if($role == 1){
                return redirect(route('emp.news'))->with('success', 'Xoá thành công!!!');
            }
            if($role == 2){
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

