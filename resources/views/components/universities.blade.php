<section class="university-slider-section">
    <h2>
        <span>{{ $universitySection['heading'] ?? ' ' }}</span> {{ $universitySection['highlight'] ?? ' ' }}
    </h2>
    <p class="sub-heading">
        {{ $universitySection['sub_heading'] ?? ' ' }}
    </p>

    <div class="swiper university-swiper">
        <div class="swiper-wrapper">
            @foreach($universities as $university)
                <div class="swiper-slide">
                    <div class="university-card">
                        <div class="card-left">
                            <img src="{{ asset($university['logo'] ?? ' ') }}" alt="{{ $university['name'] ?? ' ' }}">
                        </div>
                        <div class="card-right">
                            <h3>{{ $university['name'] ?? ' ' }}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Navigation buttons -->
        <div class="swiper-button-prev custom-prev"></div>
        <div class="swiper-pagination custom-pagination"></div>
        <div class="swiper-button-next custom-next"></div>
    </div>

    <p class="footer-text">
        {{ $universitySection['footer'] ?? ' ' }}
    </p>
</section>
<style>
    .university-slider-section {
    padding: 60px 5%;
    background: #f7f9fc;
    text-align: center;
    position: relative;
}

.university-slider-section h2 span {
    color: #ffa500;
}

.sub-heading {
    font-size: 1.1rem;
    color: #666;
    margin-bottom: 20px;
}

.footer-text {
    margin-top: 20px;
    font-size: 14px;
    color: #666;
    font-style: italic;
}

/* Swiper */
.university-swiper {
    padding: 40px 0;
}

.swiper-wrapper {
    display: flex;
    align-items: stretch;
}

.university-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    display: flex;
    align-items: center;
    padding: 20px;
    height: 100%;
    transition: transform 0.3s ease;
    gap: 20px;
    text-align: left;
}

.university-card:hover {
    transform: translateY(-5px);
}

.card-left img {
    width: 80px;
    height: 80px;
    object-fit: contain;
}

.card-right h3 {
    font-size: 1.1rem;
    color: #333;
    margin: 0;
}

/* Custom Swiper Navigation */
.custom-prev,
.custom-next {
    width: 40px !important;
    height: 40px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    background: #ffa500 !important;
    border-radius: 50% !important;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1) !important;
    position: absolute !important;
    top: 50% !important;
    transform: translateY(-50%) !important;
    z-index: 10 !important;
    color: #fff !important;
    font-size: 20px !important;
    cursor: pointer !important;
}

.swiper-button-prev::after,
.swiper-button-next::after {
    content: '' !important;
}

.custom-prev::before,
.custom-next::before {
    font-weight: bold !important;
    font-size: 20px !important;
    color: #fff !important;
    line-height: 1;
}

.custom-prev::before {
    content: "<";
}

.custom-next::before {
    content: ">";
}

.custom-prev:hover,
.custom-next:hover {
    background: #ff8800 !important;
}

/* Responsive */
@media (max-width: 768px) {
    .university-card {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .card-left img {
        width: 60px;
        height: 60px;
    }

    .card-right h3 {
        font-size: 1rem;
    }
}

</style>
<script>
document.addEventListener("DOMContentLoaded", function () {
    let swiperInstance;

    function getSlidesPerView() {
        const width = window.innerWidth;
        if (width >= 992) return 3;
        if (width >= 600) return 2;
        return 1;
    }

    function updateSwiper() {
        const slides = document.querySelectorAll(".university-swiper .swiper-slide");
        const slidesPerView = getSlidesPerView();
        const loopEnabled = slides.length > slidesPerView;

        // Show/hide controls
        document.querySelectorAll(".custom-prev, .custom-next, .custom-pagination").forEach(el => {
            el.style.display = loopEnabled ? "block" : "none";
        });

        // Re-init
        if (swiperInstance) swiperInstance.destroy(true, true);

        swiperInstance = new Swiper(".university-swiper", {
            slidesPerView,
            spaceBetween: 30,
            loop: loopEnabled,
            autoplay: loopEnabled ? {
                delay: 4000,
                disableOnInteraction: false,
            } : false,
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
                992: { slidesPerView: 3 },
            },
        });
    }

    updateSwiper();
    window.addEventListener("resize", () => {
        clearTimeout(window._resizeTimer);
        window._resizeTimer = setTimeout(updateSwiper, 200);
    });
});
</script>
