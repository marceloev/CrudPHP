<?php

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

Route::GET('/', 'LoginCtrl@login_GET');
Route::POST('/', 'LoginCtrl@login_POST');

Route::GET('/login', 'LoginCtrl@login_GET');
Route::POST('/login', 'LoginCtrl@login_POST');

Route::GET('/home', 'HomeCtrl@home_GET');

Route::POST('/novo-produto', 'HomeCtrl@novoProduto_POST');
