<section class="sop-process">
        <h2 class="title">Easy Steps to Get a Perfect SOP</h2>
        <p class="subtitle">A step-by-step approach to crafting a powerful SOP for your visa application.</p>

        <div class="timeline">
            
            <div class="steps">
                <div class="icons"><i class="fas fa-user-edit"></i></div>
                <div class="content">
                    <h3>Step 1: Custom Consultation </h3>
                    <p>We learn about your history, achievements, and career goals to produce an SOP that is most characteristic of you. 
                    </p>
                </div>
            </div>

            <div class="steps">
                <div class="icons"><i class="fas fa-file-alt"></i></div>
                <div class="content">
                    <h3>Step 2: Professional Writing & Editing</h3>
                    <p>We compose an effective SOP using a clear template, solid writing, and formal tone that awes. 
                    </p>
                </div>
            </div>

            <div class="steps">
            <div class="icons"><i class="fas fa-check-circle"></i></div>
                <div class="content">
                    <h3>Step 3: Final Touch-Ups & Punctuation</h3>
                    <p>We edit, touch up, and refine your SOP to perfection and make it submissions-ready.</p>
                </div>
            </div>
        </div>
    </section>

    <style>

/* Section Styling */
.sop-process {
    text-align: center;
    padding: 60px 20px;
    background-color: #fff;
}

.title {
    font-size: 32px;
    color: #333;
    font-weight: 600;
    opacity: 0;
    animation: fadeInUp 1s ease forwards;
}

.subtitle {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 40px;
    opacity: 0;
    animation: fadeInUp 1s ease forwards 0.3s;
}

/* Timeline */
.timeline {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    width: 80%;
    margin: 0 auto;
}

/* Steps */
.steps {
    display: flex;
    align-items: center;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    margin: 20px 0;
    padding: 20px;
    width: 95%;
    /* max-width: 800px; */
    position: relative;
    opacity: 0;
    gap: 10px;
    transform: translateY(20px);
    animation: fadeInUp 1s ease forwards;
}

/* .step:nth-child(even) {
    flex-direction: row-reverse;
} */

.icons {
    background: #ffcc00;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.8rem;
    color: white;
    margin: 0 15px;
}

.icons i {
    color: #222;
}

.content {
    text-align: left;
}

.content h3 {
    font-size: 1rem;
    color: #222;
    margin-bottom: 5px;
}

.content p {
    font-size: 1rem;
    color: #555;
}

/* Fade-In Animation */
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
@media (max-width: 1024px) {
    .title {
        font-size: 28px;
    }
    .subtitle {
        font-size: 1.1rem;
    }
    .steps {
        width: 90%;
        padding: 18px;
    }
}

@media (max-width: 768px) {
    .title {
        font-size: 24px;
    }
    .subtitle {
        font-size: 1rem;
    }
    .timeline {
        width: 100%;
    }
    .steps {
        flex-direction: column;
        text-align: center;
        padding: 15px;
        width: 90%;
    }
    .icons {
        margin: 0 auto 10px auto;
    }
    .content {
        max-width: 100%;
    }
    .content h3 {
        font-size: 1rem;
        text-align: center;
    }
    .content p {
        font-size: 0.9rem;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .title {
        font-size: 20px;
    }
    .subtitle {
        font-size: 0.9rem;
    }
    .steps {
        width: 95%;
        padding: 12px;
        margin: 15px 0;
    }
    .icons {
        width: 50px;
        height: 50px;
        font-size: 1.5rem;
    }
    .content h3 {
        font-size: 0.9rem;
    }
    .content p {
        font-size: 0.85rem;
    }
}

@media (max-width: 320px) {
    .title {
        font-size: 18px;
    }
    .subtitle {
        font-size: 0.85rem;
    }
    .steps {
        padding: 10px;
        margin: 10px 0;
        width: 98%;
    }
    .icons {
        width: 45px;
        height: 45px;
        font-size: 1.4rem;
    }
    .content h3 {
        font-size: 0.85rem;
    }
    .content p {
        font-size: 0.8rem;
    }
}

    </style>