<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'username','skill_type_id','image','nama'
    ];

    /**
     * Get the user that owns the Skill
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function skill_type(): BelongsTo
    {
        return $this->belongsTo(SkillType::class, 'skill_type_id', 'id');
    }
    
}
