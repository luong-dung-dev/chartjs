<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class ChartJsController extends Controller
{
    public function index() {
        // Load data from json for the first graph
        $datas = [];
        $data_json = json_decode(file_get_contents(storage_path() . "/test.json"), true);
        array_push($datas, $data_json);

        // Get data from database for the second graph
        $request = Request::create('/api/datas', 'GET');
        $api_result = json_decode(Route::dispatch($request)->getContent());

        $labels = [];
        $chart_data = [];
        if(!empty($api_result)) {
            foreach ($api_result as $data) {
                $date = Carbon::createFromFormat('Y-m-d H:i:s.u', $data->date);
                $monthName = $date->format('F');
                array_push($labels, $monthName);
                array_push($chart_data, $data->value);
            }
        }
        $data_api = ["labels" => $labels, "data" => $chart_data];
        array_push($datas, $data_api);

        return view('chartjs')->with('datas',json_encode($datas,JSON_NUMERIC_CHECK));
    }
}
