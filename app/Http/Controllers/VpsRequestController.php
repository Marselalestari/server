<?php

namespace App\Http\Controllers;

use App\Models\VpsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VpsRequestController extends Controller
{
    public function create()
    {
        return view('user.RequestVps.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cpu' => 'required|string',
            'ram' => 'required|string',
            'storage' => 'required|string',
            'os' => 'required|string',
            'lokasi' => 'required|string',
            'keterangan' => 'nullable|string|max:500',
        ]);

        VpsRequest::create([
            'user_id' => Auth::id(),
            'cpu' => $request->cpu,
            'ram' => $request->ram,
            'storage' => $request->storage,
            'os' => $request->os,
            'lokasi' => $request->lokasi,
            'keterangan' => $request->keterangan,
            'status' => 'pending',
        ]);

        return redirect()
            ->route('user.request.history')
            ->with('success', 'Request VPS berhasil dikirim!');
    }

    public function history()
    {
        $data = VpsRequest::where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('user.RequestVps.history', compact('data'));
    }
}
