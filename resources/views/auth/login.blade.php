<x-guest-layout>
    <style>
        {!! file_get_contents(public_path('css/custom-auth.css')) !!}
    </style>

    <div class="container">
        <div class="login-box">
            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf

                <div style="height: 60px; width: 190px"><img src="/images/logo-wts.png" alt=""></div>
                <span class="header">Login</span>

                <!-- Email -->
                <input type="email" name="email" class="input" placeholder="Email" value="{{ old('email') }}" required
                    autofocus autocomplete="new-email">
                @error('email')
                    <p style="color: red; font-size: 12px;">{{ $message }}</p>
                @enderror

                <!-- Password -->
                <input type="password" name="password" class="input" placeholder="Password" required autocomplete="new-password">
                @error('password')
                    <p style="color: red; font-size: 12px;">{{ $message }}</p>
                @enderror

                <!-- Remember Me -->
                <label class="footer mt-2">
                    <input type="checkbox" name="remember">
                    Remember Me
                </label>

                <!-- Submit Button -->
                <button type="submit" class="button sign-in">Log In</button>

                <!-- Footer Links -->
                <p class="footer mt-3">
                    <a href="{{ route('password.request') }}" class="link">Forgot password?</a><br/>
                    <span class="flex justify-between">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="link flex justify-end ml-auto">Sign up, it's free!</a>
                    </span>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>