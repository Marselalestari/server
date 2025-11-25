@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Riwayat Request VPS</h1>

    @if(session('success'))
        <div class="p-2 bg-green-200 rounded mb-4">{{ session('success') }}</div>
    @endif

    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-2 text-left">Tanggal</th>
                <th class="p-2 text-left">Server</th>
                <th class="p-2 text-left">Spec</th>
                <th class="p-2 text-left">Lokasi</th>
                <th class="p-2 text-left">Status</th>
                <th class="p-2 text-left">IP</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $d)
                <tr class="border-b">
                    <td class="p-2">{{ $d->created_at->format('Y-m-d H:i') }}</td>
                    <td class="p-2">{{ $d->server_name ?? '-' }}</td>
                    <td class="p-2">{{ $d->cpu }} / {{ $d->ram }}GB / {{ $d->storage }}GB / {{ $d->os }}</td>
                    <td class="p-2">{{ $d->lokasi }}</td>
                    <td class="p-2">{{ ucfirst($d->status) }}</td>
                    <td class="p-2">{{ $d->assigned_ip ?? '-' }}</td>
                </tr>
            @empty
                <tr><td class="p-2" colspan="6">Belum ada request.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
