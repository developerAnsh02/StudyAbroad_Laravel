<x-guest-layout>
    <style>
        {!! file_get_contents(public_path('css/custom-auth.css')) !!}
    </style>

    <div class="container">
        <div class="login-box">
            <form method="POST" action="{{ route('password.confirm') }}" class="form">
                @csrf

                <div style="height: 60px; width: 190px"><img src="/images/logo-wts.png" alt="Logo"></div>
                <span class="header">Confirm Password</span>

                <p class="text-sm text-gray-600 dark:text-gray-400 mb-3 text-center">
                    This is a secure area of the application. Please confirm your password before continuing.
                </p>

                <!-- Password -->
                <input type="password" name="password" class="input" placeholder="Password" required
                    autocomplete="current-password">
                @error('password')
                    <p style="color: red; font-size: 12px;">{{ $message }}</p>
                @enderror

                <!-- Submit Button -->
                <button type="submit" class="button sign-in mt-4">Confirm</button>

                <!-- Back to login -->
                <p class="footer mt-3">
                    <a href="{{ route('login') }}" class="link">Back to Login</a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>