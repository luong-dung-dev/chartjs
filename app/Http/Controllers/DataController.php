<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    public function index()
    {
        return Data::all();
    }

    public function show(Data $data)
    {
        return $data;
    }

    public function store(Request $request)
    {
        $data = Data::create($request->all());

        return response()->json($data, 201);
    }

    public function update(Request $request, Data $data)
    {
        $data->update($request->all());

        return response()->json($data, 200);
    }

    public function delete(Data $data)
    {
        $data->delete();

        return response()->json(null, 204);
    }
}
