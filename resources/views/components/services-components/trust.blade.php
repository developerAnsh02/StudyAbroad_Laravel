<style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f5f7f8;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            position: relative;
        }

        /* Path styling */
        .path-container {
            position: absolute;
            left: 50%;
            top: 100px;
            bottom: 100px;
            transform: translateX(-50%);
            width: 2px;
            z-index: 1;
        }

        .paths {
            position: absolute;
            width: 100px;
            height: 100%;
            left: -49px;
        }

        /* Section styling */
        .section {
            display: flex;
            gap: 10px;
            margin: 0px 50px;
            align-items: center;
            justify-content: space-between;
            position: relative;
            z-index: 2;
        }

        .section:nth-child(even) {
            flex-direction: row-reverse;
        }

        .section-content {
            width: 45%;
            /* padding: 20px; */
        }

        .section-image {
            width: 45%;
            height: 140px;
            display: flex;
            justify-content: center;
        }

        .section-image img {
            max-width: 100%;
            height: auto;
            max-height: 200px;
            border-radius: 10px;
            object-fit: contain;
        }

        .section-title {
            font-size: 22px;
            color: #1f2937;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .section-description {
            font-size: 16px;
            color: #4b5563;
            text-align: center;
        }

        /* Node styling */
        .node {
            position: absolute;
            width: 16px;
            height: 16px;
            background-color: #1f2937;
            border-radius: 50%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 3;
        }

        .title {
                font-size: 32px;
                color: black;
                font-weight: 600;
                margin-bottom: 60px;
                opacity: 0;
                animation: fadeInUp 1s ease forwards;
            }

        .flip {
            transform: scaleX(-1); /* Flips the image horizontally */
            transition: transform 0.5s ease-in-out;
        }

        .padding-space{
            padding:55px;
        }

        .c-shape {
            width: 200px;
            height: 180px;
            border: 5px solid black;
            border-radius: 50%;
            border-right-color: transparent; 
            border-bottom-color: transparent; 
            transform: rotate(-45deg); 
        }

        .c-shape-flip {
            width: 200px;
            height: 180px;
            border: 5px solid black;
            border-radius: 50%;
            border-left-color: transparent; 
            border-top-color: transparent; 
            transform: rotate(-45deg); 
        }

        .road-canvas {
            width: 200px;
            height: 180px;
            display: block;
            transform: rotate(-90deg); 
        }

        .flip-road {
            transform: rotate(-270deg);
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            .section-description{
                display: none;
            }
        }
        /* Responsive styles */
        @media (max-width: 768px) {
            .section {
                flex-direction: column;
                text-align: center;
                margin-bottom: 0px;
            }

            .section:nth-child(even) {
                flex-direction: column;
            }

            .section-content, .section-image {
                width: 100%;
            }

            .section-image {
                margin-bottom: 20px;
            }

            .path-container {
                display: none;
            }

            .node {
                position: static;
                margin: 0 auto 20px;
                transform: none;
            }
            .title{
                font-size: 28px;
            }
            .padding-space{
                display: none;
            }
            .title{
                margin-bottom: 20px;
            }
        }
    </style>

    <body>
    <div class="container">

        <!-- Title  -->
         <h2 class="title">Your Trusted Partner for a Hassle-Free Student Visa Success!</h2>

        <!-- Section 1 -->
        <div class="section">
            <div class="padding-space"></div>
            <div class="section-image">
                <img src="/images/trusted-comp-img/success_rate.png" alt="image">
            </div>
            <!-- <img src="/images/path.svg" alt="path"> -->

            <!-- <div class="c-shape"></div> -->

            <canvas class="road-canvas"></canvas>

            <div class="section-content">
                <h2 class="section-title">98% Visa Success Rate</h2>
                <p class="section-description">Our expert support ensures a high approval rate, making your journey smooth and stress-free.</p>
            </div>
        </div>

        <!-- Section 2 -->
        <div style="margin-top: -20px;" class="section">
            <div class="padding-space"></div>
            <div class="section-image">
                <img src="/images/trusted-comp-img/visa_assist.png" alt="image">
            </div>
            <!-- <img class="flip" src="/images/path.svg" alt="path"> -->

            <!-- <div class="c-shape-flip"></div> -->

            <canvas class="road-canvas flip-road"></canvas>

            <div class="section-content">
                <h2 class="section-title">Complete Visa Assistance</h2>
                <p class="section-description">From university selection to visa interview prep, we’ve got you covered.</p>
            </div>
        </div>

        <!-- Section 3 -->
        <div style="margin-top: -20px;" class="section">
            <div class="padding-space"></div>
            <div class="section-image">
                <img src="/icons/image.png" alt="image">
            </div>
            <!-- <img src="/images/path.svg" alt="path"> -->

            <!-- <div class="c-shape"></div> -->

            <canvas class="road-canvas"></canvas>

            <div class="section-content">
                <h2 class="section-title">Winning SOPs & Perfect Paperwork</h2>
                <p class="section-description">Professionally crafted SOPs and error-free documentation for a strong application.</p>
            </div>
        </div>

        <!-- Section 4 -->
        <div style="margin-top: -20px;" class="section">
            <div class="padding-space"></div>
            <div class="section-image">
                 <img src="/images/trusted-comp-img/expert_advice.png" alt="image">
            </div>
            <!-- <img class="flip" src="/images/path.svg" alt="path"> -->

             <!-- <div class="c-shape-flip"></div> -->

             <canvas class="road-canvas flip-road"></canvas>

            <div class="section-content">
                <h2 class="section-title">One-on-One Expert Guidance</h2>
                <p class="section-description">Personalized counseling tailored to your dream destination and career goals.</p>
            </div>
        </div>

        <!-- Section 5 -->
        <div style="margin-top: -20px;" class="section">
            <div class="padding-space"></div>
            <div class="section-image">
                <img src="/images/trusted-comp-img/fast_track.png" alt="image">
            </div>
            <!-- <img src="/images/path.svg" alt="path"> -->

             <!-- <div class="c-shape"></div> -->

            <canvas class="road-canvas"></canvas>

            <div class="section-content">
                <h2 class="section-title">Fast-Track, Hassle-Free Process</h2>
                <p class="section-description">Smooth and stress-free visa applications with expert support at every step.</p>
            </div>
        </div>

        <!-- Section 6 -->
        <div style="margin-top: -20px;" class="section">
            <div class="padding-space"></div>
            <div class="section-image">
                <img src="/images/trusted-comp-img/financial_aid.png" alt="image">
            </div>
            <!-- <img class="flip" src="/images/path.svg" alt="path"> -->

             <!-- <div class="c-shape-flip"></div> -->

             <canvas class="road-canvas flip-road"></canvas>

            <div class="section-content">
                <h2 class="section-title">Scholarships & Financial Aid Help</h2>
                <p class="section-description">Unlock funding opportunities and reduce your study expenses.</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            function checkIfInView() {
                const sections = document.querySelectorAll('.section');
                const windowHeight = window.innerHeight;
                
                sections.forEach(section => {
                    const sectionTop = section.getBoundingClientRect().top;
                    
                    if (sectionTop < windowHeight * 0.75) {
                        section.style.opacity = '1';
                    }
                });
            }
            
            // Set initial opacity
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => {
                section.style.opacity = '0';
                section.style.transition = 'opacity 0.5s ease-in-out';
            });
            
            // Check positions on load and scroll
            checkIfInView();
            window.addEventListener('scroll', checkIfInView);
        });

        // Drawing road 
        document.addEventListener('DOMContentLoaded', function () {
    function drawSemicircleRoad(canvas, flip = false) {
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        canvas.width = 200;
        canvas.height = 120;
        
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        if (flip) {
            ctx.translate(canvas.width, 0);
            ctx.scale(-1, 1);
        }

        ctx.beginPath();
        ctx.lineWidth = 8;
        ctx.strokeStyle = "#333"; 
        ctx.arc(100, 100, 80, Math.PI, 2 * Math.PI);
        ctx.stroke();

        ctx.beginPath();
        ctx.setLineDash([10, 10]);
        ctx.strokeStyle = "#fff";
        ctx.lineWidth = 3;
        ctx.arc(100, 100, 80, Math.PI, 2 * Math.PI); 
        ctx.stroke();
        ctx.setLineDash([]);
    }

    document.querySelectorAll('.road-canvas').forEach((canvas, index) => {
        const isFlipped = canvas.classList.contains('flip-road');
        drawSemicircleRoad(canvas, isFlipped);
    });
});



    </script>
</body>