<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::select('firstname', 'lastname', 'birthday', 'phone', 'email', 'birthplace')->get();
    }

    public function headings(): array
    {
        return [
            'Prénom',
            'Nom',
            'Date de naissance',
            'Téléphone',
            'Email',
            'Lieu de naissance'
        ];
    }
}
