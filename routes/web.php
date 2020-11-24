<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KiddyController;

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

Route::name('home')->get('/', [KiddyController::class, 'index']);
Route::name('about')->get('about', [KiddyController::class, 'about']);
Route::name('contact')->get('contact', [KiddyController::class, 'contact']);
Route::name('gallery')->get('gallery', [KiddyController::class, 'gallery']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
