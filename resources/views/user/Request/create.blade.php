@extends('layouts.app')

@section('content')
<div class="p-6">
    <div class="max-w-3xl mx-auto bg-card-dark p-8 rounded-2xl shadow-lg border border-gray-700">

        <h2 class="text-center text-2xl font-bold text-white mb-6">
            Pilih spec VPS Anda
        </h2>

        {{-- OS Tabs --}}
        <div class="flex items-center justify-center mb-6 gap-4">
            <button type="button" 
                onclick="setOS('Linux')" 
                id="btnLinux"
                class="px-6 py-2 rounded-full bg-accent-purple text-white font-semibold">
                Linux
            </button>

            <button type="button" 
                onclick="setOS('Windows')" 
                id="btnWindows"
                class="px-6 py-2 rounded-full bg-gray-700 text-white font-semibold">
                Windows
            </button>
        </div>

        {{-- Form --}}
        <form action="{{ route('user.request.store') }}" method="POST" class="space-y-6">
            @csrf
            <input type="hidden" id="osInput" name="os" value="Linux">
            <input type="hidden" id="priceInput" name="price">

            {{-- CPU --}}
            <div>
                <label class="text-white font-medium">CPU</label>
                <div class="flex items-center justify-between mt-1">
                    <input 
                        type="range" 
                        id="cpu" 
                        name="cpu" 
                        min="1" 
                        max="6" 
                        value="4"
                        class="w-full accent-accent-purple">
                    <span id="cpuValue" class="text-white ml-3">4 Core</span>
                </div>
            </div>

            {{-- RAM --}}
            <div>
                <label class="text-white font-medium">RAM</label>
                <div class="flex items-center justify-between mt-1">
                    <input 
                        type="range" 
                        id="ram" 
                        name="ram" 
                        min="2" 
                        max="16" 
                        step="2" 
                        value="8"
                        class="w-full accent-accent-purple">
                    <span id="ramValue" class="text-white ml-3">8 GB</span>
                </div>
            </div>

            {{-- Storage --}}
            <div>
                <label class="text-white font-medium">Storage</label>
                <div class="flex items-center justify-between mt-1">
                    <input 
                        type="range" 
                        id="storage" 
                        name="storage" 
                        min="20" 
                        max="200" 
                        step="20" 
                        value="100"
                        class="w-full accent-accent-purple">
                    <span id="storageValue" class="text-white ml-3">100 GB</span>
                </div>
            </div>

            {{-- Location --}}
            <div>
                <label class="text-white font-medium">Location :</label>
                <select 
                    name="location"
                    class="mt-1 w-full bg-gray-800 text-white p-3 rounded-lg border border-gray-700">
                    <option disabled selected>Select</option>
                    <option>Jakarta</option>
                    <option>Singapore</option>
                    <option>Tokyo</option>
                </select>
            </div>

            {{-- Linux Distro --}}
            <div>
                <label class="text-white font-medium">Linux Distro :</label>
                <select 
                    name="linux_distro"
                    class="mt-1 w-full bg-gray-800 text-white p-3 rounded-lg border border-gray-700">
                    <option disabled selected>Select</option>
                    <option>Ubuntu 22.04</option>
                    <option>Debian 12</option>
                    <option>Rocky Linux 9</option>
                </select>
            </div>

            {{-- Total Harga --}}
            <div class="bg-gray-800 p-4 rounded-lg text-white">
                <p class="text-lg font-semibold">Total Harga:</p>
                <p id="priceDisplay" class="text-3xl font-bold text-accent-purple">Rp 0</p>
            </div>

            {{-- Keterangan --}}
            <div>
                <label class="text-white font-medium">Keterangan Tambahan (Opsional)</label>
                <textarea 
                    name="keterangan"
                    rows="3"
                    class="mt-2 w-full bg-gray-800 text-white p-3 rounded-lg border border-gray-700"
                    placeholder="Contoh: Tolong aktifkan port 8080..."></textarea>
            </div>

            <button 
                type="submit" 
                class="w-full bg-accent-purple hover:bg-accent-purple/80 text-white p-3 rounded-lg font-semibold transition">
                Kirim Request VPS
            </button>
        </form>
    </div>
</div>

{{-- Script --}}
<script>
    // OS selection tabs
    function setOS(os) {
        document.getElementById('osInput').value = os;

        document.getElementById('btnLinux').classList.toggle('bg-accent-purple', os === 'Linux');
        document.getElementById('btnLinux').classList.toggle('bg-gray-700', os !== 'Linux');

        document.getElementById('btnWindows').classList.toggle('bg-accent-purple', os === 'Windows');
        document.getElementById('btnWindows').classList.toggle('bg-gray-700', os !== 'Windows');

        updatePrice();
    }

    // Slider elements
    const cpu = document.getElementById("cpu");
    const ram = document.getElementById("ram");
    const storage = document.getElementById("storage");

    // Update displayed values
    cpu.oninput = () => { 
        document.getElementById("cpuValue").innerText = cpu.value + " Core";
        updatePrice();
    };
    ram.oninput = () => { 
        document.getElementById("ramValue").innerText = ram.value + " GB";
        updatePrice();
    };
    storage.oninput = () => { 
        document.getElementById("storageValue").innerText = storage.value + " GB";
        updatePrice();
    };

    // Price formula
    function updatePrice() {
        let cpuVal = parseInt(cpu.value);
        let ramVal = parseInt(ram.value);
        let storageVal = parseInt(storage.value);

        let price = (cpuVal * 20000) + (ramVal * 15000) + (storageVal * 1000);

        document.getElementById("priceDisplay").innerText = 
            "Rp " + price.toLocaleString("id-ID");

        document.getElementById("priceInput").value = price;
    }

    // Initial calculation
    updatePrice();
</script>
@endsection
