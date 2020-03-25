<?php

/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-30 23:31:39
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2020-03-22 15:08:50
 */

namespace App\Http\Controllers;

use App\Models\DTSchedule;
use Illuminate\Http\Request;

class DTScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = DTSchedule::select('train_name', 'class_name', 's.station_name AS station_departure','st.station_name AS station_arrived','departure_time','arrived_time')
            ->leftJoin('mst_train AS t', 'dt_schedule.train_id', 't.id')
            ->leftJoin('mst_class AS c', 'dt_schedule.class_id', 'c.id')
            ->leftJoin('mst_station AS s', 'dt_schedule.station_departure_id', 's.id')
            ->leftJoin('mst_station AS st', 'dt_schedule.station_arrived_id', 'st.id')
            ->limit('20')
            ->orderBy('t.id','DESC')
            ->get();
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
        $data = new DTSchedule();
        $data->train_id = $request->input('train_id');
        $data->class_id = $request->input('class_id');
        $data->station_departure_id = $request->input('station_departure_id');
        $data->station_arrived_id = $request->input('station_arrived_id');
        $data->departure_time = $request->input('departure_time');
        $data->arrived_time = $request->input('arrived_time');
        $data->save();
        return response()->json(['message' => 'Data created'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data'] = DTSchedule::select('dt_schedule.id', 'train_name', 'class_name', 'station_name AS station_departure', 'departure_time')
            ->leftJoin('mst_train AS t', 'dt_schedule.train_id', 't.id')
            ->leftJoin('mst_class AS c', 'dt_schedule.class_id', 'c.id')
            ->leftJoin('mst_station AS s', 'dt_schedule.station_departure_id', 's.id')
            ->where('mst_train.id', $id)
            ->get();
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
        $data = DTSchedule::where('id', $id)->first();
        $data->train_id = $request->input('train_id');
        $data->class_id = $request->input('class_id');
        $data->station_departure_id = $request->input('station_departure_id');
        $data->station_arrived_id = $request->input('station_arrived_id');
        $data->departure_time = $request->input('departure_time');
        $data->arrived_time = $request->input('arrived_time');
        $data->save();
        try {
            $data->save();
            return $data ? response(['message' => 'data updated'], 200) : response(['message' => 'data not found'], 404);
        } catch (\Illuminate\Database\QueryException $ex) {
            return response()->json(['message' => 'bad request'], 400);
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
        $data = DTSchedule::where('id', $id)->first();
        $data->delete();
        return $data ? response(['message' => 'data deleted'], 200) : response(['message' => 'data not found'], 404);
    }
}
