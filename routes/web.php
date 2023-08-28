<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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
    return view('homepage');
});


// All listing
Route::get('/listings', function () {
    return view('listings', [
        'heading' => 'Latest Title',
        'listings' => Listing::allData()
    ]);
});

// Single Listing
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::findData($id)
    ]);
});