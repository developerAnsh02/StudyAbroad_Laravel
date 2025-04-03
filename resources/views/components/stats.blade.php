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
    .stats-section {
        background-color: #e9cd00;
        background-image: linear-gradient(160deg, #e9cd00 0%, #ff9900 100%);
        padding: 60px 20px;
        text-align: center;
        border-radius: 20px;
        max-width: 1200px;
        margin: 40px auto;
        color: black;
    }
    .stats-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        gap: 20px;
    }
    .stat-box {
        background: rgba(255, 255, 255, 0.2);
        padding: 20px;
        border-radius: 10px;
        width: 250px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    .stat-number {
        font-size: 36px;
        font-weight: bold;
        display: block;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const statsSection = document.querySelector("#stats");
        const statsNumbers = document.querySelectorAll(".stat-number");
        let started = false;

        function animateStats() {
            statsNumbers.forEach(stat => {
                const target = +stat.getAttribute("data-target");
                let count = 0;
                const increment = target / 100;

                const updateCount = () => {
                    if (count < target) {
                        count += increment;
                        stat.textContent = Math.ceil(count);
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
            if (sectionPos < window.innerHeight && !started) {
                started = true;
                animateStats();
            }
        }

        window.addEventListener("scroll", checkScroll);
    });
</script>
