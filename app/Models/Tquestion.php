<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tquestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'ask',
        'is_multiple_choice',
        'exam_id'
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
