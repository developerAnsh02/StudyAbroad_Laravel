<section class="university-slider-section">
    <h2><span>{{ $universitySection['heading'] }}</span> {{ $universitySection['highlight'] }}</h2>

    <p class="sub-heading">
        {{ $universitySection['sub_heading'] }}
    </p>

    <div class="slider-container">
        <div class="slider-wrapper">
            <div class="slider-track" id="slider-track">
                @foreach($universities as $university)
                    <div class="university-card">
                        <img src="{{ asset($university['logo']) }}" alt="{{ $university['name'] }}">
                        <h3>{{ $university['name'] }}</h3>
                        <!-- <p>Popular For: {{ $university['course'] }}</p>
                        <p>QS World Ranking: <strong>{{ $university['ranking'] }}</strong></p> -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <button class="nav-btn prev" onclick="moveSlide(-1)">❮</button>
    <button class="nav-btn next" onclick="moveSlide(1)">❯</button>

    <p class="footer-text">
        {{ $universitySection['footer'] }}
    </p>
</section>
<style>
    :root {
        --primary: #ffa500;
        --light: #f7f9fc;
        --dark: #1a1a1a;
        --card-bg: #fff;
        --radius: 16px;
    }

    .university-slider-section {
        padding: 60px 5%;
        background: var(--light);
        text-align: center;
        position: relative;
    }


    .university-slider-section h2 span {
        color: var(--primary);
    }

    .footer-text {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #666;
    font-style: italic;
}


    .slider-container {
        overflow: hidden;
        max-width: 100%;
        position: relative;
    }

    .slider-wrapper {
        width: 100%;
    }

    .slider-track {
        display: flex;
        gap: 20px;
        transition: transform 0.4s ease-in-out;
        will-change: transform;
    }

    .university-card {
        flex: 0 0 280px;
        background: var(--card-bg);
        border-radius: var(--radius);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        padding: 20px;
        text-align: left;
        display: flex;
        gap: 1rem;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .university-card img {
        width: 70px;
        height: 70px;
        object-fit: contain;
    }

    .university-card h3 {
        font-size: 1.1rem;
        margin: 0;
    }

    .university-card p {
        margin: 4px 0;
        color: #444;
    }

    .nav-btn {
        position: absolute;;
        transform: translateY(50%);
        background: var(--primary);
        color: white;
        border: none;
        font-size: 1.5rem;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        z-index: 10;
    }

    .nav-btn.prev {
        left: 40%;
    }

    .nav-btn.next {
        right: 40%;
    }

    /* Tablet */
    @media (max-width: 768px) {
        .university-card {
            flex: 0 0 220px;
        }

        .university-slider-section h2 {
            font-size: 1.8rem;
        }
    }

    /* Mobile */
    @media (max-width: 480px) {
        .university-card {
            flex: 0 0 180px;
            flex-direction: column;
            text-align: center;
        }

        .university-card img {
            margin-bottom: 10px;
        }

        .nav-btn {
            width: 25px;
            height: 25px;
            font-size: .7rem;
        }
    }
</style>


<script>
document.addEventListener("DOMContentLoaded", () => {
    const sliderTrack = document.getElementById("slider-track");
    const originalCards = Array.from(document.querySelectorAll(".university-card"));
    let cardWidth = originalCards[0].offsetWidth + 20;

window.addEventListener("resize", () => {
    cardWidth = originalCards[0].offsetWidth + 20;
    sliderTrack.style.transition = "none";
    sliderTrack.style.transform = `translateX(${-cardWidth * index}px)`;
});


    // Clone first and last cards
    const firstClone = originalCards[0].cloneNode(true);
    const lastClone = originalCards[originalCards.length - 1].cloneNode(true);
    firstClone.classList.add("clone");
    lastClone.classList.add("clone");

    sliderTrack.appendChild(firstClone);
    sliderTrack.insertBefore(lastClone, originalCards[0]);

    let index = 1;
    let allCards = document.querySelectorAll(".university-card");
    let isTransitioning = false;

    // Set initial position
    sliderTrack.style.transform = `translateX(${-cardWidth * index}px)`;

    function moveSlide(step) {
        if (isTransitioning) return;
        isTransitioning = true;
        index += step;

        sliderTrack.style.transition = "transform 0.4s ease-in-out";
        sliderTrack.style.transform = `translateX(${-cardWidth * index}px)`;
    }

    sliderTrack.addEventListener("transitionend", () => {
        allCards = document.querySelectorAll(".university-card");

        if (allCards[index].classList.contains("clone")) {
            sliderTrack.style.transition = "none";

            // Use double requestAnimationFrame for instant update
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    if (index === 0) {
                        index = allCards.length - 2; // last real card
                    } else if (index === allCards.length - 1) {
                        index = 1; // first real card
                    }

                    sliderTrack.style.transform = `translateX(${-cardWidth * index}px)`;
                    isTransitioning = false;
                });
            });
        } else {
            isTransitioning = false;
        }
    });

    // Buttons
    document.querySelector(".prev").addEventListener("click", () => moveSlide(-1));
    document.querySelector(".next").addEventListener("click", () => moveSlide(1));

    // Optional: Auto-scroll
    setInterval(() => moveSlide(1), 5000);
});
</script>


