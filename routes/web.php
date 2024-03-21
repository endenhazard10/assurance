<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CotationController;
use App\Http\Controllers\PDFController;

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


Route::get('/',[PagesController::class,'index'])->name('home');
Route::get('/connexion_apporter',[PagesController::class,'connexion_apporter'])->name('connexion_apporter');
Route::get('/connexion_admin',[PagesController::class,'connexion_admin'])->name('connexion_admin');
Route::get('/calcule_assurance_voyage',[CotationController::class,'calcule_assurance_voyage'])->name('calcule_assurance_voyage');
Route::get('/calcule_assurance_mrh',[CotationController::class,'calcule_assurance_mrh'])->name('calcule_assurance_mrh');
Route::get('/imprimer_contrat_vehicule/{id}', [CotationController::class, 'imprimer_contrat_vehicule'])->name('imprimer_contrat_vehicule');
Route::get('/imprimer_contrat_tpv/{id}', [CotationController::class, 'imprimer_contrat_tpv'])->name('imprimer_contrat_tpv');
Route::get('/imprimer_contrat_mrh/{id}', [CotationController::class, 'imprimer_contrat_mrh'])->name('imprimer_contrat_mrh');
Route::get('/imprimer_contrat_voyage/{id}', [CotationController::class, 'imprimer_contrat_voyage'])->name('imprimer_contrat_voyage');
Route::get('/imprimer_contrat_deux_roues/{id}', [CotationController::class, 'imprimer_contrat_deux_roues'])->name('imprimer_contrat_deux_roues');
Route::get('/user_detail/{id}/{years}/{mois}', [AdminController::class, 'user_detail'])->name('user_detail')->middleware('admin.auth');
Route::get('/assurance_detail/{id}', [AdminController::class, 'assurance_detail'])->name('assurance_detail')->middleware('admin.auth');

Auth::routes();
Route::get('contrat_assurance_vehicule', [PDFController::class, 'contrat_assurance_vehicule'])->name('contrat_assurance_vehicule')->middleware('auth');
Route::get('contrat_assurance_mrh', [PDFController::class, 'contrat_assurance_mrh'])->name('contrat_assurance_mrh')->middleware('auth');
Route::get('proposition_contrat_assurance_vehicule', [PDFController::class, 'proposition_contrat_assurance_vehicule'])->name('proposition_contrat_assurance_vehicule')->middleware('auth');
Route::get('proposition_contrat_assurance_mrh', [PDFController::class, 'proposition_contrat_assurance_mrh'])->name('proposition_contrat_assurance_mrh')->middleware('auth');
Route::get('facture_assurance_vehicule', [PDFController::class, 'facture_assurance_vehicule'])->name('facture_assurance_vehicule')->middleware('auth');
Route::get('facture_assurance_voyage', [PDFController::class, 'facture_assurance_voyage'])->name('facture_assurance_voyage')->middleware('auth');
Route::get('facture_assurance_deux_roues', [PDFController::class, 'facture_assurance_deux_roues'])->name('facture_assurance_deux_roues')->middleware('auth');
Route::get('facture_assurance_tpv', [PDFController::class, 'facture_assurance_tpv'])->name('facture_assurance_tpv')->middleware('auth');
Route::get('facture_assurance_mrh', [PDFController::class, 'facture_assurance_mrh'])->name('facture_assurance_mrh')->middleware('auth');
Route::get('proposition_contrat_assurance_tpv', [PDFController::class, 'proposition_contrat_assurance_tpv'])->name('proposition_contrat_assurance_tpv')->middleware('auth');
Route::get('proposition_contrat_assurance_deux_roues', [PDFController::class, 'proposition_contrat_assurance_deux_roues'])->name('proposition_contrat_assurance_deux_roues')->middleware('auth');
Route::get('carte_jaune_assurance_vehicule', [PDFController::class, 'carte_jaune_assurance_vehicule'])->name('carte_jaune_assurance_vehicule')->middleware('auth');

Route::get('contrat_assurance_tpv', [PDFController::class, 'contrat_assurance_tpv'])->name('contrat_assurance_tpv')->middleware('auth');
Route::get('contrat_assurance_voyage', [PDFController::class, 'contrat_assurance_voyage'])->name('contrat_assurance_voyage')->middleware('auth');
Route::get('proposition_contrat_assurance_voyage', [PDFController::class, 'proposition_contrat_assurance_voyage'])->name('proposition_contrat_assurance_voyage')->middleware('auth');
Route::get('contrat_assurance_deux_roues', [PDFController::class, 'contrat_assurance_deux_roues'])->name('contrat_assurance_deux_roues')->middleware('auth');
Route::get('carte_jaune_assurance_tpv', [PDFController::class, 'carte_jaune_assurance_tpv'])->name('carte_jaune_assurance_tpv')->middleware('auth');
//Route::get('generate-contrat', [PDFController::class, 'generateContrat'])->name('generate-contrat')->middleware('auth');

Route::get('/calcule_assurance_vehicule',[CotationController::class,'calcule_assurance_vehicule'])->name('calcule_assurance_vehicule')->middleware('auth');
Route::get('/calcule_assurance_tpv',[CotationController::class,'calcule_assurance_tpv'])->name('calcule_assurance_tpv')->middleware('auth');
Route::get('/calcule_assurance_deux_roues',[CotationController::class,'calcule_assurance_deux_roues'])->name('calcule_assurance_deux_roues')->middleware('auth');

//Route::get('/pdf_pres_contrat',[CotationController::class,'pdf_pres_contrat'])->name('pdf_pres_contrat');

Route::get('/home_apporter', [App\Http\Controllers\HomeController::class, 'index'])->name('home_apporter')->middleware('auth');
Route::get('/dashboard_apporter_voyage', [App\Http\Controllers\CotationController::class, 'dashboard_apporter_voyage'])->name('dashboard_apporter_voyage')->middleware('auth');
Route::get('/dashboard_apporter_mrh', [App\Http\Controllers\CotationController::class, 'dashboard_apporter_mrh'])->name('dashboard_apporter_mrh')->middleware('auth');
Route::get('/dashboard_apporter_deux_roues', [App\Http\Controllers\CotationController::class, 'dashboard_apporter_deux_roues'])->name('dashboard_apporter_deux_roues')->middleware('auth');
Route::get('/dashboard_apporter_tpv', [App\Http\Controllers\CotationController::class, 'dashboard_apporter_tpv'])->name('dashboard_apporter_tpv')->middleware('auth');
Route::get('/cotation_apporter', [App\Http\Controllers\CotationController::class, 'cotation_apporter'])->name('cotation_apporter')->middleware('auth');
Route::get('/cotation_apporter_document_axa_voyage', [App\Http\Controllers\CotationController::class, 'cotation_apporter_document_axa_voyage'])->name('cotation_apporter_document_axa_voyage')->middleware('auth');
Route::get('/cotation_apporter_document_axa', [App\Http\Controllers\CotationController::class, 'cotation_apporter_document_axa'])->name('cotation_apporter_document_axa')->middleware('auth');
Route::get('/cotation_apporter_document_axa_mrh', [App\Http\Controllers\CotationController::class, 'cotation_apporter_document_axa_mrh'])->name('cotation_apporter_document_axa_mrh')->middleware('auth');
Route::get('/cotation_apporter_document_axa_tpv', [App\Http\Controllers\CotationController::class, 'cotation_apporter_document_axa_tpv'])->name('cotation_apporter_document_axa_tpv')->middleware('auth');
Route::get('/cotation_apporter_document_axa_deux_roues', [App\Http\Controllers\CotationController::class, 'cotation_apporter_document_axa_deux_roues'])->name('cotation_apporter_document_axa_deux_roues')->middleware('auth');
Route::get('/dashboard_apporter', [App\Http\Controllers\CotationController::class, 'dashboard_apporter'])->name('dashboard_apporter')->middleware('auth');
Route::get('/cotation_apporter_automobile', [App\Http\Controllers\CotationController::class, 'cotation_apporter_automobile'])->name('cotation_apporter_automobile')->middleware('auth');
Route::get('/cotation_apporter_automobile_vehicule', [App\Http\Controllers\CotationController::class, 'cotation_apporter_automobile_vehicule'])->name('cotation_apporter_automobile_vehicule')->middleware('auth');
Route::get('/cotation_apporter_mrh', [App\Http\Controllers\CotationController::class, 'cotation_apporter_mrh'])->name('cotation_apporter_mrh')->middleware('auth');

Route::get('/cotation_apporter_automobile_deux_roues', [App\Http\Controllers\CotationController::class, 'cotation_apporter_automobile_deux_roues'])->name('cotation_apporter_automobile_deux_roues')->middleware('auth');
Route::get('/cotation_apporter_automobile_tpv', [App\Http\Controllers\CotationController::class, 'cotation_apporter_automobile_tpv'])->name('cotation_apporter_automobile_tpv')->middleware('auth');
Route::get('/cotation_apporter_voyage', [App\Http\Controllers\CotationController::class, 'cotation_apporter_voyage'])->name('cotation_apporter_voyage')->middleware('auth');
Route::get('/cotation_apporter_habitation', [App\Http\Controllers\CotationController::class, 'cotation_apporter_habitation'])->name('cotation_apporter_habitation')->middleware('auth');

Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');

Route::group(['prefix' => 'admin'], function() {
	Route::group(['middleware' => 'admin.guest'], function(){
		Route::view('/login','admin.login')->name('admin.login');
		Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
	});
	
	Route::group(['middleware' => 'admin.auth'], function(){
		Route::get('/creer_apporter',[App\Http\Controllers\AdminController::class, 'creer_apporter'])->name('creer_apporter');
		Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'dashboard'])->name('admin.dashboard');
		Route::post('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
		Route::post('/enregistrer_apporter', [App\Http\Controllers\AdminController::class, 'enregistrer_apporter'])->name('enregistrer_apporter');
	});
});