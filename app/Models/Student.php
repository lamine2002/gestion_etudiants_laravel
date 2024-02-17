<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @mixin IdeHelperStudent
 */
class Student extends Model
{
    use HasFactory;


    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function schoolClasses()
    {
        return $this->belongsToMany(SchoolClass::class, 'class_student', 'student_id', 'class_id')
            ->withPivot('schoolingYear');
        // pour avoir la valeur de l'annee scolaire on tape $student->classes()->first()->pivot->schoolingYear
        // pour avoir la valeur de la derniere annee scolaire on tape $student->classes()->latest()->first()->pivot->schoolingYear

    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function getSlug()
    {
        // nom + prenom + id
        return Str::slug($this->firstname . ' ' . $this->lastname . ' ' . $this->id);
    }

    public function classes()
    {
        return SchoolClass::all();
    }

    public function imageUrl()
    {
        return Storage::disk()->url($this->image);
    }
}
