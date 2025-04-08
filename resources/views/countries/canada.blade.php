@extends('layouts.app')
@section('content')

    <section class="service-hero">
        <div class="service-hero-content">
            <h1 class="main-heading">Study in the Canada: Your Ultimate Guide to
                Admissions, Visas & Scholarships</h1>
            <!-- <p>Boost your confidence and ace your student visa interview with expert mock sessions.
                </p> -->
            <!-- <a href="#get-started" class="btn">Select Your Course</a> -->

            <!-- Features Section -->
            <div class="features">
                <div class="feature">
                    <i class="fa-solid fa-check-circle"></i>
                    <strong>Accurate and Up-to-Date Visa Information
                    </strong>
                </div>
                <div class="feature">
                    <i class="fa-solid fa-check-circle"></i>
                    <strong>Fast and Hassle-Free Application Process
                    </strong>
                </div>
                <div class="feature">
                    <i class="fa-solid fa-check-circle"></i>
                    <strong>24/7 Expert Guidance and Support
                    </strong>
                </div>
                <div class="feature">
                    <i class="fa-solid fa-check-circle"></i>
                    <strong>Updates on visa policies and requirements</strong>
                </div>
            </div>
            <span class=tip>Enjoy free services from A to A – application to accommodation, ensuring a smooth visa process
                from start to finish</span>
        </div>

        <!-- Hero Image -->
        <div class="hero-form">
            @include('./components/registration-form')
        </div>
    </section>

    <!-- sub hero section -->
    <section class="sub-hero">
        <div class="sub-hero-content">
            <div class="sub-hero-text">
                <h2>Study in Canada</h2>
                <p>Explore top universities, flexible programs, and incredible opportunities for international students.</p>
            </div>
            <div class="sub-hero-img">
                <img src="/images/uk-bg.png" alt="Study in uk">
            </div>
        </div>
    </section>

    <style>
    .sub-hero {
        background-color: var(--bg-light);
        padding: 80px 5%;
    }

    .sub-hero-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 2rem;
    }

    .sub-hero-text {
        flex: 1 1 50%;
    }

    .sub-hero-text h2 {
        font-size: 3rem;
        font-weight: 700;
        color: var(--primary-dark);
        margin-bottom: 1rem;
    }

    .sub-hero-text p {
        font-size: 1.2rem;
        color: var(--text-dark);
        max-width: 550px;
        line-height: 1.6;
    }

    .sub-hero-img {
        flex: 1 1 40%;
        text-align: center;
    }

    .sub-hero-img img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        object-fit: cover;
    }

    /* Tablet Responsive */
    @media (max-width: 768px) {
        .sub-hero-content {
            flex-direction: column;
            text-align: center;
        }

        .sub-hero-text,
        .sub-hero-img {
            flex: 1 1 100%;
        }

        .sub-hero-text h2 {
            font-size: 2rem;
        }

        .sub-hero-text p {
            font-size: 1rem;
        }
    }

    /* Mobile Responsive */
    @media (max-width: 480px) {
        .sub-hero {
            padding: 60px 20px;
        }

        .sub-hero-text h2 {
            font-size: 1.6rem;
        }

        .sub-hero-text p {
            font-size: 0.95rem;
        }
    }
</style>


<!-- choose us section -->
@php
    $sectionTitle = '';
    $sectionDescription = '';

    $cards = [
        ['title' => '1. ', 'desc' => ''],
        ['title' => '2. ', 'desc' => ''],
        ['title' => '3. ', 'desc' => ''],
        ['title' => '4. ', 'desc' => ''],
        ['title' => '5. ', 'desc' => ''],
        ['title' => '6. ', 'desc' => ''],
    ];
@endphp
<x-choose-us 
    :section-title="$sectionTitle" 
    :section-description="$sectionDescription" 
    :cards="$cards" 
/>

    <!-- universities section -->
    @php
        $universities = [
            [
                'name' => 'University of Oxford',
                'logo' => 'images/universities/oxford.png',
                'course' => 'Science & Medicine',
                'ranking' => 1
            ],
            [
                'name' => 'University of Cambridge',
                'logo' => 'images/universities/cambridge-logo.png',
                'course' => 'Engineering & Technology',
                'ranking' => 2
            ],
            [
                'name' => 'Imperial College London',
                'logo' => 'images/universities/imperial.png',
                'course' => 'Engineering & Physical Sciences',
                'ranking' => 6
            ],
            [
                'name' => 'London School of Economics and Political Science (LSE)',
                'logo' => 'images/universities/lse.png',
                'course' => 'Economics & Political Science',
                'ranking' => 45
            ],
            [
                'name' => 'University of Edinburgh',
                'logo' => 'images/universities/edinburgh.png',
                'course' => 'Arts & Humanities',
                'ranking' => 22
            ],
            [
                'name' => 'King’s College London',
                'logo' => 'images/universities/kings.png',
                'course' => 'Health & Life Sciences',
                'ranking' => 40
            ],
            [
                'name' => 'University of Manchester',
                'logo' => 'images/universities/manchester.png',
                'course' => 'Business & Law',
                'ranking' => 32
            ],
            [
                'name' => 'University of Bristol',
                'logo' => 'images/universities/bristol.png',
                'course' => 'Science & Engineering',
                'ranking' => 61
            ],
            [
                'name' => 'University of Warwick',
                'logo' => 'images/universities/warwick.png',
                'course' => 'Mathematics & Economics',
                'ranking' => 64
            ],
            [
                'name' => 'University of Glasgow',
                'logo' => 'images/universities/glasgow.png',
                'course' => 'Medicine & Arts',
                'ranking' => 73
            ]
        ];
    @endphp

    <x-universities :universities="$universities" />

    <!-- course section  -->
    @php
        $courses = [
            ['title' => 'Business and Management', 'image' => 'images/courses/business.jpg'],
            ['title' => 'Computer Science and IT', 'image' => 'images/courses/computer.jpg'],
            ['title' => 'Engineering (Mechanical, Civil, Electrical)', 'image' => 'images/courses/engineering.jpg'],
            ['title' => 'Law', 'image' => 'images/courses/law.jpg'],
            ['title' => 'Medicine and Healthcare', 'image' => 'images/courses/medicine.jpg'],
            ['title' => 'Finance and Accounting', 'image' => 'images/courses/finance.jpg'],
            ['title' => 'AI and Data Science', 'image' => 'images/courses/ai.jpg'],
            ['title' => 'Pharmaceutical Sciences', 'image' => 'images/courses/pharma.jpg'],
            ['title' => 'Hospitality and Tourism Management', 'image' => 'images/courses/hospitality.jpg'],
            ['title' => 'Environmental Science', 'image' => 'images/courses/environment.jpg'],
        ];
    @endphp

    <x-courses :courses="$courses" />


    <!-- cost of living section  -->
    @php
        $tuitionFees = [
            ['label' => 'Undergraduate (BA/BSc)', 'value' => '£12,000 – £30,000'],
            ['label' => 'Postgraduate (MA/MSc)', 'value' => '£14,000 – £35,000'],
            ['label' => 'MBA', 'value' => '£20,000 – £50,000'],
            ['label' => 'Medicine', 'value' => '£30,000 – £60,000'],
        ];
        $description = "Cost for study and living varies with university, courses, and city in the UK. Below is an approximate breakdown of tuition fees for international students:";
    @endphp
    <x-cost-of-living :tuitionFees="$tuitionFees" :description="$description" />



    @include('./components/stats')

    @include('./components/services-components.trust')

    @include('./components/cta-button')

@endsection