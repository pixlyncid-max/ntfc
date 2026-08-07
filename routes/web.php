<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\BlogFrontController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BerandaController as AdminBerandaController;
use App\Http\Controllers\Admin\TentangKamiController as AdminTentangKamiController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\LayananController as AdminLayananController;
use App\Http\Controllers\Admin\PortofolioController as AdminPortofolioController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/layanan/{slug}', [LayananController::class, 'show'])->name('layanan.show');
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio');
Route::get('/portofolio/{slug}', [PortofolioController::class, 'show'])->name('portofolio.show');
Route::get('/blog', [BlogFrontController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogFrontController::class, 'show'])->name('blog.show');

/*
|--------------------------------------------------------------------------
| Admin Authentication Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    /*
    |--------------------------------------------------------------------------
    | Protected Admin Routes
    |--------------------------------------------------------------------------
    */
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Beranda Management
        Route::get('/beranda', [AdminBerandaController::class, 'index'])->name('beranda.index');
        Route::post('/beranda', [AdminBerandaController::class, 'update'])->name('beranda.update');

        // Tentang Kami Management
        Route::get('/tentang-kami', [AdminTentangKamiController::class, 'index'])->name('tentang-kami.index');
        Route::post('/tentang-kami', [AdminTentangKamiController::class, 'update'])->name('tentang-kami.update');

        // Team Photos & Members Management
        Route::resource('team', TeamController::class);

        // Layanan Management
        Route::resource('layanan', AdminLayananController::class);

        // Portofolio Management
        Route::resource('portofolio', AdminPortofolioController::class);

        // Blog Posts Management
        Route::resource('blog', AdminBlogController::class);

        // Navbar & Footer Management
        Route::get('/nav-footer', [\App\Http\Controllers\Admin\NavigationFooterController::class, 'index'])->name('nav-footer.index');
        Route::post('/nav-footer', [\App\Http\Controllers\Admin\NavigationFooterController::class, 'update'])->name('nav-footer.update');
    });
});
