@extends('layouts.app')
@section('content')

    <section class="service-hero">
        <div class="service-hero-content">
            <h1 class="main-heading">Education Loan Assistance for Your Study Abroad Dream</h1>
            <p>Expert help to fund your study abroad with the right loan.
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

    <!-- why choose us  -->

    <section class="choose-us">
        <h2 class="title">Why Choose Us for <span>Education Loan</span> Guidance?</h2>
        <p class="description">At WTS Visa Consultancy, we go beyond basic loan assistance by providing expert, personalized guidance throughout the process. Our in-depth knowledge, reliable network and student first approach has helped hundreds of students get funded. Here’s why we’re the preferred choice for education loan support.</p>

        <div class="choose-container">
            <div class="choose-card">
                <i class="fas fa-file-alt"></i>
                <h3>Education Loan Expertise</h3>
                <p>Our team is updated with the latest bank policies, government schemes and lender criteria. We know what each lender looks for and guide you accordingly. Whether you need a secured or unsecured loan, we match you with the best options for an education loan for international students based on your academic profile, destination country and financial background.</p>
            </div>
            
            <div class="choose-card">
                <i class="fas fa-thumbs-up"></i>
                <h3>Fast and Transparent Process</h3>
                <p>We make the loan process simple and time efficient with clear communication and structured steps. From document preparation to follow ups with the bank, everything is transparent. You’re always in the loop and there are no hidden conditions – just a smooth and reliable process that gets you results without delays.</p>
            </div>

            <div class="choose-card">
                <i class="fas fa-clock"></i>
                <h3>Trusted by Students across India</h3>
                <p>WTS Visa Consultancy has earned the trust of students and families across India through consistent success and genuine support. Our students have got loans from top banks for leading universities worldwide. With hundreds of positive abroad education loan without collateral experiences and growing referrals, we are proud to be a name students recommend.</p>
            </div>

        </div>
    </section>
    <style>

/* Section Styling */
.choose-us {
    text-align: center;
    padding: 60px 20px;
    background-color: #fff;
}



.description {
    font-size: 1.2rem;
    color: #999;
    margin-bottom: 40px;
    opacity: 0;
    animation: fadeInUp 1s ease forwards 0.3s;
}

/* Container */
.choose-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    max-width: 1000px;
    margin: 0 auto;
}

/* Cards */
.choose-card {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    opacity: 0;
    animation: fadeInUp 1s ease forwards 0.5s;
}

.choose-card:hover {
    transform: translateY(-10px);
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
}

/* Icons */
.choose-card i {
    font-size: 2.5rem;
    color: #ffcc00;
    margin-bottom: 15px;
}

/* Title */
.choose-card h3 {
    font-size: 1.5rem;
    color: #222;
    margin-bottom: 10px;
}

/* Description */
.choose-card p {
    font-size: 1rem;
    color: #555;
}

/* Fade-In Animation */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

    </style>



@include('./components/stats')

@include('./components/services-components.trusted-partner')

@include('./components/services-components.trust')

@include('services.education-loan.scrollable')

@include('./components/cta-button')

@include('services.education-loan.faqs')



@endsection