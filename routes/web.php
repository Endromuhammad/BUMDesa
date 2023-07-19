<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoodsLoanController;
use App\Http\Controllers\MoneyLoanController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('index');
// })->name('default');

// Route::get('/test', [Controller::class, 'test']);

// Route::post('/test-lol', [Controller::class, 'test']);
// Route::post('/test-login', [Controller::class, 'login']);

// Route::get('/logout', [Controller::class, 'logout']);

// Route::get('/index', function () {
//     return view('index');
// })->name('index');
// Route::get('/blog', function () {
//     return view('blog');
// })->name('blog');
// Route::get('/blog-details', function () {
//     return view('blog-details');
// })->name('blog-details');
// Route::get('/portofolio', function () {
//     return view('portofolio');
// })->name('portofolio');
// Route::get('/portofolio-details', function () {
//     return view('portofolio-details');
// })->name('portofolio-details');
// Route::get('/pbarang', function () {
//     return view('pbarang');
// })->name('pbarang');
// Route::get('/pbarang-kon', function () {
//     return view('pbarang-kon');
// })->name('pbarang-kon');
// Route::get('/pkeuangan', function () {
//     return view('pkeuangan');
// })->name('pkeuangan');

// Route::get('/admin', function () {
//     return view('admin');
// })->name('admin');

// Route::get('/admin-porto', function () {
//     return view('admin-porto');
// })->name('admin-porto');
// Route::get('/admin-porto-edit', function () {
//     return view('admin-porto-edit');
// })->name('admin-porto-edit');
// Route::get('/admin-porto-add', function () {
//     return view('admin-porto-add');
// })->name('admin-porto-add');
// Route::get('/admin-pkeuangan', function () {
//     return view('admin-pkeuangan');
// })->name('admin-pkeuangan');
// Route::get('/admin-pkeuangan-edit', function () {
//     return view('admin-pkeuangan-edit');
// })->name('admin-pkeuangan-edit');
// Route::get('/admin-pkeuangan-add', function () {
//     return view('admin-pkeuangan-add');
// })->name('admin-pkeuangan-add');
// Route::get('/admin-pbarang', function () {
//     return view('admin-pbarang');
// })->name('admin-pbarang');
// Route::get('/admin-pbarang-edit', function () {
//     return view('admin-pbarang-edit');
// })->name('admin-pbarang-edit');
// Route::get('/admin-pbarang-add', function () {
//     return view('admin-pbarang-add');
// })->name('admin-pbarang-add');
// Route::get('/admin-berita', function () {
//     return view('admin-berita');
// })->name('admin-berita');
// Route::get('/admin-berita-edit', function () {
//     return view('admin-berita-edit');
// })->name('admin-berita-edit');
// Route::get('/admin-berita-add', function () {
//     return view('admin-berita-add');
// })->name('admin-berita-add');

// Route::get('/blog', function () {
//     return view('blog');
// })->name('blog');
// Route::get('/blog-details', function () {
//     return view('blog-details');
// })->name('blog-details');



/** start admin routes */
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/berita', [NewsController::class, 'index'])->name('berita');
    Route::get('/berita/create', [NewsController::class, 'create'])->name('berita-create');
    Route::post('/berita/store', [NewsController::class, 'store'])->name('berita-store');
    Route::get('/berita/view/{id}', [NewsController::class, 'show'])->name('berita-view');
    Route::get('/berita/edit/{id}', [NewsController::class, 'edit'])->name('berita-edit');
    Route::post('/berita/update/{id}', [NewsController::class, 'update'])->name('berita-update');
    Route::get('/berita/delete/{id}', [NewsController::class, 'destroy'])->name('berita-delete');

    Route::get('/portofolio', [PortfolioController::class, 'index'])->name('portofolio');
    Route::get('/portofolio/create', [PortfolioController::class, 'create'])->name('portofolio-create');
    Route::post('/portofolio/store', [PortfolioController::class, 'store'])->name('portofolio-store');
    Route::get('/portofolio/view/{id}', [PortfolioController::class, 'show'])->name('portofolio-view');
    Route::get('/portofolio/edit/{id}', [PortfolioController::class, 'edit'])->name('portofolio-edit');
    Route::post('/portofolio/update/{id}', [PortfolioController::class, 'update'])->name('portofolio-update');
    Route::get('/portofolio/delete/{id}', [PortfolioController::class, 'destroy'])->name('portofolio-delete');

    Route::get('/layanan_keuangan', [MoneyLoanController::class, 'index'])->name('layanan_keuangan');
    Route::get('/layanan_keuangan/create', [MoneyLoanController::class, 'create'])->name('layanan_keuangan-create');
    Route::post('/layanan_keuangan/store', [MoneyLoanController::class, 'store'])->name('layanan_keuangan-store');
    Route::get('/layanan_keuangan/view/{id}', [MoneyLoanController::class, 'show'])->name('layanan_keuangan-view');
    Route::get('/layanan_keuangan/edit/{id}', [MoneyLoanController::class, 'edit'])->name('layanan_keuangan-edit');
    Route::post('/layanan_keuangan/update/{id}', [MoneyLoanController::class, 'update'])->name('layanan_keuangan-update');
    Route::get('/layanan_keuangan/delete/{id}', [MoneyLoanController::class, 'destroy'])->name('layanan_keuangan-delete');

    Route::get('/layanan_peminjaman', [GoodsLoanController::class, 'index'])->name('layanan_peminjaman');
    Route::get('/layanan_peminjaman/create', [GoodsLoanController::class, 'create'])->name('layanan_peminjaman-create');
    Route::post('/layanan_peminjaman/store', [GoodsLoanController::class, 'store'])->name('layanan_peminjaman-store');
    Route::get('/layanan_peminjaman/view/{id}', [GoodsLoanController::class, 'show'])->name('layanan_peminjaman-view');
    Route::get('/layanan_peminjaman/edit/{id}', [GoodsLoanController::class, 'edit'])->name('layanan_peminjaman-edit');
    Route::post('/layanan_peminjaman/update/{id}', [GoodsLoanController::class, 'update'])->name('layanan_peminjaman-update');
    Route::get('/layanan_peminjaman/delete/{id}', [GoodsLoanController::class, 'destroy'])->name('layanan_peminjaman-delete');

    Route::get('/stok', [GoodsLoanController::class, 'index'])->name('stok');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/act_login', [AdminController::class, 'authenticate'])->name('post.login');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
/** end admin routes */



/** start basic user routes */
Route::get('/user/login', [UserController::class, 'login'])->name('user.login');

Route::get('/forget', function () {
    return view('forget');
})->name('forget');

Route::post('/user/act_login', [UserController::class, 'authenticate'])->name('user.login.post');
Route::get('/user/logout', [UserController::class, 'logout'])->name('user.logout');
Route::post('/user/act_register', [UserController::class, 'storeUser'])->name('user.register.post');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');
Route::get('/profile', [LandingPageController::class, 'profile'])->name('profile');

Route::get('/berita', [LandingPageController::class, 'berita'])->name('berita-user');
Route::get('/berita_detail/{id}', [LandingPageController::class, 'beritaDetail'])->name('berita-detail-user');

Route::get('/portofolio', [LandingPageController::class, 'portofolio'])->name('portofolio-user');
Route::get('/portofolio-details/{id}', [LandingPageController::class, 'portofolioDetails'])->name('portofolio-detail-user');

Route::get('/money-loan', [LandingPageController::class, 'moneyLoan'])->name('money-loan');
Route::post('/money-loan/store', [LandingPageController::class, 'moneyLoanStore'])->name('money-loan.post');

Route::get('/goods-loan', [LandingPageController::class, 'goodsLoan'])->name('goods-loan');
Route::post('/goods-loan/store', [LandingPageController::class, 'goodsLoanStore'])->name('goods-loan.post');
/** end basic user routes */