<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DemandeController;

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

//  Route::get('/', function () {
//      return view('welcome');
//  });

Route::get('/', [HomeController::class, 'index']);

 Route::get('/home', [HomeController::class,'redirect'])->middleware('auth', 'verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/mesDemandes', [DemandeController::class, 'index']);
Route::post('/add_demande', [DemandeController::class, 'store']);
Route::get('/update_demande/$id', [DemandeController::class, 'update']);
Route::get('/delete_demande/$id', [DemandeController::class, 'delete']);


Route::get('/add_document_view', [AdminController::class, 'addview']);

Route::post('/upload_document', [AdminController::class, 'upload']);