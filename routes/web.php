<?php

use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\AnneeScolaireController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\DomaineController;
use App\Http\Controllers\EcController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\MentionController;
use App\Http\Controllers\PaimentController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\SemestreController;
use App\Http\Controllers\SpecialiteController;
use App\Http\Controllers\UeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function (){
    return view('layouts.login');
})->name('login');

Route::resource('annee', AnneeScolaireController::class);
Route::resource('semestre', SemestreController::class);
Route::resource('domaine', DomaineController::class);
Route::resource('mention', MentionController::class);
Route::resource('specialite', SpecialiteController::class);
Route::resource('ue', UeController::class);
Route::resource('professeur', ProfesseurController::class);
Route::resource('ec', EcController::class);
Route::resource('classe', ClasseController::class);
Route::resource('inscription', InscriptionController::class);
Route::resource('cours', CoursController::class);
<<<<<<< HEAD
Route::resource('paiement', PaimentController::class);
=======
Route::resource('absence', AbsenceController::class);
Route::resource('evaluation', EvaluationController::class);
>>>>>>> 95868b9857918b5490e0f4dadc8da13b5c9a6fa0
