@extends('layouts.app')

@section('content')
<section class="university-section">
    <h1>Top University Courses</h1>

<div class="container">
<form id="filterForm" class="modern-filter">
    <div class="filter-grid">
    {{-- Country --}}
    <div class="filter-group">
        <label for="country">Country</label>
        <select id="country" name="country">
            @foreach ($availableCountries as $country)
                <option value="{{ $country }}" {{ $country == $selectedCountry ? 'selected' : '' }}>
                    {{ ucfirst($country) }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Course Level --}}
    <div class="filter-group">
        <label for="courseLevel">Course Level</label>
        <select id="courseLevel" name="courseLevel">
            <option value="all">All Levels</option>
            @foreach ($availableCourseLevels as $level)
                <option value="{{ strtolower($level) }}" {{ strtolower($level) == strtolower($selectedCourseLevel) ? 'selected' : '' }}>
                    {{ ucfirst($level) }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Tuition Range --}}
    <div class="filter-group">
        <label for="tuitionRange">Tuition Range</label>
        <select id="tuitionRange" name="tuitionRange">
            <option value="all">All Ranges</option>
            @foreach ($availableTuitionRanges as $range)
                <option value="{{ $range }}" {{ $range == $selectedTuitionRange ? 'selected' : '' }}>
                    {{ $currencySymbol }}{{ str_replace('-', ' - ' . $currencySymbol, $range) }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Department --}}
    <div class="filter-group">
        <label for="department">Department</label>
        <select name="department" id="department">
            <option value="all">All Departments</option>
            @foreach ($availableDepartments as $dept)
                <option value="{{ $dept }}" {{ request('department') == $dept ? 'selected' : '' }}>
                    {{ $dept }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Button --}}
    <div class="filter-group full-width">
        <button type="submit" id="applyBtn">Apply Filters</button>
    </div>
    </div>
</form>



{{-- University Grid --}}
<div id="universityGridContainer">
    <div class="grid">
    @forelse ($universities as $index => $uni)
        <div class="card-uni" style="animation-delay: {{ min($index * 0.1, 1) }}s;">
        <img class="uni-img" 
            src="{{ !empty($uni['coursesWebsite']['image']) ? asset($uni['coursesWebsite']['image']) : asset('images/university-images/harvard-university.webp') }}" 
            alt="{{ $uni['title'] ?? 'University Course' }} Image">


            <div class="card-content">
                <div class="university-header">
                <img class="university-logo" 
                    src="{{ !empty($uni['university']['image']) ? asset($uni['university']['image']) : asset('images/universities/glasgow.png') }}" 
                    alt="{{ $uni['university']['name'] ?? 'University' }} Logo">
                    <h4 title="{{ $uni['university']['name'] ?? 'Unnamed University' }}">{{ trim($uni['university']['name'] ?? 'Unnamed University') }}</h4>
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
            url: `/universities?country=${country}&courseLevel=${courseLevel}&tuitionRange=${tuitionRange}&department=${department}&filterUpdateOnly=1`,
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
                    const label = range.replace(/-/g, ' - ' + data.currencySymbol);
                    $tuitionSelect.append(`<option value="${range}">${data.currencySymbol}${label}</option>`);
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

        const query = $.param({ country, courseLevel, tuitionRange, department });

        $.ajax({
            url: `/universities?${query}`,
            method: 'GET',
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            success: function (responseHtml) {
                window.location.href = `/universities?${query}`;
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
        .navbar {
            width: 98%;
            left: 1%;
            top: 20px;
            background-color: #2b2b2b;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            z-index: 100;
        }
        .university-section {
            padding: 130px 20px 60px 20px;
            background: #f7f7f7;
            text-align: center;
        }

        .university-section h1 {
            color: orange;
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

        .card-content h4 {
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
                padding: 120px 10px 40px 10px;
            }

            .card-content h4 {
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
    width: 20px;
    height: 20px;
    color: orange;
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
    color: orange;
    text-decoration: none;
    }

    .pagination nav a {
      transition: transform 0.3s ease-in-out, text-decoration 0.3s;
      transform: scale(1);
    }

    .pagination nav a:hover {
      text-decoration: underline;
      transform: scale(1.25);
    }

    .pagination nav span {
    /* background-color: #18336c; */
      color: black;
      font-weight: bold;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
    }

    .pagination nav p {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      padding: 0;
      color: black;
    }

    .pagination nav span[aria-current='page'] {
    background-color: orange;
    padding:1px;
    border-radius: 50%;
    color: white;
    font-weight: bold;
    }

</style>

<!-- Filters Styling  -->
<style>
    #filterForm.modern-filter {
  background: #2b2b2b;
  border-radius: 12px;
  border: 2px solid var(--primary-dark);
  margin: 2rem;
  padding: 30px;
  box-shadow: 0 0 15px rgba(255, 204, 0, 0.1);
  margin-bottom: 50px;
    }

    .filter-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 20px;
    }

    .filter-group label {
  display: block;
  color: var(--primary-color);
  font-weight: 600;
  margin-bottom: 6px;
    }

    .filter-group select {
      width: 100%;
      padding: 10px 12px;
      background-color: #1c1c1c;
      color: var(--text-light);
      border: 1px solid var(--primary-dark);
      border-radius: 6px;
      outline: none;
      transition: border-color 0.3s ease;
    }

    .filter-group select:focus {
      border: 2px solid var(--primary-color);
    }

    .full-width {
      grid-column: span 4;
      display: flex;
      align-items: end;
      justify-content: center;
    }

    #applyBtn {
  background-color: var(--primary-dark);
  color: white;
  font-weight: 700;
  padding: 12px 30px;
  font-size: 1rem;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s ease;
    }

    /* Responsive tweak */
    @media (max-width: 970px) {
    #filterForm .filter-group.full-width {
        grid-column: span 1;
    }

    #filterForm.modern-filter{
        margin: 1rem;
    }

    }

    @media (max-width: 335px) {
        #filterForm.modern-filter{
        margin: 0.5rem;
        padding: 30px 20px;
    }
    }

</style>

<!-- <style>
    .university-section {
  padding-top: 100px;
  background-color: var(--bg-dark);
  color: var(--text-dark);
    }

    .university-section .container {
  padding: 0 20px;
  max-width: 1200px;
  margin: 0 auto;
    }

    /* Section Title */
    .university-section h1 {
  text-align: center;
  color: var(--primary-color);
  margin-bottom: 40px;
  font-weight: 700;
    }

    /* Filter Form Grid */
    #filterForm.modern-filter {
  background: #2b2b2b;
  border-radius: 12px;
  border: 2px solid var(--primary-dark);
  padding: 30px;
  box-shadow: 0 0 15px rgba(255, 204, 0, 0.1);
  margin-bottom: 50px;
    }

    .filter-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 20px;
    }

    .filter-group label {
  display: block;
  color: var(--primary-color);
  font-weight: 600;
  margin-bottom: 6px;
    }

    .filter-group select {
  width: 100%;
  padding: 10px 12px;
  background-color: #1c1c1c;
  color: var(--text-light);
  border: 1px solid var(--primary-dark);
  border-radius: 6px;
  outline: none;
  transition: border-color 0.3s ease;
    }

    .filter-group select:focus {
  border-color: var(--primary-color);
    }

    .full-width {
  grid-column: span 4;
  text-align: center;
    }

    #applyBtn {
  background-color: var(--primary-dark);
  color: white;
  font-weight: 700;
  padding: 12px 30px;
  font-size: 1rem;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s ease;
    }


    /* University Cards Grid */
    .grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
    }

    .card-uni {
  background-color: #1a1a1a;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 0 15px rgba(255, 204, 0, 0.1);
  transition: transform 0.3s ease;
  animation: fadeInUp 0.4s ease forwards;
  opacity: 0;
    }

    .card-uni:hover {
  transform: translateY(-6px);
  box-shadow: 0 0 24px rgb(255, 204, 0);
    }

    @keyframes fadeInUp {
  from {
    transform: translateY(30px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
    }

    .uni-img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  border-bottom: 3px solid var(--primary-color);
    }

    .card-content {
  padding: 16px 20px;
  color: var(--text-light);
    }

    .university-header {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 12px;
    }

    .university-logo {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  object-fit: contain;
  border: 2px solid var(--primary-color);
    }

    .card-content h4 {
  color: var(--primary-color);
  margin: 0;
  
    }

    .info {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 6px;
  color: var(--text-light);
    }

    .info i {
  color: var(--primary-dark);
    }

    .fee {
  color: var(--primary-color);
  font-weight: bold;
    }

    /* No Results */
    .no-data {
  grid-column: 3;
  text-align: center;
  font-size: 1.2rem;
  color: var(--text-light);
    }

    /* Responsive */
    @media (max-width: 900px) {
  .grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .full-width {
    grid-column: span 2;
  }
    }

    @media (max-width: 600px) {
  .grid {
    grid-template-columns: 1fr;
  }

  .full-width {
    grid-column: span 1;
  }

  .university-section h1 {
    font-size: 2rem;
  }
    }
</style> -->