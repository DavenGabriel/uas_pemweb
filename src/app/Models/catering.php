<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catering extends Model
{
    use HasFactory;
    protected $fillable = ['nama_paket', 'customer', 'nomorHP', 'lokasi', 'pembayaran'];
    protected $table = 'catering';
    public $timestamps = false;
}
