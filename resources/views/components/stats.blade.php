<section id="stats" class="stats-section">
    <div class="stats-container">
        <div class="stat-box">
            <span class="stat-number" data-target="7500">0</span>+
            <p>Happy & Satisfied Students</p>
        </div>
        <div class="stat-box">
            <span class="stat-number" data-target="850">0</span>+
            <p>Top-Ranked Universities</p>
        </div>
        <div class="stat-box">
            <span class="stat-number" data-target="400">0</span>+
            <p>Experienced Education Consultants</p>
        </div>
        <div class="stat-box">
            <span class="stat-number" data-target="12">0</span>+
            <p>Years of Proven Expertise</p>
        </div>
    </div>
</section>

<style>
    /* Section Styling */
    .stats-section {
        background-color: #e9cd00;
        background-image: linear-gradient(160deg, #e9cd00 0%, #ff9900 100%);
        padding: 60px 20px;
        text-align: center;
        border-radius: 20px;
        width: 80%;
        margin: 40px auto;
        color: black;
    }

    /* Stats Container */
    .stats-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    /* Individual Stat Box */
    .stat-box {
        background: rgba(255, 255, 255, 0.3);
        padding: 20px;
        border-radius: 10px;
        width: 250px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .stat-box:hover {
        transform: scale(1.05);
    }

    .stat-number {
        font-size: 36px;
        font-weight: bold;
        display: block;
        color: #1d263b;
    }

    .stat-box p {
        font-size: 18px;
        font-weight: 500;
        margin-top: 5px;
    }

    /* Responsive Design */
    @media (max-width: 900px) {
        .stats-container {
            gap: 15px;
        }

        .stat-box {
            width: 200px;
        }

        .stat-number {
            font-size: 32px;
        }

        .stat-box p {
            font-size: 16px;
        }
    }

    @media (max-width: 600px) {
        .stats-container {
            flex-direction: column;
            align-items: center;
        }

        .stat-box {
            width: 90%;
        }

        .stat-number {
            font-size: 28px;
        }

        .stat-box p {
            font-size: 14px;
        }
    }

    @media (max-width: 400px) {
        .stat-number {
            font-size: 24px;
        }

        .stat-box p {
            font-size: 13px;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const statsSection = document.querySelector("#stats");
        const statsNumbers = document.querySelectorAll(".stat-number");
        let hasAnimated = false;

        function animateStats() {
            statsNumbers.forEach(stat => {
                const target = +stat.getAttribute("data-target");
                let count = 0;
                const step = Math.ceil(target / 50); // Smoother incrementing

                const updateCount = () => {
                    if (count < target) {
                        count += step;
                        stat.textContent = count > target ? target : count;
                        requestAnimationFrame(updateCount);
                    } else {
                        stat.textContent = target;
                    }
                };
                updateCount();
            });
        }

        function checkScroll() {
            const sectionPos = statsSection.getBoundingClientRect().top;
            if (sectionPos < window.innerHeight - 50 && !hasAnimated) {
                hasAnimated = true;
                animateStats();
            }
        }

        window.addEventListener("scroll", checkScroll);
        checkScroll(); // Run check in case user starts halfway down the page
    });
</script>
