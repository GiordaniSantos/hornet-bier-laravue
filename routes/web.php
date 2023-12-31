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

Route::any('/', function () {
    return view('site.main');
})->where(['all' => '.*']);

Route::any('/produtos', function () {
    return view('site.main');
})->where(['all' => '.*']);

Route::any('/servicos', function () {
    return view('site.main');
})->where(['all' => '.*']);

Route::any('/parcerias', function () {
    return view('site.main');
})->where(['all' => '.*']);

Route::any('/contato', function () {
    return view('site.main');
})->where(['all' => '.*']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
