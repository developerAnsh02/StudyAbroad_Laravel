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
        transform: translateY(-5px);
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
        display: none;
        padding: 15px;
        background: #fff7ed;
        border: 1px solid #d97706;
        font-size: 16px;
        color: #333;
        line-height: 1.5;
    }

    .faq-item.active .faq-answer {
        display: block;
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
            faqItem.classList.toggle("active");
        });
    });
</script>