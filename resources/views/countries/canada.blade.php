@extends('layouts.app')
@section('content')

    <section class="service-hero">
        <div class="service-hero-content">
            <h1 class="main-heading">Study in the Canada: Your Ultimate Guide to
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
                <h2>Study in Canada: A Complete Guide for International Students</h2>
                <p>Canada is now one of the most preferred destinations for overseas students because of its excellent education, welcoming nature and multicultural society. Study in Canada for international students provides excellent opportunities, ranging from quality education to a multicultural society. Universities in Canada are renowned for their scholarly fame, research exposure and international reputation. Pursuing education in Canada is also to experience a multiracial culture and discover the stunning natural scenery. Study in Canada provides you with the opportunity to experience a vibrant cultural blend while discovering stunning natural scenery. 
                </p>
            </div>
            <div class="sub-hero-img">
                <img src="/images/canada-bg.png" alt="Study in uk">
            </div>
        </div>
    </section>

<!-- choose us section -->
@php
    $sectionTitle = 'Study in Canada: Why Choose Canada for Higher Education?';
    $sectionDescription = 'The fact that there are higher learning institutions with good international ranks as well as numerous study options makes How to study in Canada the most preferred destination for higher education. At WTS Visa Consultancy, we recommend Canada as it is an excellent mix of academic brilliance, cheap fees and a warm welcome to international students.';

    $cards = [
        [
            'title' => '1. World-Class Education System',
            'desc' => 'Indeed, Canada is home to the most internationally ranked universities providing high-quality education which is acknowledged worldwide. The institutions are more focused on research and innovations, thus providing students with knowledge and technologies on the cutting edge.'
        ],
        [
            'title' => '2. Cost-Effective Fees and Living Expenses',
            'desc' => 'Though Canada stands next to other leading countries in its spending on education, cost-effective tuition is available for foreign nationals. And many of the universities render scholarships and financial aid to lessen the burden on education. '
        ],
        [
            'title' => '3. Multicultural and Inclusive Society',
            'desc' => 'Canada being a country of cultural diversity hence it is very easy for different-background students to feel"'
        ],
        [
            'title' => '4. Work While Studying',
            'desc' => 'International students are allowed to work at most 20 hours a week during academic sessions and full time during breaks. Living expenses can Canada study visa thus be managed better by these opportunities, along with work experience gained.'
        ],
        [
            'title' => '5. Post-Graduation Work Opportunities',
            'desc' => 'The Post-Graduation Work Permit (PGWP) permits a student to work in Canada after completing his study. The experience enables the student to apply for permanent residency through immigration channels such as Express Entry.'
        ],
        [
            'title' => '6. Safe and High Standard of Life',
            'desc' => 'Canada is among the safest countries in the world recording low crime rates and a very high standard of living. Therefore students can avail of world-class health care services, public services, and have a high level of cleanliness.'
        ],
        [
            'title' => '7. Pathway to Permanent Residency',
            'desc' => 'This explains why many students have chosen Canada: It offers pathways for immigration even after graduation, such as the Canadian Experience Class (CEC), which makes it easier to become a permanent resident.'
        ],
    ];
@endphp

<x-choose-us 
    :section-title="$sectionTitle" 
    :section-description="$sectionDescription" 
    :cards="$cards" 
/>
@include('./components/stats')

    <!-- universities section -->
    @php
    $universities = [
        [
            'name' => 'University of Toronto',
            'logo' => 'images/universities/toronto.png',
            'course' => '',
            'ranking' => ''
        ],
        [
            'name' => 'University of British Columbia',
            'logo' => 'images/universities/ubc.png',
            'course' => '',
            'ranking' => ''
        ],
        [
            'name' => 'McGill University',
            'logo' => 'images/universities/mcgill.png',
            'course' => '',
            'ranking' => ''
        ],
        [
            'name' => 'University of Alberta',
            'logo' => 'images/universities/alberta.png',
            'course' => '',
            'ranking' => ''
        ],
        [
            'name' => 'University of Montreal',
            'logo' => 'images/universities/montreal.png',
            'course' => '',
            'ranking' => ''
        ],
        [
            'name' => 'Queen’s University',
            'logo' => 'images/universities/queens.png',
            'course' => '',
            'ranking' => ''
        ],
        [
            'name' => 'University of Waterloo',
            'logo' => 'images/universities/waterloo.png',
            'course' => '',
            'ranking' => ''
        ],
        [
            'name' => 'Western University',
            'logo' => 'images/universities/western.png',
            'course' => '',
            'ranking' => ''
        ],
    ];

    $universitySection = [
        'heading' => 'Top Universities in Canada for International Students',
        'highlight' => '',
        'sub_heading' => 'Canada possesses numerous best universities which draw foreign students with their study reputation and cultural campus life. University of Toronto, McGill University and University of British Columbia provide world class education, research work and campus life, so these are the best for students from all over the world. Among the available options, best courses to study in Canada shape the destiny of many students.',
        'footer' => ''
    ];
@endphp

<x-universities :universities="$universities" :universitySection="$universitySection"/>


    <!-- course section  -->
    @php
    $courses = [
        ['title' => 'Business Management', 'image' => 'images/courses/business.jpg'],
        ['title' => 'Computer Science and IT', 'image' => 'images/courses/computer.jpg'],
        ['title' => 'Engineering', 'image' => 'images/courses/engineering.jpg'],
        ['title' => 'Health Sciences', 'image' => 'images/courses/medicine.jpg'],
        ['title' => 'Media and Journalism', 'image' => 'images/courses/media.png'],
        ['title' => 'Environmental Science', 'image' => 'images/courses/environment.jpg'],
        ['title' => 'Law', 'image' => 'images/courses/law.jpg'],
        ['title' => 'Hospitality and Tourism', 'image' => 'images/courses/hospitality.jpg'],
    ];

    $courseContent = [
        'title' => 'Popular Courses to Study in Canada',
        'desc' => 'Canada offers programs that address career demands all around the world. Universities in Canada for international students provide world-class education and research opportunities. These popular programs equip students with the knowledge and skills required in the job industry.',
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
        ['label' => 'Undergraduate Programs', 'value' => 'CAD 15,000 – CAD 35,000'],
        ['label' => 'Postgraduate Programs', 'value' => 'CAD 18,000 – CAD 40,000'],
        ['label' => 'MBA Programs', 'value' => 'CAD 30,000 – CAD 60,000'],
        ['label' => 'Living Expenses', 'value' => 'CAD 10,000 – CAD 15,000'],
    ];

    $description = "Canada is affordable for studying as compared to other best destinations. Tuition charges are program, undergraduate, postgraduate, MBA etc. Besides this, students should also keep living expenses aside like housing, food and transportation in order to enjoy a comfortable and balanced student life. When you proceed with the Canada student visa process, do not forget to factor in tuition as well as living costs.";

    $ukCostOfLiving = [
        'heading' => 'Cost of Studying in Canada: Tuition & Living Expenses',
        'description' => 'Canada is affordable for studying as compared to other best destinations. Tuition charges are program, undergraduate, postgraduate, MBA etc. Besides this, students should also keep living expenses aside like housing, food and transportation in order to enjoy a comfortable and balanced student life.',
        'highlights' => [
            'accommodation' => 'CAD 500–CAD 1,500 per month',
            'food' => 'CAD 200–CAD 400 per month',
            'transportation' => 'CAD 80–CAD 150 per month',
            'note' => 'Factor tuition and living costs while applying for Canada student visa.',
            'consultancy' => 'WTS Visa Consultancy',
        ],
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
        'title' => 'Scholarships for International Students in Canada',
        'desc' => 'Canada offers plenty of scholarships to enable international students to finance their education. At WTS Visa Consultancy, we assist students in searching for and applying to scholarships. Scholarships for international students in Canada provide an excellent means of lowering your education expenses. Several Canadian universities provide international students with Scholarships in Canada in various fields of study. Government sponsored scholarships such as Canada Graduate Scholarships and Vanier Canada Graduate Scholarships are highly competitive but fulfilling. Postgraduate students can also find research grants and fellowships. We assist you in meeting the eligibility criteria and making a robust application to raise your chances of securing financial aid for studying in Canada. Colleges in Canada for international students provide different opportunities for these kinds of support.',
        'footer' => '<strong>WTS Visa Consultancy</strong> assists students in finding and applying for the most suitable scholarships, improving their chances of receiving financial support.',
        'guide_title' => 'Canada Scholarships for International Students: How to Apply?',
        'guide_steps' => [
            'Research Available Scholarships – Explore university websites and Canadian government scholarships like Vanier and Canada Graduate Scholarships.',
            'Check Eligibility Criteria – Ensure you meet the academic and program-specific requirements before applying.',
            'Prepare Strong Application Documents – Include a well-written personal statement, academic records, and references.',
            'Apply before the Deadlines – Pay close attention to scholarship deadlines to avoid missing out.',
            'Attend Interviews (If Required) – Some scholarships may require an interview, so be prepared.',
        ],
        'image' => 'images/scholarships.png'
    ];
@endphp

<x-scholarship :scholarship="$scholarship"/>

<!-- document section -->
@php
$documentContent = [
    'title' => 'Documents Required to Study in Canada',
    'desc' => 'Preparation of necessary documents is needed to apply for studying in Canada. At WTS Visa Consultancy, we assist students in preparing the documents to ensure that they are complete and accurate. Cost of studying in Canada differs, so it\'s crucial to have all the information necessary. The following are the documents needed:',
    'list' => [
        'Valid Passport – Must be valid for the duration of your stay.',
        'Letter of Acceptance – From a recognized Canadian institution.',
        'Proof of Financial Support – To show you can cover tuition and living expenses.',
        'Language Proficiency Test Results – IELTS or TOEFL scores, as required by the program.',
        'Academic Transcripts – From previous educational institutions.',
        'Statement of Purpose – Explaining your study goals and future plans.',
        'Letters of Recommendation – From professors or professional contacts.',
        'Medical Examination Report – May be required for certain programs.',
        'Police Clearance Certificate – To confirm a clean criminal record.',
    ]
];

$guideContent = [
    'title' => 'Canada Student Visa Process: Step-by-Step Guide',
    'desc' => 'It can be difficult to apply for a Canadian student visa but WTS Visa Consultancy makes it hassle free and easy. Below is a step by step process:',
    'list' => [
        'Secure a Letter of Acceptance – From a recognized Canadian institution.',
        'Gather Required Documents – Includes passport, proof of funds, and language test results.',
        'Submit Application – Apply online via the Canadian government website or a visa centre.',
        'Provide Biometrics and Attend an Interview – If requested by the authorities.',
        'Wait for Processing – Usually takes a few weeks.',
        'Receive POE Letter and Visa/eTA – Upon approval, you’ll receive a Port of Entry Letter and a visa or eTA.',
        'Present Documents Upon Arrival – Show documents to the immigration officer to get your study permit.',
    ]
];
@endphp

<x-documents :documentContent="$documentContent" :guideContent="$guideContent" />

<section class="column-section">
    <div class="column-container">
        <div class="column">
            <div class="content-box">
                <h2 class="service-heading">How to Apply for Universities in Canada?</h2>
                <p class="content-description">Applying for universities in Canada involves careful planning and preparation. At WTS Visa Consultancy, we facilitate students in easy processing. Here's how to apply:</p>
                <ul class="student-list">
                    <li>Research and Shortlist Universities – Choose based on academic interests and career goals.</li>
                    <li>Review Admission Requirements – Check deadlines and specific document requirements.</li>
                    <li>Prepare Documents – Include transcripts, statement of purpose, recommendation letters, and language test scores.</li>
                    <li>Submit Application – Apply through the university’s official portal and pay the fee.</li>
                    <li>Attend Interviews or Assessments – If required by the university.</li>
                    <li>Receive Acceptance Letter – Once accepted, you can start the visa application process.</li>
                </ul>
            </div>

            <div class="content-box">
                <h2 class="service-heading">Student Life in Canada: What to Expect?</h2>
                <p class="content-description">Student life in Canada is diverse and interesting, academic as well as social. Canadian universities are warm and welcoming with lots of student societies, cultural activities and sporting events. Requirements to study in Canada for international students include meeting academic qualifications and obtaining a study permit. Canada is a multicultural nation so students get a sense of belongingness and respect. Off campus students are able to discover Canada's scenic cities, natural beauty and historical places. </p>
                <p class="content-description">The cost of studying in Canada for international students is affordable with part-time work, which earns you experience and living costs. Part time employment enables students to develop work experience and take care of their living costs. At WTS Visa Consultancy we equip students to adapt to Canadian life and get the best out of their study experience.</p>
            </div>

            <div class="content-box">
                <h2 class="service-heading">Permanent Residency (PR) Options after Studying in Canada</h2>
                <p class="content-description">Canada has several pathways for international students to get PR after graduation. Post-Graduation Work Permit (PGWP) allows students to work in Canada for up to 3 years after completing their studies. Experience gained through PGWP increases eligibility for PR programs like Canadian Experience Class (CEC) under Express Entry system. If you’re wondering how to apply for a study permit in Canada, it’s important to understand these pathways. Provincial Nominee Programs (PNPs) also have direct PR available for graduate individuals with a job offer from selected provinces. Best universities in Canada for international students also provide pathways that can simplify your PR process. We at WTS Visa Consultancy guide the student in applying for PR paths and lead the way to finalize the process, securing a Canada residence in their future.</p>
            </div>

            <div class="content-box">
                <h2 class="service-heading">Post-Study Work Opportunities in Canada</h2>
                <p class="content-description">Canada provides excellent post study work chances for worldwide graduates. Post-Graduation Work Permit (PGWP) enables the graduates to work for a maximum period of 3 years depending on the duration of their program. Experience under PGWP makes them more eligible for PR. Living expenses for students in Canada are affordable for those who manage their budget properly. Graduates can also consider internships and co-op programs to gain experience in industry. At WTS Visa Consultancy, we assist students in comprehending the Canadian job market and paving the way for prosperous careers in Canada. Post study work permit in Canada may also open the gates to greener pastures.</p>
            </div>
        </div>

        <div class="column">
            <div class="content-box">
                <h2 class="service-heading">Common Challenges for International Students in Canada & How to Overcome Them</h2>
                <p class="content-description">For many international students, studying in Canada is a dream, as the country is known for world-class education and multicultural experiences in an amiable environment. However, a move to a new country is Part time jobs for students in Canada laden with obstacles. Preparing for and being knowledgeable about culture, money, etc., is very important. Given below are some common challenges faced by international students in Canada and some practical solutions to help overcome them.</p>
                <ul class="faq-list">
                    <li><strong>Cultural Adjustments –</strong> 
                    <p class="content-description">At times dynamic and overwhelming, initially getting into the groove with an entirely new culture may include clashes in social expectations, certain customs, and daily routines that could cause confusion or discomfort. Keeping an open mind about acceptance of new things, making local friends, and participating in cultural exchange events will serve to smooth the transition into the new culture. </p></li>
                    <li><strong>Homesickness –</strong>
                    <p class="content-description">Beyond the emotional pangs of loneliness and sadness is a strange and natural phenomenon while abroad. Containing these feelings by maintaining a regular schedule of video calls with family, joining student clubs, building a support network, and so forth can ward off the dreaded homesickness.</p>
                    </li>
                    <li><strong>Study Stress –</strong>
                    <p class="content-description">The pressure to succeed in a different system frequently haunts international students. Academic expectations and teaching systems differ widely from one country to another. Using academic resources on campus such as advisors, tutoring centers, and time management would help improve the situation. </p>
                    </li>
                    <li><strong>Weather & Lifestyle Adjustment–</strong>
                    <p class="content-description">Canada's weather would feel extremely odd to a student from a tropical country. The snow would stretch long into the winter, so it would work while studying in Canada would require a while to get accustomed. Proper clothing, healthy living habits, and spending time outdoors would really help them settle into their new lifestyle.</p>
                    </li>
                    <li><strong>Part-Time Jobs –</strong>
                    <p class="content-description">Part-time jobs provide some financial aid, but working also helps students become part of the community. Students can seek employment on campus or at nearby businesses, and their university's job portal or career services should be used to help locate relevant positions.</p>
                    </li>
                    <li><strong>Language Barriers –</strong>
                    <p class="content-description">English or French language skills are essential for academic and social accomplishments. Language learners experience even greater difficulty communicating. Consider participating in a language exchange program and workshops to work on communications skills to enhance fluency and confidence. </p>
                    </li>
                    <li><strong>Financial Management –</strong>
                    <p class="content-description">Expense management and discovering affordable housing are things of concern. Budgeting is a must on a student income. Most universities offer financial aid and housing assistance services to keep students on track with their expenditures and locate accommodations. </p>
                    </li>
                    <li><strong>Studying While Working –</strong>
                    <p class="content-description">Being able to juggle work and studies requires discipline and time management. It can be tough doing this effectively. If students draw up a timetable for the week with all their commitments, including work and study, and prioritize their academic commitments, they will ensure that work does not get in the way of their studies.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@include('./components/cta-button')

@php
    $faqs = [
        [
            'question' => '1. Why Should I Choose Canada for My Studies?',
            'answer' => 'Canada is a good destination for education because of world class universities and diverse programs. The Canadian degree is globally recognized, and opens doors to employment opportunities internationally. Canada is a secure and friendly nation for international students with a good support system. Students are also able to enjoy low tuition fees and part time work. Options for post study work and paths to PR makes Canada a popular choice for students.'
        ],
        [
            'question' => '2. What Are the Admission Requirements for Studying in Canada?',
            'answer' => 'To pursue studies in Canada, you must fulfil the university\'s admission requirements. This involves providing a valid passport, language proficiency proof (such as IELTS or TOEFL) and academic transcripts. Statement of purpose and letters of recommendation are also required by most universities. Some courses might need additional documents such as a resume or portfolio. WTS Visa Consultancy assists students in collecting and submitting all the necessary documents correctly.'
        ],
        [
            'question' => '3. What Is the Application Deadline for Canadian Universities?',
            'answer' => 'Deadlines for Canadian universities are different from university to university and program to program. Most of the universities have two intakes: Fall (September) and Winter (January). Deadline for fall intake is December to March and winter intake is September to November. Please refer to the specific deadline for your selected university. WTS Visa Consultancy assists students in keeping up with their application schedule.'
        ],
        [
            'question' => '4. What Type of Visa Do I Need to Study in Canada?',
            'answer' => 'In order to study in Canada you require a study permit from the Canadian government. You must get an acceptance letter from a Canadian institution recognized prior to applying. Based on your nationality, in addition to this, you would require a temporary resident visa or an electronic travel authorization (eTA). Study permit also enables you to work part time while studying. Our professionals at WTS Visa Consultancy assist you fully in the process of applying for a visa.'
        ],
        [
            'question' => '5. Can I Work in Canada after Completing My Degree?',
            'answer' => 'Yes, Canada allows international graduates to work after completing their degree through Post-Graduation Work Permit (PGWP). PGWP allows you to work for up to 3 years depending on the length of your program. This work experience increases your chances of getting PR through Express Entry. Graduates can also apply for jobs in their field of study. WTS Visa Consultancy helps students to understand and apply for post study work permits.'
        ],
    ];
@endphp

<x-faq :faqs="$faqs" />



@endsection