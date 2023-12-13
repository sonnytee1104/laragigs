<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;

use function Laravel\Prompts\error;

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

// All Listing
Route::get('/', [ListingController::class, 'index']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//Store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');


// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'deleteList'])->middleware('auth');

// listings manage
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
//check db


//Show register/create form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// Create new user
Route::post('/users', [UserController::class, 'store']);

//Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login Users
Route::post('/users/authenticate', [UserController::class, 'authenticate']);




// Route::get('/check-mysql-connection', function () {
//     try {
//         DB::connection()->getPdo();
//         echo "Successfully connected to the database!";
//     } catch (\Exception $e) {
//         die("Could not connect to the database. Error: " . $e->getMessage());
//     }
// });
