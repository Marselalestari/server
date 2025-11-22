@extends('layouts.user')

@section('content')
<div class="p-6">

    <h2 class="text-2xl font-bold mb-6">Riwayat Request VPS</h2>

    <table class="w-full text-left bg-card-dark rounded-lg overflow-hidden">
        <thead class="bg-main-dark">
            <tr>
                <th class="p-3">CPU</th>
                <th class="p-3">RAM</th>
                <th class="p-3">Storage</th>
                <th class="p-3">OS</th>
                <th class="p-3">Lokasi</th>
                <th class="p-3">Status</th>
                <th class="p-3">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr class="border-b border-gray-700">
                    <td class="p-3">{{ $item->cpu }}</td>
                    <td class="p-3">{{ $item->ram }}</td>
                    <td class="p-3">{{ $item->storage }}</td>
                    <td class="p-3">{{ $item->os }}</td>
                    <td class="p-3">{{ $item->lokasi }}</td>
                    <td class="p-3">
                        <span class="px-2 py-1 rounded text-xs 
                            {{ $item->status == 'pending' ? 'bg-yellow-600' :
                               ($item->status == 'approved' ? 'bg-green-600' : 'bg-red-600') }}">
                            {{ ucfirst($item->status) }}
                        </span>
                    </td>
                    <td class="p-3">{{ $item->created_at->format('d M Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
