<?php

use App\Http\Controllers\backEnd\AboutController;
use App\Http\Controllers\backEnd\HomeController;
use App\Http\Controllers\backEnd\StudentController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\ContactController;
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

// fontEnd
Route::get('/', [BaseController::class, 'index']);











// back end
Route::get('dashboard', [HomeController::class, 'index']);



































Route::get('about', [ContactController::class, 'index']);
Route::post('contact/store/', [ContactController::class, 'store'])->name('contact.store');
Route::get('manage', [ContactController::class, 'manage']);
Route::get('contact/delete/{id}', [ContactController::class, 'delete']);
Route::get('contact/edit/{id}', [ContactController::class, 'edit']);
Route::post('contact/update/{id}', [ContactController::class, 'update']);
Route::get('contact/active/{id}', [ContactController::class, 'active']);
Route::get('contact/inactive/{id}', [ContactController::class, 'inactive']);



// student 
Route::resource('student', StudentController::class);









Route::get('contact', [AboutController::class, 'contact']);
