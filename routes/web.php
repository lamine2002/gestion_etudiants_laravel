<?php

use App\Http\Controllers\Schooling\StudentsController;
use App\Models\Direction;
use App\Models\Matiere;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'homeVuejs'])
    ->name('home');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])
    ->name('login')
    ->middleware('guest');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'doLogin']);
Route::delete('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

Route::prefix('schooling')->name('schooling.')->middleware('auth')->group(function () {
    Route::resource('students', StudentsController::class);

});



Route::post('/import-students', [\App\Http\Controllers\Schooling\StudentsController::class, 'import'])
    ->name('import-students')
    ->middleware('auth');


Route::get('/export-students', [\App\Http\Controllers\Schooling\StudentsController::class, 'export'])
    ->name('export-students')
    ->middleware('auth');
