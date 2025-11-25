<?php

namespace App\Http\Controllers;

use App\Models\Vps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VpsController extends Controller
{
    // daftar VPS milik user
    public function index()
    {
        $vps = Vps::where('user_id', Auth::id())->get();
        return view('user.vps.index', compact('vps'));
    }

    // form edit
    public function edit($id)
    {
        $vps = Vps::where('user_id', Auth::id())->findOrFail($id);
        return view('user.vps.edit', compact('vps'));
    }

    // update vps
    public function update(Request $request, $id)
    {
        $vps = Vps::where('user_id', Auth::id())->findOrFail($id);

        $vps->update($request->all());

        return redirect()->route('vps')->with('success', 'VPS berhasil diperbarui.');
    }

    // delete vps
    public function destroy($id)
    {
        $vps = Vps::where('user_id', Auth::id())->findOrFail($id);
        $vps->delete();

        return redirect()->route('vps')->with('success', 'VPS berhasil dihapus.');
    }
}
