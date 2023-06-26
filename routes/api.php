<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('noticia/{id}', 'App\Http\Controllers\NoticiaController@apiShow');
Route::get('noticias/1', 'App\Http\Controllers\NoticiaController@getFirstPage');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
