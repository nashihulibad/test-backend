<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'penyetuju_1',
        'disetujui_1',
        'penyetuju_2',
        'disetujui_2',
        'kendaraan',
        'driver',
        'date' 
    ];
}
