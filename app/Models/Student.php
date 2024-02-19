<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'career_id',
        'matricula',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function career()
    {
        return $this->belongsTo(Career::class);
    }

    public function studentExams()
    {
        return $this->hasMany(StudentExam::class);
    }

    public function studentTests()
    {
        return $this->hasMany(StudentTest::class);
    }
}
