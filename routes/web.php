<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VpsRequestController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminVpsController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminBillingController;
use App\Http\Controllers\Admin\AdminTicketController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\User\UserProductController;

// ===============================
// Halaman Utama
// ===============================
Route::get('/', function () {
    return view('welcome');
});

// ===============================
// USER DASHBOARD AREA
// ===============================
Route::middleware(['auth', 'role:user'])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('user.dashboard.index');
    })->name('dashboard');

    Route::get('/produk', [UserProductController::class, 'index'])->name('user.products.index');
    Route::get('/products/{product}', [UserProductController::class, 'show'])->name('user.products.show');
    Route::post('/products/{product}/buy', [UserProductController::class, 'buy'])->name('user.products.buy');

    // Request VPS
    Route::get('/request', function () {
        return view('user.request.create');
    })->name('request');

    Route::get('/vps/request/create', [VpsRequestController::class, 'create'])
        ->name('user.request.create');

    Route::post('/vps/request', [VpsRequestController::class, 'store'])
        ->name('user.request.store');

    Route::get('/vps/request/history', [VpsRequestController::class, 'history'])
        ->name('user.request.history');

    // VPS Aktif
    Route::get('/vps', function () {
        return view('user.vps.index');
    })->name('vps');

    // Riwayat Pemesanan
    Route::get('/riwayatpemesanan', function () {
        return view('user.riwayatpemesanan.index');
    })->name('riwayatpemesanan');

    // Billing Tagihan
    Route::get('/tagihan', function () {
        return view('user.billingtagihan.index');
    })->name('bilingtagihan');
});

// ===============================
// ADMIN DASHBOARD AREA
// ===============================
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Users
    Route::resource('users', UserController::class);

    // VPS
    Route::get('vps', [AdminVpsController::class, 'index'])->name('vps.index');
    Route::get('vps/requests', [AdminVpsController::class, 'requests'])->name('vps.requests');
    Route::get('vps/active', [AdminVpsController::class, 'active'])->name('vps.active');

    // Products (CRUD admin)
    Route::resource('products', AdminProductController::class);

    // Orders
    Route::resource('orders', AdminOrderController::class);

    // Billing
    Route::resource('billing', AdminBillingController::class);

    // Tickets
    Route::resource('tickets', AdminTicketController::class);

    // Profile Admin
    Route::get('profile', [AdminProfileController::class, 'index'])->name('profile');
    Route::put('profile', [AdminProfileController::class, 'update'])->name('profile.update');
});

// ===============================
// PROFILE ROUTES
// ===============================
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// auth routes (login, register)
require __DIR__ . '/auth.php';
