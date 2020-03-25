<?php

/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-30 23:31:23
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2020-03-22 15:08:58
 */

namespace App\Http\Controllers;

use App\Models\MstStation;
use Illuminate\Http\Request;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = MstStation::select('id', 'station_name','station_abbreviation')->get();
        $data['totals'] = $data['data']->count();
        return response()->json($data, 200);
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
        $MstStation = MstStation::where('station_name', $request->input('station_name'))->first();
        $StationAbbreviation = MstStation::where('station_abbreviation', $request->input('station_abbreviation'))->first();
        if ($MstStation && $StationAbbreviation) {
            return response()->json(['message' => 'Station name or abbreviation already exists.'], 400);
        } else {
            $data = new MstStation();
            $data->station_name = $request->input('station_name');
            $data->station_abbreviation = $request->input('station_abbreviation');
            $data->save();
            return response()->json(['message' => 'Data created'], 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = MstStation::where('id', $id)->get();
        return response()->json($data, 200);
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
        $MstStation = MstStation::where('station_name', $request->input('station_name'))->first();
        $StationAbbreviation = MstStation::where('station_abbreviation', $request->input('station_abbreviation'))->first();
        if ($MstStation && $StationAbbreviation) {
            return response()->json(['message' => 'Station name or abbreviation already exists.'], 400);
        } else {
            $data = MstStation::where('id', $id)->first();
            $data->station_name = $request->input('station_name');
            $data->station_abbreviation = $request->input('station_abbreviation');
            try {
                $data->save();
                return $data ? response(['message' => 'data updated'], 200) : response(['message' => 'data not found'], 404);
            } catch (\Illuminate\Database\QueryException $ex) {
                return response()->json(['message' => 'bad request'], 400);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = MstStation::where('id', $id)->first();
        $data->delete();
        return $data ? response(['message' => 'data deleted'], 200) : response(['message' => 'data not found'], 404);
    }
}
