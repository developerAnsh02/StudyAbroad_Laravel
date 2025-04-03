<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    .testimonial-section {
    text-align: center;
    padding: 50px 20px;
    background: #fff;
}

.testimonial-heading .badge {
    background: #f47c20;
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: bold;
    display: inline-block;
    margin-bottom: 10px;
}

.testimonial-heading h2 {
    font-size: 28px;
    color: #1d263b;
    font-weight: 700;
    margin-bottom: 30px;
}

.testimonial-slider {
    position: relative;
    max-width: 1000px;
    margin: auto;
}

.testimonial-card {
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s;
    position: relative;
}

.testimonial-card:hover {
    transform: translateY(-5px);
}

.testimonial-card::before {
    content: "";
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 80%;
    height: 15px;
    background: #f47c20;
    border-radius: 10px;
    z-index: -1;
}

.testimonial-image img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 15px;
}

.testimonial-card h3 {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.testimonial-card p {
    font-size: 14px;
    color: #555;
    line-height: 1.5;
}

.swiper-pagination {
    margin-top: 15px;
}
.swiper-wrapper{
    gap: 10px;
}
/* Responsive */
@media (max-width: 768px) {
    .testimonial-card {
        margin: 10px;
    }
}

</style>
<section class="testimonial-section">
    <div class="testimonial-heading">
        <span class="badge">What Our</span>
        <h2>Students Say About Us</h2>
    </div>

    <div class="swiper testimonial-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="testimonial-card">
                    <div class="testimonial-image">
                        <img src="{{ asset('images/testimonial1.jpg') }}" alt="Yatish Shrimali">
                    </div>
                    <h3>Yatish Shrimali</h3>
                    <p>I'm glad to get the chance to thank Gateway International. They make a good team ensure quality.</p>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="testimonial-card">
                    <div class="testimonial-image">
                        <img src="{{ asset('images/testimonial2.jpg') }}" alt="Sahiba Burman">
                    </div>
                    <h3>Sahiba Burman</h3>
                    <p>Gateway International was grateful to me for helping me convince my parents to let me study abroad.</p>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="testimonial-card">
                    <div class="testimonial-image">
                        <img src="{{ asset('images/testimonial3.jpg') }}" alt="Harshvardhan Soni">
                    </div>
                    <h3>Harshvardhan Soni</h3>
                    <p>Through my journey, Gateway International’s advice, guidance, and support have been an enormous help.</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testimonial-card">
                    <div class="testimonial-image">
                        <img src="{{ asset('images/testimonial3.jpg') }}" alt="Harshvardhan Soni">
                    </div>
                    <h3>Harshvardhan Soni</h3>
                    <p>Through my journey, Gateway International’s advice, guidance, and support have been an enormous help.</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testimonial-card">
                    <div class="testimonial-image">
                        <img src="{{ asset('images/testimonial3.jpg') }}" alt="Harshvardhan Soni">
                    </div>
                    <h3>Harshvardhan Soni</h3>
                    <p>Through my journey, Gateway International’s advice, guidance, and support have been an enormous help.</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="testimonial-card">
                    <div class="testimonial-image">
                        <img src="{{ asset('images/testimonial3.jpg') }}" alt="Harshvardhan Soni">
                    </div>
                    <h3>Harshvardhan Soni</h3>
                    <p>Through my journey, Gateway International’s advice, guidance, and support have been an enormous help.</p>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
   var swiper = new Swiper(".testimonial-slider", {
    slidesPerView: 1,
    spaceBetween: 30, // Increases the gap between cards
    loop: true,
    autoplay: {
        delay: 3000, // Auto-slide every 3 seconds
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        768: { slidesPerView: 2, spaceBetween: 30 }, // Adds gap for medium screens
        1024: { slidesPerView: 3, spaceBetween: 40 } // Adds more gap for large screens
    }
});

</script>
