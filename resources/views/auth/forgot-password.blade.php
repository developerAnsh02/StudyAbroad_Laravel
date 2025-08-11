<x-guest-layout>
    <style>
        {!! file_get_contents(public_path('css/custom-auth.css')) !!}
    </style>

    <div class="container">
        <div class="login-box">
            <form class="form" method="POST" action="{{ route('password.email') }}">
                @csrf

                <div style="height: 60px; width: 190px"><img src="/images/logo-wts.png" alt=""></div>
                <span class="header">Forgot Password</span>

                <p class="text-sm text-gray-600 dark:text-gray-400 mb-3 text-center">
                    Forgot your password? No problem. Just let us know your email address and we will email you a
                    password reset link that will allow you to choose a new one.
                </p>

                <!-- Session Status -->
                @if (session('status'))
                    <p class="text-green-600 text-sm text-center mb-3">{{ session('status') }}</p>
                @endif

                <!-- Email Address -->
                <input type="email" name="email" class="input" placeholder="Email" value="{{ old('email') }}" required
                    autofocus>
                @error('email')
                    <p style="color: red; font-size: 12px;">{{ $message }}</p>
                @enderror

                <!-- Submit Button -->
                <button type="submit" class="button sign-in">Email Password Reset Link</button>

                <!-- Footer Links -->
                <p class="footer mt-3">
                    <a href="{{ route('login') }}" class="link">Back to Login</a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>