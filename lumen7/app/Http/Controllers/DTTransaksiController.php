<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DTTransact;

class DTTransaksiController extends Controller
{
    //
    public function index()
    {
        $data['data'] = DTTransact::select('mu.user_name', 'mu.user_email', 'ds.departure_time', 'ds.arrived_time','dt_transact.phone_number', 'dt_transact.payment_status')
            ->leftJoin('mst_users AS mu', 'dt_transact.user_id', 'mu.id')
            ->leftJoin('dt_schedule AS ds', 'dt_transact.dt_schedule_id', 'ds.id')
            ->limit('20')
            ->orderBy('dt_transact.id','DESC')
            ->get();
        $data['totals'] = $data['data']->count();
        return response()->json($data, 200);
    }
}
