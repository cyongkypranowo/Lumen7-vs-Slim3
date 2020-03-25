<?php

/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-30 22:31:06
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2020-03-22 15:08:44
 */

namespace App\Http\Controllers;

use App\Models\MstArea;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = MstArea::select('id', 'area_name')->get();
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
        $MstArea = MstArea::where('area_name', $request->input('area_name'))->first();
        if ($MstArea) {
            return response()->json(['message' => 'Area name already exists.'], 400);
        } else {
            $data = new MstArea();
            $data->area_name = $request->input('area_name');
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
        $data = MstArea::where('id', $id)->get();
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
        $MstArea = MstArea::where('area_name', $request->input('area_name'))->first();
        if ($MstArea) {
            return response()->json(['message' => 'Area name already exists.'], 400);
        } else {
            $data = MstArea::where('id', $id)->first();
            $data->area_name = $request->input('area_name');
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
        $data = MstArea::where('id', $id)->first();
        $data->delete();
        return $data ? response(['message' => 'data deleted'], 200) : response(['message' => 'data not found'], 404);
    }
}
