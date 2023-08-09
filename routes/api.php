<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProduitsController;
use App\Http\Controllers\API\CommandesController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource("produits", ProduitsController::class);

Route::apiResource("commandes", CommandesController::class); 














/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// //Afficher tous les produits
// Route::get('/produits', [ProduitsController::class, "liste"]);
// // Afficher un produit
// Route::get('/produits/{id}', [ProduitsController::class, "detail"]);
// //Ajouter un produit
// Route::post('/produits', [ProduitsController::class, "ajouter"]);
// //Supprimer un produit
// Route::delete('/produits/{id}', [ProduitsController::class, "supprimerProduit"]);



// Route::post('/commandes', [CommandesController::class, "ajouterCommande"]);
// //Ajouter une commande
// Route::post('/commandes/{id}', [CommandesController::class, "ajouterCommande"]);
// //Afficher toutes les commandes d'un client
// Route::get('/commandes', [CommandesController::class, "lesCommandes"]);
// //Afficher un commande
// Route::get('/commandes/{id_client}', [CommandesController::class, "laCommande"]);
// //Supprimer un commande
// Route::delete('/commandes/{id}', [CommandesController::class, "supprimerCommande"]);
// Route::put('/commandes/{id}', [CommandesController::class, "update"]);