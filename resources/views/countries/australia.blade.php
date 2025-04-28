@extends('layouts.app')
@section('content')

    <section class="service-hero">
        <div class="service-hero-content">
            <h1 class="main-heading">Australia: A Leading Destination for Higher Education and Cultural Diversity</h1>
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
                <p>One of the topmost destinations before international students is Australia because of its world-class education system, universities revered across the globe, and its diverse culture. Every year, the cost of studying in Australia crosses borders to seek higher learning in Australia, drawing from its excellent academic standards and innovative research opportunities.</p>
                <p>WTS Visa Consultancy avails services in full complement to all students who feel like studying in Australia. Services offered include university selection, guidance on applications, visa processing, and accommodation assistance. Australia's student-friendly policies coupled with vibrant cities and work opportunities make the ideal location for academic fulfilment and personal growth. Be it undergraduate or postgraduate or vocational courses, this land has got all how to study in Australia the possibilities of achieving your academic and professional aspirations. Our team works tirelessly to ensure that your journey toward studying in Australia is devoid of any hassle.</p>
            </div>
            <div class="sub-hero-img">
                <img src="/images/australia-img.webp" alt="Study in australia">
            </div>
        </div>
    </section>


<!-- choose us section -->
@php
    $sectionTitle = 'Top Reasons to Study in Australia';
    $sectionDescription = 'Now, Australia is one of the best countries that students internationally want to go to. Apart from so many things, students get the best courses to study in Australia, most engaging education with a welcoming multicultural environment and great career opportunities. Here are the seven great reasons to study in Australia:';

    $cards = [
        ['title' => '1. World-Class Education and Globally Recognized Degrees ', 'desc' => 'Australian universities always rank among the highest in the world. These are places where students can enjoy high-quality scholarships for international students in Australia education while studying. Degrees that have been studied at Australian universities are globally acknowledged and hence widened the possibilities of globalizing career options.'],
        ['title' => '2. Multicultural and Inclusive Environment ', 'desc' => 'Australia is cited to be different and friendly in culture, and it is easy for international students to adapt. Different backgrounds make students get this feeling of home within different cultures studied.'],
        ['title' => '3. Post-Study Work Opportunities ', 'desc' => 'One of the biggest advantages for students after studying in Australia is the opportunity to gain practical experience. Students can work in their related fields, gaining valuable experience that enhances their career prospects. This experience broadens their chances of securing jobs and helps create pathways for lifelong career growth.'],
        ['title' => '4. Part-Time Work Opportunities for the Students ', 'desc' => 'While studying in Australia, international students have the opportunity to work part-time and easily manage their living expenses. This experience will ensure that the students have experience in many industries, which will in turn prove beneficial to them for future employability as well. '],
        ['title' => '5. Industry-Focused Education System ', 'desc' => 'More emphasis is placed on industry and the practicalities of learning within Australia\'s education system. Universities provide universities in Australia for international students training, internships, and research opportunities where students learn about the real-world skills required after graduation, ensuring that they leave school with the appropriate skills to enter the job market. '],
        ['title' => '6. Economically Stable and Innovation-Oriented Industries ', 'desc' => 'A stable economy, with industries that have made great strides in innovation and technology, adds to job opportunities for post study graduates after they complete their studies. This also works on the concept that makes Australia one of the most desirable places to study. '],
        ['title' => '7. Safe and High Living Standards  ', 'desc' => 'Known for high-end living, with its cities being some of the safest internationally, Australia is a very nice place for students to live and study at. This country has also put into place very high healthcare standards, modern infrastructure, and a really great quality of life. '],
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
                'name' => 'The University of Melbourne',
                'logo' => 'images/universities/Melbourne_Logo.webp',
                'course' => 'Science & Medicine',
                'ranking' => 1
            ],
            [
                'name' => 'The Australian National University (ANU)',
                'logo' => 'images/universities/ANU_Logo.webp',
                'course' => 'Engineering & Technology',
                'ranking' => 2
            ],
            [
                'name' => 'The University of Sydney',
                'logo' => 'images/universities/Sydney_Logo.webp',
                'course' => 'Engineering & Physical Sciences',
                'ranking' => 6
            ],
            [
                'name' => 'The University of Queensland',
                'logo' => 'images/universities/Queensland_Logo.webp',
                'course' => 'Economics & Political Science',
                'ranking' => 45
            ],
            [
                'name' => 'Monash University',
                'logo' => 'images/universities/Monash_Logo.jpeg',
                'course' => 'Arts & Humanities',
                'ranking' => 22
            ],
            [
                'name' => 'The University of New South Wales (UNSW)',
                'logo' => 'images/universities/UNSW_Logo.webp',
                'course' => 'Health & Life Sciences',
                'ranking' => 40
            ],
            [
                'name' => 'The University of Western Australia (UWA)',
                'logo' => 'images/universities/UWA_Logo.webp',
                'course' => 'Business & Law',
                'ranking' => 32
            ],
            [
                'name' => 'The University of Adelaide',
                'logo' => 'images/universities/Adelaide_Logo.webp',
                'course' => 'Science & Engineering',
                'ranking' => 61
            ],
        ];
        $universitySection = [
        'heading' => 'Australia\'s Best Universities',
        'highlight' => 'for International Students',
        'sub_heading' => 'Australia hosts some of the most prestigious universities worldwide known for their academic rigor, research facilities, and strong industry connection. Thus, some of the best universities for international students include:',
        'footer' => 'These universities have top-ranked programs in various fields and attract students from around the world. These universities Australia student visa process also boast good learning resources, modern infrastructure, and excellent student support care for international students. '
    ];
    @endphp

    <x-universities :universities="$universities" :universitySection="$universitySection"/>

    <!-- course section  -->
    @php
        $courses = [
            ['title' => 'Engineering', 'image' => 'images/courses/engineering.jpg'],
            ['title' => 'Business and Management', 'image' => 'images/courses/business.jpg'],
            ['title' => 'IT Courses', 'image' => 'images/courses/computer.jpg'],
            ['title' => 'Courses in Healthcare & Nursing', 'image' => 'images/courses/medicine.jpg'],
            ['title' => 'Courses in Medicine & Biotechnology', 'image' => 'images/courses/finance.jpg'],
            ['title' => 'Courses in Hospitality & Tourism Management', 'image' => 'images/courses/hospitality.jpg'],
            ['title' => 'Education and Teaching', 'image' => 'images/courses/pharma.jpg'],
        ];
        $courseContent = [
        'title' => 'Most In-Demand Courses to Study in Australia',
        'desc' => 'Offering appreciable variety in academic programs, Australia caters for all industries and career options. A few of these courses in demand include:',
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
            ['label' => 'Undergraduate Degree', 'value' => '$20,000 – $45,000'],
            ['label' => 'Postgraduate Degree (Master’s)', 'value' => '$22,000 – $50,000'],
            ['label' => 'Doctoral Degree (PhD)', 'value' => '$18,000 – $42,000'],
            ['label' => 'Vocational Education & Training (VET)', 'value' => '$4,000 – $22,000'],
            ['label' => 'English Language Courses', 'value' => '$300 – $500 per week'],
        ];
        $description = "Studying in Australia is at disparate costs, depending on each university, course, and the city of residence. Here is an approx. breakup of tuition fees for different study programs:";

        $ukCostOfLiving = [
        'heading' => 'Tuition Fees & Cost of Living in Australia for Students',
        'description' => 'Australia may be very supportable with the advertised tuition. On top of it, budgeting for monthly living expenses of about $1500 up to $2500 per month should cover accommodation, food, transport, and sundries.',
        'highlights' => [
            'accommodation' => '$1500 up to $2500 per month',
            'food' => '$1500 up to $2500 per month',
            'transportation' => '$1500 up to $2500 per month',
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
        'title' => 'International Student Scholarships in Australia and Financial Aid ',
        'desc' => 'Australia provides a range of scholarships and financial assistance programs to ease the burden of education on international students. At WTS Visa Consultancy, we help students find such funding options according to eligibility. Some of the important scholarships are:',
        'footer' => 'Depending on academic merit, leadership skills, or financial need, eligibility varies by scholarship. ',
        'guide_title' => '',
        'guide_steps' => [
            'Australia Awards Scholarships – Funded by the Australian government for development countries government sponsored students.',
            'Destination Australia Program – Providing support to students studying in regional Australian institutions.',
            'Research Training Program (RTP) – Providing funding to postgraduate research students.',
            'University Specific Scholarships – Merit or need based scholarships can also be received from most universities such as the University of Sydney, Monash University, and the University of Melbourne.',
            'Private and Government Grants – Organizations and private institutions also have scholarships for outstanding international students.',
        ],
        'image' => 'images/scholarships.png'
    ];
    @endphp
    <x-scholarship :scholarship="$scholarship"/>
 
    <!-- document section -->
    @php
    $documentContent = [
    'title' => 'Important Documents for Study in Australia',
    'desc' => 'Students need to submit significant documents with their application to study in Australia. Here are the key documents: ',
    'list' => [
        'Valid Passport (must be valid for the duration of your stay)',
        'Offer Letter by Recognized Australian University ',
        'Proof of English Language Proficiency (IELTS, TOEFL, PTE, etc.)',
        'Financial Documents (bank statements, proof of funds, scholarships, etc.)',
        'Overseas Student Health Cover (OSHC) Certificate ',
        'Statement of Purpose (SOP) & Letters of Recommendation (LORs)',
        'Academic Transcripts & Certificates (previous qualifications)',
        'Australian Student Visa (subclass 500)',
        ]
    ];

    $guideContent = [
    'title' => 'How to Apply for an Australian Student Visa? A Guide Step-by-Step ',
    'desc' => 'An Australian student visa is one of the most important steps in international students plans to study in the country. This is one such step-by-step guide for applying for a student visa to Australia that has been compiled by experts at WTS Visa Consultancy to ensure a hassle-free and seamless experience. ',
    'list' => [
        'Choose Your Course and Institution - Before applying for a visa, students must receive an offer letter from an Australian institution registered under CRICOS (Commonwealth Register of Institutions and Courses for Overseas Students). ',
        'Obtaining Confirmation of Enrolment (CoE) - After accepting the offer and making the necessary tuition deposit, the institution will provide a confirmation of enrolment (CoE), which is mandatory for applying for a visa. ',
        'Gather Required Documents - Prepare essential documents,-valid for current purposes, which would include a passport along with financial evidence of the ability to provide for maintenance as well as Health Cover (OSHC) insurance for international students, English testing results, and a personal statement. ',
        'Submit Online Visa Application (Subclass 500) - Apply for Australian student visa via online means, using the Department of Home Affairs website. ',
        'Biometrics and Health Examination - You may need to provide biometrics and undergo a medical examination, depending on your country of origin. ',
        'Await the Visa Decision - Depending on individual cases, the processing may take any period from 4 to 12 weeks. If successful, a letter granting the visa would reach you.',
        ]
    ];
    @endphp
    <x-documents :documentContent="$documentContent" :guideContent="$guideContent" />

    
<section class="column-section">
    <div class="column-container">
        <div class="column">
            <div class="content-box">
                <h2 class="service-heading">University Application Process in Australia: What You Should Know?</h2>
                <p class="content-description"><strong>University Application Process in Australia Sometimes you have to approach carefully for the planning and preparation of applying to universities in Australia: </strong></p>
                <ul>
                    <li>Research, Identify a Course – Pick one that matches with the kind of academics and career interests you have. </li>
                    <li>Check Admission Requirements – All universities will usually have specific eligibility criteria as per academic qualifications and IELTS, TOEFL, or PTE for the English language proficiency score. </li>
                    <li>Documents Preparation - Academic transcripts, passport copy, letters of recommendation (LORs), Statement of Purpose (SOP), and English test scores need to be submitted. </li>
                    <li>Submit Your Application - Usually through the university's website or a centralized portal, such as StudyLink or UAC (for some universities).</li>
                    <li>Wait for Offer Letter - If selected, then you will receive a conditional or unconditional offer letter from the university. </li>
                    <li>Accept the Offer and Pay Tuition Deposit - Accept the admission offer and pay the deposit. Your Confirmation of Enrolment (CoE) will be issued.</li>
                </ul>
            </div>
            <div class="content-box">
                <h2 class="service-heading">Living as a Student in Australia: Accommodation, Culture, and More</h2>
                <p class="content-description">Perhaps studying in Australia captures the most exciting and enriching experience among countries with a study and work in Australia, high quality of life, friendly communities, and cities that resonate with diversity in student population. International students seeking various types of accommodation can opt for on-campus housing, private rentals, or homestays. Most cities differ in their cost of living, with Sydney and Melbourne comparatively more expensive than Adelaide or Perth. Australia prides itself as one of the multicultural countries where several people congregate in one place and spend their time getting to know each other. Students can avail requirements to study in Australia for international students range of support services on the university campuses, including counselling, job placement, and academic assistance. Life in Australia is pretty dynamic and offers a wide range of outdoor activities, sports events, and cultural festivities. WTS Visa Consultancy further helps all students find suitable accommodation and settle into their new lives in Australia so they can find it easy and comfortable to enjoy living here.</p>
            </div>
            <div class="content-box">
    <h2 class="service-heading">Career & Employment Prospects after Graduation in Australia</h2>
    <p class="content-description">There are excellent job opportunities in Australia for international graduates, mostly because of Australia's strength in the economy as well as its skill- and merit-based industries. International students who complete their degree or course from universities in Australia may be eligible to stay and work in Australia for up to 2 to 4 years. Fresh graduates can join major industries such as IT, healthcare, engineering, business, and education.</p>
    <p class="content-description">All Australian universities strongly partner with industries to offer internships and networking opportunities for students to secure jobs. Australia also has a Skilled Occupation List (SOL), which highlights in-demand professions that can lead to permanent residency. WTS Visa Consultancy can assist students with understanding job search strategies and pathways to permanent residence in Australia.</p>
</div>

        </div>
        <div class="column">
            
            <div class="content-box">
                <h2 class="service-heading">Challenges of Study in Australia and Ways to Overcome it: An Overview</h2>
                <p class="content-description">One of the most exciting but also the most challenging journeys is studying abroad, particularly in Australia. Some challenges that international students may face are the adjustment to the new environment, managing cost of living in Australia for students expenses, understanding the education system, and comprehending the visa regulations. However, these challenges are manageable by following the behavioral tools and support mechanisms.
                </p>
                <ul>
                    <li>
                        <h3>Adapting to the New Environment </h3>
                    </li>
                    <p class="content-description">Culture shock, language problems, and homesickness almost always occur when students move to a new country, thus making them feel kind of cut off from the world. Joining student communities, making new friends, and video calling family members to help students adapt better to the new scenario. Pre-departure orientation sessions prepared by WTS Visa Consultancy also help students psychologically prepare to exist in the said environment.</p>
                    
                    <li><h3>It's Very Expensive</h3></li>
                    <p class="content-description">Living in Australia costs quite a lot, covering everything from accommodation to food, transport, or daily living expenses. Part-time job options will be a good supplement to the personal income, preparation of a budget plan, and affordable housing. Accommodation arrangements and budget planning are made possible with help from WTS Visa Consultancy.</p>

                    <li><h3>Adapting to the Education System</h3></li>
                    <p class="content-description" >Independent learning has been emphasized by universities, which is new compared to universities in different academic backgrounds. Attending academic workshops, using university support services, and seeking help from professors will help students adapt to the education system. WTS Visa Consultancy helps the students understand the academic standards before their departure.</p>

                    <li><h3>Understanding Student Visa Work Restrictions</h3></li>
                    <p class="content-description">Challenge many students often find themselves in the problem of not knowing what specific work restrictions their student visas have, leading to legal problems. Be in the know regarding the number of hours that students can work while they are studying. WTS Visa Consultancy best universities in Australia for international students contains all the clarity about the conditions of these visas for the benefit of the student.</p>

                    <li><h3>Healing Homesickness and Loneliness</h3></li>
                    <p class="content-description">The easiest emotional experience may prove being away from family and friends. International students face this while going away to their education destination.Keeping in constant touch with family members through frequent calling, socializing, gazing at involvement in activities, and befriending among fellow students would do the trick. WTS Visa Consultancy suggests joining student networks for emotional support.</p>
                </ul>
            </div>
            
        </div>
    </div>
</section>

    @include('./components/cta-button')

    <!-- faq section  -->
     @php
        $faqs = [
            [
                "question" => "1.	Will I Have to Take Some English Proficiency Tests Like IELTS or TOEFL?",
                "answer" => "Yes, most Australian universities demand you prove your proficiency in English; tests that apply are among the most recognized as IELTS, TOEFL, PTE, or Cambridge English, and some universities waive this requirement if your previous academic education was done solely in English."
            ],
            [
                "question" => "2.	How Can I Apply for an Australian Student Visa?",
                "answer" => "To apply for a student visa (Subclass 500), you have to receive a Confirmation of Enrolment (CoE) from an Australian university in Australia for international students, provide proof of funds, health insurance, and submit an online visa application via the Department of Home Affairs website."
            ],
            [
                "question" => "3.	How Long Does the Processing of a Student Visa for Australia Take?",
                "answer" => "Generally, processing of an Australian student visa takes about 4-12 weeks. However, the time may vary depending on factors such as the accuracy of the application, how promptly and easily verification can occur on each document submitted, and the applicant\'s country of origin. "
            ],
            [
                "question" => "4.	Where Do I Go to Find Student Accommodation in Australia?",
                "answer" => "On-campus, private, shared apartment, and homestay are the options available. Accommodation services are usually scholarships for international students in Australia handled by the university, while online platforms such as Flatmates, Gumtree, UniLodge are also available for students."
            ],
            [
                "question" => "5.	Are They Allowed to Stay in Australia after Graduation?",
                "answer" => "Yes, graduated students may remain in Australia for a period of 2 to 4 years to gain work experience. If they fulfil specific requirements, they may also explore options to obtain permanent residency (PR) through the General Skilled Migration (GSM) program."
            ],
        ];
    @endphp
    <x-faq :faqs="$faqs" />

@endsection