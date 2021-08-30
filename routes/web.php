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
use App\Http\Controllers\ModePaiementController;
use App\Http\Controllers\NationnaliteController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PaimentController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\PaymentChart;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\SemestreController;
use App\Http\Controllers\SpecialiteController;
use App\Http\Controllers\UeController;
use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Nationnalite;
use App\Models\Paiement;
use App\Models\Professeur;
use App\Models\Salle;
use App\Models\Specialite;
use App\Models\User;
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
    Route::resource('note', NoteController::class);
    Route::resource('nationnalite', NationnaliteController::class);
    Route::resource('modepaiement', ModePaiementController::class);
    Route::resource('partenaire', PartenaireController::class);
});
Route::resource('profile', ProfileController::class)->except('show');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $paiements = Paiement::all()->sum('montant');
    $etudiants = Etudiant::all()->count();
    $profs = Professeur::all()->count();
    $classes = Classe::all()->count();
    $nationnalites = Nationnalite::all()->count();
    $specs = Specialite::all()->count();
    $salles = Salle::all()->count();
    $users = User::all()->count();
    return view('home', compact('paiements','etudiants','profs','classes',
    'nationnalites','specs','salles','users'));
})->name('dashboard');





// Pour les bulletins et factures

//Route::get('pdf', [RecuController::class,'createPDF'])->name('recu');
Route::get('recu/{id}', [RapportController::class,'recu'])->name('recu');
Route::get('bulletin/{id}', [RapportController::class,'bulletin'])->name('bulletin');
Route::get('bulletin2/{id}', [RapportController::class,'bulletin2'])->name('bulletin2');


// statistics()

Route::get('chart/payment', [PaymentChart::class,'index'])->name('chart_payment');
