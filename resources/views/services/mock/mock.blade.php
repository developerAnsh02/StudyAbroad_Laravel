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



    <section class="mock-interview-section ">
        <h2>Master Your Interview & Secure Your Success!
        </h2>
        <div class="mock-content dark-theme">
            <div class="mock-card ">
                <i class="fas fa-comments"></i>
                <h3 class="title-light">Personalized Coaching</h3>
                <p>Master the most frequent interview questions, best response tactics, and most important do's & don'ts from experts.
                </p>
            </div>
            <div class="mock-card">
                <i class="fas fa-user-check"></i>
                <h3 class="title-light">Practice with Mock Interviews</h3>
                <p>Respond to real-world interview questions to build confidence and provide answers.
                </p>
            </div>
            <div class="mock-card">
                <i class="fas fa-bullseye"></i>
                <h3 class="title-light">Expert Feedback & Refining</h3>
                <p>Receive personalized feedback, enhance weak points, and refine your answers.
                </p>
            </div>
            <div class="mock-card">
                <i class="fas fa-bullseye"></i>
                <h3 class="title-light">Build Confidence & Impression</h3>
                <p>Excel at communication, body language, and presentation to create a lasting impression.</p>
            </div>
        </div>
    </section>

@include('./components/stats')

@include('./components/services-components.trusted-partner')

@include('./components/services-components.trust')

@include('services.mock.scrollable')

@include('./components/cta-button')

@include('services.mock.faqs')

<style>
        .mock-interview-section {
            max-width: 90%;
            margin: 40px auto;
            padding: 40px;
            border-radius: 12px;
            text-align: center;
        }

        .mock-heading {
            font-size: 30px;
            font-weight: bold;
            color: #222;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        /* Card Container */
        .mock-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding-top: 20px;
        }

        .mock-card {
            background: #333;
            color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }

        .mock-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .mock-card i {
            font-size: 40px;
            margin-bottom: 12px;
            transition: color 0.3s ease-in-out;
        }

        .mock-card:hover i {
            color:#f47c20;
        }

        .mock-card h3 {
            font-size: 22px;
            margin-bottom: 10px;
        }

        .mock-card p {
            font-size: 16px;
            opacity: 0.9;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .mock-content {
                grid-template-columns: 1fr;
            }

            .mock-interview-section {
                padding: 20px;
            }
        }
</style>


@endsection