@extends('layouts.app') {{-- Use your main layout --}}

@section('content')
<style>
    .university-section {
        padding: 120px 20px 60px 20px;
        background: #f7f7f7;
        text-align: center;
    }

    .university-section h1 {
        color: #333;
        margin-bottom: 20px;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 1.5rem;
        padding: 2rem;
        background: #f9f9f9;
    }

    .card-uni {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        animation: fadeInUp 0.5s ease forwards;
        transform: translateY(20px);
        opacity: 0;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-uni:hover {
        transform: translateY(-10px);
        /* translate up on hover */
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    @keyframes fadeInUp {
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .card-uni .uni-img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }

    .university-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .university-logo {
        width:80px;
        height: 80px;
        object-fit: contain;
        border-radius: 6px;
        background: #fff;
    }

    .card-content {
        padding: 1.2rem;
    }

    .card-content h3 {
        margin-bottom: 0.75rem;
        font-size: 1.25rem;
        color: #333;
        font-weight: bold;
    }

    .info {
        font-size: 0.95rem;
        color: #555;
        margin: 0.4rem 0;
        display: flex;
        align-items: center;
    }

    .info i {
        margin-right: 0.5rem;
        color: #f39c12;
        min-width: 20px;
        text-align: center;
    }

    .fee {
        color: #27ae60;
        font-weight: 600;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<section class="university-section">

    <h1>Top University Courses</h1>

    <div class="grid">
        @foreach ($universities as $index => $uni)
        <div class="card-uni" style="animation-delay: {{ 0.1 * $index }}s;">

            <img class="uni-img" src="{{ $uni['image'] ?? '' }}" alt="{{ $uni['university_name'] }}">
            <div class="card-content">
                <div class="university-header">
                    <img class="university-logo" src="{{ $uni['logo'] ?? '/images/university-logos/default-logo.png' }}" alt="Logo">
                    <h3>{{ $uni['university_name'] }}</h3>
                </div>

                <div class="info"><i class="fas fa-book-open"></i> {{ $uni['course'] }}</div>
                <div class="info"><i class="fas fa-user-graduate"></i> {{ $uni['course_type'] }} | Level {{ $uni['course_level_id'] }}</div>
                <div class="info"><i class="fas fa-clock"></i> {{ $uni['course_duration'] }}</div>
                <div class="info"><i class="fas fa-map-marker-alt"></i> {{ $uni['location'] }}</div>
                <div class="info"><i class="fas fa-file-invoice-dollar"></i> Application Fees : {{ $uni['application_fees'] ?? 'N/A' }}</div>
                <div class="info"><i class="fas fa-money-bill-wave"></i> Tuition Fees : &nbsp; <span class="fee">{{ $uni['currency_symbol'] }}{{ number_format($uni['tuition_fees']) }} {{ $uni['currency_code'] }}</span></div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection