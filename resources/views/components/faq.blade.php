<style>
    .faq-section {
        background: #f9f9f9;
        padding: 40px 20px;
    }

    .section-title {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-bottom: 30px;
        text-transform: uppercase;
    }

    .faq-container {
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 90%;
        margin: 0 auto;
    }

    .faq-item {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .faq-item:hover {
        transform: translateY(-3px);
    }

    .faq-question {
        width: 100%;
        padding: 15px;
        background: #d97706;
        color: #ffffff;
        font-size: 18px;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border: none;
        transition: background 0.3s ease;
    }

    .faq-question:hover {
        background: #b86204;
    }

    .faq-question i {
        transition: transform 0.3s ease;
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        background: #fff7ed;
        border: 1px solid #d97706;
        font-size: 16px;
        color: #333;
        line-height: 1.5;
        padding: 0 15px;
        transition: max-height 0.3s ease-out, padding 0.3s ease-out;
    }

    .faq-item.active .faq-answer {
        max-height: 200px; /* Adjust based on content */
        padding: 15px;
    }

    .faq-item.active .faq-question i {
        transform: rotate(180deg);
    }

    @media (min-width: 768px) {
        .faq-container {
            flex-direction: row;
            flex-wrap: wrap;
            gap: 30px;
        }

        .faq-item {
            flex: 1 1 45%;
            min-width: 300px;
        }
    }
</style>

<section class="faq-section">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <div class="faq-container">
        @foreach($faqs as $faq)
            <div class="faq-item">
                <button class="faq-question">
                    <span>{{ $faq->question }}</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div class="faq-answer">{{ $faq->answer }}</div>
            </div>
        @endforeach
    </div>
</section>

<script>
    document.querySelectorAll(".faq-question").forEach((button) => {
        button.addEventListener("click", () => {
            const faqItem = button.parentElement;
            const isOpen = faqItem.classList.contains("active");

            // Close all FAQs
            document.querySelectorAll(".faq-item").forEach((item) => {
                item.classList.remove("active");
            });

            // If it was not open, open this one
            if (!isOpen) {
                faqItem.classList.add("active");
            }
        });
    });
</script>
