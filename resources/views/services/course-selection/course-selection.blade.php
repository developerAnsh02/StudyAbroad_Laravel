@extends('layouts.app')
@section('content')

    <section class="sop-hero">
        <div class="sop-hero-content">
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
        <h2 class="title">Procedure for Choosing the Most Suitable Course</h2>
        <div class="steps">
            <div class="step_s">
                <i class="fas fa-lightbulb"></i>
                <h3>Discover Your Passion</h3>
                <p>Identify what you are interested in and is connected to your future profession.</p>
            </div>
            <div class="step_s">
                <i class="fas fa-university"></i>
                <h3>Compare Universities & Programs</h3>
                <p>Compare courses based on rankings, fees, and employability.</p>
            </div>
            <div class="step_s">
                <i class="fas fa-user-graduate"></i>
                <h3>Get Expert Guidance</h3>
                <p>Seek experts' advice to make the best decision about your future.</p>
            </div>
        </div>
    </div>
</section>

@include('./components/stats')

@include('./components/services-components.trust')

@include('./components/testimonials')

@include('services.course-selection.scrollable')

@include('./components/cta-button')

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


    <style>
        

        .sop-hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #1a1a1a;

            padding: 120px 10% 80px 10%;
        }

        .main-heading {
            color: white;
        }

        /* Left Side - Text */
        .sop-hero-content {
            width: 50%;
        }

        .sop-hero-content h1 {
            font-size: 40px;
            font-weight: bold;
            line-height: 1.4;
        }

        .sop-hero-content p {
            font-size: 18px;
            margin: 20px 0;
            color: #d1d1d1;
            line-height: 1.4;
            font-weight: 300;
        }

        /* Call-to-Action Button */
        .btn {
            display: inline-block;
            background-color: #f4b400;
            color: #1a1a1a;
            padding: 12px 24px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #e0a500;
        }

        /* Features Section */
        .features {
            display: flex;
            flex-wrap: wrap;
            margin: 20px 0;
        }

        .feature {
            display: flex;
            align-items: center;
            margin-right: 20px;
            margin-bottom: 10px;
        }

        .feature i {
            width: 20px;
            margin-right: 10px;
            color: white;
        }

        /* Right Side - Image */
        .hero-image img {
            width: 500px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        /* Responsive Design */
        /* Responsive Design */
        @media (max-width: 1200px) {
            .sop-hero {
                padding: 100px 8%;
            }

            .sop-hero-content h1 {
                font-size: 36px;
            }

            .sop-hero-content p {
                font-size: 17px;
            }

            .btn {
                font-size: 17px;
                padding: 12px 22px;
            }
        }

        @media (max-width: 992px) {
            .sop-hero {
                flex-direction: column;
                text-align: center;
                padding: 80px 6%;
            }

            .sop-hero-content,
            .hero-form {
                width: 100%;
                max-width: 100%;
            }

            .sop-hero-content h1 {
                font-size: 32px;
            }

            .sop-hero-content p {
                font-size: 16px;
            }

            .features {
                justify-content: center;
                flex-direction: column;
                align-items: center;
            }

            .feature {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .sop-hero {
                padding: 100px 5% 60px 5%;
            }

            .sop-hero-content h1 {
                font-size: 28px;
            }

            .tip {
                display: none;
            }

            .feature strong {
                font-size: .6rem;
            }

            .sop-hero-content p {
                font-size: 15px;
            }

            .btn {
                padding: 10px 20px;
                font-size: 15px;
            }

            .feature {
                text-align: center;
            }

            .feature i {
                margin-bottom: 5px;
            }
        }

        @media (max-width: 576px) {
            .sop-hero {
                padding: 90px 5% 50px 5%;
            }

            .sop-hero-content h1 {
                font-size: 24px;
            }

            .sop-hero-content p {
                font-size: 14px;
            }

            .btn {
                font-size: 14px;
                padding: 8px 18px;
            }
        }

        @media (max-width: 400px) {
            .sop-hero {
                padding: 80px 4% 40px 4%;
            }

            .sop-hero-content h1 {
                font-size: 22px;
            }

            .sop-hero-content p {
                font-size: 13px;
            }

            .btn {
                font-size: 13px;
                padding: 8px 16px;
            }
        }
    </style>


@endsection