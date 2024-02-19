<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachersCareer extends Model
{
    use HasFactory;

    protected $fillable = ['teacher_id', 'career_id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
