<header class="header">
    <div class="container">
        <div class="hamburger-menu">
            <div class="hamburger-icon" onclick="toggleMenu()">☰</div>
            <div class="hamburger-overlay">
                <nav class="hamburger-nav">
                    <a href="{{ url('/') }}">Home</a>
                    <div class="hamburger-dropdown">
                        <a class="dropdown-toggle" onclick="toggleDropdown()">Services ⌄</a>
                        <div class="hamburger-dropdown-menu">
                            <a href="{{ url('/services/counselling') }}">Counseling with an expert</a>
                            <a href="{{ url('/marketing') }}">Free profile evaluation</a>
                            <a href="{{ url('/services/course-selection') }}">Course Selection</a>
                            <a href="{{ url('/services/admission') }}">Admissions</a>
                            <a href="{{ url('/services/sop-assistance') }}">SOP/ Scholarship essays</a>
                            <a href="{{ url('/marketing') }}">Visa Assistance</a>
                            <a href="{{ url('/services/mock-interviews') }}">Mock interview</a>
                            <a href="{{ url('/marketing') }}">Education Loan</a>
                            <a href="{{ url('/services/travel-arrangements') }}">Travel arrangements</a>
                            <a href="{{ url('/marketing') }}">Post - Landing services</a>
                        </div>
                    </div>
                    <a href="{{ url('/about') }}">About Us</a>
                    <a href="{{ url('/contact') }}">Contact Us</a>
                </nav>
            </div>
        </div>

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
                            <a href="{{ url('/marketing') }}">Free profile evaluation</a>
                            <a href="{{ url('/services/course-selection') }}">Course Selection</a>
                            <a href="{{ url('/services/admission') }}">Admissions</a>
                            <a href="{{ url('/services/sop-assistance') }}">SOP/ Scholarship essays</a>
                            <a href="{{ url('/marketing') }}">Visa Assistance</a>
                            <a href="{{ url('/services/mock-interviews') }}">Mock interview</a>
                            <a href="{{ url('/marketing') }}">Education Loan</a>
                            <a href="{{ url('/services/travel-arrangements') }}">Travel arrangements</a>
                            <a href="{{ url('/marketing') }}">Post - Landing services</a>
                        </div>
                    </div>
                    
                    <a class="nav-item" href="{{ url('/about') }}">About Us</a>
                    <a href="{{ url('/contact') }}" class="contact-btn">Contact Us</a>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- JavaScript -->
<script>
    function toggleMenu() {
        document.querySelector(".hamburger-overlay").classList.toggle("show");
    }

    function toggleDropdown() {
        document.querySelector(".hamburger-dropdown").classList.toggle("active");
    }
</script>