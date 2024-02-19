<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
        'per_week',
        'per_course',
        'course_id',
        'week_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function week()
    {
        return $this->belongsTo(Week::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function studentExams()
    {
        return $this->hasMany(StudentExam::class);
    }

    public function tquestions()
    {
        return $this->hasMany(Tquestion::class);
    }
}
