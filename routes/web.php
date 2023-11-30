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
Route::get('/listings/create', [ListingController::class, 'create']);

//Store listing data
Route::post('/listings', [ListingController::class, 'store']);


// Show edit form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit']);

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'deleteList']);

//Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
//check db


//Show register/create form
Route::get('/register', [UserController::class, 'register']);

// Create new user
Route::post('/users', [UserController::class, 'store']);

//Log user out
Route::post('/logout', [UserController::class, 'logout']);





// Route::get('/check-mysql-connection', function () {
//     try {
//         DB::connection()->getPdo();
//         echo "Successfully connected to the database!";
//     } catch (\Exception $e) {
//         die("Could not connect to the database. Error: " . $e->getMessage());
//     }
// });
