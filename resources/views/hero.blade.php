<section class="hero-main">

    <div class="hero-content-wrapper">

        <div class="map-container">
            <img src="images/white-world-map.png" alt="World Map" class="map-image" fetchpriority="high" width="800" height="500">

            <div class="UK-marker marker" data-city="UK"></div>
            <div class="usa-marker marker" data-city="USA"></div>
            <div class="canada-marker marker" data-city="Canada"></div>
            <div class="australia-marker marker" data-city="Australia"></div>
            <div class="france-marker marker" data-city="france"></div>

            <div class="card-country UK-card">
                <div class="flag-circle">
                    <img src="images/icons/uk.png" loading="lazy" alt="UK Flag">
                </div>
                <span>UK</span>
            </div>
            <div class="card-country france-card">
                <div class="flag-circle">
                    <img src="images/icons/france.png" loading="lazy" alt="france Flag">
                </div>
                <span>france</span>
            </div>
            <div class="card-country usa-card">
                <div class="flag-circle">
                    <img src="images/icons/united-states.png" loading="lazy" alt="USA Flag">
                </div>
                <span>USA</span>
            </div>
            <div class="card-country canada-card">
                <div class="flag-circle">
                    <img src="images/icons/canada.png" loading="lazy" alt="canada Flag">
                </div>
                <span>Canada</span>
            </div>
            <div class="card-country australia-card">
                <div class="flag-circle">
                    <img src="images/icons/australia.png" loading="lazy" alt="Australia Flag">
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

/*.map-image {*/
/*    width: 100%;*/
/*    opacity: 0;*/
/*    transform: scale(0.8);*/
/*    animation: imageFadeIn 2s 0.5s forwards;*/
/*}*/
.map-image {
    width: 100%;
    opacity: 1;
    transform: scale(1);
    transition: transform 0.6s ease, opacity 0.6s ease;
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

.UK-marker { top: 45%; left: 46%; }
.UK-card { top: 33%; left: 41%; }

.usa-marker { top: 48%; left: 23%; }
.usa-card { top: 44%; left: 2%; }
.canada-marker { top: 40%; left: 16%; }
.canada-card { top: 30%; left: -6%; }
.australia-marker { top: 68%; left: 83%; }
.australia-card { top: 72%; left: 78%; }

.france-marker { top: 48%; left: 48%; }
.france-card { top: 44%; left: 52%; }

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