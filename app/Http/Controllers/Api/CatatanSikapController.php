<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CatatanSikap;

class CatatanSikapController extends Controller
{
    public function index()
    {
        $data = CatatanSikap::latest()->get();

        return response()->json([
            'status' => true,
            'total_catatan' => $data->count(),
            'dalam_perbaikan' => $data->where('status', 'dalam_perbaikan')->count(),
            'sudah_berubah' => $data->where('status', 'sudah_berubah')->count(),
            'data' => $data
        ]);
    }
}
