<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FaqUserController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('admin-index', [FaqController::class, 'index'])->name('admin-index');
Route::get('faq-create',[FaqController::class, 'create']);
Route::post('store',[FaqController::class, 'store']);
Route::get('edit{faq_id}',[FaqController::class, 'edit']);
Route::post('update-data{faq_id}',[FaqController::class, 'update'])->name('admin-update');
Route::get('delete{faq_id}', [FaqController::class, 'delete']);
Route::get('show{faq_id}', [FaqController::class, 'show']);

Route::get('/', [FaqUserController::class, 'faqIndex']);


