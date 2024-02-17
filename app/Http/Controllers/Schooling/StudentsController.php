<?php

namespace App\Http\Controllers\Schooling;

use App\Exports\StudentExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Schooling\StudentFormRequest;
use App\Http\Requests\SearchStudentRequest;
use App\Imports\StudentImport;
use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
//use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel;    // This is the correct way to import the Excel facade


class StudentsController extends Controller
{
    private function extractData (Student $student, StudentFormRequest $request):array {
        $data = $request->validated();
        $image = $request->validated('image');
        if ($image === null || $image->getError()) {
            return $data;
        }
        if ($student->image !== null) {
            Storage::disk('public')->delete($student->imageUrl());
        }
        $data['image'] = $image->store('students', 'public');
        return $data;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(SearchStudentRequest $request)
    {
//        $students = Student::all()->first();
//        echo "<pre>";
//        print_r($students->classes()->first()->id);
//        echo "</pre>";

        $query = Student::query()->orderBy('created_at', 'desc');
//        return $query->get();
        if($firstname = $request->validated('firstname')){
            $query = $query->where('firstname', 'like', "%{$firstname}%");
        }

        return view('schooling.students.index',

            [
                'students' => $query->paginate(10),
                'input' => $request->validated()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = new Student();
        return view('schooling.students.form', [
            'student' => $student,
            'classes' => SchoolClass::pluck('className', 'id'),
            // pluck permet de recuperer les valeurs d'une colonne d'une table
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentFormRequest $request)
    {
        $data = $this->extractData(new Student(), $request);
        $student = Student::create($data);
        $student->schoolClasses()->attach($request->classes, ['schoolingYear' => $request->schoolingYear]);
//        $student = Student::create($this->extractData(new Student(), $request));
//        dd($student);
        User::create(
            [
                'firstname' => $student['firstname'],
                'lastname' => $student['lastname'],
                'email' => $student['firstname'].$student['id'].'@groupeisi',
                'direction_id' => 1,
                'phone' => $student['phone'],
                'role' => 'etudiant',
                'password' => Hash::make('passer')
            ]
        );
        return redirect()->route('schooling.students.index')->with('success', 'Etudiant créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('schooling.students.show', [
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('schooling.students.form', [
            'student' => $student,
            'classes' => $student->classes()->pluck('className', 'id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentFormRequest $request, Student $student)
    {


        $student->update($this->extractData($student, $request));
        $student->schoolClasses()->sync($request->classes, ['schoolingYear' => $request->schoolingYear]);
        return redirect()->route('schooling.students.index')->with('success', 'Etudiant modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('schooling.students.index')->with('success', 'Etudiant supprimé avec succès');
    }

    public function import(Request $request)
    {
        $request->validate([
            'studentsImport' => 'nullable|file|mimes:xlsx,xls,csv'
        ]);
        Excel::import(new StudentImport(), $request->file('studentsImport'));

        return redirect()->route('schooling.students.index')->with('success', 'Etudiants importés avec succès');
    }

    public function export()
    {
        return Excel::download(new StudentExport(), 'students.xlsx');
    }
}
