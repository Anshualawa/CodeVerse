<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\dummyapi;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great! https://www.youtube.com/watch?v=P2dfXpUHy6U&list=PL8p2I9GklV46dciS4GDzBFHBi0JVIbnzT&index=54
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/books', 'ApiController@index');
Route::post('/books', 'ApiController@store');
Route::get('/books/{id}', 'ApiController@show');
Route::put('/books/{id}', 'ApiController@update');
Route::delete('/books/{id}', 'ApiController@destroy');

Route::get('data', [dummyapi::class, 'getData']);
Route::get('data/{id?}', [dummyapi::class, 'list']);
Route::post('data', [dummyapi::class, 'add']);
Route::put('data', [dummyapi::class, 'update']);
Route::delete('data/{id}', [dummyapi::class, 'delete']);
Route::get('search/{name}', [dummyapi::class, 'search']);

Route::post("save", [dummyapi::class, 'testData']);

Route::apiResource("member", ApiController::class);