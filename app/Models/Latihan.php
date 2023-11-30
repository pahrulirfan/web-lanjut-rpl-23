<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latihan extends Model
{
    protected $table = "latihan";
    protected $fillable = ['judul', 'jumlah_halaman'];
}
