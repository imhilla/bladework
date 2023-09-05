<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\CreatePost;

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

Route::get('/greeting', function () {
    return view('greeting', ['name' => 'Hillary']);
});

Route::get('/testing', function () {
    return view('testing', ['testing' => true]);
});

Route::get('/counter', Counter::class);

Route::get('/create-post', CreatePost::class);
