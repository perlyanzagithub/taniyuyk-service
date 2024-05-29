<?php

namespace App\Http\Controllers;

use App\Models\request\CreateDrcRequest;
use App\Models\request\UpdateDrcRequest;
use App\Models\UnitOfItems;
use Illuminate\Http\JsonResponse;

class DrcController extends Controller
{
    public function store(CreateDrcRequest $createDrcRequest): JsonResponse
    {
        $data = new UnitOfItems();
        $data->drc = $createDrcRequest->drc;
        $data->berat_basah = $createDrcRequest->berat_basah;
        $data = $data->save();
        return response()->json([
            "message" => "OK",
            "code" => 200,
            "data" => $data
        ]);
    }

    public function update(UpdateDrcRequest $updateDrcRequest): JsonResponse
    {
        $data = UnitOfItems::findOrFail($updateDrcRequest->id);
        $data->drc = $updateDrcRequest->drc;
        $data->berat_basah = $updateDrcRequest->berat_basah;
        $data = $data->save();
        return response()->json([
            "message" => "OK",
            "code" => 200,
            "data" => $data
        ]);
    }

    public function view(): JsonResponse
    {
        $data = UnitOfItems::all();
        return response()->json([
            "message" => "OK",
            "code" => 200,
            "data" => $data,
            "meta" => [
                "jumlah_data" => count($data)
            ]
        ]);
    }
}
