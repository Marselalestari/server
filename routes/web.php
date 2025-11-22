<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;

// ===============================
// Halaman Utama
// ===============================
Route::get('/', function () {
    return view('welcome');
});


// ===============================
// DASHBOARD USER
// ===============================
Route::middleware(['auth', 'role:user'])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('user.dashboard.index');
    })->name('dashboard');

    // Request VPS
    Route::get('/request', function () {
        return view('user.request.index');
    })->name('request');

    // VPS
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
// DASHBOARD ADMIN AREA
// ===============================
Route::middleware(['auth', 'isAdmin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard Admin
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // User List View
        Route::get('/users', [UserController::class, 'index'])->name('users');

        // VPS
        Route::get('/vps', function () {
            return view('admin.vps.index');
        })->name('vps');

        Route::get('/vps/orders', function () {
            return view('admin.vps.orders');
        })->name('vps.orders');

        // Transactions
        Route::get('/transactions', function () {
            return view('admin.transactions.index');
        })->name('transactions');

        // Reports
        Route::get('/reports', function () {
            return view('admin.reports.index');
        })->name('reports');

        // ----------------------------
        // USER CRUD (Admin)
        // ----------------------------
        Route::get('/users/list', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');

        Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
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
