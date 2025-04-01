<header class="header">
    <div class="container">
        <div class="hamburger-menu">
            <div class="hamburger-icon" onclick="toggleMenu()">☰</div>
            <div class="hamburger-overlay">
                <nav class="hamburger-nav">
                    <a href="{{ url('/') }}">Home</a>
                    <a >Services</a>
                    <a href="{{ url('/about') }}">About Us</a>
                    <a href="{{ url('/contact') }}">Contact Us</a>
                </nav>
            </div>
        </div>

        <div class="navbar-container">
            <div class="navbar">
                <div class="logo">
                    <a href="{{ url('/') }}">wtsvisa<span>.com</span></a>
                </div>
                <nav class="nav-links">
                    <a class="nav-item" href="{{ url('/') }}">Home</a>
                    <a class="nav-item">Services</a>
                    <a class="nav-item" href="{{ url('/about') }}">About Us</a>
                    <a href="{{ url('/contact') }}" class="contact-btn">Contact Us</a>
                </nav>
            </div>
        </div>
    </div>
</header>
