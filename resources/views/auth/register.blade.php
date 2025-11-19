<x-guest-layout>

    <!-- BACKGROUND GAMBAR + OVERLAY -->
    <div style="
        width:100%;
        min-height:100vh;
        background: url('/bg.jpg') no-repeat center center / cover;
        position:relative;
        display:flex;
        justify-content:center;
        align-items:center;
        padding:20px;
    ">

        <!-- OVERLAY GELAP -->
        <div style="
            position:absolute;
            width:100%;
            height:100%;
            background:rgba(10,20,35,0.75);
            backdrop-filter:blur(1px);
            top:0;
            left:0;
            z-index:1;
        "></div>

        <!-- ELEMEN GLOW KIRI -->
        <div style="
            position:absolute;
            width:250px;
            height:250px;
            background:rgba(0,140,255,0.23);
            filter:blur(90px);
            border-radius:50%;
            top:10%;
            left:10%;
            z-index:1;
        "></div>

        <!-- ELEMEN GLOW KANAN -->
        <div style="
            position:absolute;
            width:300px;
            height:300px;
            background:rgba(0,90,255,0.28);
            filter:blur(110px);
            border-radius:50%;
            bottom:8%;
            right:10%;
            z-index:1;
        "></div>

        <!-- REGISTER CARD -->
        <div style="
            position:relative;
            z-index:2;
            background:rgba(15, 30, 55, 0.55);
            backdrop-filter:blur(10px);
            padding:40px;
            width:100%;
            max-width:420px;
            border-radius:16px;
            box-shadow:0 0 30px rgba(0,0,0,0.5);
            color:#cfe3ff;
            text-align:center;
        ">

            <h2 style="font-size:28px; font-weight:700; margin-bottom:25px; color:#e8f2ff;">
                Register
            </h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- NAME -->
                <div style="text-align:left;">
                    <label for="name" style="color:#c8d9f5; font-size:14px; font-weight:600;">
                        Name
                    </label>

                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required autofocus
                        style="
                            width:100%;
                            margin-top:6px;
                            background:rgba(255,255,255,0.15);
                            border:1px solid rgba(200,220,255,0.35);
                            color:#ffffff;
                            padding:10px 12px;
                            border-radius:8px;
                            outline:none;
                        "
                    >
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- EMAIL -->
                <div style="text-align:left; margin-top:18px;">
                    <label for="email" style="color:#c8d9f5; font-size:14px; font-weight:600;">
                        Email
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        style="
                            width:100%;
                            margin-top:6px;
                            background:rgba(255,255,255,0.15);
                            border:1px solid rgba(200,220,255,0.35);
                            color:#ffffff;
                            padding:10px 12px;
                            border-radius:8px;
                            outline:none;
                        "
                    >
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- PASSWORD -->
                <div style="text-align:left; margin-top:18px;">
                    <label for="password" style="color:#c8d9f5; font-size:14px; font-weight:600;">
                        Password
                    </label>

                    <input
                        id="password"
                        type="password"
                        name="password"
                        required autocomplete="new-password"
                        style="
                            width:100%;
                            margin-top:6px;
                            background:rgba(255,255,255,0.15);
                            border:1px solid rgba(200,220,255,0.35);
                            color:#ffffff;
                            padding:10px 12px;
                            border-radius:8px;
                            outline:none;
                        "
                    >
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- CONFIRM PASSWORD -->
                <div style="text-align:left; margin-top:18px;">
                    <label for="password_confirmation" style="color:#c8d9f5; font-size:14px; font-weight:600;">
                        Confirm Password
                    </label>

                    <input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        required autocomplete="new-password"
                        style="
                            width:100%;
                            margin-top:6px;
                            background:rgba(255,255,255,0.15);
                            border:1px solid rgba(200,220,255,0.35);
                            color:#ffffff;
                            padding:10px 12px;
                            border-radius:8px;
                            outline:none;
                        "
                    >
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- BUTTON REGISTER -->
                <button type="submit" style="
                    width:100%;
                    margin-top:25px;
                    padding:12px;
                    background:#1b6cff;
                    color:white;
                    border:none;
                    border-radius:8px;
                    font-weight:600;
                    font-size:16px;
                    transition:0.2s;
                ">
                    Register
                </button>

            </form>

            <!-- FOOTER -->
            <div style="margin-top:18px; font-size:14px; color:#d4e2ff;">
                Already have an account?
                <a href="{{ route('login') }}" style="color:#6db3ff; font-weight:600;">
                    Log In
                </a>
            </div>

        </div>
    </div>

</x-guest-layout>
