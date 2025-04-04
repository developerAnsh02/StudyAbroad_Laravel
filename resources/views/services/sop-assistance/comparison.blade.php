<section class="comparison-section">
    <h2 class="comparison-title">Good SOP vs. Bad SOP</h2>
    <div class="comparison-container">
        <div class="comparison-column good-sop">
            <h3>✅ Good SOP</h3>
            <ul>
                <li>✔️ Well-structured with a clear flow</li>
                <li>✔️ Personalized and engaging storytelling</li>
                <li>✔️ Strong introduction & impactful conclusion</li>
                <li>✔️ Highlights achievements & career goals</li>
                <li>✔️ Concise and to the point</li>
                <li>✔️ Free from grammatical errors</li>
            </ul>
        </div>
        <div class="comparison-column bad-sop">
            <h3>❌ Bad SOP</h3>
            <ul>
                <li>❌ Poorly organized, lacks coherence</li>
                <li>❌ Generic, lacks a personal touch</li>
                <li>❌ Weak introduction and abrupt ending</li>
                <li>❌ Fails to showcase achievements or aspirations</li>
                <li>❌ Too lengthy or too short</li>
                <li>❌ Full of grammar mistakes</li>
            </ul>
        </div>
    </div>
</section>

<style>
    /* Section Styling */
    .comparison-section {
        background: #f9f9f9;
        padding: 60px 20px;
        text-align: center;
    }


    /* Comparison Box */
    .comparison-container {
        display: flex;
        justify-content: center;
        gap: 30px;
        max-width: 1000px;
        margin: 0 auto;
        opacity: 0;
        animation: fadeIn 1s ease-in-out forwards 0.3s;
    }

    .comparison-column {
        width: 45%;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .comparison-column:hover {
        transform: scale(1.05);
    }

    /* Good SOP Styling */
    .good-sop {
        background: #e3fcef;
        border: 2px solid #34c759;
    }

    .good-sop h3 {
        color: #008000;
    }

    .good-sop ul li {
        color: #333;
        font-size: 16px;
        padding: 8px 0;
        text-align: left;
        list-style: none;
    }

    /* Bad SOP Styling */
    .bad-sop {
        background: #fde8e8;
        border: 2px solid #ff3b30;
    }

    .bad-sop h3 {
        color: #ff0000;
    }

    .bad-sop ul li {
        color: #333;
        font-size: 16px;
        padding: 8px 0;
        text-align: left;
        list-style: none;
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

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    @media (max-width: 1024px) {
    .comparison-title {
        font-size: 28px;
    }
    .comparison-container {
        gap: 20px;
    }
    .comparison-column {
        width: 48%;
        padding: 20px;
    }
}

@media (max-width: 768px) {
    .comparison-title {
        font-size: 24px;
    }
    .comparison-container {
        flex-direction: column;
        align-items: center;
    }
    .comparison-column {
        width: 90%;
        padding: 18px;
        text-align: left;
    }
}

@media (max-width: 480px) {
    .comparison-title {
        font-size: 20px;
    }
    .comparison-column {
        width: 95%;
        padding: 15px;
    }
    .comparison-column h3 {
        font-size: 18px;
    }
    .comparison-column ul li {
        font-size: 14px;
    }
}

@media (max-width: 320px) {
    .comparison-title {
        font-size: 18px;
    }
    .comparison-column {
        width: 98%;
        padding: 12px;
    }
    .comparison-column h3 {
        font-size: 16px;
    }
    .comparison-column ul li {
        font-size: 13px;
    }
}
</style>
