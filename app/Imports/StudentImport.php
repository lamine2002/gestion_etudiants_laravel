<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
//        dd($row);
        $student = Student::create([
            'firstname' => $row["prenom"] ,
            'lastname' => $row["nom"] ,
            'birthday' => $row["datenaissance"] ,
            'phone' => $row["telephone"] ,
            'email' => $row["email"] ,
            'birthplace' => $row["lieudenaissance"] ,
        ]);
        $student->schoolClasses()->attach($row["classe"], ['schoolingYear' => $row["anneescolaire"]]);


    }
}
