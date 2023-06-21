<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Intro extends Model
{
    use HasFactory;

    protected $table = 'intros';

    protected $fillable = [
        'username','nama', 'deskripsi', 'text_id'
    ];

    /**
     * Get the user that owns the Intro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function running_teks(): BelongsTo
    {
        return $this->belongsTo(RunningTeks::class, 'text_id', 'id');
    }
}
