@extends('layouts.app')
@section('content')

    <section class="service-hero">
        <div class="service-hero-content">
            <h1 class="main-heading">USA – The Ultimate Destination for World-Class Education and Career Growth</h1>
            <!-- <p>Boost your confidence and ace your student visa interview with expert mock sessions.
                </p> -->
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

    <!-- sub hero section -->
    <section class="sub-hero">
        <div class="sub-hero-content">
            <div class="sub-hero-text">
                <h2>Start Your Journey</h2>
                <p>Study in the USA with WTS Visa Consultancy! We tutor students with respect to university selection, visa processing, scholarships, and test preparation. With over 4,000 institutions, the USA offers top-most study in the USA education, research, and culture. Our team of specialists will assure hassle-free transitions to help you realize your academic dreams in one of the liveliest international hubs. Let’s make it happen!</p>
            </div>
            <div class="sub-hero-img">
                <img src="/images/uk-bg.png" alt="Study in uk">
            </div>
        </div>
    </section>

<style>
    .sub-hero {
        background-color: var(--bg-light);
        padding: 80px 5%;
    }

    .sub-hero-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 2rem;
    }

    .sub-hero-text {
        flex: 1 1 50%;
    }

    .sub-hero-text h2 {
        font-size: 3rem;
        font-weight: 700;
        color: var(--primary-dark);
        margin-bottom: 1rem;
    }

    .sub-hero-text p {
        font-size: 1.2rem;
        color: var(--text-dark);
        max-width: 550px;
        line-height: 1.6;
    }

    .sub-hero-img {
        flex: 1 1 40%;
        text-align: center;
    }

    .sub-hero-img img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        object-fit: cover;
    }

    /* Tablet Responsive */
    @media (max-width: 768px) {
        .sub-hero-content {
            flex-direction: column;
            text-align: center;
        }

        .sub-hero-text,
        .sub-hero-img {
            flex: 1 1 100%;
        }

        .sub-hero-text h2 {
            font-size: 2rem;
        }

        .sub-hero-text p {
            font-size: 1rem;
        }
    }

    /* Mobile Responsive */
    @media (max-width: 480px) {
        .sub-hero {
            padding: 60px 20px;
        }

        .sub-hero-text h2 {
            font-size: 1.6rem;
        }

        .sub-hero-text p {
            font-size: 0.95rem;
        }
    }
</style>

<!-- choose us section -->
@php
    $sectionTitle = 'Why Study in the USA?';
    $sectionDescription = 'The USA is the prominent name in the global circle when it comes to world-class education and multiculturalism, together with numerous prospective career avenues. With its world-renowned universities, elite how to study in the USA research facilities, and unconventional flexibility in education, the country has truly offered the complete academic experience. Here are the reasons for considering the USA as a life-changing decision for international students.';

    $cards = [
        ['title' => '1. World-Class Education System', 'desc' => 'The USA is the birthplace of some of the best universities, consistently in the top ranking in worldwide educational indexes. All institutions emphasize practical learning, research, and critical thinking to prepare students for competitive markets. Latest facilities and expert faculty ensure world-class exposure in academics. '],
        ['title' => '2. Flexible and Customizable Programs', 'desc' => 'One of the biggest benefits of studying in the USA is its flexible education system. Students are admitted to a set curriculum but can choose from many subjects to design their curriculum, allowing them to explore many fields before deciding on their major. This interdisciplinary approach enhances students\' career opportunities. '],
        ['title' => '3. Cultural Diversity and Global Exposure', 'desc' => 'American universities welcome students from different ethnicities in an environment that promotes multiculturalism. Studying in a diverse environment further enhances students\' adaptability, improves intercultural communication, and widens the scope for global networking, therefore leading students into an international career. '],
        ['title' => '4. Career Opportunities and Industry Exposure', 'desc' => 'American universities offer career services, counseling, academic advising, support for internships, and other professional experiences. Students will acquire industry experience and professional contacts through undertaking work placements, co-op programs, and research projects, thereby adding to their employability. '],
        ['title' => '5. Research and Innovation', 'desc' => 'USA Top-notch research and innovation universities offer cutting-edge facilities and funding opportunities for disruptive ideas. Starting research due to students\' active involvement in the beginning of their academic journey intensifies their expertise and credence towards feasibility.'],
        ['title' => '6. Scholarships and Financial Assistance', 'desc' => 'Various other universities provide scholarships, grants, and assistantships to international students and make an education in the USA affordable. Because of financial aid opportunities, students find it easier to pay their tuition and pursue quality studies without excessive financial strain. '],
        ['title' => '7. International Student Support Services', 'desc' => 'Universities in the USA also offer extensive support services in academic advising, career counselling, health services, and programs for cultural integration. These forms of support help international students settle into their new arenas.'],
    ];
@endphp
<x-choose-us 
    :section-title="$sectionTitle" 
    :section-description="$sectionDescription" 
    :cards="$cards" 
/>


    <!-- universities section -->
    @php
        $universities = [
            [
                'name' => 'Harvard University',
                'logo' => 'images/universities/Harvard-Logo.png',
                'course' => 'Science & Medicine',
                'ranking' => 1
            ],
            [
                'name' => 'Stanford University ',
                'logo' => 'images/universities/Stanford_University_Logo.png',
                'course' => 'Engineering & Technology',
                'ranking' => 2
            ],
            [
                'name' => 'Massachusetts Institute of Technology (MIT)',
                'logo' => 'images/universities/MIT_logo.png',
                'course' => 'Engineering & Physical Sciences',
                'ranking' => 6
            ],
            [
                'name' => 'California Institute of Technology (Caltech)',
                'logo' => 'images/universities/CalTech_Logo.png',
                'course' => 'Economics & Political Science',
                'ranking' => 45
            ],
            [
                'name' => 'University of Chicago',
                'logo' => 'images/universities/Chicago_Logo.png',
                'course' => 'Arts & Humanities',
                'ranking' => 22
            ],
            [
                'name' => 'Columbia University',
                'logo' => 'images/universities/Columbia.png',
                'course' => 'Health & Life Sciences',
                'ranking' => 40
            ],
            [
                'name' => 'Yale University',
                'logo' => 'images/universities/Yale_logo.jpg',
                'course' => 'Business & Law',
                'ranking' => 32
            ],
            [
                'name' => 'Princeton University',
                'logo' => 'images/universities/Princeton_Logo.png',
                'course' => 'Science & Engineering',
                'ranking' => 61
            ],
            [
                'name' => 'University of Pennsylvania ',
                'logo' => 'images/universities/Pennsylvania_Logo.webp',
                'course' => 'Science & Engineering',
                'ranking' => 61
            ],
            [
                'name' => 'University of California, Berkeley',
                'logo' => 'images/universities/Berkeley_Logo.png',
                'course' => 'Science & Engineering',
                'ranking' => 61
            ],
        ];
        $universitySection = [
        'heading' => 'Top Universities in the USA',
        'highlight' => '',
        'sub_heading' => 'Some of the most world-famous and prestigious universities are located in the USA. The great reputation for academic excellence and research presented by these institutions is what makes the best schools draw the best universities in the USA for international students talent to be equipped with the resources and networks to further their academic and professional careers.',
        'footer' => ''
    ];
    @endphp

    <x-universities :universities="$universities" :universitySection="$universitySection"/>

    <!-- course section  -->
    @php
        $courses = [
            ['title' => 'Engineering', 'image' => 'images/courses/engineering.jpg'],
            ['title' => 'Business and Management', 'image' => 'images/courses/business.jpg'],
            ['title' => 'Computer Science/Information Technology', 'image' => 'images/courses/computer.jpg'],
            ['title' => 'Medicine and Health Sciences', 'image' => 'images/courses/medicine.jpg'],
            ['title' => 'Social Sciences and Humanities', 'image' => 'images/courses/environment.jpg'],
        ];
        $courseContent = [
        'title' => 'Popular Courses to Study in the USA',
        'desc' => 'The USA embodies a very broad selection of qualifying posts in separate fields, which provide for much attraction among overseas students. Universities in the USA are known for high-quality educational programs, research, and the ensuing opportunities in careers. From engineering scholarships for international students in the USA to social sciences, several other classes exist with different subjects for students in pursuit of a successful career in the industry of their choice. ',
        'footer' => '',
    ];
    @endphp

<x-courses 
    :courses="$courses" 
    :title="$courseContent['title']"
    :desc="$courseContent['desc']"
    :footer="$courseContent['footer']"
/>


    <!-- cost of living section  -->
    @php
        $tuitionFees = [
            ['label' => 'Undergraduate Degree', 'value' => '$20,000 – $50,000'],
            ['label' => 'Master’s Degree', 'value' => '$25,000 – $60,000'],
            ['label' => 'MBA', 'value' => '$40,000 – $80,000'],
            ['label' => 'Doctoral Degree (PhD)', 'value' => '$30,000 – $70,000'],
            ['label' => 'Community College', 'value' => '$5,000 – $15,000'],
        ];
        $description = "Studying in the USA is a costly affair, and prospective students must make some serious financial planning as the tuition and how to apply for a USA student visa fees vary according to the course of study and institution. The price for studying ranges from cheap community colleges to the very best MBA programs. A consideration of these expenses would help students in preparing their budgets and looking for financial assistance or scholarships.";

        $ukCostOfLiving = [
        'heading' => 'Cost of Studying in the USA',
        'description' => 'The cost of living in the USA can vary greatly, depending on the city and lifestyle. Generally, international students spend between $10,000-$18,000 a year on housing accommodations, food, transportation, and personal expenses. Obviously, living in major cities is far more expensive than a USA study visa than in rural and small town settings. The housing options include student dormitories and off-campus apartments. International students can share apartments and transport to save on costs.',
        'highlights' => [
            'accommodation' => '$6,000 – $14,000',
            'food' => '$3,000 – $5,000',
            'transportation' => '$600 – $1,200',
            'note' => 'assists students in financial planning and scholarship searches.',
            'consultancy' => 'WTS Visa Consultancy'
        ]
    ];
    @endphp
<x-cost-of-living 
    :tuitionFees="$tuitionFees" 
    :description="$description" 
    :ukCostOfLiving="$ukCostOfLiving" 
/>
    <!-- scholarship section -->
    @php
    $scholarship = [
        'title' => 'Scholarships for International Students in the USA',
        'desc' => 'The USA grants a few scholarships that help international students with tuition costs. The various government-sponsored scholarships include Fulbright Program and Hubert Humphrey Fellowship. Universities also study in America award merit-based scholarships based on academic qualifications, leadership, and extracurricular activities. Private organizations and foundations give out need-based scholarships for tuition and living expenses. WTS Visa Consultancy helps students find suitable scholarships and provide thorough guidance with the application.',
        'footer' => '',
        'guide_title' => 'How to Apply for Universities in the USA?',
        'guide_steps' => [
            'Research and Select the Universities: Choose programs that match your academic and career goals.',
            'Take Standardized Tests: Depending on the program, take either SAT or ACT or GRE or GMAT.',
            'Prepare Application: Academic Transcripts, Recommendation Letters, and Statement of Purpose. ',
            'Find Application Deadlines: December to March is common for the deadlines on fall intake programs. ',
            'Interviews and Other Additional Requirements: Interview or any other documents may be needed by some universities. ',
            'Confirm Admission and Apply for a Visa: After admission, you\'ll be required to confirm your attendance for the course and apply for your visa. ',
        ],
        'image' => 'images/scholarships.png'
    ];
    @endphp
    <x-scholarship :scholarship="$scholarship"/>
 
    <!-- document section -->
    @php
    $documentContent = [
    'title' => 'Documents Required to Study in the USA',
    'desc' => 'Students in the USA apply for admission in a certain way to be eligible to give them some documents as evidence. These include the following: ',
    'list' => [
        'Academic Transcripts: Most high school or college transcripts should be certified copies. ',
        'English Proficiency Test Scores: TOEFL, IELTS, or any equivalent test results.',
        'Standardized test scores: SAT, ACT, GRE, or GMAT score may depend on the program. ',
        'Letters of Recommendation: Usually required two to three letters of recommendation from teachers, professors, or employers.',
        'Statement of Purpose: A personal essay of the student\'s academic goals describing the reasons for studying that program. ',
        'Financial Proof: Should provide enough proof of covering tuition and living expenses through bank statements or sponsor letters. ',
        ]
    ];

    $guideContent = [
    'title' => 'USA Study Visa Process: Step-by-Step Guide',
    'desc' => 'Study visa is very important for all international students, who are interested in studying in the USA. This process goes through admissions, through forms, and through a final face-off with a visa interview. Knowing each step individually today, you can really assure a smooth application towards the students\' focus on their studies.',
    'list' => [
        'Acceptance from an SEVP-Approved School-Student gets an acceptance letter from a Student and Exchange Visitor Program (SEVP) institution.',
        'The student needs to pay the SEVIS (Student and Exchange Visitor Information System) fee to register their data. ',
        'Complete DS-160 form. This is the online visa application form that F-1 applicants will have to fill out.',
        'Schedule a visa interview. The student will schedule his or her appointment in the nearest US embassy or consulate. ',
        'Present at the interview. The documents for study, answer the questions, and prove to the consular intent to return home after studies. ',
        'If he is successful, he will get his F-1 visa to enter the USA.',
        ]
    ];
    @endphp
    <x-documents :documentContent="$documentContent" :guideContent="$guideContent" />

    <!-- Scrollale Section  -->
<style>
    .column-section {
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
        overflow-y: auto;
        padding: 15px;
        border-top: 5px solid #ffb400;
        border-bottom: 5px solid #ffb400;
        border-radius: 10px;
    }

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
        margin-bottom: 10px;
    }
    h3{
    margin-bottom: 10px;
    }
    .content-box ul li {
        font-size: 0.8rem;
        text-align: justify;
        margin-left: 15px;
    }

    .service-heading {
        color: #333;
        padding-bottom: 1rem;
    }
</style>

<section class="column-section">
    <div class="column-container">
        <div class="column">
            <div class="content-box">
                <h2 class="service-heading">Study in the USA: An Overview</h2>
                <p class="content-description">The USA has always been winning the race when it comes to being an international destination for students and availing high-quality education, research opportunities, and flexibility. Students have a variety of options, ranging from public to private to community colleges. Degree programs offered are from Bachelor's to Doctorate and everything in between. The multicultural environment of the USA actually develops friendships internationally and nurtures study in USA for international students growth in people. Universities also take pride in producing innovation and career-ready students. We at WTS Visa Consultancy assist students to choose the right university as per their profile, aspirations, and finances. We have offered a personalized touch so as to ensure that these students have a smooth transition concerning academic preparation and cultural adjustments. The dream of studying in the USA lays a good foundation for a bright future. Let us help you realize that dream!
                </p>
            </div>
        </div>
        <div class="column">
            
            <div class="content-box">
                <h2 class="service-heading">Student Life in the USA: What to Expect?</h2>
                <p class="content-description">Student Life in the USA is not boring as there are many extracurricular activities, clubs, and organizational events. Universities now celebrate their cultural festivals while also providing sportsmen and universities in the USA for international students the opportunity to join student organizations that engage them in the life of the university community at large. Such support systems, including the international student offices, are access points for academic, cultural, and personal problems faced by the said international students.</p>
    
            </div>
            
        </div>
    </div>
</section>


    @include('./components/stats')

    @include('./components/services-components.trust')

    @include('./components/cta-button')

    <!-- faq section  -->
     @php
        $faqs = [
            [
                "question" => "1.	Admission Requirements for Studying in the USA?",
                "answer" => "Every university has its unique demands for admission. The Achievements that undergraduates need usually are to clear high school, and those for graduate programs demand a complete significant degree of learning with a strong Bachelors' degree. The standardized tests best courses to study in the USA that one may expect from undergraduates include SAT/ACT tests and for graduate studies GRE/GMAT tests. A requirement will also be made for proficiency in English through TOEFL or IELTS. There will be other requirements such as letters of recommendation, a statement of purpose, and WTS Visa Consultancy. Meeting these requirements becomes very seamless with the help of WTS Visa Consultancy for students."
            ],
            [
                "question" => "2.	How Can I Apply to Universities in the USA? ",
                "answer" => "Pupils have to do a little research to find universities, settle on courses, and apply for the required exams. They should also prepare application documents such as transcripts, recommendation letters, and a USA university list for international students statement of purpose. Applications are generally online, with deadlines for them differing from December to March for fall intake. Some may require an interview or further documents. Wisteria provides full guidance through this process."
            ],
            [
                "question" => "3.	Do I Need to Take Exams Like TOEFL, IELTS, SAT, GRE, or GMAT?",
                "answer" => "English standardized tests are required for most universities in the United States, where SAT and ACT are mandatory for admissions into undergraduate programs, while GRE and GMAT are required for graduate courses. TOEFL or IELTS is usually required for most students whose native language is not English, except for students who have studied in English. Some universities may waive English tests for students that have studied in English before. WTS Visa Consultancy helps students understand and prepare for these tests. "
            ],
            [
                "question" => "4.	What Is the Application Deadline for US Universities?",
                "answer" => "The deadline for applying to a specific university varies according to the course. The application for a fall intake is mostly open from December to March, while the spring intake is usually open between August and October. Some universities have early decision deadlines in November. Doing an early check of deadlines with the respective universities would be highly advised. WTS Visa Consultancy helps students keep their deadlines to submit the application."
            ],
            [
                "question" => "5.	How Long Does the Student Visa Process Take?",
                "answer" => "It may take several weeks and up to a couple of months to complete the visa procedures. Students have to pay the SEVIS fee, complete the DS-160 form, and schedule their visa interview USA study visa process step by step after receiving their acceptance letter. The duration of processing depends on the respective embassy and the season. The visa is usually issued within days or weeks once the visa approval is given. This type of consultancy aids the students in quickly availing such services."
            ],
        ];
    @endphp
    <x-faq :faqs="$faqs" />

@endsection