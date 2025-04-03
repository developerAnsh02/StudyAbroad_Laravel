<section class="service-section">
    <h2 class="service-title">Professional SOP Writing Assistance</h2>
    <div class="service-container">
        <div class="left">
            <p class="service-text">
            A well-crafted Statement of Purpose (SOP) is a key consideration for securing admission in your desired university. It highlights your academic history, career goals, and reasons for choosing a specific course and university. 
Our experts ensure your SOP is engaging, well-structured, and tailored to impress the admission committees.

            </p>
    
        </div>
        <!-- <div class="right">
            <img src="/images/sop-bg.png" alt="SOP Writing Assistance">
        </div> -->
    </div>
    <a href="#contact" class="cta-bttn">Get Your SOP Now</a>
</section>

<style>
    /* General Styling */
  /* General Styling */
.service-section {
    background: linear-gradient(to bottom, #fff, #f9f9f9);
    padding: 80px 20px;
    text-align: center;
    position: relative;
}

.service-title {
    font-size: 36px;
    color: #222;
    font-weight: 700;
    opacity: 0;
    animation: fadeInUp 1s ease-in-out forwards;
}

/* Service Container */
.service-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    gap: 2rem;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    opacity: 0;
    transform: translateY(20px);
    animation: slideIn 1s ease-in-out forwards 0.3s;
}

/* Left Side (Text) */
.left {
    width: 50%;
    text-align: left;
}

.service-text {
    color: #444;
    font-size: 18px;
    line-height: 1.8;
    margin-bottom: 15px;
    text-align: justify;
    opacity: 0;
    animation: fadeInText 1s ease-in-out forwards 0.5s;
}

/* Right Side (Image) */
.right {
    width: 50%;
    text-align: center;
}

.service-container img {
    width: 100%;
    max-width: 450px;
    height: auto;
    border-radius: 10px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    opacity: 0;
    transform: scale(0.8);
    animation: zoomIn 1s ease-in-out forwards 0.5s;
}

/* CTA Button */
.cta-bttn {
    display: inline-block;
    margin-top: 30px;
    padding: 14px 24px;
    background: #ffcc00;
    color: #222;
    text-decoration: none;
    font-weight: bold;
    font-size: 20px;
    border-radius: 8px;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    opacity: 0;
    animation: fadeIn 1s ease-in-out forwards 0.8s;
}

.cta-bttn:hover {
    background: #ff9f00;
    transform: scale(1.08);
    box-shadow: 0px 6px 18px rgba(255, 165, 0, 0.3);
}

/* Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInText {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes zoomIn {
    from {
        opacity: 0;
        transform: scale(0.8);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

/* Responsive Design */
@media (max-width: 1024px) {
    .service-title {
        font-size: 30px;
    }
    .service-container {
        gap: 1.5rem;
    }
    .service-text {
        font-size: 17px;
    }
    .cta-bttn {
        font-size: 18px;
        padding: 12px 20px;
    }
}

@media (max-width: 768px) {
    .service-title {
        font-size: 26px;
    }
    .service-container {
        flex-direction: column;
        text-align: center;
    }
    .left, .right {
        width: 100%;
    }
    .service-text {
        font-size: 16px;
    }
    .cta-bttn {
        font-size: 16px;
        padding: 10px 18px;
    }
}

@media (max-width: 480px) {
    .service-title {
        font-size: 22px;
    }
    .service-text {
        font-size: 15px;
    }
    .cta-bttn {
        font-size: 14px;
        padding: 8px 16px;
    }
}

@media (max-width: 320px) {
    .service-title {
        font-size: 20px;
    }
    .service-text {
        font-size: 14px;
    }
    .cta-bttn {
        font-size: 13px;
        padding: 8px 14px;
    }
}

</style>
