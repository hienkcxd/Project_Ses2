<?php

namespace App\Http\Controllers\user\market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MarketController extends Controller
{

    public function test(){
        $key= schema::getColumnListing('market_lists');
        $labelName = [];
        for ($i = 0; $i < count($key); $i++){
            if(str_contains($key[$i],'Thang')){
                array_push($labelName, $key[$i]);
            }
        }
        $data = DB::table('market_lists');
        $listWard = $data
            ->where('DistrictName', '=','Quận 2')
            ->orderBy('MarketID', 'asc')->pluck('WardName');
        $avg = [];
        foreach ($listWard as $key){
            foreach ($labelName as $month){
                $avgValue = $data
                    ->where('DistrictName', '=','Quận 2')
                    ->where('WardName', '=',$key)
                    ->get($month)->toArray();
                    array_push( $avg, $avgValue);
            }
        }

        return $avg;
    }

    public function index()
    {
        return view('Market.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
