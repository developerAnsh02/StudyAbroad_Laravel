@extends('layouts.app')
@section('content')

    <section class="service-hero">
        <div class="service-hero-content">
            <h1 class="main-heading">Study in the UK: Your Ultimate Guide to
                Admissions, Visas & Scholarships</h1>
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
                <h2>Study in United Kingdom</h2>
                <p>Explore top universities, flexible programs, and incredible opportunities for international students.</p>
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
    $sectionTitle = 'Top Reasons to Choose the UK for Your Studies';
    $sectionDescription = 'The United Kingdom has always been a popular destination for international students who yearn to acquire a world-class education. An educational experience in the UK is thus highly distinctive and valuable having acclaimed institutions, courses on how to study in UK durations that are relatively shorter, exceptional culture, and superior opportunities of work. The following are just some of the reasons that make studying in the UK one of the best choices for students around the world. ';

    $cards = [
        ['title' => '1. Universities That Are Well-Recognized Globally', 'desc' => 'Universities in the UK rank consistently among the best in the world, particularly institutions such as Oxford, Cambridge, and Imperial College London, which consistently offer a range of top-quality academic programs. A learner receives an education that is recognized and respected throughout the world due to a rigorous curriculum, innovative teaching methods, and access to the most modern of research facilities. '],
        ['title' => '2. Short Course Duration', 'desc' => 'One of the greatest advantages of studying in the United Kingdom is that the courses are shorter in comparison with other countries. Three years are the typical length of undergraduate degrees and very often a masters program lasts only a year. Not only does this help save the student a great deal in tuition fees, but it also allows him or her to get into the job market sooner than would otherwise be possible and thus get a head start in his or her career. '],
        ['title' => '3. Multicultural Environment', 'desc' => 'Such diversity can be found in the student population of the UK, making this country student-friendly for students from all parts of the world. International students attending universities create such a vibrant and embracing environment for study. This multicultural study in UK after 12th experience encourages the students to have a global point of view and make friends for life with people from different countries. '],
        ['title' => '4. Work While Studying ', 'desc' => 'This allows international students studying in the UK to work part-time when studying, thus enabling them to gain relevant work experience and also contribute to their living expenses. Up to 20 hours can be worked, during term time, while during the holidays, students are entitled to work full-time. Thus opportunity is available to build more professional competencies and also create an effective financial structure.'],
        ['title' => '5. Post Study Work Opportunities', 'desc' => 'The government of the United Kingdom offers a post-study work visa, which is referred to as a Graduate Route. All international students under this visa are entitled to remain and work in the United Kingdom for up to two years after obtaining their degrees (for PhD graduates, it would be three years). This provision eventually gives the graduates all the opportunity to gain much work experience in the UK job market as well as the possibility of getting long-term employment. '],
        ['title' => '6. Strong Industry Links and Career Prospects', 'desc' => 'The UK university has various strong industry ties, which ensure that students have access to paid networking, internships, and placement opportunities with leading employers. Most of the courses are framed in association with employers ensuring that graduates have all the knowledge required to develop well in their respective fields.'],
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
                'logo' => 'images/universities/oxford.png',
                'course' => 'Science & Medicine',
                'ranking' => 1
            ],
            [
                'name' => 'University of Cambridge',
                'logo' => 'images/universities/cambridge-logo.png',
                'course' => 'Engineering & Technology',
                'ranking' => 2
            ],
            [
                'name' => 'Imperial College London',
                'logo' => 'images/universities/imperial.png',
                'course' => 'Engineering & Physical Sciences',
                'ranking' => 6
            ],
            [
                'name' => 'London School of Economics and Political Science (LSE)',
                'logo' => 'images/universities/lse.png',
                'course' => 'Economics & Political Science',
                'ranking' => 45
            ],
            [
                'name' => 'University of Edinburgh',
                'logo' => 'images/universities/edinburgh.png',
                'course' => 'Arts & Humanities',
                'ranking' => 22
            ],
            [
                'name' => 'King’s College London',
                'logo' => 'images/universities/kings.png',
                'course' => 'Health & Life Sciences',
                'ranking' => 40
            ],
            [
                'name' => 'University of Manchester',
                'logo' => 'images/universities/manchester.png',
                'course' => 'Business & Law',
                'ranking' => 32
            ],
            [
                'name' => 'University of Bristol',
                'logo' => 'images/universities/bristol.png',
                'course' => 'Science & Engineering',
                'ranking' => 61
            ],
            [
                'name' => 'University of Warwick',
                'logo' => 'images/universities/warwick.png',
                'course' => 'Mathematics & Economics',
                'ranking' => 64
            ],
            [
                'name' => 'University of Glasgow',
                'logo' => 'images/universities/glasgow.png',
                'course' => 'Medicine & Arts',
                'ranking' => 73
            ]
        ];
        $universitySection = [
        'heading' => 'Best UK Universities',
        'highlight' => 'for International Studies',
        'sub_heading' => 'The UK itself possesses the world\'s Best Universities, which attract students from across the globe. Most of these universities are reputed for their excellent faculty, state-of-the-art research and cutting-edge facilities. Some of the major British universities include: ',
        'footer' => ''
    ];
    @endphp

    <x-universities :universities="$universities" :universitySection="$universitySection"/>

   <!-- course section -->
@php
    $courses = [
        ['title' => 'Business and Management', 'image' => 'images/courses/business.jpg'],
        ['title' => 'Computer Science and IT', 'image' => 'images/courses/computer.jpg'],
        ['title' => 'Engineering (Mechanical, Civil, Electrical)', 'image' => 'images/courses/engineering.jpg'],
        ['title' => 'Law', 'image' => 'images/courses/law.jpg'],
        ['title' => 'Medicine and Healthcare', 'image' => 'images/courses/medicine.jpg'],
        ['title' => 'Finance and Accounting', 'image' => 'images/courses/finance.jpg'],
        ['title' => 'AI and Data Science', 'image' => 'images/courses/ai.jpg'],
        ['title' => 'Pharmaceutical Sciences', 'image' => 'images/courses/pharma.jpg'],
        ['title' => 'Hospitality and Tourism Management', 'image' => 'images/courses/hospitality.jpg'],
        ['title' => 'Environmental Science', 'image' => 'images/courses/environment.jpg'],
    ];

    $courseContent = [
        'title' => 'Some Popular Fields to Study in the UK',
        'desc' => 'Courses are available in numerous fields in the UK, but some disciplines are more in demand than others, mainly because of job opportunities and industry development. Most popular and in demand courses include the following:',
        'footer' => 'WTS Visa Consultancy helps students select the proper course based on their career goals and future job opportunities.',
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
            ['label' => 'Undergraduate (BA/BSc)', 'value' => '£12,000 – £30,000'],
            ['label' => 'Postgraduate (MA/MSc)', 'value' => '£14,000 – £35,000'],
            ['label' => 'MBA', 'value' => '£20,000 – £50,000'],
            ['label' => 'Medicine', 'value' => '£30,000 – £60,000'],
        ];
        $description = "Cost for study and living varies with university, courses, and city in the UK. Below is an approximate breakdown of tuition fees for international students:";
    @endphp
    <x-cost-of-living :tuitionFees="$tuitionFees" :description="$description" />

<!-- scholarship section -->
@php
    $scholarship = [
        'title' => 'Scholarships In The UK',
        'desc' => 'Scholarships can reduce the amount of money you need to spend on studying in the UK. Most universities, organizations, and the UK government award scholarships for such international deserving candidates. That’s how to follow to get one:',
        'footer' => '<strong>Visa Consultancy</strong>  guides students to find and apply for the most suitable scholarships, boosting their chances of accessing these awards.',
        'guide_title' => 'UK Scholarships for International Students: How You Need to Apply?',
        'guide_steps' => [
            'Research Available Scholarships – University website and organizations like Chevening, Commonwealth, and GREAT Scholarships.',
            'Check Eligibility Criteria – Academic and financial requirements must be complied with before application.',
            'Prepare Strong Application Documents – Compelling personal statements; academic transcripts; and reference letters.',
            'Apply before the Deadlines – Deadlines and scholarship applications are also varied. Hence the need to apply ahead of time.',
            'Attend Interviews (If Required) – Some scholarship funds interview applicants, so get ready.',
        ],
        'image' => 'images/scholarships.png'
    ];
@endphp
<x-scholarship :scholarship="$scholarship"/>
 
<!-- document section -->
@php
$documentContent = [
    'title' => 'Essential Documents Needed to Study in the UK',
    'desc' => 'There are several major documents required when applying for a UK university. Here are the essentials:',
    'list' => [
        'Valid passport',
        'Offer Letter from a UK University',
        'Proof of English Proficiency (IELTS, TOEFL, or equivalent)',
        'Academic Transcripts and Certificates',
        'Statement of Purpose (SOP)',
        'Letter of Recommendation (LORs)',
        'Proof of Financial Support (Bank Statements or Sponsorship Letter)',
        'UK Student Visa (Tier 4 Visa)',
    ]
];

$guideContent = [
    'title' => 'How to Apply for a UK Student Visa? The Step-by-Step Process',
    'desc' => 'For international students, obtaining a UK student visa stands as a most-critical step. WTS Visa Consultancy will make the procedure easy by ensuring a smooth application process. Given below are the steps to apply for a UK Student Visa (Tier 4 Visa):',
    'list' => [
        'Receiving Confirmation of Acceptance for Studies (CAS) – This document, issued by the university, will be required for your visa application upon successfully gaining admission.',
        'Assemble Your Documents – Documents that should be prepared include the passport, proof of financial support, and English proficiency test scores.',
        'Fill Out the Online Application – The UK visa application form needs to be filled out on the official UK government website.',
        'Pay Visa Fee and Health Surcharge – The visa fee is roughly UK£490 and the Immigration Health Surcharge (IHS) has to be paid to get access to the health services.',
        'Book an Appointment for Biometrics – Go to a local visa application centre to take fingerprints and a photo.',
        'Interview (If Needed) – Some applicants may undergo credibility interviews.',
        'Await a Decision on Your Visa – It usually takes 3-6 weeks to process a visa.',
    ]
];
@endphp

<x-documents :documentContent="$documentContent" :guideContent="$guideContent" />



    @include('./components/stats')

    @include('./components/services-components.trust')

    @include('./components/cta-button')

@endsection