<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'name',
        'description',
        'video_url',
        'week_id'
    ];

    public function week()
    {
        return $this->belongsTo(Week::class);
    }

    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}
