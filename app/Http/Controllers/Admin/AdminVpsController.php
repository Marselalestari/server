<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminVpsController extends Controller
{
    public function index()
    {
        return view('admin.vps.index'); // buat view resources/views/admin/vps/index.blade.php
    }
}
