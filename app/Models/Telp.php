<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telp extends Model
{
    use HasFactory;
    protected $table = 'telp';

    protected $fillable = [
        'username', 'telp'
    ];
}
