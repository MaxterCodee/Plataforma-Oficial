<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesCareer extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'career_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
