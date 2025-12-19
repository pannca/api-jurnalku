<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatatanSikap extends Model
{
    protected $table = 'catatan_sikap';

    protected $fillable = [
        'siswa_nama',
        'kategori',
        'catatan',
        'status',
        'dilaporkan',
    ];
}
