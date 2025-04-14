@extends('layouts.app')

@section('content')
    <section class="error-page">
        <div class="error-container">
            <h1 class="error-code">404</h1>
            <h2 class="error-message">Oops! Page Not Found</h2>
            <p class="error-description">The page you are looking for doesn’t exist or has been removed.</p>
            <a href="{{ url('/') }}" class="btn-back-home">Back to Homepage</a>
        </div>
        <div class="hero-form">
            @include('./components/registration-form')
        </div>
    </section>

   
        
@endsection
