<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertification extends Model
{
    use HasFactory;

    protected $fillable = [
        'username','link','image','judul','deskripsi','tahun'
    ];
}
