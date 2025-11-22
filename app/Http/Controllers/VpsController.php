<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vps;
use Illuminate\Support\Facades\Auth;

class VpsController extends Controller
{
    /**
     * Tampilkan form request VPS
     */
    public function create()
    {
        return view('user.requestvps.create');
    }

    /**
     * Simpan request VPS ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'cpu'        => 'required|string|max:50',
            'ram'        => 'required|string|max:50',
            'storage'    => 'required|string|max:50',
            'os'         => 'required|string|max:50',
            'location'   => 'required|string|max:50',
            'description'=> 'nullable|string',
        ]);

        Vps::create([
            'user_id'    => Auth::id(),
            'cpu'        => $request->cpu,
            'ram'        => $request->ram,
            'storage'    => $request->storage,
            'os'         => $request->os,
            'location'   => $request->location,
            'description'=> $request->description,
            'status'     => 'pending',   // default status
        ]);

        return redirect()
            ->route('user.dashboard')
            ->with('success', 'Request VPS berhasil diajukan dan menunggu persetujuan admin.');
    }

    /**
     * Tampilkan daftar request milik user
     */
    public function index()
    {
        $vps = Vps::where('user_id', Auth::id())->latest()->get();

        return view('user.requestvps.index', compact('vps'));
    }
}
