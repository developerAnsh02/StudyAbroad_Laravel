
<section class="hero-main">
    <div class="hero-content-wrapper">

        <div class="map-container">
            <img src="images/white-world-map.png" alt="World Map" class="map-image">
            <div class="india-marker marker" data-city="India"></div>
            <div class="usa-marker marker" data-city="USA"></div>
            <div class="brazil-marker marker" data-city="Brazil"></div>
            <div class="australia-marker marker" data-city="Australia"></div>
            <div class="japan-marker marker" data-city="Japan"></div>

            <div class="card-country india-card">
                <div class="flag-circle">
                    <img src="images/icons/russia.png" alt="India Flag">
                </div>
                <span>Russsia</span>
            </div>
            <div class="card-country japan-card">
                <div class="flag-circle">
                    <img src="images/icons/japan.png" alt="Japan Flag">
                </div>
                <span>Japan</span>
            </div>
            <div class="card-country usa-card">
                <div class="flag-circle">
                    <img src="images/icons/united-states.png" alt="USA Flag">
                </div>
                <span>USA</span>
            </div>
            <div class="card-country brazil-card">
                <div class="flag-circle">
                    <img src="images/icons/brazil-.png" alt="Brazil Flag">
                </div>
                <span>Brazil</span>
            </div>
            <div class="card-country australia-card">
                <div class="flag-circle">
                    <img src="images/icons/australia.png" alt="Australia Flag">
                </div>
                <span>Australia</span>
            </div>
        </div>
        @include('./components/registration-form')
    </div>

</section>

<style>
.hero-main {
    background: url('/images/fbf0efd993d06415633881cd7b0c43de.jpg') no-repeat center center/cover;
    position: relative;
    padding: 80px 0; /* Add padding instead of fixed height */
}

.hero-content-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;
    max-width: 1200px;
    gap: 40px;
    margin: auto;
    flex-wrap: wrap; /* Ensures responsiveness */
}

.map-container {
    position: relative;
    max-width: 55%;
    margin-left: 0;
    margin-right: auto;
    top: 0; /* Remove top margin to align properly */
}

.map-image {
    width: 100%;
    opacity: 0;
    transform: scale(0.8);
    animation: imageFadeIn 2s 0.5s forwards;
}

.marker {
    position: absolute;
    width: 8px;
    height: 8px;
    background-color: red;
    border-radius: 50%;
    box-shadow: 0px 0px 10px 5px rgba(255, 0, 0, 0.5);
    opacity: 0;
    animation: markerFadeIn 1s 1s forwards, markerEffects 2s 3s infinite;
    cursor: pointer;
}

.card-country {
    position: absolute;
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.1);
    opacity: 0;
    animation: markerFadeIn 1s 1s forwards;
    padding: 3px 10px;
    display: flex;
    align-items: center;
    gap: 8px;
    border: 1px solid #e0e0e0;
}

.flag-circle {
    
    padding: 3px;
    
}

.flag-circle img {
    width: 32px;
    transition: transform 0.5s;
}

.flag-circle:hover img {
    transform: rotate(360deg);
}

.card-country span {
    font-size: 16px;
    font-weight: 500;
    color: #4a4a4a;
}

.india-marker { top: 34%; left: 69%; }
.india-card { top: 20%; left: 67%; }

.usa-marker { top: 44%; left: 23%; }
.usa-card { top: 42%; left: 26%; }
.brazil-marker { top: 59%; left: 34%; }
.brazil-card { top: 63%; left: 32%; }
.australia-marker { top: 61%; left: 83%; }
.australia-card { top: 62%; left: 85%; }

.japan-marker { top: 41%; left: 81%; }
.japan-card { top: 39%; left: 83%; }

@keyframes overlayFadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

@keyframes imageFadeIn {
    0% { opacity: 0; transform: scale(0.8); }
    100% { opacity: 1; transform: scale(1); }
}

@keyframes markerFadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

@keyframes markerEffects {
    0%, 100% { filter: brightness(1.5); transform: scale(1); }
    50% { filter: brightness(0.5) contrast(1.2); transform: scale(1.2); }
}

@media (max-width: 768px) {
    .map-container {
        width: 90%;
        max-width: 350px;
        margin: 0 auto;
        text-align: center;
    }

    .map-image {
        width: 100%;
        transform: scale(1); /* Ensure it stays the same size */
    }

    .marker {
        width: 6px;
        height: 6px;
        box-shadow: 0px 0px 8px 4px rgba(255, 0, 0, 0.5);
    }

    .card-country {
        display: none; /* Hide country cards */
    }
}

</style>