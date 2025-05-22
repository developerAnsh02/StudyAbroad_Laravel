@extends('layouts.app')

@section('content')
<section class="university-section">
    <h1>Top University Courses</h1>

    <form id="filterForm">
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

        {{-- Apply Button --}}
        <button type="submit" id="applyBtn">Apply</button>
    </div>
</form>

    {{-- University Grid --}}
    <div id="universityGridContainer">
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
</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function fetchUpdatedFilters() {
        const country = $('#country').val();
        const courseLevel = $('#courseLevel').val();
        const tuitionRange = $('#tuitionRange').val();
        const department = $('#department').val();

        $.ajax({
            url: `/universities/${country}?courseLevel=${courseLevel}&tuitionRange=${tuitionRange}&department=${department}&filterUpdateOnly=1`,
            method: 'GET',
            dataType: 'json',
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            success: function (data) {
                // Update Course Levels
                const $courseSelect = $('#courseLevel');
                $courseSelect.html('<option value="all">All Levels</option>');
                data.courseLevels.forEach(level => {
                    $courseSelect.append(`<option value="${level.toLowerCase()}">${level}</option>`);
                });

                // Update Tuition Ranges
                const $tuitionSelect = $('#tuitionRange');
                $tuitionSelect.html('<option value="all">All Ranges</option>');
                data.tuitionRanges.forEach(range => {
                    $tuitionSelect.append(`<option value="${range}">$${range.replace('-', ' - $')}</option>`);
                });

                // Update Departments
                const $deptSelect = $('#department');
                $deptSelect.html('<option value="all">All Departments</option>');
                data.departments.forEach(dept => {
                    $deptSelect.append(`<option value="${dept}">${dept}</option>`);
                });

                // Keep selected values
                $courseSelect.val(courseLevel);
                $tuitionSelect.val(tuitionRange);
                $deptSelect.val(department);
            },
            error: function () {
                alert('Failed to update filters.');
            }
        });
    }

    // Update filters on change (but don't fetch grid)
    $('#country, #courseLevel, #tuitionRange').on('change', fetchUpdatedFilters);

    // Only fetch university grid on "Apply"
    $('#filterForm').on('submit', function (e) {
        e.preventDefault();

        const country = $('#country').val();
        const courseLevel = $('#courseLevel').val();
        const tuitionRange = $('#tuitionRange').val();
        const department = $('#department').val();

        const query = $.param({ courseLevel, tuitionRange, department });

        $.ajax({
            url: `/universities/${country}?${query}`,
            method: 'GET',
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            success: function (responseHtml) {
                window.location.href = `/universities/${country}?${query}`;
            },
            error: function () {
                alert('Failed to load universities.');
            }
        });
    });
</script>

@endsection

<!-- Card Styling  -->
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

<!-- Filters Styling  -->
<style>
  #filterForm {
    max-width: 900px;
    margin: 20px auto;
    padding: 15px;
    background: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 0 8px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
  }

  /* Flex container for filters */
  #filterForm .filters {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    align-items: flex-end;
    justify-content: space-between;
  }

  /* Each label and select group */
  #filterForm label {
    display: block;
    font-weight: 600;
    margin-bottom: 6px;
    font-size: 0.9rem;
    color: #333;
  }

  #filterForm select {
    width: 180px;
    padding: 6px 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
    background-color: white;
    transition: border-color 0.3s ease;
  }

  #filterForm select:focus {
    border-color: #18336c; /* Your theme color */
    outline: none;
  }

  /* Apply button styling */
  #filterForm button#applyBtn {
    padding: 10px 20px;
    background-color: #18336c; /* Your theme color */
    color: white;
    font-weight: 700;
    font-size: 1rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  #filterForm button#applyBtn:hover {
    background-color: #0f2350; /* Darker shade on hover */
  }

  /* Responsive tweaks */
  @media (max-width: 600px) {
    #filterForm .filters {
      flex-direction: column;
      gap: 15px;
    }

    #filterForm select {
      width: 100%;
    }

    #filterForm button#applyBtn {
      width: 100%;
      padding: 12px;
    }
  }
</style>