<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
{
    // Ambil semua user
    $users = \App\Models\User::all();

    // Kirim ke view
    return view('admin.users.index', compact('users'));
}


    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        // logic menyimpan data user
    }

    public function show($id)
    {
        return view('admin.users.show', compact('id'));
    }

    public function edit($id)
    {
        return view('admin.users.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // logic update data user
    }

    public function destroy($id)
    {
        // logic hapus user
    }
}
