<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UtilisateursController;
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

Route::get('/', function () {
    return view('welcome');
});   
// la nommmenclature de nos routes 
Route::get('/',[AccueilController::class,'index'])->name('accueil');
Route::get('/categorie/index',[CategorieController::class,'index'])->name('categorie');
Route::get('/client/index',[ClientController::class,'index'])->name('client');
Route::get('/produit/index',[ProduitController::class,'index'])->name('produit');

Route::get('/utilisateur/Login',[LoginController::class,'index'])->name('connexion');
Route::get('/Utilisateur/inscription',[UtilisateursController::class,'index'])->name('inscriptionUser');

// Crud for formulaire inscription
// end this CRUD
Route::post('/Utilisateur/store',[UtilisateursController::class,'store'])->name('inscription');

// CRUD for categorie

Route::post('/categorie/store',[CategorieController::class,'store'])->name('StoreCategorie');

Route::delete('/categorie/delete/{categorie}',[CategorieController::class,'delete'])->name('deleteCategories');

Route::post('/categorie/update/{categories}',[CategorieController::class,'update'])->name('updateCategories');

Route::get('/',[AccueilController::class,'index'])->name('accueil');
Route::get('/categorie/index',[CategorieController::class,'index'])->name('categorie');
Route::get('/client/index',[ClientController::class,'index'])->name('client');
Route::get('/produit/index',[ProduitController::class,'index'])->name('produit');

Route::post('/categorie/store',[CategorieController::class,'store'])->name('storeCategories');

Route::get('/categorie/edit/{id}',[CategorieController::class,'edit'])->name('editCategories');
// end this->CRUD

// CRUD for Client
Route::delete('/client/destroy/{client}',[ClientController::class,'destroy'])->name('deleteClient');
Route::post('/client/store',[ClientController::class,'store'])->name('storeClient');
Route::get('/client/edit/{client}',[ClientController::class,'edit'])->name('editClient');
Route::post('/client/update/{id}',[ClientController::class,'update'])->name('updateClient');

// CRUD for produit
Route::post('/produit/store',[ProduitController::class,'store'])->name('storeProduit');
// end this CRUD
