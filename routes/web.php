<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Models\Customers;
use Illuminate\Http\Request;

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

Route::get('/login_', [LoginController::class, 'login_1']);
Route::post('/login_', [LoginController::class, 'login_2']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/customer', [RegisterController::class, 'view']);
Route::get('/customer/trash', [RegisterController::class, 'trash']);
Route::get('/customer/delete/{id}', [RegisterController::class, 'delete'])->name('customer.delete');
Route::get('/customer/permanent_delete/{id}', [RegisterController::class, 'forcedelete'])->name('customer.permanent_delete');
Route::get('/customer/restore/{id}', [RegisterController::class, 'restore'])->name('customer.restore');
Route::get('/customer/edit/{id}', [RegisterController::class, 'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [RegisterController::class, 'update'])->name('customer.update');

Route::post('/upload', [RegisterController::class, 'upload'])->name('upload');




Route::get('get-all-session', function () {
    $session = session()->all();
    echo '<pre>';
    print_r($session);
    echo '</pre>';
});

Route::get('set-session', function (Request $request) {
    $request->session()->put('name', 'Alawa');
    $request->session()->put('id', '123');
    return redirect('get-all-session');
});

Route::get('destroy-session', function () {
    session()->forget(['name', 'id']);
    return redirect('get-all-session');
});

Route::get('/upload', function () {
    return view('upload');
});