<section class="why-slider-section">
    <div class="why-slider-container">
        <h2>{{ $sectionTitle }}</h2>
        <p>{{ $sectionDescription }}</p>

        <div class="swiper why-swiper">
            <div class="swiper-wrapper">
                @foreach ($cards as $card)
                    <div class="swiper-slide">
                        <div class="why-card">
                            <div class="card-inner">
                                <h3 class="card-title">{{ $card['title'] }}</h3>
                                <p class="card-desc">{{ $card['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-button-prev custom-prev"></div>
            <div class="swiper-pagination custom-pagination"></div>
            <div class="swiper-button-next custom-next"></div>

        </div>
    </div>
</section>
<style>
.why-slider-section {
    padding: 60px 20px;
    background-color: #f5f7fc;
}

.why-slider-container {
    max-width: 1200px;
    margin: auto;
    text-align: center;
}

.why-slider-container h2 {
    margin-bottom: 10px;
}

.why-slider-container p {
    margin-bottom: 20px;
    color: #666;
}

.swiper {
    padding-top: 10px !important;
}

.why-card {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    height: 100%;
    display: flex;
    align-items: stretch;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.06);
    transition: all 0.3s ease;
    height: 100%;
    min-height: 250px;
}

.why-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
}

.card-inner {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
}

.card-title {
    font-size: 20px;
    font-weight: 600;
    color: #ffa500;
    margin-bottom: 10px;
    min-height: 48px;
}

.card-desc {
    font-size: 14px;
    color: #555;
    line-height: 1.5;
    flex-grow: 1;
    min-height: 80px;
}

/* Swiper Buttons */
/* Position and style the arrow buttons */
.custom-prev,
.custom-next {
    width: 40px !important;
    height: 40px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    background: #fff !important;
    border-radius: 50% !important;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1) !important;
    position: absolute !important;
    top: 50% !important;
    transform: translateY(-50%) !important;
    z-index: 10 !important;
    color: #333 !important;
    font-size: 18px !important;
    cursor: pointer !important;
    background: #ffa500 !important;
}

/* Override the Swiper default icon font */
.swiper-button-prev::after,
.swiper-button-next::after {
    font-family: none !important;
    content: '' !important;
}

/* Add arrows using plain text */
.custom-prev::before,
.custom-next::before {
    content: "<" !important;
    font-size: 20px !important;
    font-weight: bold !important;
    color: inherit !important;
    line-height: 1 !important;
}

/* Right arrow */
.custom-next::before {
    content: ">" !important;
}

/* Hover effect */
.custom-prev:hover,
.custom-next:hover {
    background: #ffa500 !important;
    color: #fff !important;
}


/* Responsive */
@media (max-width: 575.98px) {
    .card-title { font-size: 18px; }
    .card-desc { font-size: 14px; }
}

@media (min-width: 576px) and (max-width: 767.98px) {
    .card-title { font-size: 19px; }
}

@media (min-width: 768px) {
    .card-title { font-size: 20px; }
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
        const swiperSlides = document.querySelectorAll(".why-swiper .swiper-slide");
        const totalSlides = swiperSlides.length;
        const slidesPerView = getSlidesPerView();
        const loopMode = totalSlides > slidesPerView;

        // Show or hide navigation based on loopMode
        document.querySelectorAll(".custom-prev, .custom-next, .custom-pagination").forEach(el => {
            el.style.display = loopMode ? "block" : "none";
        });

        // Destroy previous instance if exists
        if (swiperInstance) {
            swiperInstance.destroy(true, true);
        }

        // Re-initialize swiper
        swiperInstance = new Swiper(".why-swiper", {
            slidesPerView: slidesPerView,
            spaceBetween: 30,
            loop: loopMode,
            autoplay: loopMode ? {
                delay: 3000,
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

    // Initialize on load
    updateSwiper();

    // Update on window resize
    window.addEventListener("resize", function () {
        clearTimeout(window._swiperResizeTimer);
        window._swiperResizeTimer = setTimeout(updateSwiper, 200); // debounce for performance
    });
});
</script>


