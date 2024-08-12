<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\FavorisController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CommentairesController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PubliciteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Réaliser par IL-Yassine OBAORIN
//route api pour autentification
Route::post('/register', [RegisteredUserController::class, 'stores']);
Route::post('/login', [AuthenticatedSessionController::class, 'stores']);
Route::post('forgot-password', [\App\Http\Controllers\Auth\PasswordResetLinkController::class, 'stores']);
Route::middleware('auth:sanctum')->post('/logout', [AuthenticatedSessionController::class, 'destroys']);

// route api pour les favoris
Route::middleware('auth:sanctum')->get('/favoris', [FavorisController::class, 'indexe']);
Route::middleware('auth:sanctum')->post('/create-favoris', [FavorisController::class, 'stores']);
Route::middleware('auth:sanctum')->post('/remove-favoris', [FavorisController::class, 'destroys']);

//route api pour le panier
Route::middleware('auth:sanctum')->post('/add-to-cart', [CartController::class, 'stores']);
Route::middleware('auth:sanctum')->post('/remove-cart', [CartController::class, 'destroys']);
Route::middleware('auth:sanctum')->put('/update-cart', [CartController::class, 'updates']);


//route api pour faire un commentaire
Route::middleware('auth:sanctum')->post('/create-commentaire', [CommentairesController::class, 'stores']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});

// route pour les publicités
Route::get('publicites', [PubliciteController::class, 'indexe']);

// route pour les articles
Route::get('articles', [ArticlesController::class, 'indexe']);
Route::get('articles/{id}', [ArticlesController::class, 'indexes']);

// routes pour les catégories
Route::get('categories', [CategoriesController::class, 'indexe']);

Route::get('categorie-details/{slug}', [\App\Http\Controllers\CategorieDetailController::class, 'detailcategories']);

Route::get('details-article/{slug}/{codeArticle}', [\App\Http\Controllers\CategorieDetailController::class, 'detailarticles']);

//Route::post('/add-to-carts', [App\Http\Controllers\CartController::class, 'stores']);

Route::get('/cart-data', [App\Http\Controllers\CartController::class, 'creates']);

//Route::post('create-commentaire', [App\Http\Controllers\CommentairesController::class, 'stores']);

// Route::middleware(['auth:sanctum', 'json-response'])->group(function () {

//     Route::get('/favoris', [App\Http\Controllers\FavorisController::class, 'indexe']);
// });

Route::middleware('auth:sanctum')->group(function () {
    // Route::delete('/cart/destroy', [CartController::class, 'destroys']);
    Route::get('/inscription', [App\Http\Controllers\HomeController::class, 'registers']);
    Route::get('/mon-panier', [App\Http\Controllers\CartController::class, 'indexe']);
    Route::get('/bonus', [App\Http\Controllers\CartController::class, 'bonus']);
    Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'indexe']);
    Route::post('/placer-commande', [App\Http\Controllers\CheckoutController::class, 'stores']);
    Route::get('/mes-commandes', [App\Http\Controllers\CheckoutController::class, 'creates']);
    Route::get('/details-commande/{id}', [App\Http\Controllers\CheckoutController::class, 'shows']);
    Route::put('/update-commande/{id}', [App\Http\Controllers\CommandesController::class, 'updatees']);
    Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'updates']);
 });
