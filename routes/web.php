<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Models\Customers;

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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/attack', function () {
    $customers = Customers::all();
    echo '<pre>';
    print_r($customers->toArray());
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/customer', [RegisterController::class, 'view']);
Route::get('/customer/delete/{id}', [RegisterController::class, 'delete'])->name('customer.delete');





// Route::get('get-all-session', function () {
//     $session = session()->all();
//     print_r($session);
// });