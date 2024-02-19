<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;



    protected $fillable = ['name', 'image_url'];


    protected static function boot()
    {
        parent::boot();

        // Escucha el evento de eliminación para eliminar los contenidos relacionados
        static::deleting(function($career) {
            // Elimina los TeacherCareers asociados
            $career->teacherCareers()->delete();

            // Elimina los Students asociados
            $career->students()->delete();

            // Elimina los AreaCareers asociados
            $career->areaCareers()->delete();

            // Elimina los CourseCareers asociados
            $career->courseCareers()->delete();

            // Elimina la imagen asociada
            Storage::delete('public/' . $career->image_url);
        });
    }

    public function teacherCareers()
    {
        return $this->hasMany(TeachersCareer::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function areaCareers()
    {
        return $this->hasMany(AreasCareer::class);
    }

    public function courseCareers()
    {
        return $this->hasMany(CoursesCareer::class);
    }


}
