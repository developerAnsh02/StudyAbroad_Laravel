@extends('layouts.app')

@section('content')
<section class="university-section">
    <h1>Top University Courses</h1>

    <form method="GET">
        <div class="filters">
            {{-- Country Dropdown --}}
            <label for="country">Select Country:</label>
            <select id="country" name="country">
                @foreach ($availableCountries as $country)
                    <option value="{{ $country }}" {{ $country == $selectedCountry ? 'selected' : '' }}>
                        {{ ucfirst($country) }}
                    </option>
                @endforeach
            </select>

            {{-- Course Level Dropdown --}}
            <label for="courseLevel">Select Course Level:</label>
            <select id="courseLevel" name="courseLevel">
                <option value="all">All Levels</option>
                @foreach ($availableCourseLevels as $level)
                    <option value="{{ strtolower($level) }}" {{ strtolower($level) == strtolower($selectedCourseLevel) ? 'selected' : '' }}>
                        {{ ucfirst($level) }}
                    </option>
                @endforeach
            </select>

            {{-- Tuition Fee Range Dropdown --}}
            <label for="tuitionRange">Select Tuition Range:</label>
            <select id="tuitionRange" name="tuitionRange">
                <option value="all">All Ranges</option>
                @foreach ($availableTuitionRanges as $range)
                    <option value="{{ $range }}" {{ $range == $selectedTuitionRange ? 'selected' : '' }}>
                        ${{ str_replace('-', ' - $', $range) }}
                    </option>
                @endforeach
            </select>

            {{-- Department Dropdown --}}
<label for="department">Select Department:</label>
<select name="department" id="department">
    <option value="all">All Departments</option>
    @foreach ($availableDepartments as $dept)
        <option value="{{ $dept }}" {{ request('department') == $dept ? 'selected' : '' }}>{{ $dept }}</option>
    @endforeach
</select>
        </div>
    </form>

    {{-- University Grid --}}
    <div class="grid">
        @forelse ($universities as $index => $uni)
            <div class="card-uni" style="animation-delay: {{ min($index * 0.1, 1) }}s;">
                <img class="uni-img" src="{{ $uni['coursesWebsite']['image'] ?? asset('images/default-university.jpg') }}" alt="{{ $uni['title'] ?? 'University Course' }} Image">

                <div class="card-content">
                    <div class="university-header">
                        <img class="university-logo" src="{{ $uni['university']['image'] ?: asset('images/university-logos/default-logo.png') }}" alt="{{ $uni['university']['name'] ?? 'University' }} Logo">
                        <h3 title="{{ $uni['university']['name'] ?? 'Unnamed University' }}">{{ trim($uni['university']['name'] ?? 'Unnamed University') }}</h3>
                    </div>

                    <div class="info"><i class="fas fa-book-open"></i> {{ trim($uni['title'] ?? 'N/A') }}</div>
                    <div class="info"><i class="fas fa-user-graduate"></i> {{ $uni['coursesWebsite']['courseLevel'] ?? 'N/A' }}</div>
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
            <div class="no-data">No university courses found.</div>
        @endforelse
    </div>

    <div class="pagination">
        {{ $universities->links() }}
    </div>
</section>

<script>
    // On change, navigate to updated URL
    const selects = ['country', 'courseLevel', 'tuitionRange', 'department'];

selects.forEach(id => {
    document.getElementById(id).addEventListener('change', () => {
        const country = document.getElementById('country').value;
        const level = document.getElementById('courseLevel').value;
        const fee = document.getElementById('tuitionRange').value;
        const department = document.getElementById('department').value;

        let url = `/universities/${country}`;
        if(level !== 'all') url += `/${level}`;
        if(fee !== 'all') {
            if(level === 'all') url += `/all`;
            url += `/${fee}`;
        }

        // Append department as query parameter if not 'all'
        if(department && department !== 'all') {
            url += `?department=${encodeURIComponent(department)}`;
        }

        window.location.href = url;
    });
});

</script>
@endsection


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

<!-- Pagination styling  -->

<style>
    .pagination {
    display: flex;
    justify-content: center;
    margin-top: 2rem;
}

.pagination svg {
    width: 16px;
    height: 16px;
}

.pagination nav > div:first-child {
    display: none;
}

.pagination nav {
    display: flex;
    justify-content: center;
}

.pagination nav a,
.pagination nav span {
    margin: 0 5px;
    padding: 6px;
    color: black;
    text-decoration: none;
}

.pagination nav span {
    /* background-color: #18336c; */
    color: black;
    font-weight: bold;
}

.pagination nav span[aria-current='page'] {
    background-color: orange;
    border-radius: 50%;
    color: white;
    font-weight: bold;
}

</style>