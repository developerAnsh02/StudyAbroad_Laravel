<div class="study-abroad-container">
    <div class="study-abroad-content">
        <h2>Begin Your Study Abroad Adventure!</h2>
        <p>Get expert guidance from the leading consultants for admissions to prestigious universities and colleges worldwide.</p>
        <a href="tel:+1234567890" class="cta-button">📞 GIVE A MISSED CALL</a>
    </div>
    <div class="study-abroad-image">
        <img src="/images/cta-img.webp" loading="lazy"  alt="Study Abroad">
    </div>
</div>

<style>
    /* Main Container */
    .study-abroad-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #fff;
        border-radius: 15px;
        padding: 25px;
        box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px;
        margin: 20px auto;
        width: 70%;
        gap: 20px;
    }

    /* Content */
    .study-abroad-content {
        max-width: 50%;
    }

    .study-abroad-content h2 {
        font-size: 26px;
        color: #1d263b;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .study-abroad-content p {
        font-size: 16px;
        color: #555;
        line-height: 1.6;
        margin-bottom: 18px;
    }

    /* CTA Button */
    .cta-button {
        display: inline-block;
        background: #f47c20;
        color: #fff;
        padding: 12px 22px;
        font-size: 15px;
        font-weight: bold;
        text-decoration: none;
        border-radius: 6px;
        transition: all 0.3s ease-in-out;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
    }

    .cta-button:hover {
        background: #e6691e;
        transform: scale(1.05);
    }

    /* Image */
    .study-abroad-image {
        max-width: 50%;
        display: flex;
        justify-content: center;
    }

    .study-abroad-image img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }

    /* Responsive Design */
    @media (max-width: 900px) {
        .study-abroad-container {
            flex-direction: column;
            text-align: center;
            width: 90%;
            padding: 20px;
        }

        .study-abroad-content {
            max-width: 100%;
        }

        .study-abroad-image {
            max-width: 80%;
            margin-top: 15px;
        }

        .cta-button {
            font-size: 16px;
            padding: 10px 18px;
        }
    }

    @media (max-width: 480px) {
        .study-abroad-content h2 {
            font-size: 22px;
        }

        .study-abroad-content p {
            font-size: 14px;
        }

        .study-abroad-image {
            max-width: 100%;
        }

        .cta-button {
            font-size: 14px;
            padding: 8px 16px;
        }
    }
</style>
