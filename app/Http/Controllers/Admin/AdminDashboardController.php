<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Import model yang ADA
use App\Models\User;
use App\Models\Product;
use App\Models\VpsRequest;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index', [
            'totalUsers'    => User::count(),
            'totalVps'      => VpsRequest::count(),   // VPS request yang ada
            'totalOrders'   => 0, // karena model belum ada
            'totalProducts' => Product::count(),
            'totalBilling'  => 0, // karena model belum ada
            'totalTickets'  => 0, // karena model belum ada
        ]);
    }
}
