@extends('layouts.app')
@section('content')

<section class="hero">
    <div class="hero-overlay"></div>
        <div class="hero-content-wrapper">
            <!-- Hero Content -->
            <div class="hero-content">
                <div class="plane-container">
                    <img src="assets/plane.png" alt="Aeroplane" class="plane">
                </div>

                <h1>Your Gateway to Hassle-Free Travel</h1>
                <p>Get expert visa assistance and make your travel dreams a reality.</p>
                <div class="cta-buttons">
                    <a href="#services" class="btn">Learn More</a>
                    <a href="contact.html" class="btn-secondary">Contact Us</a>
                </div>

            </div>
            <!-- Registration Form -->
            <div class="registration-form">
                <h2>Register for Visa Assistance</h2>
                <form id="registrationForm">
                    <div class="form-group">
                        <input type="text" id="name" name="name" required placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="tel" id="phone" name="phone" required placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" required placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" id="country" name="country" required placeholder="Your Country">
                    </div>
                    <div class="form-group">
                        <input type="text" id="visa-country" name="visa_country" required
                            placeholder="Visa Required Country">
                    </div>
                    <div class="form-group">
                        <select id="visa-type" name="visa_type" required>
                            <option value="" disabled selected>Select Visa Type</option>
                            <option value="Tourist Visa">Tourist Visa</option>
                            <option value="Work Visa">Work Visa</option>
                            <option value="Student Visa">Student Visa</option>
                            <option value="Business Visa">Business Visa</option>
                        </select>
                    </div>
                    <button type="submit" class="submit-btn">Submit</button>
                </form>
            </div>
        </div>
        <div class="globe-container">
            <img src="/assets/PinClipart.com_travel-clipart_290936.png" alt="Globe" class="globe">
        </div>
    </section>

    <section class="section-hero">
        <div class="destination">
            <h2>Find Your Study Destination</h2>
            <p>WTS Visa Consultancy assists you in selecting the optimum study destination as per your preferences, budget
                and aspirations. We assist you on academics, lifestyle, and work scope in destinations like the US, UK,
                Europe, and Asia, making your study abroad journey rich and fruitful.</p>
            <div class="path">
                <div class="step">
                    <div class="step-content">
                        <div class="step-title">Top Countries for Higher Education</div>
                        <p>We guide you to study in top locations like the US for Ivy League schools, the UK for academic
                            excellence, Canada for affordability and job opportunities, Australia for lifestyle, and Germany
                            for tuition-free education. We align your aspirations with the ideal study destination, ensuring
                            your long-term success.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-content">
                        <div class="step-title">Compare Universities & Programs</div>
                        <p>Choosing the right university and program shapes your future. At WTS Visa Consultancy, we help
                            you compare options based on international reputation, career prospects, and personal
                            preferences.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-content">
                        <div class="step-title">Scholarship & Financial Aid Support</div>
                        <p>We assist in locating scholarships, grants, work-study jobs, and low-interest loans. Our support
                            ensures you meet all requirements and study stress-free with financial aid.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-content">
                        <div class="step-title">Pre-Departure Training & Orientation</div>
                        <p>Our training covers culture, lifestyle, and academic expectations, along with practical guidance
                            on finances, healthcare, and communication. We ensure you're prepared for your new environment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="visa-services" id="visa-services">
        <div class="container">
            <h2 class="section-title">Smooth Transition to Your New Country</h2>
            <p>At WTS Visa Consultancy, we assist you to settle in abroad. From housing and transportation to medical care
                and local way of life, we have it all covered. Our assistance enables you to settle down, get connected with
                other students and settle down fast so you can study with confidence.</p>
            <div class="visa-service-cards">
                <!-- Tourist Visa -->
                <div class="visa-service-card">
                    <img src="icons/icons8-tourist-pulsar-color/icons8-tourist-96.png" alt="Tourist Visa">
                    <div class="service-content">
                        <h3>Accommodation & Travel</h3>
                        <p class="normal-content" data-id="1">Explore the world with ease! Our tourist visa services ensure
                            a smooth and stress-free Securing the correct accommodation is a sure-fire way to enjoy a
                            stress-free study abroad experience. With WTS Visa Consultancy, we assist you in considering
                            cost.</p>
                        <p class="all-content" data-id="1" style="display: none;">Securing the correct accommodation is a
                            sure-fire way to enjoy a stress-free study abroad experience. With WTS Visa Consultancy, we
                            assist you in considering cost, location and facilities for both on-campus and off-campus stays.
                            Our experts also assist with travel arrangements, such as flight reservations and airport
                            pickups, to ensure you get here hassle-free. Our experts advise visa advice you on local
                            transportation and rental contracts so that you don't encounter any housing problems. Some of
                            the universities provide airport pick-up facilities and we assist you in arranging the same.
                            With proper accommodation and travel assistance you can settle down and concentrate on your
                            studies and personal objectives.</p>
                        <a class="learn-more" onclick="learnmoreSection(1)">Learn More →</a>
                    </div>
                </div>

                <!-- Travel Visa -->
                <div class="visa-service-card">
                    <img src="icons/icons8-tour-pulsar-color/icons8-tour-96.png" alt="Travel Visa">
                    <div class="service-content">
                        <h3>Health Insurance & Safety Advice</h3>
                        <p class="normal-content" data-id="2">Health insurance is essential to protect yourself from
                            unexpected medical costs. At WTS Visa Consultancy, we help you choose the right insurance plan
                            that meets your destination's requirements and covers medical treatments and emergencies.</p>
                        <p class="all-content" data-id="2" style="display: none;">Health insurance is essential to protect
                            yourself from unexpected medical costs. At WTS Visa Consultancy, we help you choose the right
                            insurance plan that meets your destination's requirements and covers medical treatments and
                            emergencies. We also guide you on accessing local healthcare and how to use your insurance. Our
                            safety tips cover campus and city safety, dealing with emergencies and knowledge of local laws.
                            Having knowledge of where to seek medical and mental health assistance visa application help
                            provides reassurance. With the right health and safety precautions you can study without
                            concern.</p>
                        <a class="learn-more" onclick="learnmoreSection(2)">Learn More →</a>
                    </div>
                </div>
                <div class="visa-service-card">
                    <img src="icons/icons8-tour-pulsar-color/icons8-tour-96.png" alt="Travel Visa">
                    <div class="service-content">
                        <h3>Work & Internship Opportunities</h3>
                        <p class="normal-content" data-id="3">Part time job while studying abroad enhances your professional
                            career and contributes to your costs. We explain work permit laws and employment conditions to
                            you at WTS Visa Consultancy. Part time while studying and full time during holidays </p>
                        <p class="all-content" data-id="3" style="display: none;">Part time job while studying abroad
                            enhances your professional career and contributes to your costs. We explain work permit laws and
                            employment conditions to you at WTS Visa Consultancy. Part time while studying and full time
                            during holidays are permitted by most countries and we assist you in visa application assistance
                            getting such opportunities. We link you to university career guidance and local companies for
                            internships and part time employment. Our professionals assist you in building a solid resume
                            and cover letter specific to local requirements. Work-life balance improves your career and
                            provides you with economic freedom, an enriching global experience.</p>
                        <a class="learn-more" onclick="learnmoreSection(3)">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function learnmoreSection(section) {
            // Hide all normal and all-content sections
            document.querySelectorAll('.normal-content, .all-content').forEach(content => {
                content.style.display = content.classList.contains('normal-content') ? 'block' : 'none';
            });

            // Show the selected all-content and hide normal-content
            document.querySelector(`.normal-content[data-id="${section}"]`).style.display = 'none';
            document.querySelector(`.all-content[data-id="${section}"]`).style.display = 'block';
        }
    </script>





    <section id="services" class="services">
        <h2>Why <span>Choose Us?</span></h2>
        <p>WTS Visa Consultancy has served thousands of student visa application in realizing their dreams of overseas
            studies. Ranging from institution selection to life after arrival, we provide guidance and accurate facts
            through strong alliance with leading institutes. Our distinguished record guarantees stress-free experience to
            ensure you obtain your academic accomplishments confidently.</p>
        <div class="card">
            <img src="icons/quality.png" alt="Global Edge">
            <div>
                <h3>10+ Years of Study Abroad Experience</h3>
                <p>With over a decade of experience, WTS Visa Consultancy knows what international students face. Our
                    consultants remain aware of university admissions, visa regulations and scholarship opportunities to
                    provide you with the latest information. We have established good relationships with leading
                    universities in order to assist students in identifying the most appropriate program for their
                    aspirations. We have experience in dealing with complicated applications and visa process to make it go
                    as smoothly as possible. Thousands of successful placements are a reflection of our success in placing
                    students in the appropriate opportunities. With us, you can go through the study abroad process with
                    confidence and attain your academic objectives.</p>
            </div>
        </div>
        <hr>
        <div class="card">
            <img src="icons/graduation.png" alt="Choice">
            <div>
                <h3>Thousands of Students Placed in Top Universities</h3>
                <p>We have placed thousands of students in top universities in US, UK, Canada, Australia and other
                    countries. It is through understanding each of our students' academic past and professional future that
                    we become successful. We support you to make good application submissions, assist with exams, and get
                    the visa to secure admissions. By giving close attention and strategic assistance, we produce good
                    success ratios. Successful student testimonials indicate the extent to which our services were of value
                    in enhancing their student life and careers. With us, you can get into a top university and get the most
                    out of your study abroad experience.</p>
            </div>
        </div>
        <hr>
        <div class="card">
            <img src="icons/trust.png" alt="Top Universities">
            <div>
                <h3>Parents & Students Worldwide Trust Us</h3>
                <p>Parents from around the world trust WTS Visa Consultancy due to our guaranteed results and transparent
                    process. We know parents worry about safety, money and future careers. We address these concerns student
                    visa processing with straight-forward advice and constant support. We inform parents at every step so
                    they can trust in their child's progress. Our high success rate in scholarships and placements is
                    evidence of our dependability and professionalism. Parents' and students' testimonials indicate the
                    positive effect of our services. Trust us and enjoy peace of mind and a seamless transition for students
                    and their families and ensure the study abroad experience is successful and rewarding. </p>
            </div>
        </div>
    </section>

    <x-global-partner/>

    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">Start Your Journey Today!</h2>
            <p class="section-description">Start with WTS Visa Consultancy today. Plan ahead to research options, enhance
                your application and find funding. Our consultants will assist you to hit deadlines, study for exams and
                coordinate documents effortlessly. With a plan you can confidently realize your academic aspirations.</p>
            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card">
                    <img src="icons/icons8-program-pulsar-color/icons8-program-96.png" alt="Programs">
                    <h3>Schedule a Free Consultation with Our Experts</h3>
                    <p>The initial step to begin your study abroad process is booking a complimentary consultation with WTS
                        Visa Consultancy. Our experts will evaluate your academic record, career aspirations and budget to
                        suggest the most appropriate universities and programs. We will advise you on application
                        procedures, visa process and scholarships. Our consultants will assist you in designing a study plan
                        so you meet deadlines and submit a strong application. You may ask questions and clarify any
                        ambiguity regarding the process. This step will provide you with a proper direction and more chances
                        of success. Book your free consultation now!</p>
                </div>
                <!-- Service 2 -->
                <div class="service-card">
                    <img src="icons/icons8-consultation-pulsar-color/icons8-consultation-96.png" alt="Consultation">
                    <h3>Join Our Free Study Abroad Webinars</h3>
                    <p>Our free study abroad webinars are interactive and informative sessions for students. Organized by
                        our expert consultants, these webinars deal with university choice, application techniques, visa
                        procedure and finance avenues. You get to know about best places to go, studies to expect and career
                        opportunities. You can raise questions and receive real time solutions. Guest lecturers, some of
                        whom are successful alumni will provide you with insights and advice. These webinars will make you
                        informed and assured in the process. Don't miss this chance to learn from professionals and increase
                        your opportunities of getting admission and funding for your study abroad experience.</p>
                </div>
                <!-- Service 3 -->
                <div class="service-card">
                    <img src="icons/icons8-application-pulsar-color/icons8-application-96.png" alt="Application">
                    <h3>Read Success Stories from Students Like You</h3>
                    <p>Listening to other students can motivate you to follow your own dreams. At WTS Visa Consultancy, we
                        have assisted thousands of students in getting into top universities across the globe. Our success
                        stories tell you about the difficulties they encountered and how our expert advice allowed them to
                        overcome them. Learning about their experience will provide you with hands-on information student
                        immigration consultant about the application process, scholarships and settling into a new country.
                        Success stories will also demonstrate how international education produces exhilarating career
                        prospects and personal development. Let their stories inspire you to move forward to your study
                        abroad aspiration.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="our-services">
            <x-our-services />
    </section>

    @php
        $faqs = [
            (object) ['question' => '1.	How Do I Select the Best Country to Study Abroad?', 'answer' => 'Your academic objective, career aspirations and personal interest depend on selecting the best destination. Investigate the standard of education, cost of living and overall culture of every nation. Approach an expert and get your choices aligned with your long-term professional objectives.'],
            (object) ['question' => '2.	What Are the Preconditions for Studying Abroad?', 'answer' => 'Admission criteria differ by country and institution. Typical requirements are academic transcripts, language proficiency tests (such as IELTS or TOEFL), and statement of purpose and recommendation letters. Some programs will also require entrance exams.'],
            (object) ['question' => '3.	How Can I Apply for Scholarships?', 'answer' => 'Begin by investigating scholarship opportunities provided by universities, governments and private agencies. Read and fully understand the eligibility requirements and timelines. Develop a good application with a good personal statement and supporting materials.'],
            (object) ['question' => '4.	Which Country Is Best for My Studies Abroad?', 'answer' => 'Cost differs according study visa apply to country, university and lifestyle. Fees cost between a few thousand to tens of thousands of dollars per year. Living accommodation, eating, travelling and insurance are other costs. Scholarships and student financial aid may minimize the cost.'],
            (object) ['question' => '5.	How Much Does it Cost?', 'answer' => 'Cost differs according study visa apply to country, university and lifestyle. Fees cost between a few thousand to tens of thousands of dollars per year. Living accommodation, eating, travelling and insurance are other costs. Scholarships and student financial aid may minimize the cost.'],
            (object) ['question' => '6. Which Scholarships for International Students?', 'answer' => 'Fulbright Program (USA), Chevening Scholarships (United Kingdom), DAAD Scholarships (Germany) and Australia Awards are some of the best available scholarships. Universities also provide need-based and merit-based scholarships. Research in advance to fulfil deadlines for applications.'],
        ];
    @endphp

    <x-faq :faqs="$faqs" />
    

@endsection