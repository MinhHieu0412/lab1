<?php

use App\Http\Controllers\About;
use App\Http\Controllers\Contact;
use Illuminate\Support\Facades\Route;

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

Route::get('/about',[About::class, 'index'])->name('user.index');

Route::get('/contact',[Contact::class, 'index'])->name('user.index');


