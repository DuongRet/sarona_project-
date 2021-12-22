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

Route::get('admin/layout/sideNav', function () {
    return view('admin.layout.sideNav');
});
Route::get('admin/chhornhey/dashboard', function () {
    return view('admin.chhornhey.dashboard');
});