<?php

use App\Http\Controllers\AnalyticsController;
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

Route::get('/analytics', [ShortLinkController::class, 'analytic'])->name('analytic');

Route::get('/analytics/{id}', [AnalyticsController::class, 'show'])->name('analytic.show');

Route::get('/{shortened_url}', [ShortLinkController::class, 'redirectURL'])->name('redirectURL');