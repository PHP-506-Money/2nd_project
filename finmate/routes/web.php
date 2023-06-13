<?php
/******************************************
 * Project Name : Finmate
 * Directory    : Route
 * File Name    : web.php
 * History      : v001 0613 Subin.No new
 *******************************************/

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
    return view('main');
});

Route::get('/main', function () {
    return view('main');
});