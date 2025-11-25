<?php

namespace App\Http\Controllers;

use App\Models\VpsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VpsRequestController extends Controller
{
    // Menampilkan form request (user)
    public function create()
    {
        return view('user.RequestVps.create');
    }

    // Menyimpan request dari user
    public function store(Request $request)
    {
        $request->validate([
            'server_name' => 'nullable|string|max:191',
            'cpu' => 'required|string|max:50',
            'ram' => 'required|string|max:50',
            'storage' => 'required|string|max:50',
            'os' => 'required|string|max:100',
            'lokasi' => 'required|string|max:100',
            'keterangan' => 'nullable|string|max:500',
        ]);

        VpsRequest::create([
            'user_id' => Auth::id(),
            'server_name' => $request->server_name,
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

    // Riwayat request user
    public function history()
    {
        $data = VpsRequest::where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('user.RequestVps.history', compact('data'));
    }

    // ===== Admin =====
    // Lihat semua request (admin)
    public function adminIndex()
    {
        $requests = VpsRequest::with('user')->latest()->get();
        return view('admin.vps.index', compact('requests'));
    }

    // Update status & optional assigned_ip (admin)
    public function updateStatus(Request $request, VpsRequest $vpsRequest)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
            'assigned_ip' => 'nullable|ip',
            'notes' => 'nullable|string|max:500'
        ]);

        $vpsRequest->status = $request->status;
        if ($request->filled('assigned_ip')) {
            $vpsRequest->assigned_ip = $request->assigned_ip;
        }
        // Optional: simpan notes ke keterangan (atau buat kolom terpisah)
        if ($request->filled('notes')) {
            $vpsRequest->keterangan = trim($vpsRequest->keterangan . "\n\n[Admin note] " . $request->notes);
        }
        $vpsRequest->save();

        return back()->with('success', 'Status request berhasil diperbarui.');
    }
}
