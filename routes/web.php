<?php

use App\Http\Controllers\CcController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Report593Controller;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [Report593Controller::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::name('cc.')->prefix('cc')->group(function () {
    Route::get('/cc', [CcController::class, 'clearCache'])->name('cc');
    Route::get('/spatie', [CcController::class, 'clearSpatie'])->name('spatie');
    Route::get('/migrate/{param?}', [CcController::class, 'migrate'])->name('migrate');
    Route::get('/seed/{class}', [CcController::class, 'seed'])->name('seed');
});

require __DIR__.'/auth.php';
