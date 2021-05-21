<?php

    namespace App\Http\Controllers\admin;

    use App\Http\Controllers\Controller;
    use App\Models\Market\DistrictList;
    use App\Models\Market\MarketList;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class owensController extends Controller
    {

        public function index()
        {
            return view('dashboard_Owens.index');
        }
        public function indexEmp()
        {
            return view('dashboard_Employee.index');
        }

        public function getWard(Request $request){
            $Name_Dist = $request->route()->parameter('DistrictName');
            $wardList = DB::table('ward_lists')
                        ->where('DistrictName', '=', $Name_Dist)
                        ->get();
            echo json_encode($wardList);
        }

        public function viewDetail(Request $request)
        {
            //Get ID from ward, dist and market
            $id_Market = $request->route()->parameter('MarketID');
            $id_Ward = $request->route()->parameter('WardID');
            $id_Dist = $request->route()->parameter('DistrictID');

            $wardDetail = DB::table('ward_lists')
                ->where('WardID', '=', $id_Ward)
                ->first();
            $distDetail = DB::table('ward_lists')
                ->where('WardID', '=', $id_Dist)
                ->first();

            $marketDetail = DB::table('market_lists')
                ->where('MarketID', '=', $id_Market)
                ->first();

            $disList = DistrictList::all();

            return view('dashboard_Owens.market.Detail_Market_Form')
                ->with(compact(
                    'marketDetail',
                    'wardDetail',
                    'distDetail',
                    'disList',
                ));
        }

        public function update(Request $request){
            $thongbao ="";
            $id_Market = $request->route()->parameter('MarketID');
            $data = $request->all();
            $MarketLists = MarketList::find($id_Market);
            $MarketLists->DistrictName = $data['districts'];
            $MarketLists->WardName=$data['wardList'];
            $MarketLists->Year = $data['Year'];
            $MarketLists->Thang_01 = $data['Thang_01'];
            $MarketLists->Thang_02 = $data['Thang_02'];
            $MarketLists->Thang_03 = $data['Thang_03'];
            $MarketLists->Thang_04 = $data['Thang_04'];
            $MarketLists->Thang_05 = $data['Thang_05'];
            $MarketLists->Thang_06 = $data['Thang_06'];
            $MarketLists->Thang_07 = $data['Thang_07'];
            $MarketLists->Thang_08 = $data['Thang_08'];
            $MarketLists->Thang_09 = $data['Thang_09'];
            $MarketLists->Thang_10 = $data['Thang_10'];
            $MarketLists->Thang_11 = $data['Thang_11'];
            $MarketLists->Thang_12 = $data['Thang_12'];
            $MarketLists->save();
            if(isset($MarketLists)){
                $thongbao = "Update Thành Công!!!";
                return redirect(route('admin_market'))->with(compact('thongbao'));
            }
            else{
                $thongbao = "Update Thất Bại!!!";
                return redirect(route('admin_market'))->with(compact('thongbao'));
            }

        }

        public function delete(Request $request)
        {
            $id = $request->route()->parameter('MarketID');
            return view('test')->with(compact('id'));
        }

        public function create()
        {
            return view('dashboard_Owens.market.insert_Form');
        }

        public function market()
        {
            $distList = DB::table('district_lists')->get();
            $wardList = DB::table('ward_lists')->get();
            return view('dashboard_Owens.market.admin_market')->with(compact(
                'distList',
                'wardList',
            ));
        }

        public function getMarket(Request $request)
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
            $totalRecords = MarketList::select('count(*) as allcount')->count();
            $totalRecordswithFilter = MarketList::select('count(*) as allcount')
                ->where('DistrictName', 'like', '%' . $searchValue . '%')
                ->orWhere('market_lists.WardName', 'like', '%' . $searchValue . '%')
                ->count();

            // Fetch records: lấy data
            $records = MarketList::orderBy($columnName, $columnSortOrder)
                ->where('market_lists.DistrictName', 'like', '%' . $searchValue . '%')
                ->orWhere('market_lists.WardName', 'like', '%' . $searchValue . '%')
                ->select('market_lists.*')
                ->skip($start)
                ->take($rowperpage)
                ->get();

            $data_arr = array();

            foreach ($records as $record) {
                $MarketID = $record->MarketID;
                $DistrictName = $record->DistrictName;
                $WardName = $record->WardName;
                $Year = $record->Year;
                $Thang_01 = $record->Thang_01;
                $Thang_02 = $record->Thang_02;
                $Thang_03 = $record->Thang_03;
                $Thang_04 = $record->Thang_04;
                $Thang_05 = $record->Thang_05;
                $Thang_06 = $record->Thang_06;
                $Thang_07 = $record->Thang_07;
                $Thang_08 = $record->Thang_08;
                $Thang_09 = $record->Thang_09;
                $Thang_10 = $record->Thang_10;
                $Thang_11 = $record->Thang_11;
                $Thang_12 = $record->Thang_12;

                $data_arr[] = array(
                    "MarketID" => $MarketID,
                    "DistrictName" => $DistrictName,
                    "WardName" => $WardName,
                    "Year" => $Year,
                    "Thang_01" => $Thang_01,
                    "Thang_02" => $Thang_02,
                    "Thang_03" => $Thang_03,
                    "Thang_04" => $Thang_04,
                    "Thang_05" => $Thang_05,
                    "Thang_06" => $Thang_06,
                    "Thang_07" => $Thang_07,
                    "Thang_08" => $Thang_08,
                    "Thang_09" => $Thang_09,
                    "Thang_10" => $Thang_10,
                    "Thang_11" => $Thang_11,
                    "Thang_12" => $Thang_12,
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
