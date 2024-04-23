<?php

namespace App\Http\Controllers;

use App\Models\Direction;
use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
//        // creer une direction
//     $direction = Direction::create([
//         'name' => 'ISI KM',
//         'email' => 'direction@groupeisi.com',
//         'phone' => '0022899999999'
//     ]);
////  creer un utilisateur qui a un role de scolarite
//     $user = User::create([
//         'firstname' => 'Scolarite',
//         'lastname' => 'isi',
//          'direction_id' => Direction::first()->id,
//          'phone' => '0022899999999',
//          'role' => 'scolarite',
//         'email' => 'scolarite@groupeisi',
//         'password' => \Illuminate\Support\Facades\Hash::make('passer'),
//        ]);
//     // creer deux classes
//        $class1 = SchoolClass::create([
//            'className' => 'L1GL'
//        ]);
//        $class2 = SchoolClass::create([
//            'className' => 'L2GL'
//        ]);
//        $class3 = SchoolClass::create([
//            'className' => 'L3GL'
//        ]);
//          //creer 4 etudiants
//     $student = Student::create([
//         'firstname' => 'Lamine',
//         'lastname' => 'NIANG',
//         'phone' => '0022899999999',
//         'email' => 'lamine@gmail.com',
//         'birthplace' => 'Dakar',
//         'birthday' => '2002-07-06',
//        ]);
//
//        $student->schoolClasses()->attach(1,  ['schoolingYear' => '2021-2022']);  // attacher l'etudiant aux classes 1 et 2 pour les annees 2023 et 2024


//        $student2 = Student::create([
//            'firstname' => 'Rokhaya',
//            'lastname' => 'BEYE',
//            'phone' => '0022899999999',
//            'email' => 'rokhaya@gmail.com',
//            'birthplace' => 'Dakar',
//            'birthday' => '2002-07-06',
//        ]);
//        $student2->schoolClasses()->attach(1,  ['schoolingYear' => '2021-2022']);  // attacher l'etudiant aux classes 1 et 2 pour les annees 2023 et 2024


//
//        $student3 = Student::create([
//            'firstname' => 'Mouhamed',
//            'lastname' => 'DIOP',
//            'phone' => '0022899999999',
//            'email' => 'mohamed@gmail.com',
//            'birthplace' => 'Dakar',
//            'birthday' => '2002-07-06',
//        ]);
//        $student3->schoolClasses()->attach(1,  ['schoolingYear' => '2021-2022']);  // attacher l'etudiant aux classes 1 et 2 pour les annees 2023 et 2024


//
//        $student4 = Student::create([
//            'firstname' => 'Aminata',
//            'lastname' => 'DIOP',
//            'phone' => '0022899999999',
//            'email' => 'aminata@gmail.com',
//            'birthplace' => 'Dakar',
//            'birthday' => '2002-07-06',
//        ]);
//        $student4->schoolClasses()->attach(1,  ['schoolingYear' => '2021-2022']);  // attacher l'etudiant aux classes 1 et 2 pour les annees 2023 et 2024
//        // attacher l'etudiant aux classes 1 et 2 pour les annees 2023 et 2024

        return view('home');
    }

    public function homeVuejs()
    {
        return Inertia::render('Home',
            [
                'welcome' => 'Welcome to the Home Page using VueJs',
            ]
        );
    }
}
