<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'username','image','nama_perusahaan','deskripsi','jabatan','tanggal_mulai','lokasi'
    ];
}
