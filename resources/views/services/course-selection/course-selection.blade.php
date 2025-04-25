@extends('layouts.app')
@section('content')

    <section class="service-hero">
        <div class="service-hero-content">
            <h1 class="main-heading">The Ultimate Guide to Course Selection – Find Your Best Path!</h1>
            <p>Find the perfect course that sets you up for success and unlocks endless career opportunities!
            </p>
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


        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->

<section class="course-selection">
    <div class="container">
        <h2 class="title">Steps to Choosing the Right Course for You</h2>
        <div class="steps">
            <div class="step_s">
                <i class="fas fa-lightbulb"></i>
                <h3>Discover Your Passion</h3>
                <p>Discover what excites you and aligns with your career goals—your passions are the foundation for success.</p>
            </div>
            <div class="step_s">
                <i class="fas fa-university"></i>
                <h3>Research and Compare Options</h3>
                <p>Compare courses by researching international rankings, tuition, coursework, and future career opportunities.</p>
            </div>
            <div class="step_s">
                <i class="fas fa-user-graduate"></i>
                <h3>Seek Advice</h3>
                <p>Join experienced advisors for tailored advice and informed choices aligned with your goals.</p>
            </div>
        </div>
    </div>
</section>

@include('./components/stats')

@include('./components/services-components.trusted-partner')

@include('./components/services-components.trust')

@include('services.course-selection.scrollable')

@include('./components/cta-button')

@include('services.course-selection.faqs')

<style>
    /* Section Styling */
    .course-selection {
        background: #f9f9f9;
        padding: 50px 20px;
        text-align: center;
    }

    .steps {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 30px;
    }

    .step_s {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .step_s:hover {
        transform: translateY(-5px);
    }

    .step_s i {
        font-size: 40px;
        color: #f47c20;
        margin-bottom: 10px;
    }

    .step_s h3 {
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }

    .step_s p {
        font-size: 14px;
        color: #555;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .steps {
            flex-direction: column;
            align-items: center;
        }
    }
</style>



@endsection