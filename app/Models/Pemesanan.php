<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $fillable = ['nama','email','id_tiket','tgl_acara', 'status'];
    protected $table = 'pemesanans';

    public $timestamps = false;
}
