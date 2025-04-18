<style>
        
        .trust-container {
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
            /* margin-top: -34px; */
            margin-top: 30px;
            z-index: 2;
        }

        .section:nth-child(odd) {
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
        }

        .section-image img {
            max-width: 60%;
            height: auto;
            max-height: 200px;
            border-radius: 10px;
            object-fit: cover;
        }

        .section-title {
            font-size: 19px;
            color: #1f2937;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .section-description {
            font-size: 13px;
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
            padding:26px;
        }

        .road-canvas {
            position: relative;
            width: 255px;
            height: 150px;
            /* width: 146px;
            height: 108px; */
            display: block;
            opacity: 0;
            transform: rotate(-90deg); 
        }

        .flip-road {
            transform: rotate(-270deg);
        }

        .numbering{
            position: absolute;
            top: 39%;
            left: 47%;
        }

        .numbering-block{
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 20px;
            font-weight: 800;

            height:60px;
            width: 60px;
        }
        .violet{
            background-color: #9259ec;
            color: white;
        }

        .indigo{
            background-color: #97cc42;
            color: white;
        }

        .green{
            background-color: #f8bc31;
            color: white;
        }

        .yellow{
            background-color: #67c1ff;
            color: white;
        }

        .orange{
            background-color: #ff529b;
            color: white;
        }
        .red{
            background-color: #31bd78;
            color: white;
        }

        #road-object {
    position: absolute;
    top: 10px;

    z-index: 10;
    transition: transform 0.5s ease;
    pointer-events: none;
}
#road-object img{
    height: 100px;
    width: 100px;

}


        @media (min-width: 768px) and (max-width: 1024px) {
            .section-description{
                display: none;
            }
            .section-image img{
                max-width: 100%;
            }
        }
        /* Responsive styles */
        @media (max-width: 768px) {
            /* .section {
                flex-direction: column;
                text-align: center;
                margin-bottom: 0px;
            }

            .section:nth-child(even) {
                flex-direction: column;
            } */

            .section-content, .section-image {
                width: 100%;
            }
            .section {
                display: flex;
                gap: 0px;
                margin: 0px 0px;
                align-items: center;
                justify-content: space-between;
                position: relative;
                /* margin-top: -64px; */
                /* margin-top: -40px; */
                margin-top: -28px;
                z-index: 2;
            }

            .section-image {
                display: flex;
                align-items: center;
                margin-bottom: 20px;
            }
            
            .section-image img {
                max-width: 100%;
                max-height: 100px;
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
                padding: 3px;
            }
            .title{
                margin-bottom: 20px;
            }
            .section-description{
                display: none;
            }
            .section-title {
                font-size: 15px;
                color: #1f2937;
                font-weight: bold;
            }
            .extra-space{
                padding: 20px;
            }
            .numbering{
                top: 30%;
                left: 41%;
            }
            .hide{
                display: none;
            }
            #road-object img{
                height: 60px;
                width: 60px;
            }
            .road-canvas{
                opacity: 1;
            }
        }
</style>

<section>
    <div class="trust-container">

        <!-- Title  -->
         <h2 class="title">Your Trusted Partner for a Hassle-Free Student Visa Success!</h2>

         <div id="road-object">
            <img src="/images/vecteezy_walking-man-in-orange-hoodie-and-backpack_56099201.png" alt="image">
         </div>

        <div class="extra-space"></div>
        <!-- Section 1 -->
        <div class="section">
            <div class="numbering">
                <div class="numbering-block orange">1</div>
            </div>
            <div class="padding-space"></div>
            <div style="justify-content: right;" class="section-image">
                <img src="/images/trusted-comp-img/success_rate.png" alt="image">
            </div>
            <!-- <img src="/images/path.svg" alt="path"> -->
             <img class="hide" style = "height: 250px; position: absolute; left:49%; top:-25px;" src="/images/trusted-comp-img/orangecurve.png" alt="image">

            <!-- <canvas class="road-canvas"></canvas> -->
             <canvas class="road-canvas flip-road"></canvas>

            <div class="section-content">
                <h2 class="section-title">98% Visa Success Rate</h2>
                <p class="section-description">Our expert support ensures a high approval rate, making your journey smooth and stress-free.</p>
            </div>
        </div>

        <!-- Section 2 -->
        <div style=" " class="section">
            <div class="numbering">
                <div class="numbering-block indigo">2</div>
            </div>
            <div class="padding-space"></div>
            <div style="justify-content: left;" class="section-image">
                <img src="/images/trusted-comp-img/visa_assist.png" alt="image">
            </div>
            <!-- <img class="flip" src="/images/path.svg" alt="path"> -->
            <!-- <img class="flip hide" style = "height: 250px; position: absolute; left:37%; top:-29.5px;" src="/images/trusted-comp-img/orangecurve.png" alt="image"> -->
            <img class="flip hide" style = "height: 250px; position: absolute; left:34%; top:-34.5px;" src="/images/trusted-comp-img/orangecurve.png" alt="image">

            <!-- <canvas class="road-canvas flip-road"></canvas> -->
             <canvas class="road-canvas"></canvas>

            <div class="section-content">
                <h2 class="section-title">Complete Visa Assistance</h2>
                <p class="section-description">From university selection to visa interview prep, we’ve got you covered.</p>
            </div>
        </div>

        <!-- Section 3 -->
        <div style=" " class="section">
            <div class="numbering">
                <div class="numbering-block green">3</div>
            </div>
            <div class="padding-space"></div>
            <div style="justify-content: right;" class="section-image">
                <!-- <img src="/images/trusted-comp-img/paperwork.png" alt="image"> -->
                 <img src="/icons/image.png" alt="image">
            </div>
            <!-- <img class="hide" style = "height: 250px; position: absolute; left:49%; top:-34px;" src="/images/trusted-comp-img/orangecurve.png" alt="image"> -->
            <img class="hide" style = "height: 250px; position: absolute; left:49%; top:-44px;" src="/images/trusted-comp-img/orangecurve.png" alt="image">
            <!-- <img src="/images/path.svg" alt="path"> -->

            <!-- <canvas class="road-canvas"></canvas> -->
             <canvas class="road-canvas flip-road"></canvas>

            <div class="section-content">
                <h2 class="section-title">Winning SOPs & Perfect Paperwork</h2>
                <p class="section-description">Professionally crafted SOPs and error-free documentation for a strong application.</p>
            </div>
        </div>

        <!-- Section 4 -->
        <div style=" " class="section">
            <div class="numbering">
                <div class="numbering-block yellow">4</div>
            </div>
            <div class="padding-space"></div>
            <div style="justify-content: left;" class="section-image">
                 <img src="/images/trusted-comp-img/expert_advice.png" alt="image">
            </div>
            <!-- <img class="flip hide" style = "height: 250px; position: absolute; left:37%; top:-38.5px;" src="/images/trusted-comp-img/orangecurve.png" alt="image"> -->
            <img class="flip hide" style = "height: 250px; position: absolute; left:34%; top:-53.5px;" src="/images/trusted-comp-img/orangecurve.png" alt="image">
            <!-- <img class="flip" src="/images/path.svg" alt="path"> -->

             <!-- <canvas class="road-canvas flip-road"></canvas> -->
              <canvas class="road-canvas"></canvas>

            <div class="section-content">
                <h2 class="section-title">One-on-One Expert Guidance</h2>
                <p class="section-description">Personalized counseling tailored to your dream destination and career goals.</p>
            </div>
        </div>

        <!-- Section 5 -->
        <div style=" " class="section">
            <div class="numbering">
                <div class="numbering-block violet">5</div>
            </div>
            <div class="padding-space"></div>
            <div style="justify-content: right;" class="section-image">
                <img src="/images/trusted-comp-img/fast_track.png" alt="image">
            </div>
            <!-- <img class="hide" style = "height: 250px; position: absolute; left:49%; top:-43px;" src="/images/trusted-comp-img/orangecurve.png" alt="image"> -->
            <img class="hide" style = "height: 250px; position: absolute; left:49%; top:-63px;" src="/images/trusted-comp-img/orangecurve.png" alt="image">
            <!-- <img src="/images/path.svg" alt="path"> -->

            <!-- <canvas class="road-canvas"></canvas> -->
             <canvas class="road-canvas flip-road"></canvas>

            <div class="section-content">
                <h2 class="section-title">Fast-Track, Hassle-Free Process</h2>
                <p class="section-description">Smooth and stress-free visa applications with expert support at every step.</p>
            </div>
        </div>

        <!-- Section 6 -->
        <div style=" " class="section">
            <div class="numbering">
                <div class="numbering-block red">6</div>
            </div>
            <div class="padding-space"></div>
            <div style="justify-content: left;" class="section-image">
                <img src="/images/trusted-comp-img/financial_aid.png" alt="image">
            </div>
            <!-- <img class="flip hide" style = "height: 250px; position: absolute; left:37%; top:-47.5px;" src="/images/trusted-comp-img/orangecurve.png" alt="image"> -->
            <img class="flip hide" style = "height: 250px; position: absolute; left:34%; top:-72.5px;" src="/images/trusted-comp-img/orangecurve.png" alt="image">
            <!-- <img class="flip" src="/images/path.svg" alt="path"> -->

             <!-- <canvas class="road-canvas flip-road"></canvas> -->
              <canvas class="road-canvas "></canvas>

            <div class="section-content">
                <h2 class="section-title">Scholar-ships & Financial Aid Help</h2>
                <p class="section-description">Unlock funding opportunities and reduce your study expenses.</p>
            </div>
        </div>
    </div>
</section>

<script>
        document.addEventListener('DOMContentLoaded', function () {
            function checkIfInView() {
                const sections = document.querySelectorAll('.section');
                const windowHeight = window.innerHeight;

                sections.forEach(section => {
                    const sectionTop = section.getBoundingClientRect().top;
                    const sectionBottom = section.getBoundingClientRect().bottom;

                    if (sectionTop < windowHeight * 0.88 && sectionBottom > 0) {
                        section.style.opacity = '1';
                    } else {
                        section.style.opacity = '0';
                    }
                });
            }

            // Set initial opacity and transition
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
        const isMobile = window.innerWidth <= 768;

        canvas.width = isMobile ? 192 : 220;
        canvas.height = isMobile ? 180 : 120;

        ctx.clearRect(0, 0, canvas.width, canvas.height);

        if (flip) {
            ctx.translate(canvas.width, 0);
            ctx.scale(-1, 1);
        }

        ctx.beginPath();
        ctx.lineWidth = 25;
        ctx.strokeStyle = "#fca503";
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

    function updateCanvasSize() {
        document.querySelectorAll('.road-canvas').forEach((canvas) => {
            const isFlipped = canvas.classList.contains('flip-road');
            drawSemicircleRoad(canvas, isFlipped);
        });
    }

    updateCanvasSize();
    window.addEventListener('resize', updateCanvasSize);

    const roadObject = document.getElementById('road-object');
    const sections = document.querySelectorAll('.section');

    function moveObjectAlongArc(canvas, flip = false) {
    if (!canvas) return;

    const isMobile = window.innerWidth <= 768;
    const trustContainer = document.querySelector('.trust-container');
    const containerTop = trustContainer.getBoundingClientRect().top + window.scrollY;

    const canvasRect = canvas.getBoundingClientRect();
    const scrollY = window.scrollY || window.pageYOffset;
    const canvasTop = canvasRect.top + scrollY - containerTop;

    const radius = 80;
    const centerX = canvas.offsetLeft + 100;
    const centerY = canvasTop ;

    let progress = 0;
    const duration = 1;
    const start = performance.now();

    function animate(time) {
        const elapsed = time - start;
        progress = Math.min(elapsed / duration, 1);

        const angle = (Math.PI - 1) + progress * Math.PI;
        const x = centerX + radius * Math.cos(angle) * (flip ? 1 : -1);
        const y = centerY + radius * Math.sin(angle);

        if(isMobile){
            roadObject.style.transform = `translate(${x - 80}px, ${y + 40}px)`; 
        } else{
            roadObject.style.transform = `translate(${x + 20}px, ${y + 50}px)`; 
        }

        if (progress < 1) {
            requestAnimationFrame(animate);
        }
    }

    requestAnimationFrame(animate);
}


    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const canvas = entry.target.querySelector('canvas.road-canvas');
                const isFlipped = canvas.classList.contains('flip-road');
                moveObjectAlongArc(canvas, isFlipped);
            }
        });
    }, {
        threshold: 0.6
    });

    sections.forEach(section => observer.observe(section));
});


</script>