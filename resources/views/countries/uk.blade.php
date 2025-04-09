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
                <h2>Start Your Journey</h2>
                <p>Studying in the UK is a dream for many students worldwide, thanks to its prestigious universities, high-quality education, and global career opportunities. At WTS Visa Consultancy, we specialize in helping students navigate the complex process of studying abroad, from choosing the right university to securing a student visa. The UK is home to some of the oldest and most respected institutions, ensuring that students receive a world- class education that is recognized internationally. Moreover, the country’s diverse culture, student-friendly cities, and vast academic resources make it an excellent place for personal and professional growth. Whether you want to pursue undergraduate, postgraduate, or research programs, the UK provides a supportive environment that fosters innovation and excellence. With our expert guidance, you can embark on your academic journey in the UK with confidence and ease</p>
            </div>
            <div class="sub-hero-img">
                <img src="/images/uk-bg.png" alt="Study in uk">
            </div>
        </div>
    </section>


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
        $ukCostOfLiving = [
        'heading' => 'Understanding the Study & Living Costs in the UK',
        'description' => 'Studying in the UK involves not just tuition fees, but also day-to-day expenses. It’s crucial to plan your finances carefully.',
        'highlights' => [
            'accommodation' => '£500–£1,500 per month',
            'food' => '£200–£400 per month',
            'transportation' => '£50–£150 per month',
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