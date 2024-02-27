<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function courseCareers()
    {
        return $this->hasMany(CourseCareer::class);
    }

    public function weeks()
    {
        return $this->hasMany(Week::class);
    }

    public function teacherCourses()
    {
        return $this->hasMany(TeacherCourse::class);
    }

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }
}
