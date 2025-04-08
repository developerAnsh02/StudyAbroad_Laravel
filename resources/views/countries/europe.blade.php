@extends('layouts.app')
@section('content')

    <section class="service-hero">
        <div class="service-hero-content">
            <h1 class="main-heading">Study in Europe: Unlock Global Opportunities with WTS Visa Consultancy
            </h1>
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
                <p>WTS Visa Consultancy helps students fulfill their dream of studying in Europe, home to top universities and diverse cultures. Europe offers world-class education, research opportunities, and affordable, English-taught programs. With a rich history and advanced infrastructure, it’s an ideal study destination. We assist with university selection, visa applications, and every step of the journey. Studying in Europe enhances careers and personal growth. Let WTS Visa Consultancy be your trusted partner in making this life-changing opportunity a reality!</p>
            </div>
            <div class="sub-hero-img">
                <img src="/images/europe-bg.png" alt="Study in europe">
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
        text-align: left;
    }

    .sub-hero-text p {
        color: var(--text-dark);
        max-width: 550px;
        line-height: 1.6;
        text-align: justify;
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
    $sectionTitle = 'Why Choose Europe for Your Higher Education?';
    $sectionDescription = 'It has now become very common for foreign students to flock to Europe for world-class education, rich cultural diversity, and excellent career hiring prospects. The best institutes in Europe are at the same time Study in Europe for international students, affordable and research-oriented, making Europe the best place to learn. Academia, networking, and cultural exposure are all possible in study abroad, and that is perhaps the most memorable experience in one\'s life.';

    $cards = [
        ['title' => '1. High-Quality Education & Affordable Tuition ', 'desc' => 'Recognized by the world, European universities go beyond their standards. Many countries use these as attractive bait for new international students through low-cost or even free education. So, WTS Visa Consultancy helps you in searching the right university and courses that will best fit you based on your ambitions and financial status. '],
        ['title' => '2. Explosive & Global Experience ', 'desc' => 'Studying in Europe would mean immersing myself in an environment with a heterogeneous culture. Universities are tied to one another even in worldwide educational collaborations, with such offerings as exchanges and internships outside the nation, enhancing career opportunities. '],
        ['title' => '3. Career Progression & Professional Exposure ', 'desc' => 'Excellent career services such as job placement and internships are available in the institutions in Europe. Not to mention, easy trips to the cheapest universities in Europe for international students because Europe is located centrally in the world. Thus, you enrich your academic life as much as your personal experiences. WTS Visa Consultancy ensures you travel smoothly all through his life.'],
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
        'name' => 'University of Oxford',
        'logo' => 'images/universities/oxford.png', // Add logo URL if available
        'course' => 'Various Undergraduate & Postgraduate Courses',
        'ranking' => 1
    ],
    [
        'name' => 'University of Cambridge',
        'logo' => 'images/universities/cambridge-logo.png',
        'course' => 'Engineering, Medicine, Humanities, Business',
        'ranking' => 2
    ],
    [
        'name' => 'ETH Zurich',
        'logo' => 'images/universities/zurich.png',
        'course' => 'Engineering, Technology, Sciences',
        'ranking' => 3
    ],
    [
        'name' => 'University of Amsterdam',
        'logo' => 'images/universities/amsterdam.png',
        'course' => 'Social Sciences, Economics, Psychology',
        'ranking' => 4
    ],
    [
        'name' => 'University of Munich',
        'logo' => 'images/universities/munich.png',
        'course' => 'Natural Sciences, Law, Economics, Medicine',
        'ranking' => 5
    ],
    [
        'name' => 'Heidelberg University',
        'logo' => 'images/universities/heidelberg.png',
        'course' => 'Life Sciences, Humanities, Social Sciences',
        'ranking' => 6
    ],
    [
        'name' => 'Sorbonne University',
        'logo' => 'images/universities/sorbonne.png',
        'course' => 'Arts, Humanities, Sciences, Engineering',
        'ranking' => 7
    ],
    [
        'name' => 'University of Bologna',
        'logo' => 'images/universities/bologna.png',
        'course' => 'Law, Arts, Science, Engineering',
        'ranking' => 8
    ],
    [
        'name' => 'University of Copenhagen',
        'logo' => 'images/universities/copenhagen.png',
        'course' => 'Health Sciences, Law, Humanities, Social Sciences',
        'ranking' => 9
    ],
    [
        'name' => 'Stockholm University',
        'logo' => 'images/universities/stockholm.png',
        'course' => 'Environmental Sciences, IT, Arts, Business',
        'ranking' => 10
    ]
];
        $universitySection = [
        'heading' => 'Top Universities ',
        'highlight' => 'in Europe for Global Learners',
        'sub_heading' => 'Indeed, some of the best universities in Europe are typically among the world\'s most elite institutions with high academic standards, nonpareil research, and global prestige. Below are some of the most preferred European institutions for distance learners: 
',
        'footer' => ''
    ];
    @endphp

    <x-universities :universities="$universities" :universitySection="$universitySection"/>

   <!-- course section -->
@php
$courses = [
        ['title' => 'Business Administration', 'image' => 'images/courses/business.jpg'],
        ['title' => 'Engineering', 'image' => 'images/courses/engineering.jpg'],
        ['title' => 'Medicine', 'image' => 'images/courses/medicine.jpg'],
        ['title' => 'Information Technology', 'image' => 'images/courses/it.png'],
        ['title' => 'Data Science', 'image' => 'images/courses/data-science.png'],
        ['title' => 'International Relations', 'image' => 'images/courses/international-relations.png'],
        ['title' => 'Psychology', 'image' => 'images/courses/psychology.png'],
        ['title' => 'Environmental Science', 'image' => 'images/courses/environment.jpg'],
        ['title' => 'Artificial Intelligence', 'image' => 'images/courses/ai.jpg'],
        ['title' => 'Fine Arts', 'image' => 'images/courses/fine-arts.png'],
    ];

    $courseContent = [
        'title' => 'Popular Courses to Study in Europe',
        'desc' => 'Be it Medical Sciences, Administration or Technology, European universities offer diversified academic programs intended to fulfil the global job market. The following are some of the favours of international students:',
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
        ['label' => 'Business Administration', 'value' => '€3,000 – €30,000'],
        ['label' => 'Engineering', 'value' => '€4,000 – €20,000'],
        ['label' => 'Medicine', 'value' => '€5,000 – €30,000'],
        ['label' => 'Information Technology', 'value' => '€3,000 – €15,000'],
        ['label' => 'Humanities', 'value' => '€2,000 – €10,000'],
    ];

    $description = "Cost for study and living varies with university, courses, and city in the UK. Below is an approximate breakdown of tuition fees for international students:";

    $ukCostOfLiving = [
        'heading' => 'Cost of Studying in Europe: Tuition Fees & Living Expenses',
        'description' => 'The cost of studying in Europe is always country-specific, university-specific and program-specific. Quite a number of European countries give free or inexpensive tuition even to overseas students, especially at public universities. Here is an estimated breakdown of tuition fees required for some of the popular courses in Europe:',
        'highlights' => [
    'accommodation' => '€500–€1,000 per month (higher in cities like London, Paris, Zurich)',
    'food' => '€200–€400 per month',
    'transportation' => '€50–€150 per month',
    'personal_expenses' => '€100–€300 per month',
    'total_estimate' => '€700–€1,500 per month on average',
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
        'title' => 'Scholarships & Financial Aid for International Students in Europe',
        'desc' => 'International students can find several scholarships and financial aid programs offered by European universities and governments. At WTS Visa Consultancy, we identify and help you make applications for these funding opportunities to relieve some of the burden of study costs abroad. Merit-based scholarships are awarded based on academic merit and usually cover tuition and living costs. Need-based scholarships are for students from low-income backgrounds, which may include additional consideration for travel and study materials. Some universities also offer country-based scholarships to attract students from a specific region. There are also research-based scholarships for postgraduate students and doctoral students working on innovative projects.',
        'footer' => 'The <strong>Erasmus+ program</strong> is one of the most sought-after funding opportunities wherein students can study in several countries across Europe while being funded. Many countries offer interest-free or low-interest student loans with flexible repayment options. <strong>WTS Visa Consultancy</strong> ensures your scholarship application stands out, meets eligibility criteria, and is submitted on time. We also help you combine various funding sources to effectively cover your study and living costs.',
        'guide_title' => 'How to Apply for European Scholarships?',
        'guide_steps' => [
            'Explore Funding Opportunities – Research scholarships offered by governments, universities, and programs like Erasmus+.',
            'Understand Scholarship Categories – Identify whether you qualify for merit-based, need-based, country-based, or research-based scholarships.',
            'Prepare Required Documents – Compile academic transcripts, motivation letters, recommendation letters, and proof of financial need or excellence.',
            'Track Deadlines and Apply – Keep a calendar of application deadlines and submit early to boost your chances.',
            'Follow Up and Prepare for Interviews – Some programs may include interviews or additional assessments.',
        ],
        'image' => 'images/scholarships.png'
    ];
@endphp

<x-scholarship :scholarship="$scholarship" />

<!-- document section -->
@php
$documentContent = [
    'title' => 'Documents You Need to Study in Europe',
    'desc' => 'Therefore, it is quite imperative in the sense of properly preparing documentation for applying to study in Europe: documentation required for university entry purposes and further needed for visa consideration. WTS Visa Consultancy assures that all the relevant documentation is ready, avoiding any delays and assuring acceptance. Below are some of the vital documents you would need:',
    'list' => [
        'Valid Passport: A six-month or longer validity period beyond the intended date of departure is a must.',
        'Academic Transcripts and Certificates: Proof of completion of prior degrees or qualifications.',
        'Statement of Purpose (SOP): A complete explanation of your academic goals, stating why you chose the course and the university.',
        'Letters of Recommendation: From your professors or ex-employers to enhance the strength of your application.',
        'Proof of Language Proficiency: IELTS or TOEFL scores that meet uni-language requirements.',
        'Proof of Financing: Your bank statements or sponsorship letters should show you can pay for tuition and money for living.',
        'Health Insurance: Health insurance is mandatory in almost every European country for international students.',
        'Whatever Additional Documents: Research proposals (if applicable for PhD applicants) or portfolios (if applicable for creative programs).',
    ]
];

$guideContent = [
    'title' => 'Understanding the Europe Student Visa Process',
    'desc' => 'Getting a student visa is a fundamental step in your journey toward study in Europe. WTS Visa Consultancy simplifies the entire process by carefully guiding you through each step to ensure smooth and successful realization. Here are the fundamental steps in the European student visa process:',
    'list' => [
        'Secured Admission Letter: The student must obtain an admission letter from a recognized European university.',
        'Applied Visa: The student fills the visa application form for the respective country in which he/she will study.',
        'Proof of Financial Stability: The student has to provide bank statements or any other support letter that reflects the ability to support tuition and living expenses.',
        'Health Insurance: Necessary for most countries in Europe, proof of health insurance coverage must be provided.',
        'Required Documents: A valid passport, passport photographs, and academic transcripts have to be submitted.',
        'Language Proficiency: Certain countries demand submission of language test scores such as IELTS or TOEFL.',
        'Visa Interview: There may be an interview set at the consulate or embassy.',
        'Processing Period: Processing will require four to twelve weeks on average.',
    ]
];

@endphp

<x-documents :documentContent="$documentContent" :guideContent="$guideContent" />

    @include('./components/stats')

    @include('./components/services-components.trust')

<!-- scrollable -->
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
    .service-heading{
        font-size: 1.2rem;
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
                <h2 class="service-heading">The University Admission Process in the UK</h2>
                <p class="content-description">A Simple Guide: The admission process of universities in the UK is straightforward but requires careful planning. Here is the stepwise process of application:</p>
                <ul>
                    <li>Select a Course and University - Research thoroughly the programs that would suit your academic and career goals.</li>
                    <li>Check Entry Requirements - Different courses have their own academic requirements and English language requirements.</li>
                    <li>UCAS Application (Undergraduate) - For undergraduates, the applying scholar must register on the UCAS portal, where five university choices may be made.</li>
                    <li>Directly Apply to Universities (Postgraduate) - Most postgraduate applicants make applications directly to universities.</li>
                    <li>Submit Required Documents - Academic transcripts, SOPs, LORs, and proof of English proficiency.</li>
                    <li>Offer Letter - The offer letter may be either conditional or unconditional.</li>
                    <li>Acceptance of the Offer and Deposit Payment - Finalize securing your seat. WTS Visa Consultancy will assist students in every process to ensure that the students go through an easy admission process.</li>
                </ul>
            </div>

            <div class="content-box">
                <h2 class="service-heading">What You Should Know as an International Student in the UK?</h2>
                <p class="content-description">It is so exciting and very enriching living in the UK for an international student—vibrant student life, very efficient public transport, and a welcoming environment for students all over the world. One of the things that make the UK attractive is its great diversity of culture, making it easy for international students to feel at home. Top cities preferred by students include London, Manchester, and Edinburgh due to their lively social scenes and academic opportunities.</p>
                <p class="content-description">Accommodation options include university halls, private apartments, or shared housing depending on affordability and preference. The public transport system is highly efficient with buses, trains, and the London Underground. Additionally, international students can access NHS healthcare after paying the Immigration Health Surcharge.</p>
            </div>

            <div class="content-box">
                <h2 class="service-heading">Job Opportunities after Graduation in the UK</h2>
                <p class="content-description">The UK offers excellent job opportunities for international graduates, making it an attractive destination. The Post-Study Work Visa (Graduate Route) allows students to stay in the UK for up to two years after graduation (three years for PhD graduates). This helps in gaining work experience and exploring career options.</p>
                <p class="content-description">High-demand sectors like IT, finance, health, and engineering offer lucrative job opportunities. Students can work part-time during term time (up to 20 hours/week) to gain experience and support living expenses. Many universities also provide internships, placement programs, job fairs, and career support services to enhance employability.</p>
            </div>
            <div class="content-box">
                <h2 class="service-heading">Study in the UK: Your Pathway to World-Class Education</h2>
                <p class="content-description">Studying in the UK is every student's dream because of its universities and education and career opportunities. WTS Visa Consultancy is an organization that helps students through the entire process of studying abroad-from choosing a university to a student visa. The UK is host to many old and reputable institutions, granting students world-class education with international recognition. The diverse culture, student-friendly cities, and great academic resources make this study in UK an ideal place for personal and professional development. Whether looking to study bachelor's, masters, or research programs, the UK offers a nurturing atmosphere that encourages the cost of studying in UK for international students creativity and excellence in all facets of life. Begin your academic journey in the UK with every confidence and with minimum fuss, thanks to our supportive experts. 
                </p>

            </div>
        </div>

        <div class="column">
            <div class="content-box">
                <h2 class="service-heading">How to Apply for a Post-Study Work Visa in the UK (Graduate Route)?</h2>
                <ul>
                    <li>Complete Your Degree in the UK - You must have a degree from a recognized UK university.</li>
                    <li>Apply Online - Submit your application on the UK Government visa portal.</li>
                    <li>Pay Your Application Fee - Visa fee is approximately £822.</li>
                    <li>Pay the Immigration Health Surcharge - Around £624 per annum.</li>
                    <li>Biometric and Document Submission - Provide passport, university degree, and financial proof.</li>
                    <li>Wait for Approval - Processing time is generally 8-12 weeks.</li>
                </ul>
                <p class="content-description">WTS Visa Consultancy helps students understand eligibility criteria and assists with post-study work visa applications.</p>
            </div>
            <div class="content-box">
                <h2 class="service-heading">Study in the UK-Where Education Meets Global Success
                </h2>
                <p class="content-description">The UK means more than just a degree, it is a globally respected education squarely aimed at opening doors leading to success in a diverse terrain. UK universities emphasize research, innovation, and practical learning that prepare students for a competitive job market. Furthermore, analytical thinking, communication abilities, and problem-solving are strongly emphasized in UK education, hence creating capable graduates with high employability.
                </p>
                <p class="content-description">A few of the best work and study in UK for international students minds in academia reside in the UK, and students, therefore, learn under the guidance of industry experts and in modern world-class research facilities. At WTS Visa Consultancy, we assist students in finding the right universities and courses suited for their career aspirations. Studying in the UK is a guarantee of a bright future, whether you study in UK for international students who want to work in the UK after graduation or return home with an internationally recognized degree. Our team ensures a seamless transition from admissions-the whole application process-to the visa.
                </p>
            </div>

            <div class="content-box">
                <h2 class="service-heading">Can PR in the UK Be Obtained after Studying?</h2>
                <p class="content-description">Studying alone doesn’t guarantee Permanent Residency (PR). The first step is securing a skilled job and applying for a Skilled Worker Visa. After five years on this visa, one can apply for ILR (Indefinite Leave to Remain).</p>
                <p class="content-description">For ILR, candidates must not have long periods outside the UK, and they must pass the Life in the UK Test. Once ILR is granted, British citizenship can be applied for after 12 months. WTS Visa Consultancy guides students through this pathway for long-term settlement in the UK.</p>
            </div>

            <div class="content-box">
                <h2 class="service-heading">Challenges Faced by International Students in the UK and Their Possible Solutions</h2>
                <p class="content-description">Studying in the UK as an international student is exciting and fulfilling, but it comes with challenges such as homesickness, cultural adjustment, academic stress, and financial management. Students can overcome these by building strong peer networks, utilizing university support services, and effective time and money management. WTS Visa Consultancy offers guidance and mentorship throughout the journey to ensure a smooth transition and a successful academic experience.</p>
            </div>
        </div>
    </div>
</section>


    @include('./components/cta-button')

    <!-- faqs   -->
    @php
    $faqs = [
        [
            'question' => '1. Is the United Kingdom a Good Place for International Students?',
            'answer' => 'Indeed, the UK offers a world-class destination for those wishing to study abroad because of the reputation of its institutions, degrees that are valid globally, and a welcoming environment. Some perks include post-study work opportunities, access to the NHS for healthcare, and a culturally rich, diverse lifestyle in vibrant cities.'
        ],
        [
            'question' => '2. What Is the UCAS Application Process?',
            'answer' => 'The UCAS platform is the main system for applying to undergraduate courses in the UK. Students can apply to up to five universities by submitting applications, personal statements, and academic documents. Universities then respond with either conditional or unconditional offers, after which students must confirm their choice and apply for a Student Visa if necessary.'
        ],
        [
            'question' => '3. What Are the Deadlines for Applications to UK Universities?',
            'answer' => 'UCAS undergraduate applications typically close in January, except for Oxford, Cambridge, and medical courses which have an October deadline. Postgraduate deadlines vary by institution, generally falling between December and July. Early applications are highly recommended due to competitive seats. Late applications may go through UCAS Extra or Clearing, though availability is not guaranteed.'
        ],
        [
            'question' => '4. What Kind of Visa Do I Need to Study in the UK?',
            'answer' => 'To study in the UK, international students require a Student Visa (Tier 4), issued based on a Confirmation of Acceptance for Studies (CAS) from a UK institution. This visa permits students to stay for the duration of their course, work part-time during study periods, and full-time during holidays. For short courses under 6 months, a Short-Term Study Visa is needed.'
        ],
        [
            'question' => '5. How Do I Apply for a UK Student Visa?',
            'answer' => 'Students must apply online using their CAS provided by the university. The process includes paying a £490 visa application fee and the Immigration Health Surcharge (IHS), booking a biometric appointment, and possibly attending an interview. Visa processing typically takes 3–6 weeks, so it is advisable to apply at least 3 months before the course starts.'
        ],
    ];
@endphp

<x-faq :faqs="$faqs" />


@endsection