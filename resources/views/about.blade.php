@extends('layouts.app')

@section('content')
<section class="about-section">
    <div class="container">
        <div class="about-content">
            <h2>About Our Company</h2>
            <p>
                Welcome to Study Abroad - your trusted partner for securing visas to the USA, Canada, and Australia. 
                We specialize in helping students and professionals navigate the complexities of the visa process with ease.
                Our mission is to make your dream of studying and working abroad a reality by offering expert guidance and 
                personalized support.
            </p>
            <p>
                We have a dedicated team of experts with years of experience in visa processing, immigration law, 
                and international education. From document preparation to visa interviews, we cover all aspects 
                to ensure a smooth journey.
            </p>
        </div>

        <!-- Founder Section -->
        <div class="founder-section">
            <div class="founder-content">
                <h2>Meet Our Founder</h2>
                <div class="founder-info">
                    <div class="foun-image">
                        <div class="founder-image">
                            <div class="bg-img"></div>
                        </div>
                    </div>
                    <div class="about-foun">
                        <p>
                            <strong class="strong">Steve Jobs</strong> founded Study Abroad with a vision to simplify the visa process 
                            and help students and professionals achieve their dreams. After facing numerous challenges while 
                            securing his own student visa, Steve decided to create a company that offers transparent, efficient, 
                            and affordable visa services. 
                        </p>
                        <p>
                            With a background in international law and years of experience in the industry, Steve and his team 
                            have successfully helped over 10,000 clients secure visas and pursue their dreams abroad. 
                            His commitment to excellence and customer satisfaction sets Study Abroad apart.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Cities Section -->
<section class="service-cities">
    <div class="container">
        <h2>Our Service Locations</h2>
        <div class="city-grid">
            <div class="city-card">
                <h3>🇮🇳 India</h3>
                <p>New Delhi, Mumbai, Bangalore, Noida, Pune</p>
            </div>
            <div class="city-card">
                <h3>🇺🇸 United States</h3>
                <p>New York, Los Angeles, San Francisco, Chicago</p>
            </div>
            <div class="city-card">
                <h3>🇬🇧 United Kingdom</h3>
                <p>London, Manchester, Birmingham</p>
            </div>
            <div class="city-card">
                <h3>🇦🇺 Australia</h3>
                <p>Sydney, Melbourne, Brisbane</p>
            </div>
            <div class="city-card">
                <h3>🇨🇦 Canada</h3>
                <p>Toronto, Vancouver, Montreal</p>
            </div>
        </div>
    </div>
</section>
@endsection
