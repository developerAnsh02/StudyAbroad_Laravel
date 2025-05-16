@extends('layouts.app')


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
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
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
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
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
            width: 80px;
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
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
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

        .no-data {
            font-size: 1.1rem;
            color: #777;
            padding: 2rem;
            grid-column: 1 / -1;
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

        @media (max-width: 600px) {
            .grid {
                grid-template-columns: 1fr;
                padding: 1rem;
            }

            .university-section {
                padding: 80px 10px 40px 10px;
            }

            .card-content h3 {
                font-size: 1.1rem;
            }

            .info {
                font-size: 0.85rem;
            }
        }
    </style>


@section('content')
    <section class="university-section">
        <h1>Top University Courses</h1>

        <div class="grid">
            @forelse ($universities as $index => $uni)
                <div class="card-uni" style="animation-delay: {{ min($index * 0.1, 1) }}s;">
                    <img class="uni-img" src="{{ asset($uni['coursesWebsite']['image'] ?? 'images/default-university.jpg') }}" alt="{{ $uni['title'] ?? 'University Course' }} Image">

                    <div class="card-content">
                        <div class="university-header">
                            <img class="university-logo" src="{{ asset($uni['university']['image'] ?? 'images/university-logos/default-logo.png') }}" alt="{{ $uni['university']['name'] ?? 'University' }} Logo">
                            <h3 title="{{ $uni['university']['name'] ?? 'Unnamed University' }}">{{ trim($uni['university']['name'] ?? 'Unnamed University') }}</h3>
                        </div>

                        <div class="info"><i class="fas fa-book-open"></i> {{ trim($uni['title'] ?? 'N/A') }}</div>
                        <div class="info"><i class="fas fa-user-graduate"></i> {{ $uni['coursesWebsite']['courseLevel'] ?? 'N/A' }} | Level {{ $uni['coursesWebsite']['courseLevelId'] ?? 'N/A' }}</div>
                        <div class="info"><i class="fas fa-clock"></i> {{ $uni['coursesWebsite']['duration'] ?? 'N/A' }}</div>
                        <div class="info"><i class="fas fa-map-marker-alt"></i> {{ $uni['coursesWebsite']['location'] ?? 'Unknown' }}</div>
                        <div class="info"><i class="fas fa-file-invoice-dollar"></i> Application Fees: {{ $uni['university']['currencySymbol'] ?? '$' }}{{ $uni['coursesWebsite']['applicationFees'] ?? 'N/A' }}</div>
                        <div class="info"><i class="fas fa-money-bill-wave"></i> Tuition Fees:
                            <span class="fee">
                                {{ $uni['university']['currencySymbol'] ?? '$' }}{{ number_format($uni['coursesWebsite']['tuitionFees'] ?? 0) }}
                                {{ $uni['university']['currencyCode'] ?? 'USD' }}
                            </span>
                        </div>
                    </div>
                </div>
            @empty
                <div class="no-data">
                    No university courses found.
                </div>
            @endforelse
        </div>

    </section>
@endsection