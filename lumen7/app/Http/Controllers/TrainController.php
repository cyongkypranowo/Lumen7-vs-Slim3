<?php

/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-30 23:31:14
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2020-03-22 15:08:59
 */

namespace App\Http\Controllers;

use App\Models\MstTrain;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = MstTrain::select('mst_train.id', 'train_name','class_name','area_name')
                                ->leftJoin('mst_class','mst_train.train_class_id','mst_class.id')
                                ->leftJoin('mst_area','mst_train.train_area_id','mst_area.id')
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
        $MstTrain = MstTrain::where('train_name', $request->input('train_name'))->first();
        if ($MstTrain) {
            return response()->json(['message' => 'Train name already exists.'], 400);
        } else {
            $data = new MstTrain();
            $data->train_name = $request->input('train_name');
            $data->train_class_id = $request->input('train_class_id');
            $data->train_area_id = $request->input('train_area_id');
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
        $data['data'] = MstTrain::select('mst_train.id', 'train_name','class_name','area_name')
                                ->leftJoin('mst_class','mst_train.train_class_id','mst_class.id')
                                ->leftJoin('mst_area','mst_train.train_area_id','mst_area.id')
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
        $MstTrain = MstTrain::where('train_name', $request->input('train_name'))->first();
        if ($MstTrain) {
            return response()->json(['message' => 'Train name or abbreviation already exists.'], 400);
        } else {
            $data = MstTrain::where('id', $id)->first();
            $data->train_name = $request->input('train_name');
            $data->train_class_id = $request->input('train_class_id');
            $data->train_area_id = $request->input('train_area_id');
            $data->save();
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
        $data = MstTrain::where('id', $id)->first();
        $data->delete();
        return $data ? response(['message' => 'data deleted'], 200) : response(['message' => 'data not found'], 404);
    }
}
