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
    <a href="#contact" class="cta-btn">Get Your SOP Now</a>
</section>

<style>
    /* General Styling */
    .service-section {
        background: #fff;
        padding: 60px 0;
        text-align: center;
    }

    .service-title {
        font-size: 32px;
        color: #333;
        font-weight: 600;
        opacity: 0;
        animation: fadeInUp 1s ease-in-out forwards;
    }

    .service-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        gap: 1rem;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transform: translateY(20px);
        animation: slideIn 1s ease-in-out forwards 0.3s;
    }

    .left {
        width: 50%;
        text-align: left;
    }

    .service-text {
        color: #555;
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 10px;
        text-align: justify;
        opacity: 0;
        animation: fadeInText 1s ease-in-out forwards 0.5s;
    }

    .right {
        width: 50%;
        text-align: center;
    }

    .service-container img {
        width: 500px;
        height: auto;
        border-radius: 10px;
        opacity: 0;
        transform: scale(0.8);
        animation: zoomIn 1s ease-in-out forwards 0.5s;
    }

    /* CTA Button */
    .cta-btn {
        display: inline-block;
        margin-top: 20px;
        padding: 12px 20px;
        background: #ffcc00;
        color: #333;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
        opacity: 0;
        animation: fadeIn 1s ease-in-out forwards 0.8s;
    }

    .cta-btn:hover {
        background: #ffa500;
        transform: scale(1.05);
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

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
</style>
