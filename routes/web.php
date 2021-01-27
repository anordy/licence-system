<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HomeAppController::class, 'index'])->name('/');


// sidebar routes

Route::get('/application', [App\Http\Controllers\ApplicationController::class, 'index'])->name('application.index');
Route::get('/apply', [App\Http\Controllers\ApplyController::class, 'index'])->name('apply.index');
Route::get('/basic', [App\Http\Controllers\BasicEducationController::class, 'index'])->name('basic.index');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::get('/declaration', [App\Http\Controllers\DeclarationController::class, 'index'])->name('declaration.index');
Route::get('/documents', [App\Http\Controllers\DocumentsController::class, 'index'])->name('documents.index');
Route::get('/personal', [App\Http\Controllers\PersonalController::class, 'index'])->name('personal.index');
Route::get('/profetional', [App\Http\Controllers\ProfetionalController::class, 'index'])->name('profetional.index');
Route::get('/status', [App\Http\Controllers\StatusController::class, 'index'])->name('status.index');





