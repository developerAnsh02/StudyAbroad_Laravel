@extends('layouts.app')
@section('content')

    <section class="service-hero">
        <div class="service-hero-content">
            <h1 class="main-heading">New Zealand – A Global Hub for Higher Education and Cultural Diversity</h1>
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
                <h2>Study in New Zealand</h2>
                <p>New Zealand is a popular destination for overseas students because of the quality education, friendly people and breath-taking natural scenery. We assist you in making your study in New Zealand a reality, walking you through every step. The education system of the country is well-known globally and provides a mix of theoretical and practical knowledge. The universities have a reputation for research quality and innovative pedagogy.WTS Visa Consultancy makes your path to studying in New Zealand for international students smooth and rewarding.</p>
            </div>
            <div class="sub-hero-img">
                <img src="/images/new-zealand-bg.png" alt="Study in uk">
            </div>
        </div>
    </section>


<!-- choose us section -->
@php
    $sectionTitle = 'Top Reasons to Choose New Zealand for Higher Education';
    $sectionDescription = 'An ideal place for international students, New Zealand provides world-class education, hospitality, and student support services. The country has a strong academic reputation, tuition How to study in New Zealand programs that are affordable, and many choices for living thus, it has become a priority for students from other countries.';

    $cards = [
        [
            'title' => '1. High-Quality Education System',
            'desc' => 'Ranked among the best in the world, New Zealand universities emphasize research-based learning and practical skills. These institutions maintain very high educational standards, ensuring students enjoy a globally recognized qualification.'
        ],
        [
            'title' => '2. Work Opportunities for Students',
            'desc' => 'International students can work part-time while studying in New Zealand, so they gain valuable work experience while partly supporting their living expenses.'
        ],
        [
            'title' => '3. Affordable Tuition Fees and Living Costs',
            'desc' => 'New Zealand has fairly lower tuition fees and living costs when compared to other Western countries. It thus serves best courses to study in New Zealand as a cost-saving option for students wishing to gain high-quality education but wanting to avoid an exceedingly high financial burden.'
        ],
        [
            'title' => '4. A Multicultural and Inclusive Society',
            'desc' => 'Diversity is embraced in New Zealand that is why it\'s called a welcoming land for international students. Multiculturalism helps international students settle in well from varied environments.'
        ],
        [
            'title' => '5. Safe and Political Environment',
            'desc' => 'New Zealand is safe, thanks to political stability and lower crime rates, with the government focused on ensuring a high level of student welfare, which makes international education worthwhile for its citizens.'
        ],
        [
            'title' => '6. Variety of Study Options',
            'desc' => 'New Zealand offers a variety of courses in various fields so that students get to explore their academic interests. Whether in science, business, arts, or technology, students can find programs fitting their career goals.'
        ],
    ];
@endphp

<x-choose-us 
    :section-title="$sectionTitle" 
    :section-description="$sectionDescription" 
    :cards="$cards" 
/>

@include('./components/stats')

   <!-- Top-Ranked Universities in New Zealand for Global Students -->
@php
    $universities = [
        [
            'name' => 'University of Auckland',
            'logo' => 'images/universities/auckland.webp',
            'course' => 'Engineering, Medicine, Business, Arts',
            'ranking' => 1
        ],
        [
            'name' => 'University of Otago',
            'logo' => 'images/universities/otago.webp',
            'course' => 'Health Sciences, Humanities, Science',
            'ranking' => 2
        ],
        [
            'name' => 'Victoria University of Wellington',
            'logo' => 'images/universities/victoria.webp',
            'course' => 'Law, Humanities, Science',
            'ranking' => 3
        ],
        [
            'name' => 'University of Canterbury',
            'logo' => 'images/universities/canterbury.webp',
            'course' => 'Engineering, Forestry, Education',
            'ranking' => 4
        ],
        [
            'name' => 'Massey University',
            'logo' => 'images/universities/massey.webp',
            'course' => 'Aviation, Agriculture, Design',
            'ranking' => 5
        ],
        [
            'name' => 'Auckland University of Technology (AUT)',
            'logo' => 'images/universities/aut.webp',
            'course' => 'IT, Hospitality, Health Science',
            'ranking' => 6
        ],
        [
            'name' => 'Lincoln University',
            'logo' => 'images/universities/lincoln.webp',
            'course' => 'Agriculture, Environment, Business',
            'ranking' => 7
        ],
        [
            'name' => 'Waikato University',
            'logo' => 'images/universities/waikato.webp',
            'course' => 'Management, Education, Science',
            'ranking' => 8
        ],
    ];
    $universitySection = [
        'heading' => 'Top-Ranked Universities in New Zealand',
        'highlight' => 'for Global Students',
        'sub_heading' => 'Best universities in New Zealand for international students are:',
        'footer' => ''
    ];
@endphp

<x-universities :universities="$universities" :universitySection="$universitySection" />

  <!-- New Zealand course section -->
@php
    $courses = [
        ['title' => 'Business and Management', 'image' => 'images/courses/business.jpg'],
        ['title' => 'Engineering and Technology', 'image' => 'images/courses/engineering.jpg'],
        ['title' => 'Information Technology', 'image' => 'images/courses/it.png'],
        ['title' => 'Health Sciences', 'image' => 'images/courses/medicine.jpg'],
        ['title' => 'Agriculture and Environmental Studies', 'image' => 'images/courses/environment.jpg'],
        ['title' => 'Tourism and Hospitality Management', 'image' => 'images/courses/hospitality.png'],
        ['title' => 'Creative Arts and Design', 'image' => 'images/courses/fine-arts.png'],
        ['title' => 'Education and Teaching', 'image' => 'images/courses/education.png'],
    ];

    $courseContent = [
        'title' => 'Best Courses to Study in New Zealand for International Students',
        'desc' => 'New Zealand has courses that are up to international industry standards. International students like the following courses:',
        'footer' => '',
    ];
@endphp

<x-courses :courses="$courses" :title="$courseContent['title']" :desc="$courseContent['desc']"
    :footer="$courseContent['footer']" />



    <!-- cost of living section  -->
@php
    $tuitionFees = [
        ['label' => 'Undergraduate Degree', 'value' => 'NZD 20,000 – NZD 35,000'],
        ['label' => 'Postgraduate Degree', 'value' => 'NZD 22,000 – NZD 37,000'],
        ['label' => 'Doctoral Degree', 'value' => 'NZD 6,500 – NZD 9,000 (for domestic rates)'],
        ['label' => 'MBA', 'value' => 'NZD 31,000 – NZD 50,000'],
        ['label' => 'Living Expenses', 'value' => 'NZD 15,000 – NZD 20,000 per year'],
    ];

    $description = "It is essential to know how much it costs to study in New Zealand to plan the budget. Tuition fees depend on the course and the institution. Cost of studying in New Zealand can differ from one program to another. Here's an approximate idea of cost of living for students in New Zealand:";

    $ukCostOfLiving = [
        'heading' => 'Tuition Fees & Cost of Living for Students in New Zealand',
        'description' => 'The cost of living in New Zealand ranges from $15,000 to $20,000 per year, covering accommodation, food, transportation, and personal expenses.',
        'highlights' => [
            'accommodation' => 'Included in living expenses',
            'food' => 'Included in living expenses',
            'transportation' => 'Included in living expenses',
            'note' => 'Plan your budget considering tuition and living costs before applying.',
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
        'title' => 'Scholarship Opportunities for International Students in New Zealand',
        'desc' => 'New Zealand provides international students with several scholarships. Government funded scholarships include New Zealand International Doctoral Research Scholarships (NZIDRS) and Manaaki New Zealand Scholarships. Scholarships for international students in New Zealand, emphasizing both merit and financial needs. These scholarships fund tuition fees, living expenses and travel. Some industry related scholarships are available for those pursuing science, engineering and agriculture studies. To qualify for the application you need to fulfil specific academic and language requirements. WTS Visa Consultancy assists you in finding the most appropriate scholarships that would ease your financial stress and improve your study experience.',
        'footer' => '<strong>WTS Visa Consultancy</strong> assists students in finding the most appropriate scholarships that would ease your financial stress and improve your study experience.',
        'guide_title' => 'New Zealand Scholarships for International Students: How to Apply?',
        'guide_steps' => [
            'Research Available Scholarships – Explore university and government scholarship programs like NZIDRS and Manaaki New Zealand Scholarships.',
            'Check Eligibility Criteria – Ensure you meet the academic and language requirements set by the scholarship provider.',
            'Prepare Strong Application Documents – Include academic records, references, and a well-written personal statement.',
            'Apply before the Deadlines – Submit your application ahead of deadlines to avoid disqualification.',
            'Attend Interviews (If Required) – Some scholarships might include an interview as part of the selection process.',
        ],
        'image' => 'images/scholarships.png'
    ];
@endphp

<x-scholarship :scholarship="$scholarship"/>


@php
$documentContent = [
    'title' => 'Essential Documents Needed to Study in New Zealand',
    'desc' => 'Having the right documents ready is crucial when applying for a student visa and university in New Zealand. Missing or incorrect documents can delay your application so be prepared. Here are the documents you’ll need:',
    'list' => [
        'Valid Passport – Ensure your passport is valid for the entire duration of your stay in New Zealand.',
        'Acceptance Letter – A formal letter from a recognized New Zealand institution confirming your admission.',
        'Proof of Sufficient Funds – Bank statements or financial guarantees to show you can cover tuition fees and living costs.',
        'English Language Proficiency – Test scores from IELTS, TOEFL, or other recognized exams.',
        'Medical Certificate – A health report confirming you meet the medical requirements.',
        'Health and Travel Insurance – Mandatory for all international students to cover medical emergencies and travel issues.',
        'Police Clearance Certificate – May be required to prove good character, depending on the visa type.',
    ]
];

$guideContent = [
    'title' => 'New Zealand Student Visa: Application Process & Requirements',
    'desc' => 'New Zealand student visa application consists of a number of steps. Firstly, you must get an offer of admission from an authorized institution. Secondly, you must present evidence of sufficient funds to pay your tuition fees and expenses. Your health and character must be checked so you must provide a medical certificate and police clearance. An English language proficiency test result (TOEFL or IELTS) is also needed. After your documents are prepared you can apply online or at a New Zealand visa application centre. The processing time for the visa is 4 to 6 weeks. We at WTS Visa Consultancy take you through the process of New Zealand student visa process step by step to make your application complete and enhance your prospects of success.',
    'list' => [],
];
@endphp

<x-documents :documentContent="$documentContent" :guideContent="$guideContent" />

<section class="column-section">
    <div class="column-container">
        <div class="column">
            <div class="content-box">
                <h2 class="service-heading">Step-by-Step Guide to Applying to New Zealand Universities</h2>
                <p class="content-description">It takes planning and organization to apply to universities in New Zealand. Take the right steps to avoid any delays and maximize your chances of being accepted. Universities in New Zealand for international students offer different courses and entry qualifications. Here's a step by step guide:</p>
                <ul class="student-list">
                    <li><strong>Research and Choose a Course –</strong>Research universities and select a course that you and your career best match.</li>
                    <li><strong>Verify Entry Requirements –</strong>Verify the university's own entry requirements and have your transcripts and letters of reference ready.</li>
                    <li><strong>Lodge Your Application –</strong>Apply online using the university website and upload supporting documents.</li>
                    <li><strong>Accept the Offer –</strong>After receiving an offer, accept and pay the deposit.</li>
                    <li><strong>Student Visa Application –</strong> Obtain your acceptance letter, proof of funds and health and character documents to obtain your visa.
                    </li>
                    <li><strong>Arrange Accommodation and Travel –</strong>Arrange accommodation and travel arrangements after your visa has been approved.</li>
                </ul>
            </div>

            <div class="content-box">
                <h2 class="service-heading">Student Life in New Zealand: Culture, Housing & Lifestyle</h2>
                <p class="content-description">Student life in New Zealand is great and multicultural. The nation is extremely welcoming so it's not difficult for international students to adapt and feel comfortable. There are accommodation choices ranging from university halls, shared flats and homestays to cater to all budgets and tastes. Students can indulge in outdoor pursuits such as hiking and skiing or cultural performances highlighting Maori customs. Public transport is available and cheap and so you are able to see cities and countryside. Work while studying in New Zealand enables you to balance expenses and gain work experience. In WTS Visa Consultancy, we assist students in settling and maximizing their time in New Zealand.</p>
            </div>

            <div class="content-box">
                <h2 class="service-heading">Career & Job Prospects after Graduation in New Zealand</h2>
                <p class="content-description">New Zealand provides excellent career opportunities for overseas graduates. Study and work in New Zealand offers numerous opportunities in areas like IT, health, engineering, and agriculture, where qualified employees are always in demand. Graduates may also be eligible for permanent residency under the skilled migrant category if they qualify. Career services are available in most universities to assist students with job placement, resume writing and interviewing. There are easy requirements to study in New Zealand for international students that guarantee the student receives proper support throughout.</p>
            </div>
        </div>

        <div class="column">
            <div class="content-box">
                <h2 class="service-heading">Common Challenges for International Students & How to Overcome Them</h2>
                <p class="content-description">A study abroad experience sounds vibrant, offering both personal and academic benefits; however, it comes with challenges. For international students, adjusting to a new culture and education system can be quite a daunting task. However, with positive thoughts and support, these challenges can be managed and turned into fruitful experiences.</p>
                <ul class="faq-list">
                    <li><strong>Language Barriers –</strong> 
                        <p class="content-description">Language fluency can be a hindrance for many international students in terms of getting their message through and affecting their academic performance. Workshops on language learning should be further attended, and spots for conversing with native speakers should be used to boost proficiency and confidence tremendously.</p>
                    </li>
                    <li><strong>Cultural Adjustment –</strong> 
                        <p class="content-description">Different cultures can be interesting and intimidating to adapt to. Therefore, local activities, cultural exchange groups, and possibilities for keeping an open mind can very much help in faster cultural assimilation and creating a wonderful experience for the students themselves.</p>
                    </li>
                    <li><strong>Homesickness –</strong> 
                        <p class="content-description">Feeling homesick can be difficult, and this type of emotional trauma can be quite common. Maintaining long-distance friendships and family relations while building new ones can assist with feelings of loneliness and encourage a sense of belonging.</p>
                    </li>
                    <li><strong>Friends Circle -</strong> 
                        <p class="content-description">Making friends can take a while. Student clubs, social events, and sporting activities can be good opportunities to connect with new people and create real and lasting fellowship.</p>
                    </li>
                    <li><strong>New Education System –</strong> 
                        <p class="content-description">Countries vary in their educational systems and expectations. Attending orientation sessions, seeking academic advice, and utilizing student support services can aid the students in becoming acquainted with and with succeeding in the new academic environment.</p>
                    </li>
                    <li><strong>Time Management –</strong> 
                        <p class="content-description">Everything seems to be crazy with studying, social life, and home responsibilities. Usually, good time management means planning ahead and having realistic goals to minimize stress.</p>
                    </li>
                    <li><strong>Financial Stresses –</strong> 
                        <p class="content-description">Financing life and budgeting seem to be hard in a new country. Taking a budgeting course, looking for part-time jobs, and accessing student discounts can considerably reduce financial stress. </p>
                    </li>
                    <li><strong>Mental Health & Well-being –</strong> 
                        <p class="content-description">Loneliness can take a toll on mental health and emotional well-being. Remember to speak up when needed; most colleges and universities offer low-cost counseling for emotional and mental support.</p>
                    </li>
                    <li><strong>Academic Tension –</strong> 
                        <p class="content-description">International students might experience some form of pressure to perform, especially if they are on scholarship or have great expectations from the family. Such stress can be relieved by creating realistic expectations for how to get permanent residency in New Zealand after study themselves and consulting professors or tutors when necessary.</p>
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
            'question' => '1. Is New Zealand Safe for International Students?',
            'answer' => 'Indeed, New Zealand is quiet, with a low crime rate and a low crime-rate environment. In case of an emergency, universities have student support services and a 24/7 helpline for students. The health system is very well developed, and strict laws about the safety and rights of students are implemented to help students focus on their education.'
        ],
        [
            'question' => '2. How Do I Apply to a University in New Zealand?',
            'answer' => 'Firstly, conduct research on different universities and choose the course you would like to study. Check the requirement to apply for admission. Collate all the required documents, and finally apply online. It is during this time known if one has been accepted into the school: a deposit must then be made, and then a student visa application is made. The application process will take about 4-6 weeks to process. WTS Visa Consultancy helps students in making each step of the application easy.'
        ],
        [
            'question' => '3. What Are the Career Opportunities for International Graduates in New Zealand?',
            'answer' => 'Fresh graduates have the opportunity to work in New Zealand for up to three years after completing their studies. IT, healthcare, engineering, and construction are among the high-demand sectors. Universities offer career services, networking events, and job placement support. Under the Skilled Migrant Category, graduates may also qualify for permanent residency.'
        ],
        [
            'question' => '4. Is Health Insurance Required for International Students in New Zealand?',
            'answer' => 'Yes, international students must have health insurance for the entire stay in New Zealand. It covers medical consultations, hospital visits, emergencies, and prescriptions. Universities provide insurance plans, but students are free to choose private insurance companies. Proof of it is mandatory to get a student visa. WTS Visa Consultancy assists the students in choosing the best plan.'
        ],
        [
            'question' => '5. Can I Bring My Family with Me on a Student Visa?',
            'answer' => 'Postgraduate students can study along with their family. The spouse may be eligible to work in New Zealand, while children can register as domestic students. Evidence of financial support and relationship documents must be attached to the application. WTS Visa Consultancy assists with the process of obtaining dependent visas, helping families stay together during the time of study in New Zealand.'
        ],
    ];
@endphp

<x-faq :faqs="$faqs" />

@endsection