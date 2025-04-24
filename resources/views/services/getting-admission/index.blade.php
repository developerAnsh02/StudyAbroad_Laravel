@extends('layouts.app')
@section('content')

    <!-- hero section start -->    
    <section class="service-hero">
        <div class="service-hero-content">
            <h1 class="main-heading">Getting Admission Made Easy – Start Your Study Abroad Journey!</h1>
            <p>We simplify the admission process, helping you kickstart your study abroad journey with ease.</p>
            <!-- <a href="#get-started" class="btn">Select Your Course</a> -->

            <!-- Features Section -->
            <div class="features">
                <div class="feature">
                    <i class="fa-solid fa-check-circle"></i>
                    <strong>Accurate and Up-to-Date Visa Information
                    </strong>
                </div>
                <div class="feature">
                    <i class="fa-solid fa-check-circle"></i>
                    <strong>Fast and Hassle-Free Application Process
                    </strong>
                </div>
                <div class="feature">
                    <i class="fa-solid fa-check-circle"></i>
                    <strong>24/7 Expert Guidance and Support
                    </strong>
                </div>
                <div class="feature">
                    <i class="fa-solid fa-check-circle"></i>
                    <strong>Updates on visa policies and requirements</strong>
                </div>
            </div>
            <span class=tip>Enjoy free services from A to A – application to accommodation, ensuring a smooth visa process
                from start to finish</span>
        </div>

        <!-- Hero Image -->
        <div class="hero-form">
            @include('./components/registration-form')
        </div>
    </section>
  
    
    <!-- hero section end -->
    
    @include('components.stats')
    @include('./components/services-components.trusted-partner')
    @include('components.services-components.trust')
    <!-- scrollable section start -->
    <style>
        /* Service Section Styling */
        .column-section{
            background-color: #fff;
            padding: 20px;
        }
        .column-container {
            background-color: #eee;
            display: flex;
            gap: 20px;
            width: 80%;
            margin: auto;
            height: 500px;
            /* Adjust the height as needed */
            overflow-y: auto;
            /* Enable vertical scrolling */
            padding: 15px;
            border-top:5px solid #ffb400;
            border-bottom: 5px solid #ffb400;
            border-radius: 10px;
            
        }

        /* Optional: Styling for the scrollbar */
        .column-container::-webkit-scrollbar {
            width: 5px;
        }

        .column-container::-webkit-scrollbar-thumb {
            background-color: #ffb400;
            border-radius: 4px;
        }

        .column-container::-webkit-scrollbar-thumb:hover {
            background-color: #ff9900;
        }

        .column {
            flex: 1;
            min-width: 300px;
            /* Prevents the columns from shrinking too much */
        }

        .content-box {
            padding: 15px;
            border: 1px solid #ddd;
            margin-bottom: 15px;
            background: #fff;
            border-radius: 5px;
        }

        .content-description {
            font-size: .8rem;
            text-align: justify;
        }

        .content-box>ul>li {
            font-size: .8rem;
            margin-left: 15px;
        }
        .content-box>ol>li {
            font-size: .8rem;
            margin-left: 15px;
        }

        .service-heading {
            color: #333;
            padding-bottom: 1rem;
        }

        
        /* Responsive Design */
        @media (max-width: 1024px) {
            .column-container {
                width: 90%;
                overflow-y: auto;
                flex-direction: column;
                padding: 10px;
            }

            .column {
                min-width: 100%;
            }

            .content-box {
                padding: 10px;
                margin-bottom: 10px;
            }

        }

        @media (max-width: 768px) {
            .column-container {
                width: 95%;
                padding: 10px;
            }
        }

        @media (max-width: 480px) {
            .column-container {
                width: 100%;
                padding: 5px;
            }

            .column {
                min-width: 100%;
            }

            .content-box {
                padding: 8px;
                font-size: 14px;
            }
        }

    </style>
    <section class="column-section">
        <div class="column-container">
            <div class="column">
                <div class="content-box">
                    <h2 class="cotent-heading">Study Abroad Made Simple and Stress-Free</h2>
                    <p class="content-description">
                        At WTS Visa Consultancy, we work toward simple and stress-free abroad study. We know that the admission process can be complex and challenging, with different universities having different requirements, deadlines, and expectations. We take pride in announcing that we fit into this picture. Our professional team will assist you at every stage in the process: from selecting an appropriate university and program to preparing a viable application that fulfils all the requirements. <br>
                        We will lend you personalized services to facilitate your study abroad application. Be it a compelling statement of purpose, a letter of recommendation and mock interviews for the university interview- we have it all for you. Our deep expertise in international education systems and visa rules also helps us provide valuable strategic advice so that you can avoid common pitfalls, apply for abroad university mistakes, and delays. We also offer assistance in securing financial aid and scholarships, which can help improve your financial position. <br>
                        WTS Visa Consultancy believes that unnecessarily complicated procedures should not stand in the way of studying abroad. Our structured approach ensures that you will confidently meet all admission requirements and visa requirements. Step into our world today and start preparing for a successful academic career tomorrow.
                    </p>
                </div>
                <div class="content-box">
                    <h2 class="cotent-heading">Apply with Confidence and Secure Your Future</h2>
                    <p class="content-description">Having gained admission into a foreign university is a life-altering decision, one that necessitates meticulous planning and preparation. Most students dream of going abroad, but some feel caught in the labyrinth of study abroad application processes. Here, confidence is key to a successful journey. Understanding higher education admission requirements, deadlines, and documentation-is critical in improving your acceptance chances. We provide thorough support, ensuring that you follow a clear roadmap, helps you avoid common pitfalls, and sidesteps university expectancies. A good application reflects your achievements in school but is apply abroad universities equally strong in explaining your motivation and goals for the future. From course selection to personal statement preparation, WTS Visa Consultancy will guide you all the way. Having that support instils confidence in you to present yourself as a worthy candidate for the program. All of our strategies and insights put you forward as an applicant for your bright future at the chosen university.</p>
                </div>
                <div class="content-box">
                    <h2 class="cotent-heading">Admission Guidelines: Countrywise</h2>
                    <p class="content-description">Admission requirements change from country to country. Each one has its own set of academic standards, procedures—and deadlines to keep track of. That's where understanding the specific requirements comes in—where proper preparation meets all those criteria and saves you from rejection. Expert guidance can help you navigate the country-specific rules that trip up so many applicants. With that help, you're much more likely to get into your top-choice university—and actually apply overseas university successfully.</p>
                    <ol>
                        <li>Admission guidelines vary on a country-by-country basis and hence require knowledge of specific requirements. </li>
                        <li>Each country has unique academic standards, application procedures, and deadlines. </li>
                        <li>Canadian universities require applicants to take language proficiency tests like IELTS or TOEFL. </li>
                        <li>Admission portals for American universities mostly entail standardized state examinations like SAT, ACT, GRE, or GMAT. </li>
                        <li>Applications for UK universities are submitted through UCAS, which allows students to select up to five courses from a pool of options available to them. </li>
                        <li>Universities in Australia have two main intakes that take place in February and July, requiring students to present transcripts and evidence of financial support. </li>
                        <li>Language requirements and entrance examinations may further be required by certain European nations upon the discretion of every university and program. </li>
                        <li>Proper preparation and adherence to deadlines for submitting an application are vital to avoid the risk of rejection.</li>
                        <li>Our expertise will help you to fulfil the specific admission requirements of every country. </li>
                        <li>Personalized horticulture referrals ensure acceptance and the best program fit for you.</li>
                    </ol>
                    <br>
                    <h3>Admission Process to Canada</h3>
                    <p class="content-description">Once set on studying in Canada, the first step is to choose a program that coincides with your career aspirations and academic interests. Universities in Canada will ask for proof of academic level and language proficiency (general IELTS or TOEFL) along with the statement of purpose being well written. Once you shortlist the universities, prepare and submit your online application through that portal for every single university. Application deadlines across the Canadian universities are different as most intakes fall within the fall and winter. Afterward, the university may require an interview or additional documents to finalize the decision on the process of going abroad for studies admission. Once the application is accepted, a letter of acceptance will be issued. This letter is very important in the process of applying for a student visa. Canada is a home to diversity and excellence in academics; hence, international students trend towards it. So, equipped with proper guidance, you will surely traverse the Canadian admission process that is smoothened and upscales the chances of your acceptance.</p>
                    <br>
                    <h3>Admission Procedure into Study in the United States</h3>
                    <p class="content-description">It includes different steps of choosing the right program applied for, filling up thorough application, and taking up examinations. The universities in the USA ask for various standardised test scores like SAT/ACT, GRE, or GMAT according to the course one applies for. Along with these, the transcript from high schools and universities is required, along with a statement of purpose and recommendations. Most deadlines are combined into the fall and spring block so that some universities offer rolling admissions. After submission of the application form, the institutions might take to conduct the interview or send in request additional materials. If accepted, you get the acceptance letter for the admission process for a student visa. The importance of this system lies in the promotion of students who attain excellence in academics while making a strong difference at a personal level-the major reason students prefer it internationally. With the help of our expert guidance, you will meet all stringent admission requirements and submit a competitive application. </p>
                    <br>
                    <h3>Admission Process among Countries: Study in the UK, Australia, and So on</h3>
                    <p class="content-description">Each country would have its process when it comes to applications in forms of enrolment and studying details and requirements. In the case of the United Kingdom, you can apply through UCAS, where you can select up to five courses. Australian universities usually have two intakes - February and July - that ask for proof of the applicant's academic qualification and language proficiency. Some entry exams and language requirements could be in place in European countries. After submission of the application forms, an interview might follow or some extra how to get admission in foreign universities documents are asked for. This will be followed by an offer letter against which you are meant to apply for the student visa. Academic standards and admission criteria differ from one country to the other. Thus, it becomes imperative to know the specific guidelines. Our experts provide custom assistance to meet the requirements of your targeted destination.</p>
                </div>
                
            </div>
            <div class="column">
                <div class="content-box">
                    <h2 class="cotent-heading">Step-by-Step Admission Guidance</h2>
                    <p class="content-description">
                        The study abroad process can be a real puzzle to navigate—but with the right guidance, you can solve it. We'll help you choose the course and university that aligns with your academic background and career aspirations. That's where our support comes in: we'll guide you through document preparation, SOP creation, application completion and tracking. With our expert hand-holding, and advice on how to apply for scholarship abroad, you'll have the best possible shot at getting that admission.
                        
                    </p>
                    <ul>
                        <li>The admission process to study abroad is complex but manageable with well-structured assistance.</li>
                        <li>Selection criteria for the right course and university based on academic background, career goals, and preferences are chosen at the place of assistance.</li>
                        <li>Assistance can include gathering and organizing documents, including transcripts, recommendation letters, and test scores.</li>
                        <li>Experts create a compelling, integrated statement of purpose (SOP) that reflects passion and shows motivation.</li>
                        <li>Provides guidance on checking thoroughly filling in the application forms properly. </li>
                        <li>Includes assistance in tracking the application status and responding to further university requirements. </li>
                        <li>Step-by-step support to avoid overlooking any aspect at all and ensure solidifying the application. </li>
                        <li>Maximization of chances of securing admission into the targeted university is done through strategic support.</li>
                    </ul>
                </div>
                <div class="content-box">
                    <h2 class="cotent-heading">Financial Planning & Scholarship Opportunities</h2>
                    <p class="content-description">Studying abroad requires thorough financial planning with adequate arrangement of funds for tuition and living expenses and, of course, travel. Do your best to research how much the cost of living in your chosen country is likely to be; work out a budget covering all possible expenses. Many universities offer various scholastic or financial aid in merit-based consideration, financial-inability consideration, and gifts for specific talents. WTS Visa Consultancy helps identify and apply for the scholarships that suit your profile, therefore increasing your chances of funding. Scholarships and loans are also offered by governmental institutions or private organizations to support international students. If you plan early, you shall explore all the funding options to avoid undue stress during the study period. You can control a well-structured financial plan that will bring a peaceful journey in the realm of academics without any hindrances.</p>
                </div>
                <div class="content-box">
                    <h2 class="cotent-heading">Visa Application & Interview Preparation</h2>
                    <p class="content-description">
                        Student visa preparation is a vital step in the study abroad process. Every country has had its own set of procedures regarding visa application, proof of funds, acceptance letters, and academic transcripts. An organized application establishes a good chance that the visa will be granted and, in turn, guarantees that transition to university is smooth. Gaining insight into the visa higher education admission applying system puts you in a better position to avoid any delays or rejections that may arise due to lack of proper documentation. A good number of countries, when treating a study visa application, would demand that students furnish proof of financial stability with a comprehensive study plan.
                        <br>
                        In addition to the paperwork, the interview proceedings are crucial for the visa approval process. During the interview, you need to convey your reasons for studying abroad, with a clear vision of your career and the means by which you support yourself when studying. Clarity and confidence in your answers certainly make a strong impression. Mock interviews with professionals would greatly enhance your chances of success with preparation. Our expert team offers full support for visa filing as well as interview preparation; all country-specific requirements will be covered. We'll help you with document organization, practice with probable questions, and learn to present your story convincingly. Proper preparation allows you to focus entirely on embarking on your overseas studies, leaving the visa process smooth.
                    </p>
                    <br>
                    <h3>Visa Filing Assistance & Documentation</h3>
                    <p class="content-description">When applying for a student visa as part of your study abroad process, you will need accurate documentation and done in time. The typical documents required are the validity of the passport, university acceptance letter, proof of financial support, and language test scores. We help you gather and organize all the requirements needed to not delay or reject anything. Our team reviews your visa application for accuracy and completeness before submission. With us, you navigate the online process of filing a visa application by understanding the specifications of that particular country you are applying to. Ultimately, a well-prepared visa application truly maximizes chances for approval while easing transfer to your chosen university. All this is made sure of through our expertise, making the entire visa filing process smooth and stress-free.</p>
                    <br>
                    <h3>Preparing Attending Student Visa Interview Sessions</h3>
                    <p class="content-description">The student visa interview is the most critical juncture when you'll have to demonstrate your intention to study and your ability to fend for yourself financially. At WTS Visa Consultancy, we deliver mock interviews to familiarize you with common questions and boost your confidence. The questions often college application revolve primarily around study plans, financing, and future aspirations. We teach you how to answer them articulately and then confidently with poise. In addition, interpretation of the interview and thorough preparation helps lessen tenseness while increasing probability of success through proper submission. Here, our expert guidance qualifies you against any question making you leave a good impression on the visa officer.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- scrollable section end -->
    
    <!-- why choose start -->
    <section id="services" class="services">
        <h2>Why <span>Choose Us</span> for Admission Assistance?</h2>
        <p>The choice of the right admission assistance services can easily summarize all efforts made in the study abroad operation. Thousands of students have been assisted by our group of highly experienced counsellors into top universities worldwide. Admission counselling is personalized according to your academic experience and career goals, together with country preference for studies. For example, we select the right program for you, prepare your visa application, and so on. The success reflects the quality and efficiency of our strategies. We always keep student visa application up to date with the latest trends and changes in admissions; thus, you can always gain an edge over others. You get detailed expert advisory services, professional document review, and strategic interview orientation-a very simple way to complicated admission procedures to turn into a breeze and realization of your own dreams of confidence.</p>
        
        <div class="card">
            <!-- <img src="icons/graduation.png" alt="Choice"> -->
            <div>
                <ul style="padding-left: 16px;">
                    <li><strong>Success in studying abroad</strong> starts with choosing the right admission assistance service.</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="card">
            <!-- <img src="icons/trust.png" alt="Top Universities"> -->
            <div>
                <ul style="padding-left: 16px;">
                    <li>For many years, consultants have been <strong>helping students secure admission</strong> to top universities.</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="card">
            <!-- <img src="icons/mentoring.png" alt="Top Universities"> -->
            <div>                
                <ul style="padding-left: 16px;">
                    <li>The guidance offered is <strong>customized</strong> according to your academic perspective, career goals, and destination.</li>                                   
                </ul>
            </div>
        </div>
        <hr>
        <div class="card">
            <!-- <img src="icons/accommodation.png" alt="Top Universities"> -->
            <div>
                <ul style="padding-left: 16px;">
                    <li>We offer <strong>end-to-end solutions</strong> starting from the selection of programs to visa filings.</li>                    
                </ul>
            </div>
        </div>
        <hr>
        <div class="card">
            <!-- <img src="icons/reliable.png" alt="Top Universities"> -->
            <div>
                <ul style="padding-left: 16px;">
                    <li>We boast a <strong>high success rate</strong> that is a testimony of effective and quality strategies.</li>                    
                </ul>
            </div>
        </div>
        <hr>
        <div class="card">
            <!-- <img src="icons/airport.png" alt="Top Universities"> -->
            <div>                
                <ul style="padding-left: 16px;">
                    <li><strong>Our consultants</strong> have their ears to the ground on current trends and requirements for admission.</li>                    
                </ul>
            </div>
        </div>
        <hr>
        <div class="card">
            <!-- <img src="icons/airport.png" alt="Top Universities"> -->
            <div>                
                <ul style="padding-left: 16px;">
                    <li>Includes <strong>expert advisory services</strong>, professional document review, and strategic interview preparation.</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="card">
            <!-- <img src="icons/airport.png" alt="Top Universities"> -->
            <div>                
                <ul style="padding-left: 16px;">
                    <li>We aim to <strong>simplify the admission process for you</strong> and help you embark on your academic journey with full confidence.</li>
                </ul>
            </div>
        </div>
    </section>
     
    <!-- why choose end -->

    @include('components.cta-button')


    <!-- faq start -->
        @php
            $faqs = [
                [
                    "question" => "1. What Documents Are Required for the Admission Process?",
                    "answer" => "Academic transcripts, recommendation letters, a statement of purpose, and standardized test scores are normally required. Proof of language proficiency (such as IELTS or TOEFL) may be mandatory, and some universities may request a resume and portfolio, particularly for creative programs. It is important to verify the specific requirements for each university before applying. Keeping everything ready is very important to avoid last-minute delays."
                ],
                [
                    "question" => "2. How Long Does the University Application Process Take?",
                    "answer" => "The university application process usually takes about 4-12 weeks, depending on the country and university. Most universities set a cut-off date for applications, while others may admit students on a rolling basis. Application deadlines are crucial, as students need to apply way ahead, particularly if we want their admission offers to align with visa processing. After you submit your application, the review process may take weeks. Full notification on acceptance status will be communicated once evaluation has taken place."
                ],
                [
                    "question" => "3. What Is a Statement of Purpose (SOP) and Why Is it Important?",
                    "answer" => "The Statement of Purpose (SOP) is one personal essay in which an applicant expresses his or her basic academic history, career aims, and motivation to apply for a program at a certain university. Through the SOP, the admissions committee can understand your aspirations and how we match with the university application process program. In fact, a proper SOP, with its employment sections and a clear definition of one's specific vision, increases chances of admission. It is a reflection of your primary writing and purposeful clarity. Besides, the SOP makes your honours stand out; even here, perfection remains the only key."
                ],
                [
                    "question" => "4. What Happens after I Submit My Application?",
                    "answer" => "After submitting your application, you will wait for the university to review your documents and, in certain cases, respond with additional information or an interview. In case of acceptance, you will receive an offer letter explaining the next steps. You must confirm your acceptance and prepare for the visa application. Sometimes, universities may require a deposit to secure your spot. Start planning for your travel and course registration after acceptance."
                ],
                [
                    "question" => "5. How Can I Prepare for University Admission Interviews?",
                    "answer" => "The preparation of university interviews requires research on the program and establishing knowledge of the university's values. The preparation then moves to practicing on answers to common questions concerning one's academic background, career aims, and reasons for opting. Be assertive and confident in presenting all the information to support your thought. Mock interviews can assist in improving performance. A successful preparation establishes an immediate yet through-and-through manifestation and a good chance to ace the acceptance."
                ],
                // Add more FAQs if needed...
            ];
        @endphp
        <x-faq :faqs="$faqs" />
    <!-- faq end -->


    
@endsection