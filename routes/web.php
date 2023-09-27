<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortLinkController;


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
    return view('home');
});

Route::get('/shortenPage', function () {
    return view('shorten');
})->name('shortenPage');

// Route::get('/analyticsPage', function () {
//     return view('analytics');
// })->name('analyticsPage');

Route::post('/shorten', [ShortLinkController::class, 'shorten'])->name('shorten');

Route::get('/analyticsPage', [ShortLinkController::class, 'analytic'])->name('analytic');

Route::get('/{shortened_url}', [ShortLinkController::class, 'redirectURL'])->name('redirectURL');