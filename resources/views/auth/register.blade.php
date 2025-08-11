<x-guest-layout>
    <style>
        {!! file_get_contents(public_path('css/custom-auth.css')) !!}
    </style>

    <div class="container">
        <div class="login-box">
            <form class="form" method="POST" action="{{ route('register') }}">
                @csrf

                <div style="height: 60px; width: 190px"><img src="/images/logo-wts.png" alt=""></div>
                <span class="header">Create Account</span>

                <!-- Name -->
                <input type="text" name="name" class="input" placeholder="Name" value="{{ old('name') }}" required
                    autofocus>
                @error('name')
                    <p style="color: red; font-size: 12px;">{{ $message }}</p>
                @enderror

                <!-- Email -->
                <input type="email" name="email" class="input" placeholder="Email" value="{{ old('email') }}" required autocomplete="off">
                @error('email')
                    <p style="color: red; font-size: 12px;">{{ $message }}</p>
                @enderror

                <!-- Password -->
                <input type="password" name="password" class="input" placeholder="Password" required>
                @error('password')
                    <p style="color: red; font-size: 12px;">{{ $message }}</p>
                @enderror

                <!-- Confirm Password -->
                <input type="password" name="password_confirmation" class="input" placeholder="Confirm Password"
                    required autocomplete="new-password">
                @error('password_confirmation')
                    <p style="color: red; font-size: 12px;">{{ $message }}</p>
                @enderror

                <!-- Submit Button -->
                <button type="submit" class="button sign-in">Register</button>

                <!-- Footer Links -->
                <p class="footer">
                    Already have an account?
                    <a href="{{ route('login') }}" class="link">Log in here</a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>