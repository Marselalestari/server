<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\VpsRequestController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminVpsController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminBillingController;
use App\Http\Controllers\Admin\AdminTicketController;
use App\Http\Controllers\Admin\AdminProfileController;



// ===============================
// Halaman Utama
// ===============================
Route::get('/', function () {
    return view('welcome');
});



// USER DASHBOARD AREA
Route::middleware(['auth', 'role:user'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('user.dashboard.index');
    })->name('dashboard');

    // Request VPS
    Route::get('/request', function () {
        return view('user.request.create');
    })->name('request');

    // Form request VPS (controller)
    Route::get('/vps/request/create', [VpsRequestController::class, 'create'])
        ->name('user.request.create');

    // Submit form request
    Route::post('/vps/request', [VpsRequestController::class, 'store'])
        ->name('user.request.store');

    // Riwayat request user
    Route::get('/vps/request/history', [VpsRequestController::class, 'history'])
        ->name('user.request.history');

    // VPS Aktif User
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



// Group route admin
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Users
    Route::resource('users', AdminUserController::class);

    // VPS
    Route::get('vps', [AdminVpsController::class, 'index'])->name('vps.index');
    // Kalau ada request VPS user dan VPS aktif
    Route::get('vps/requests', [AdminVpsController::class, 'requests'])->name('vps.requests');
    Route::get('vps/active', [AdminVpsController::class, 'active'])->name('vps.active');

    // Products
    Route::resource('products', AdminProductController::class);

    // Orders
    Route::resource('orders', AdminOrderController::class);

    // Billing
    Route::resource('billing', AdminBillingController::class);

    // Tickets
    Route::resource('tickets', AdminTicketController::class);

    // Profile
    Route::get('profile', [AdminProfileController::class, 'index'])->name('profile');
    Route::put('profile', [AdminProfileController::class, 'update'])->name('profile.update');
});













// ===============================
// DASHBOARD ADMIN AREA
// ===============================
// Route::middleware(['auth', 'isAdmin'])
//     ->prefix('admin')
//     ->name('admin.')
//     ->group(function () {

//         // ===========================
//         // DASHBOARD
//         // ===========================
//         Route::get('/dashboard', function () {
//             return view('admin.dashboard');
//         })->name('dashboard');


//         // ===========================
//         // MANAJEMEN PENGGUNA
//         // ===========================
//         Route::get('/pengguna', function () {
//             return view('admin.pengguna.index');
//         })->name('pengguna');


//         // ===========================
//         // PRODUK
//         // ===========================
//         Route::get('/produk', function () {
//             return view('admin.produk.index');
//         })->name('produk');


//         // ===========================
//         // PROSES REQUEST
//         // ===========================
//         Route::get('/requests/pending', function () {
//             return view('admin.requests.pending');
//         })->name('requests.pending');


//         // ===========================
//         // DAFTAR VPS AKTIF
//         // ===========================
//         Route::get('/vps/list', function () {
//             return view('admin.vps.list');
//         })->name('vps.list');


//         // ===========================
//         // RIWAYAT ORDER
//         // ===========================
//         Route::get('/orders/history', function () {
//             return view('admin.orders.history');
//         })->name('orders.history');

// // Admin: list & update (asumsikan kamu punya middleware role:admin)
// Route::middleware(['auth','role:admin'])->prefix('admin')->group(function () {
//     Route::get('/vps/requests', [VpsRequestController::class, 'adminIndex'])->name('admin.vps.index');
//     Route::patch('/vps/requests/{vpsRequest}', [VpsRequestController::class, 'updateStatus'])->name('admin.vps.update');
// });
//         // ===========================
//         // KELOLA TAGIHAN
//         // ===========================
//         Route::get('/billing/invoices', function () {
//             return view('admin.billing.invoices');
//         })->name('billing.invoices');


//         // ===========================
//         // TIKET DUKUNGAN
//         // ===========================
//         Route::get('/support/tickets', function () {
//             return view('admin.support.tickets');
//         })->name('support.tickets');


//         // ===========================
//         // PROFILE ADMIN
//         // ===========================
//         Route::get('/profile', function () {
//             return view('admin.profile.edit');
//         })->name('profile.edit');


//         // ===========================
//         // USER CRUD (PAKAI CONTROLLER)
//         // ===========================
//         Route::get('/users', [UserController::class, 'index'])->name('users');
        
//         Route::get('/users/list', [UserController::class, 'index'])->name('users.index');
//         Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
//         Route::post('/users', [UserController::class, 'store'])->name('users.store');
//         Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
//         Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
//         Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');


//         // ===========================
//         // VPS
//         // ===========================
//         Route::get('/vps', function () {
//             return view('admin.vps.index');
//         })->name('vps');

//         Route::get('/vps/orders', function () {
//             return view('admin.vps.orders');
//         })->name('vps.orders');


//         // ===========================
//         // TRANSAKSI
//         // ===========================
//         Route::get('/transactions', function () {
//             return view('admin.transactions.index');
//         })->name('transactions');


//         // ===========================
//         // LAPORAN
//         // ===========================
//         Route::get('/reports', function () {
//             return view('admin.reports.index');
//         })->name('reports');

//     });












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