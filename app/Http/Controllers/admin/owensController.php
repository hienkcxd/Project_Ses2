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


        public function edit(Request $request)
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
//            $getwardList = DB::table('ward_lists')
//                ->where('DistrictName', '=', $marketDetail->DistrictName)
//                ->get();
//            $wardList = json_encode($getwardList);
            return view('dashboard_Owens.market.Detail_Market_Form')
                ->with(compact(
                    'marketDetail',
                    'wardDetail',
                    'distDetail',
                    'disList',
                ));
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
