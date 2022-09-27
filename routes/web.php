<?php

use App\Http\Controllers\UserController;
use App\Jobs\SendMail;
use App\Models\User;
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
    // \App\Jobs\SendMail::dispatch();
    dispatch(new \App\Jobs\SendMail());
    $user = User::all();
    // (new \App\Jobs\SendMail())->handle();
    return view('welcome', compact('user'));
});

route::get('/user', [UserController::class, 'index']);
route::post('/post', [UserController::class, 'store'])->name('store');

Route::get('/users/export/', [UserController::class, 'export']);

