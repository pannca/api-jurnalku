<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PermintaanSaksi;
use Illuminate\Http\Request;

class PermintaanSaksiController extends Controller
{
    public function index()
    {
        $saksi = PermintaanSaksi::all();

        return response()->json([
            'status' => true,
            'data' => $saksi
        ]);
    }
}
