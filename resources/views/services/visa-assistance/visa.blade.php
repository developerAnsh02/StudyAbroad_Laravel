@extends('layouts.app')
@section('content')

    <section class="service-hero">
        <div class="service-hero-content">
            <h1 class="main-heading">Hassle-Free Visa Assistance for a Smooth Journey</h1>
            <p>Process
We simplify your visa process, making your journey effortless and worry-free.

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


    <!-- <section class="infographic-section">
  <h2>Comprehensive Post-Arrival Support for a Smooth Transition</h2>
  <div class="info-grid">
    <div class="info-card">
      <div class="icon">🧭</div>
      <h3>Local Orientation</h3>
      <p>Get familiar with public transport, local laws, and essential services in your new city.</p>
    </div>
    <div class="info-card">
      <div class="icon">🏠</div>
      <h3>Accommodation Assistance</h3>
      <p>Find comfortable, affordable housing options near your university or college.</p>
    </div>
    <div class="info-card">
      <div class="icon">📱</div>
      <h3>Banking & SIM Setup</h3>
      <p>Help setting up a local bank account and mobile SIM for hassle-free transactions.</p>
    </div>
    <div class="info-card">
      <div class="icon">🤝</div>
      <h3>Community Connection</h3>
      <p>Join local student communities and connect with peers for a smoother transition.</p>
    </div>
  </div>
</section> -->
<style>
    .infographic-section {
  font-family: 'Segoe UI', sans-serif;
  padding: 50px 20px;
  background-color: #fdfdfd;
  max-width: 1100px;
  margin: 0 auto;
  text-align: center;
}

.infographic-section h2 {
  font-size: 32px;
  margin-bottom: 40px;
  color: #111;
  font-weight: 700;
}

.info-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 25px;
}

.info-card {
  background-color: #ffffff;
  border: 1px solid #eee;
  border-radius: 16px;
  padding: 25px;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s ease;
}

.info-card:hover {
  transform: translateY(-8px);
}

.icon {
  font-size: 36px;
  margin-bottom: 15px;
  color: #ffcb05; /* Highlight color */
}

.info-card h3 {
  font-size: 20px;
  margin-bottom: 10px;
  color: #333;
}

.info-card p {
  font-size: 16px;
  color: #666;
  line-height: 1.6;
}

</style>


@include('./components/stats')

@include('./components/services-components.trusted-partner')

@include('./components/services-components.trust')

@include('services.visa-assistance.scrollable')

@include('./components/cta-button')

@include('services.visa-assistance.faqs')


@endsection