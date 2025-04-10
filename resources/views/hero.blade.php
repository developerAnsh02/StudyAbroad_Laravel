<section class="hero-main">

    <div class="hero-content-wrapper">

        <div class="map-container">
            <img src="images/white-world-map.png" alt="World Map" class="map-image" fetchpriority="high" width="800"
                height="500">

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
    <div class="popup">
        <strong>Accepted Tests:</strong> IELTS, TOEFL, PTE, Cambridge English, Duolingo<br>
        <strong>Work Rights:</strong> 20 hrs/week during term time, Full-time during vacations<br>
        <strong>Scholarships:</strong> £1,000 - £5,000<br>
        <strong>Popular Courses:</strong>
        <ul>
            <li>Computer Science</li>
            <li>Business and Management</li>
            <li>Engineering (Civil, Mechanical)</li>
            <li>Medicine</li>
            <li>Law</li>
        </ul>
        <strong>Post-Study Work:</strong> 2 years (for Master's and PhD)
    </div>
</div>

<div class="card-country usa-card">
    <div class="flag-circle">
        <img src="images/icons/united-states.png" loading="lazy" alt="USA Flag">
    </div>
    <span>USA</span>
    <div class="popup-bottom">
        <strong>Accepted Tests:</strong> IELTS, TOEFL, PTE, Duolingo, Cambridge English<br>
        <strong>Work Rights:</strong> 20 hrs/week during academic sessions, Full-time during holidays<br>
        <strong>Scholarships:</strong> $1,000 - $10,000<br>
        <strong>Popular Courses:</strong>
        <ul>
            <li>Computer Science</li>
            <li>Engineering (Electrical, Mechanical)</li>
            <li>Business (MBA)</li>
            <li>Medicine</li>
            <li>Psychology</li>
        </ul>
        <strong>Post-Study Work:</strong> 12 months OPT (up to 36 months for STEM)
    </div>
</div>

<div class="card-country canada-card">
    <div class="flag-circle">
        <img src="images/icons/canada.png" loading="lazy" alt="Canada Flag">
    </div>
    <span>Canada</span>
    <div class="popup-bottom">
        <strong>Accepted Tests:</strong> IELTS, TOEFL, PTE, CAEL, CELPIP, Duolingo<br>
        <strong>Work Rights:</strong> 20 hrs/week during academic sessions, Full-time during breaks<br>
        <strong>Scholarships:</strong> $1,000 - $5,000<br>
        <strong>Popular Courses:</strong>
        <ul>
            <li>Engineering (Software, Electrical, Civil)</li>
            <li>Business</li>
            <li>Environmental Science</li>
            <li>Health Sciences</li>
            <li>Artificial Intelligence</li>
        </ul>
        <strong>Post-Study Work:</strong> 3 years PhD, 1–3 years Master’s
    </div>
</div>

<div class="card-country france-card">
    <div class="flag-circle">
        <img src="images/icons/france.png" loading="lazy" alt="France Flag">
    </div>
    <span>France</span>
    <div class="popup">
        <strong>Accepted Tests:</strong> IELTS, TOEFL, TCF, DELF, Cambridge English<br>
        <strong>Work Rights:</strong> 964 hrs/year (about 20 hrs/week)<br>
        <strong>Scholarships:</strong> €1,000 - €3,000<br>
        <strong>Popular Courses:</strong>
        <ul>
            <li>Business (Management, Finance)</li>
            <li>Fashion and Design</li>
            <li>Engineering</li>
            <li>Arts and Humanities</li>
            <li>Social Sciences</li>
        </ul>
        <strong>Post-Study Work:</strong> 1–2 years (Master's and PhD)
    </div>
</div>

<div class="card-country australia-card">
    <div class="flag-circle">
        <img src="images/icons/australia.png" loading="lazy" alt="Australia Flag">
    </div>
    <span>Australia</span>
    <div class="popup">
        <strong>Accepted Tests:</strong> IELTS, TOEFL, PTE, Cambridge English, Duolingo<br>
        <strong>Work Rights:</strong> 40 hrs/fortnight during academic sessions, Full-time during holidays<br>
        <strong>Scholarships:</strong> AUD 1,000 - AUD 5,000<br>
        <strong>Popular Courses:</strong>
        <ul>
            <li>Information Technology</li>
            <li>Engineering (Mechanical, Civil)</li>
            <li>Medicine</li>
            <li>Education</li>
            <li>Environmental Science</li>
        </ul>
        <strong>Post-Study Work:</strong> 2–4 years (Master's and PhD)
    </div>
</div>

        </div>
        @include('./components/registration-form')
    </div>

</section>

<style>
    .hero-main {
        background: url('/images/fbf0efd993d06415633881cd7b0c43de.jpg') no-repeat center center/cover;
        position: relative;
        padding: 80px 0;
        /* Add padding instead of fixed height */
    }

    .hero-content-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 90%;
        max-width: 1200px;
        gap: 40px;
        margin: auto;
        flex-wrap: wrap;
        /* Ensures responsiveness */
    }

    .map-container {
        position: relative;
        max-width: 55%;
        margin-left: 0;
        margin-right: auto;
        top: 0;
        /* Remove top margin to align properly */
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

    .UK-marker {
        top: 45%;
        left: 46%;
    }

    .UK-card {
        top: 33%;
        left: 41%;
    }

    .usa-marker {
        top: 48%;
        left: 23%;
    }

    .usa-card {
        top: 44%;
        left: 2%;
    }

    .canada-marker {
        top: 40%;
        left: 16%;
    }

    .canada-card {
        top: 30%;
        left: -6%;
    }

    .australia-marker {
        top: 68%;
        left: 83%;
    }

    .australia-card {
        top: 72%;
        left: 78%;
    }

    .france-marker {
        top: 48%;
        left: 48%;
    }

    .france-card {
        top: 44%;
        left: 52%;
    }


    .popup {
        position: absolute;
        bottom: 110%;
        left: 50%;
        transform: translateX(-50%) translateY(10px);
        width: 280px;
        background-color: #ffffff;
        color: #333;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 15px;
        font-size: 14px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 3000;
        display: none;
        opacity: 0;
        transition: all 0.4s ease;
    }
    .popup-bottom{
        position: absolute;
        top: 110%;
        left: 90%;
        transform: translateX(-50%) translateY(10px);
        width: 280px;
        background-color: #ffffff;
        color: #333;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 15px;
        font-size: 14px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 3000;
        display: none;
        opacity: 0;
        transition: all 0.4s ease;
    }

    .card-country:hover .popup {
        display: block;
        opacity: 1;
        transform: translateX(-50%) translateY(0);
        z-index: 3000;
    }
    .card-country:hover .popup-bottom {
        display: block;
        opacity: 1;
        transform: translateX(-50%) translateY(0);
        z-index: 3000;
    }

    .popup ul {
        margin: 5px 0;
        padding-left: 20px;
    }

    .popup ul li {
        list-style-type: disc;
    }

    @keyframes overlayFadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes imageFadeIn {
        0% {
            opacity: 0;
            transform: scale(0.8);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes markerFadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes markerEffects {

        0%,
        100% {
            filter: brightness(1.5);
            transform: scale(1);
        }

        50% {
            filter: brightness(0.5) contrast(1.2);
            transform: scale(1.2);
        }
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
            transform: scale(1);
            /* Ensure it stays the same size */
        }

        .marker {
            width: 6px;
            height: 6px;
            box-shadow: 0px 0px 8px 4px rgba(255, 0, 0, 0.5);
        }

        .card-country {
            display: none;
            /* Hide country cards */
        }
    }
</style>