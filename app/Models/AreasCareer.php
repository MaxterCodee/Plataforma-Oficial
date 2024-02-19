<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreasCareer extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_id',
        'career_id',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function career()
    {
        return $this->belongsTo(Career::class);
    }


}
