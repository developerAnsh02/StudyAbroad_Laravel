<section style="padding: 60px 20px; background-color: #f5f7fc;">
    <div style="max-width: 1200px; margin: auto; text-align: center;">
        <h2>{{ $sectionTitle }}</h2>
        <p>{{ $sectionDescription }}</p>

        <!-- Swiper Slider -->
        <div class="swiper why-swiper">
            <div class="swiper-wrapper">
                @foreach ($cards as $card)
                    <div class="swiper-slide">
                        <div class="why-card">
                            <h3>{{ $card['title'] }}</h3>
                            <p>{{ $card['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- External Controls -->
        <div class="why-swiper-controls">
            <div class="swiper-button-prev custom-prev"></div>
            <div class="swiper-pagination custom-pagination"></div>
            <div class="swiper-button-next custom-next"></div>
        </div>
    </div>
</section>

<!-- Internal CSS -->
<style>
 .why-card {
    background: #fff;
    border-radius: 16px;
    padding: 30px 25px;
    width: 100%;
    text-align: left;
    max-height: 400px;
    overflow-y: scroll;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.06);
    transition: all 0.3s ease;
    height: 100%;
}

.why-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
}

.why-card h3 {
    font-size: 20px;
    font-weight: 600;
    color: #ffa500;
    margin-bottom: 12px;
}

.why-card p {
    font-size: 15px;
    color: #555;
    line-height: 1.6;
}
/* Extra Small Devices (phones, less than 576px) */
@media (max-width: 575.98px) {
    .why-container {
        padding: 0 10px;
    }

    .why-card {
        padding: 20px;
    }

    .why-card h3 {
        font-size: 18px;
    }

    .why-card p {
        font-size: 14px;
    }

    .custom-prev,
    .custom-next {
        width: 28px;
        height: 28px;
        font-size: 14px;
    }

    .why-subtext {
        font-size: 14px;
        padding: 0 5px;
    }
}

/* Small Devices (landscape phones, 576px and up) */
@media (min-width: 576px) and (max-width: 767.98px) {
    .why-card {
        padding: 22px;
    }

    .why-card h3 {
        font-size: 19px;
    }

    .why-card p {
        font-size: 14.5px;
    }

    .custom-prev,
    .custom-next {
        width: 30px;
        height: 30px;
        font-size: 15px;
    }
}

/* Medium Devices (tablets, 768px and up) */
@media (min-width: 768px) and (max-width: 991.98px) {
    .why-card {
        padding: 24px;
    }

    .why-card h3 {
        font-size: 20px;
    }

    .why-card p {
        font-size: 15px;
    }

    .custom-prev,
    .custom-next {
        width: 32px;
        height: 32px;
        font-size: 16px;
    }
}

/* Large Devices (desktops, 992px and up) */
@media (min-width: 992px) and (max-width: 1199.98px) {
    .why-card {
        padding: 25px;
    }

    .why-card h3 {
        font-size: 21px;
    }

    .why-card p {
        font-size: 15.5px;
    }

    .custom-prev,
    .custom-next {
        width: 34px;
        height: 34px;
        font-size: 17px;
    }
}

/* Extra Large Devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
    .why-card {
        padding: 30px;
    }

    .why-card h3 {
        font-size: 22px;
    }

    .why-card p {
        font-size: 16px;
    }

    .custom-prev,
    .custom-next {
        width: 36px;
        height: 36px;
        font-size: 18px;
    }
}


</style>

<!-- Swiper CDN (Before </body>) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        new Swiper(".why-swiper", {
            slidesPerView: 3,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".custom-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".custom-next",
                prevEl: ".custom-prev",
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                600: { slidesPerView: 2 },
                992: { slidesPerView: 3 }
            }
        });
    });
</script>

