<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    protected $table = 'courses';
    protected $fillable = ['competencias'];

    public function getCompetenciasAttribute($value)
    {
        return explode(',', $value);
    }

    public function setCompetenciasAttribute($value)
    {
        $this->attributes['competencias'] = implode(',', $value);
    }
}
