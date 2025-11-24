<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vps;
use App\Models\User;
use Illuminate\Http\Request;

class VpsController extends Controller
{
    public function index()
    {
        $vps = Vps::with('user')->get();
        return view('admin.vps.index', compact('vps'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.vps.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'name'    => 'required|string|max:255',
            'cpu'     => 'required|integer',
            'ram'     => 'required|integer',
            'storage' => 'required|integer',
            'price'   => 'required|integer',
        ]);

        Vps::create($request->all());

        return redirect()->route('admin.vps.index')->with('success', 'VPS berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $vps = Vps::findOrFail($id);
        $users = User::all();

        return view('admin.vps.edit', compact('vps', 'users'));
    }

    public function update(Request $request, $id)
    {
        $vps = Vps::findOrFail($id);

        $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'name'    => 'required|string|max:255',
            'cpu'     => 'required|integer',
            'ram'     => 'required|integer',
            'storage' => 'required|integer',
            'price'   => 'required|integer',
        ]);

        $vps->update($request->all());

        return redirect()->route('admin.vps.index')->with('success', 'VPS berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Vps::destroy($id);

        return redirect()->route('admin.vps.index')->with('success', 'VPS berhasil dihapus.');
    }
}
