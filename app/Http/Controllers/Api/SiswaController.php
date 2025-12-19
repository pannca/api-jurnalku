<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
     public function index()
    {
        $siswa = Siswa::all();

        return response()->json([
            'status' => true,
            'data' => $siswa
        ]);
    }
}
