<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Ajukan Request VPS
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow sm:rounded-lg p-6">
                
                <form action="{{ route('vps.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block font-medium mb-1">CPU</label>
                        <input type="text" name="cpu" class="w-full border rounded px-3 py-2">
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium mb-1">RAM</label>
                        <input type="text" name="ram" class="w-full border rounded px-3 py-2">
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium mb-1">Storage</label>
                        <input type="text" name="storage" class="w-full border rounded px-3 py-2">
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium mb-1">Operating System</label>
                        <select name="os" class="w-full border rounded px-3 py-2">
                            <option>Ubuntu 22.04</option>
                            <option>Debian 12</option>
                            <option>CentOS 9</option>
                            <option>Rocky Linux</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium mb-1">Lokasi Server</label>
                        <select name="location" class="w-full border rounded px-3 py-2">
                            <option>Singapore</option>
                            <option>Tokyo</option>
                            <option>London</option>
                            <option>New York</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium mb-1">Keterangan</label>
                        <textarea name="description" class="w-full border rounded px-3 py-2"></textarea>
                    </div>

                    <button class="bg-blue-600 text-white px-4 py-2 rounded">
                        Buat Request VPS
                    </button>
                </form>

            </div>

        </div>
    </div>

</x-app-layout>
