<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use Illuminate\Support\Facades\DB;

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

//Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//check db

// Route::get('/check-mysql-connection', function () {
//     try {
//         DB::connection()->getPdo();
//         echo "Successfully connected to the database!";
//     } catch (\Exception $e) {
//         die("Could not connect to the database. Error: " . $e->getMessage());
//     }
// });
