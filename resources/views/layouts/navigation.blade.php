<header class="header">
    <div class="container">
        <!-- Hamburger Menu for Mobile -->
        <div class="hamburger-menu">
            <div class="hamburger-icon" onclick="toggleMenu()">☰</div>
            <div class="hamburger-overlay">
                <div class="hamburger-icon" onclick="toggleMenu()">✖</div> <!-- Close Button -->
                <nav class="hamburger-nav">
                    <a href="{{ url('/') }}">Home</a>
                    <div class="hamburger-dropdown">
                        <a class="dropdown-toggle" onclick="toggleDropdown()">
                            Services <span class="arrow-icon"><i class="fa-solid fa-angle-down"></i></span>
                        </a>
                        <div class="hamburger-dropdown-menu">
                            <a href="{{ url('/services/counselling') }}">Counseling with an expert</a>
                            <a href="{{ url('/marketing') }}">Free profile evaluation</a>
                            <a href="{{ url('/services/course-selection') }}">Course Selection</a>
                            <a href="{{ url('/services/getting-admission') }}">Admissions</a>
                            <a href="{{ url('/services/sop-assistance') }}">SOP/ Scholarship essays</a>
                            <a href="{{ url('/marketing') }}">Visa Assistance</a>
                            <a href="{{ url('/services/mock-interviews') }}">Mock interview</a>
                            <a href="{{ url('/marketing') }}">Education Loan</a>
                            <a href="{{ url('/services/travel-arrangements') }}">Travel arrangements</a>
                            <a href="{{ url('/marketing') }}">Post - Landing services</a>
                        </div>
                    </div>
                    <div class="hamburger-dropdown">
                        <a class="dropdown-toggle" onclick="toggleDropdown()">
                            Countries <span class="arrow-icon"><i class="fa-solid fa-angle-down"></i></span>
                        </a>
                        <div class="hamburger-dropdown-menu">
                            <a href="{{ url('/country/europe') }}">Europe</a>
                            <a href="{{ url('/country/usa') }}">USA</a>
                            <a href="{{ url('/country/canada') }}">Canada</a>
                            <a href="{{ url('/country/newzealand') }}">New Zealand</a>
                            <a href="{{ url('/country/australia') }}">Australia</a>
                            <a href="{{ url('/country/uk') }}">United Kingdom</a>
                            <a href="{{ url('/country/international') }}">International</a>
                        </div>
                    </div>
                    <a href="{{ url('/about') }}">About Us</a>
                    <a href="{{ url('/contact') }}">Contact Us</a>
                </nav>
            </div>
        </div>

        <!-- Navbar for Desktop -->
        <div class="navbar-container">
            <div class="navbar">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="/images/logo-wts.png" alt=""></a>
                </div>
                <nav class="nav-links">
                    <a class="nav-item" href="{{ url('/') }}">Home</a>

                    <div class="dropdown">
                        <a class="nav-item">Services</a>
                        <div class="dropdown-menu">
                            <a href="{{ url('/services/counselling') }}">Counseling with an expert</a>
                            <a href="{{ url('/') }}">Free profile evaluation</a>
                            <a href="{{ url('/services/course-selection') }}">Course Selection</a>
                            <a href="{{ url('/services/getting-admission') }}">Getting Admissions</a>
                            <a href="{{ url('/services/sop-assistance') }}">SOP/ Scholarship essays</a>
                            <a href="{{ url('/') }}">Visa Assistance</a>
                            <a href="{{ url('/services/mock-interviews') }}">Mock interview</a>
                            <a href="{{ url('/') }}">Education Loan</a>
                            <a href="{{ url('/services/travel-arrangements') }}">Travel arrangements</a>
                            <a href="{{ url('/m') }}">Post - Landing services</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a class="nav-item">
                            Countries 
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ url('/country/europe') }}">Europe</a>
                            <a href="{{ url('/country/usa') }}">USA</a>
                            <a href="{{ url('/country/canada') }}">Canada</a>
                            <a href="{{ url('/country/newzealand') }}">New Zealand</a>
                            <a href="{{ url('/country/australia') }}">Australia</a>
                            <a href="{{ url('/country/uk') }}">United Kingdom</a>
                            <a href="{{ url('/country/international') }}">International</a>
                        </div>
                    </div>

                    <a class="nav-item" href="{{ url('/about') }}">About Us</a>
                    <a href="{{ url('/contact') }}" class="contact-btn">Contact Us</a>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- JavaScript for Menu & Dropdown -->
<script>
    function toggleMenu() {
        document.querySelector(".hamburger-overlay").classList.toggle("show");
    }

    function toggleDropdown() {
    const dropdown = document.querySelector(".hamburger-dropdown");
    const arrowIcon = document.querySelector(".arrow-icon");

    dropdown.classList.toggle("active");

    if (dropdown.classList.contains("active")) {
        arrowIcon.style.transform = "rotate(180deg)"; 
    } else {
        arrowIcon.style.transform = "rotate(0deg)"; 
    }
}
</script>

<style>
    /* Hamburger Menu */
    .hamburger-menu {
        display: hidden;
    }

    @media (max-width: 768px) {
        .hamburger-menu {
            display: block;
        }
    }

    .hamburger-icon {
        position: fixed;
        top: 20px;
        right: 30px;
        z-index: 1100;
        font-size: 40px;
        color: var(--primary-color);
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .hamburger-icon:hover {
        transform: scale(1.1);
    }

    /* Overlay (Glass Effect) */
    .hamburger-overlay {
        position: fixed;
        top: 0;
        left: -100%; /* Initially hidden */
        width: 100%;
        height: 100vh;
        background: rgba(255, 255, 255, 0.1); /* Glass effect */
        backdrop-filter: blur(15px);
        transition: left 0.5s ease;
        z-index: 2000;
    }

    /* Active State */
    .hamburger-overlay.active {
        left: 0;
    }

    /* Navigation Links */
    .hamburger-nav {
        display: flex;
        flex-direction: column;
        gap: 24px;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .hamburger-nav a {
        font-size: 24px;
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .hamburger-nav a:hover {
        color: var(--primary-dark);
        transform: translateY(-3px);
    }

    /* Dropdown styles */
    .hamburger-dropdown {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* Dropdown Toggle */
    .dropdown-toggle {
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    /* Arrow animation */
    .arrow-icon {
        transition: transform 0.3s ease-in-out;
    }

    .hamburger-dropdown-menu {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
    background-color: #003366;
    border-radius: 8px;
    /* backdrop-filter: blur(5px); */
    padding: 5px;

    max-height: 0px; 
    overflow: hidden;
    opacity: 0;
    visibility: hidden;
    transition: max-height 0.5s ease-in-out, opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
    }    

    .hamburger-dropdown.active .hamburger-dropdown-menu {
    max-height: 500px;
    opacity: 1;
    visibility: visible;
    }
</style>
