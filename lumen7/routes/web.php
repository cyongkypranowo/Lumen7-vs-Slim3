<?php

use Illuminate\Support\Facades\DB;

$router->get('/', function () use ($router) {
    return app()->version();
});

$router->get('/station', function () use ($router) {
    $pdo = DB::getPdo();
    $sql = "SELECT
                id,station_name,station_abbreviation
            FROM
                mst_station
            ORDER BY 
                station_name ASC
            ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result =  $stmt->fetchAll(PDO::FETCH_ASSOC);
    $total  = count($result);
    return response()->json(["data" => $result, "total" => $total], 200);
});

$router->get('/train', function () use ($router) {
    $pdo = DB::getPdo();
    $sql = "SELECT
                mt.id, train_name, class_name, area_name
            FROM
                mst_train mt
                LEFT JOIN mst_class mc ON mt.train_class_id = mc.id
                LEFT JOIN mst_area ma ON mt.train_area_id = ma.id
            ORDER BY
                train_name ASC
                ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result =  $stmt->fetchAll(PDO::FETCH_ASSOC);
    $total  = count($result);
    return response()->json(["data" => $result, "total" => $total], 200);
});

$router->get('/transaksi', function () use ($router) {
    $pdo = DB::getPdo();
    $sql = "SELECT
                mu.user_name, mu.user_email, ds.departure_time, ds.arrived_time,dt.phone_number, dt.payment_status
            FROM
                dt_transact dt
                LEFT JOIN mst_users mu ON dt.user_id = mu.id
                LEFT JOIN dt_schedule ds ON dt.dt_schedule_id = ds.id
            ORDER BY
                dt.id DESC
            ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result =  $stmt->fetchAll(PDO::FETCH_ASSOC);
    $total  = count($result);
    return response()->json(["data" => $result, "total" => $total], 200);
});


$router->get('/schedule', function () use ($router) {
    $pdo = DB::getPdo();
    $sql = "SELECT t.train_name, c.class_name, md.station_name 'stasiun_kedatangan',ma.station_name 'stasiun_keberangkatan' 
            FROM dt_schedule AS ds
                LEFT JOIN mst_train t ON ds.train_id = t.id
                LEFT JOIN mst_class c ON ds.class_id = c.id
                LEFT JOIN mst_station md ON ds.station_departure_id = md.id
                LEFT JOIN mst_station ma ON ds.station_arrived_id = ma.id
            ORDER BY
                t.id DESC
            ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result =  $stmt->fetchAll(PDO::FETCH_ASSOC);
    $total  = count($result);
    return response()->json(["data" => $result, "total" => $total], 200);
});
