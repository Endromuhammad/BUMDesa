<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
    return view('index');
})->name('default');

Route::get('/test', [Controller::class, 'test']);

Route::post('/test-lol', [Controller::class, 'test']);
Route::post('/test-login', [Controller::class, 'login']);

Route::get('/logout', [Controller::class, 'logout']);

Route::get('/index', function () {
    return view('index');
})->name('index');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');
Route::get('/portofolio', function () {
    return view('portofolio');
})->name('portofolio');
Route::get('/portofolio-details', function () {
    return view('portofolio-details');
})->name('portofolio-details');
Route::get('/pbarang', function () {
    return view('pbarang');
})->name('pbarang');
Route::get('/pbarang-kon', function () {
    return view('pbarang-kon');
})->name('pbarang-kon');
Route::get('/pkeuangan', function () {
    return view('pkeuangan');
})->name('pkeuangan');
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/admin-porto', function () {
    return view('admin-porto');
})->name('admin-porto');
Route::get('/admin-porto-edit', function () {
    return view('admin-porto-edit');
})->name('admin-porto-edit');
Route::get('/admin-porto-add', function () {
    return view('admin-porto-add');
})->name('admin-porto-add');
Route::get('/admin-pkeuangan', function () {
    return view('admin-pkeuangan');
})->name('admin-pkeuangan');
Route::get('/admin-pkeuangan-edit', function () {
    return view('admin-pkeuangan-edit');
})->name('admin-pkeuangan-edit');
Route::get('/admin-pkeuangan-add', function () {
    return view('admin-pkeuangan-add');
})->name('admin-pkeuangan-add');
Route::get('/admin-pbarang', function () {
    return view('admin-pbarang');
})->name('admin-pbarang');
Route::get('/admin-pbarang-edit', function () {
    return view('admin-pbarang-edit');
})->name('admin-pbarang-edit');
Route::get('/admin-pbarang-add', function () {
    return view('admin-pbarang-add');
})->name('admin-pbarang-add');
Route::get('/admin-berita', function () {
    return view('admin-berita');
})->name('admin-berita');
Route::get('/admin-berita-edit', function () {
    return view('admin-berita-edit');
})->name('admin-berita-edit');
Route::get('/admin-berita-add', function () {
    return view('admin-berita-add');
})->name('admin-berita-add');