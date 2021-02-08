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
use App\Http\Controllers\SalleController;
use App\Http\Controllers\SemestreController;
use App\Http\Controllers\SpecialiteController;
use App\Http\Controllers\UeController;
use App\Models\Etudiant;
use App\Models\Paiement;
use App\Models\Professeur;
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
    return view('welcome');
})->name('home');

/* Route::get('/login', function (){
    return view('layouts.login');
})->name('login'); */
Route::middleware('auth')->group(function(){
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
    Route::resource('absence', AbsenceController::class);
    Route::resource('evaluation', EvaluationController::class);
    Route::resource('paiement', PaimentController::class);
    Route::resource('etudiant', EtudiantController::class);
    Route::resource('salle', SalleController::class);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $paiements = Paiement::all()->sum('montant');
    $etudiants = Etudiant::all()->count();
    $profs = Professeur::all()->count();
    return view('home', compact('paiements','etudiants','profs'));
})->name('dashboard');
