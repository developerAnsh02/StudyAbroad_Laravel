@extends('layouts.app')
@section('content')

    <section class="service-hero">
        <div class="service-hero-content">
            <h1 class="main-heading">Mock Interview - Set and Ace Your Dream Work with Confidence</h1>
            <p>Boost your confidence and ace your student visa interview with expert mock sessions.
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
            <span class=tip>Enjoy free services from A to A – application to accommodation, ensuring a smooth visa process from start to finish</span>
        </div>

        <!-- Hero Image -->
        <div class="hero-form">
            @include('./components/registration-form')
        </div>
    </section>



    <style>
    .study-abroad-section {
        background-color: #f7f7f7;
        padding: 64px 0;
    }

    .study-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 32px;
    }

    .study-abroad-heading-wrapper {
        text-align: center;
        margin-bottom: 40px;
    }


    .study-abroad-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 32px;
    }

    @media (min-width: 768px) {
        .study-abroad-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 1024px) {
        .study-abroad-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    .study-abroad-card {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px -5px rgba(0, 0, 0, 0.1);
        padding: 24px;
        transition: box-shadow 0.3s ease-in-out;
    }

    .study-abroad-card:hover {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .study-abroad-card-header {
        display: flex;
        align-items: center;
        margin-bottom: 16px;
    }

    .study-abroad-card-icon {
        width: 32px;
        height: 32px;
        margin-right: 12px;
        fill: currentColor; /* Inherit color from the text */
    }

    .study-abroad-card-icon-indigo {
        color: #6366f1; /* Indigo 500 */
    }

    .study-abroad-card-icon-green {
        color: #34d399; /* Green 500 */
    }

    .study-abroad-card-icon-blue {
        color: #3b82f6; /* Blue 500 */
    }

    .study-abroad-card-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1e293b; /* Gray 800 */
    }

    .study-abroad-card-description {
        color: #4b5563; /* Gray 700 */
        line-height: 1.6;
    }

</style>

<section class="study-abroad-section">
    <div class="study-container">
        <div class="study-abroad-heading-wrapper">
            <h2>Unlock Your Global Potential</h2>
            <p>Embark on a transformative study abroad journey with expert guidance.</p>
        </div>

        <div class="study-abroad-grid">
            <div class="study-abroad-card">
                <div class="study-abroad-card-header">
                    <svg xmlns="http://www.w3.org/2000/svg" class="study-abroad-card-icon study-abroad-card-icon-indigo" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3>Understand Your Aspirations</h3>
                </div>
                <p>Our experts take the time to understand your academic background, career goals, and personal preferences to provide tailored advice.</p>
            </div>

            <div class="study-abroad-card">
                <div class="study-abroad-card-header">
                    <svg xmlns="http://www.w3.org/2000/svg" class="study-abroad-card-icon study-abroad-card-icon-green" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1m6 3h-1m0 0v-1a3 3 0 00-3-3H9a3 3 0 00-3 3v3a3 3 0 003 3h1m1-3a2 2 0 11-4 0m4 0h-1m-1 0v-1a2 2 0 10-2-2h-2a2 2 0 10-2 2v1m2 0h1m2 0a2 2 0 11-2-2h-2a2 2 0 11-2 2v1m2 0V2m0 0a2 2 0 10-2-2H3a2 2 0 10-2 2v19a2 2 0 102 2h10a2 2 0 102-2V16m-4-4h-2m-2 0h-2m-2 0h-2m-2 0h-2" />
                    </svg>
                    <h3>Expert Counselling & Recommendations</h3>
                </div>
                <p>Based on your profile, we provide personalized recommendations for courses, universities, and study destinations that align with your future objectives.</p>
            </div>

            <div class="study-abroad-card">
                <div class="study-abroad-card-header">
                    <svg xmlns="http://www.w3.org/2000/svg" class="study-abroad-card-icon study-abroad-card-icon-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <h3>Action Plan & Next Steps</h3>
                </div>
                <p>We guide you through the entire process, from admissions and visa applications to other essential steps, ensuring a smooth and successful journey.</p>
            </div>
        </div>
        <a href="#contact" class="cta-bttn">Get Started Today</a> 
    </div>
</section>

@include('./components/stats')

@include('./components/services-components.trust')

@include('./components/services-components.trusted-partner')

@include('./components/cta-button')


  


@endsection