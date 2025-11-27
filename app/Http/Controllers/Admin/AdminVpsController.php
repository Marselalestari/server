<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VpsRequest;

class AdminOrderController extends Controller
{
    public function index()
    {
        $requests = VpsRequest::with('user')->get();
        return view('admin.vps.index', compact('requests'));
    }
}
