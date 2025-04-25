@extends('layouts.app')
@section('content')

    <section class="service-hero">
        <div class="service-hero-content">
            <h1 class="main-heading">Effortless Travel Arrangements for a Smooth Visa Process</h1>
            <p>Process
We take care of your travel plans, making your visa process seamless and stress-free.

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


    <section class="infographic-section">
  <h2>Full Post-Arrival Support for Seamless Transition</h2>
  <div class="info-grid">
    <div class="info-card">
      <div class="icon">🧭</div>
      <h3>Local Orientation</h3>
      <p>Learn about public transport, local regulations, and major services in your new city to settle down in no time.</p>
    </div>
    <div class="info-card">
      <div class="icon">🏠</div>
      <h3>Accommodation Assistance</h3>
      <p>Identify comfortable and affordable accommodations near your university or college for easy living.</p>
    </div>
    <div class="info-card">
      <div class="icon">📱</div>
      <h3>Banking & SIM Setup</h3>
      <p>Establish a local bank account and mobile SIM card for hassle-free transactions and easy connectivity.</p>
    </div>
    <div class="info-card">
      <div class="icon">🤝</div>
      <h3>Community Connection</h3>
      <p>Join local student groups to network and befriend new people and get used to your new surroundings.</p>
    </div>
    <div class="info-card">
      <div class="icon">👩‍⚕️</div>
      <h3>Healthcare Advice</h3>
      <p>Seek assistance in learning how to access healthcare services and getting enrolled with local physicians for assurance.</p>
    </div>
    <div class="info-card">
      <div class="icon">➕</div>
      <h3>Emergency Assistance</h3>
      <p>Be assisted in times of any emergencies, to be never left behind in times of transition.</p>
    </div>
  </div>
</section>
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

@include('services.travelling.scrollable')

@include('./components/cta-button')

@include('services.travelling.faqs')


@endsection