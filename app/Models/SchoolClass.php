<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

/**
 * @mixin IdeHelperSchoolClass
 */
class SchoolClass extends Model
{
    use HasFactory;
    protected $table = 'classes'; // permet de spécifier le nom de la table correspondante dans la base de données

    protected $fillable = [
        'className',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'class_student', 'class_id', 'student_id')
           /* ->withPivot('year')*/;
    }

}
