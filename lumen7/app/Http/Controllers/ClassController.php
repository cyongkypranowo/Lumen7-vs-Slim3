<?php

/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-30 23:31:52
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2020-03-22 15:08:47
 */

namespace App\Http\Controllers;

use App\Models\MstClass;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = MstClass::select('id', 'class_name')->get();
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
        $MstClass = MstClass::where('class_name', $request->input('class_name'))->first();
        if ($MstClass) {
            return response()->json(['message' => 'Class Name already exists.'], 400);
        } else {
            $data = new MstClass();
            $data->class_name = $request->input('class_name');
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
        $data = MstClass::where('id', $id)->get();
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
        $MstClass = MstClass::where('class_name', $request->input('class_name'))->first();
        if ($MstClass) {
            return response()->json(['message' => 'Class Name already exists.'], 400);
        } else {
            $data = MstClass::where('id', $id)->first();
            $data->class_name = $request->input('class_name');
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
        $data = MstClass::where('id', $id)->first();
        $data->delete();
        return $data ? response(['message' => 'data deleted'], 200) : response(['message' => 'data not found'], 404);
    }
}
