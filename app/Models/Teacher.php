<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function teacherCareers()
    {
        return $this->hasMany(TeacherCareer::class);
    }

    public function teacherCourses()
    {
        return $this->hasMany(TeacherCourse::class);
    }
}
