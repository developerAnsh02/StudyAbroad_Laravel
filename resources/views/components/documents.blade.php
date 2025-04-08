<section class="tab-section">
    <div class="tab-container">
        <div class="tabs">
            <button class="tab-button active" data-tab="guide">Step by Step Guide for Registration</button>
            <button class="tab-button" data-tab="documents">Documents Required</button>
        </div>

        <div class="tab-content-box">
            <div class="tab-content active" id="documents">
                <h3>Documents required to study in the UK</h3>
                <p>Some common documents that international students typically need when applying for a course in the UK:</p>
                <ul>
                    @foreach ($documents as $item)
                        <li>{!! $item !!}</li>
                    @endforeach
                </ul>
                <button class="consult-button">Free Expert Consultation</button>
            </div>

            <div class="tab-content" id="guide">
                <h3>Visa requirements to study in the UK</h3>
                <p>Here are the basic requirements you need to fulfill for obtaining a UK Student Visa:</p>
                <ul>
                    @foreach ($visa as $item)
                        <li>{!! $item !!}</li>
                    @endforeach
                </ul>
                <button class="consult-button">Free Expert Consultation</button>
            </div>
        </div>
    </div>
</section>

<style>
  .tab-section {
    padding: 60px 20px;
    background-color: #f9f9f9;
    font-family: 'Segoe UI', sans-serif;
}

.tab-container {
    max-width: 900px;
    margin: 0 auto;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    transition: all 0.3s ease-in-out;
}

.tabs {
    display: flex;
    justify-content: center;
    background-color: #f0f0f0;
    border-bottom: 1px solid #e0e0e0;
    flex-wrap: wrap;
}

.tab-button {
    flex: 1 1 auto;
    padding: 15px 25px;
    background: transparent;
    border: none;
    font-weight: 600;
    color: #555;
    cursor: pointer;
    transition: background 0.3s, color 0.3s;
    position: relative;
}

.tab-button.active {
    background: #fff;
    color: #ffa500;
    border-bottom: 3px solid #ffa500;
    z-index: 2;
}

.tab-button:hover {
    background-color: #e0e0e0;
}

.tab-content-box {
    padding: 30px 25px;
}

.tab-content {
    display: none;
    animation: fadeIn 0.5s ease-in-out;
}

.tab-content.active {
    display: block;
}

.tab-content h3 {
    font-size: 22px;
    color: #1a1a1a;
    margin-bottom: 10px;
}

.tab-content p {
    color: #555;
    margin-bottom: 20px;
    line-height: 1.6;
}

.tab-content ul {
    padding-left: 20px;
    list-style-type: disc;
    color: #333;
    margin-bottom: 20px;
}

.tab-content ul li {
    margin-bottom: 10px;
    line-height: 1.6;
}

.consult-button {
    background-color: #ffa500; /* Base orange */
    color: #fff;
    border: none;
    padding: 12px 25px;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    animation: float 2s infinite ease-in-out;
}

.consult-button:hover {
    background-color: #e69500; /* Slightly darker orange */
    transform: scale(1.05);
}

/* Floating animation */
@keyframes float {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-5px);
    }
    100% {
        transform: translateY(0px);
    }
}


@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .tabs {
        flex-direction: column;
    }

    .tab-button {
        text-align: center;
        font-size: 16px;
    }

    .tab-content-box {
        padding: 20px 15px;
    }

    .tab-content h3 {
        font-size: 20px;
    }
}

</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabButtons = document.querySelectorAll(".tab-button");
        const tabContents = document.querySelectorAll(".tab-content");

        tabButtons.forEach(button => {
            button.addEventListener("click", () => {
                tabButtons.forEach(btn => btn.classList.remove("active"));
                tabContents.forEach(tab => tab.classList.remove("active"));

                button.classList.add("active");
                document.getElementById(button.dataset.tab).classList.add("active");
            });
        });
    });
</script>
