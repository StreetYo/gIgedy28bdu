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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/swagger', [\App\Http\Controllers\SwaggerController::class, 'index'])->name('swagger.index');

Route::get('/forbidden', function() {
    return response()->json([
        'message' => 'Forbidden'
    ])->setStatusCode(403);
});
