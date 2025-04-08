@php
    $sectionTitle = 'Why Choose Us for Studying Abroad?';
    $sectionDescription = 'We provide the best support and guidance to help you fulfill your dream of studying in top universities around the world.';

    $whyChooseUs = [
        ['title' => 'Expert Counseling', 'desc' => 'Get guidance from experienced counselors for course and university selection.'],
        ['title' => 'Application Support', 'desc' => 'We assist in filling applications, writing SOPs, and arranging documents.'],
        ['title' => 'Visa Guidance', 'desc' => 'Complete visa support and documentation assistance.'],
        ['title' => 'Pre-Departure Briefing', 'desc' => 'Get ready with travel tips, accommodation info, and culture orientation.'],
        ['title' => 'Scholarship Assistance', 'desc' => 'We help identify and apply for suitable scholarships.'],
    ];
@endphp

<section style="padding: 60px 20px; background-color: #f8f9ff;">
    <div style="max-width: 1200px; margin: auto; text-align: center;">
        <h2 style="font-size: 32px; color: #2c3e50; margin-bottom: 10px;">{{ $sectionTitle }}</h2>
        <p style="font-size: 18px; color: #555; margin-bottom: 40px;">{{ $sectionDescription }}</p>

        <div class="why-slider {{ count($whyChooseUs) > 3 ? 'slider-active' : '' }}">
            @foreach ($whyChooseUs as $card)
                <div class="card">
                    <h3>{{ $card['title'] }}</h3>
                    <p>{{ $card['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Internal CSS -->
<style>
    .why-slider {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .card {
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
        width: 300px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.12);
    }

    .card h3 {
        font-size: 20px;
        color: #155ec4;
        margin-bottom: 10px;
    }

    .card p {
        font-size: 16px;
        color: #666;
    }

    @media (max-width: 768px) {
        .card {
            width: 100%;
        }
    }
</style>

<!-- Slick Carousel CDN (place in your layout or footer) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Slick Slider Activation -->
<script>
    $(document).ready(function(){
        if ($('.slider-active').length) {
            $('.slider-active').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                dots: true,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        }
    });
</script>
