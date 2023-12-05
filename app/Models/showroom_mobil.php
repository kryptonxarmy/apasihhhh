<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class showroom_mobil extends Model
{
    protected $table = 'showroom_mobil';
    // protected $table = 'showroom_mobil';
    protected $fillable = ['nama_mobil', 'brand_mobil', 'warna_mobil', 'tipe_mobil', 'harga_mobil'];

    use HasFactory;
}
