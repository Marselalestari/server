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

        <!-- ELEMEN DEKORATIF (CIRCLE GLOW) -->
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


        <!-- LOGIN CARD -->
        <div style="
            position:relative;
            z-index:2;
            background:rgba(15, 30, 55, 0.55);
            backdrop-filter:blur(10px);
            padding:40px;
            width:100%;
            max-width:380px;
            border-radius:16px;
            box-shadow:0 0 30px rgba(0,0,0,0.5);
            color:#cfe3ff;
            text-align:center;
        ">

            <h2 style="font-size:28px; font-weight:700; margin-bottom:25px; color:#e8f2ff;">
                Log In
            </h2>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- EMAIL -->
                <div style="text-align:left;">
                    <label for="email" style="color:#c8d9f5; font-size:14px; font-weight:600;">
                        Email
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
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
                        required autocomplete="current-password"

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

                <!-- REMEMBER ME -->
                <label style="
                    display:flex;
                    align-items:center;
                    gap:6px;
                    margin-top:15px;
                    font-size:14px;
                    color:#d4e2ff;
                ">
                    <input type="checkbox" name="remember" style="accent-color:#3f8bff;">
                    Remember me
                </label>

                <!-- BUTTON -->
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
                    Log In
                </button>

            </form>

            <!-- FOOTER -->
            <div style="margin-top:18px; font-size:14px; color:#d4e2ff;">
                Don’t have an account?
                <a href="{{ route('register') }}" style="color:#6db3ff; font-weight:600;">
                    Sign Up
                </a>
            </div>

        </div>
    </div>

</x-guest-layout>