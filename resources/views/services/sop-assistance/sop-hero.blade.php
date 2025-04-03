<section class="sop-hero">
        <div class="sop-hero-content">
            <h1 class="main-heading">Get a Visa-Approved SOP That Stands Out</h1>
            <p>Get a well-structured, plagiarism-free SOP that strengthens your visa application and increases approval chances.</p>
            <a href="#get-started" class="btn">Get Your SOP Now</a>

            <!-- Features Section -->
            <div class="features">
                <div class="feature">
                <i class="fa-solid fa-check-circle"></i>
                    <p><strong>100% Unique & Plagiarism-Free</strong></p>
                </div>
                <div class="feature">
                <i class="fa-solid fa-check-circle"></i>
                    <p><strong>University & Embassy Approved Format</strong></p>
                </div>
                <div class="feature">
                <i class="fa-solid fa-check-circle"></i>
                    <p><strong>Unlimited Revisions</strong></p>
                </div>
                <div class="feature">
                <i class="fa-solid fa-check-circle"></i>
                    <p><strong>Fast Turnaround Time</strong></p>
                </div>
            </div>
        </div>

        <!-- Hero Image -->
        <div class="hero-form">
        @include('./components/registration-form')
        </div>
    </section>
<style>
    .sop-hero {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #1a1a1a;

    padding: 120px 10% 80px 10%;
}
.main-heading{
    color: white;
}
/* Left Side - Text */
.sop-hero-content {
    width: 50%;
}

.sop-hero-content h1 {
    font-size: 40px;
    font-weight: bold;
    line-height: 1.4;
}

.sop-hero-content p {
    font-size: 18px;
    margin: 20px 0;
    color: #d1d1d1;
    line-height: 1.4;
    font-weight: 300;
}

/* Call-to-Action Button */
.btn {
    display: inline-block;
    background-color: #f4b400;
    color: #1a1a1a;
    padding: 12px 24px;
    font-size: 18px;
    font-weight: bold;
    text-decoration: none;
    border-radius: 5px;
    transition: 0.3s;
}

.btn:hover {
    background-color: #e0a500;
}

/* Features Section */
.features {
    display: flex;
    flex-wrap: wrap;
    margin-top: 20px;
}

.feature {
    display: flex;
    align-items: center;
    margin-right: 20px;
    margin-bottom: 10px;
}

.feature i {
    width: 20px;
    margin-right: 10px;
    color: white;
}

/* Right Side - Image */
.hero-image img {
    width: 500px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

/* Responsive Design */
/* Responsive Design */
@media (max-width: 1200px) {
    .sop-hero {
        padding: 100px 8%;
    }

    .sop-hero-content h1 {
        font-size: 36px;
    }

    .sop-hero-content p {
        font-size: 17px;
    }

    .btn {
        font-size: 17px;
        padding: 12px 22px;
    }
}

@media (max-width: 992px) {
    .sop-hero {
        flex-direction: column;
        text-align: center;
        padding: 80px 6%;
    }

    .sop-hero-content,
    .hero-form {
        width: 100%;
        max-width: 100%;
    }

    .sop-hero-content h1 {
        font-size: 32px;
    }

    .sop-hero-content p {
        font-size: 16px;
    }

    .features {
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .feature {
        width: 100%;
        justify-content: center;
    }
}

@media (max-width: 768px) {
    .sop-hero {
        padding: 100px 5% 60px 5%;
    }

    .sop-hero-content h1 {
        font-size: 28px;
    }

    .sop-hero-content p {
        font-size: 15px;
    }

    .btn {
        padding: 10px 20px;
        font-size: 15px;
    }

    .feature {
        text-align: center;
    }

    .feature i {
        margin-bottom: 5px;
    }
}

@media (max-width: 576px) {
    .sop-hero {
        padding: 90px 5% 50px 5%;
    }

    .sop-hero-content h1 {
        font-size: 24px;
    }

    .sop-hero-content p {
        font-size: 14px;
    }

    .btn {
        font-size: 14px;
        padding: 8px 18px;
    }
}

@media (max-width: 400px) {
    .sop-hero {
        padding: 80px 4% 40px 4%;
    }

    .sop-hero-content h1 {
        font-size: 22px;
    }

    .sop-hero-content p {
        font-size: 13px;
    }

    .btn {
        font-size: 13px;
        padding: 8px 16px;
    }
}

</style>