<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;
use database\factories\UserFactory;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CitizenController;
use App\Http\Controllers\SearchController;


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
Route::get('/use',function(){
    $users = User::factory()->count(10)->make();
   
   return [$users ];
});
// Authentication Routes
Route::get('showlogin', [LoginController::class,'showLoginForm'])->name('showlogin');
Route::post('login', [LoginController::class,'login'])->name('login');
// Route::post('logout', [LoginController::class,'logout'])->name('logout');

// Registration Routes
Route::get('showregister', [RegisterController::class,'showRegistrationForm'])->name('showregister');
Route::post('register', [RegisterController::class,'register'])->name('register');

// Citizen Records Routes
// Route::middleware(['auth'])->group(function () {
    // Create Citizen Record
    Route::get('citizen/create', [CitizenController::class,'create'])->name('citizen.create');
    Route::post('citizen', [CitizenController::class,'store'])->name('citizen.store');
    Route::get('citizens', [CitizenController::class,'index'])->name('citizens');
    // Search Citizen Records
    Route::get('search', [CitizenController::class,'search'])->name('search');
// });

// Show Citizen Record
Route::get('citizen/{id}', [CitizenController::class,'show'])->name('citizen.show');
