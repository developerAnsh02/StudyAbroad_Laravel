<style>
    #service-menu {
        height: 350px;
        overflow-y: scroll;
        scrollbar-width: thin;
        scrollbar-color: #d97706 #f3f4f6;
    }

    #service-menu::-webkit-scrollbar {
        width: 2px;
    }

    #service-menu::-webkit-scrollbar-track {
        background: #f3f4f6;
        border-radius: 8px;
    }

    #service-menu::-webkit-scrollbar-thumb {
        background-color: #d97706;
        border-radius: 8px;
        border: 2px solid #f3f4f6;
    }
    #service-menu li { padding: 15px; margin-bottom: 10px; border-radius: 8px; cursor: pointer; display: flex; align-items: center; gap: 10px; transition: background 0.3s; border: 1px dotted; }
    .content-service {   width: 90%; margin: 40px auto; padding: 30px; background: #ffffff; border-radius: 12px; box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1); }
    .header-content { text-align: center; padding-bottom: 20px; border-bottom: 2px solid #ddd; }
    .header-content h2 { font-size: 25px; font-weight: bold; }
    .header-content p { font-size: 18px; color: #555; }
    .flex { display: flex; gap: 20px; }
    .sidebar { width: 30%; padding: 20px; border-right: 2px solid #ddd; }
    .sidebar h2 { font-size: 22px; margin-bottom: 20px; }
    .sidebar ul { list-style: none; padding: 0; }
    .sidebar li { padding: 15px; margin-bottom: 10px; border-radius: 8px; cursor: pointer; display: flex; align-items: center; gap: 10px; transition: background 0.3s; border: 1px dotted; }
    .sidebar li:hover, .sidebar li.active { background: #d97706; color: #fff; }
    .content { flex: 1; padding: 20px; }
    .content h2 { font-size: 28px; color: #d97706; margin-bottom: 15px; }
    .content p { font-size: 18px; color: #555; line-height: 1.6; }
    .icon { font-size: 20px; }
    .swipe-up { text-align: center; margin-top: 20px; font-size: 16px; color: #d97706; cursor: pointer; }
    #service-content{ text-align: justify;;}
    @media screen and (max-width: 768px) 
    { .flex { flex-direction: column; }
     .sidebar { width: 100%; border-right: none; border-bottom: 2px solid #ddd; } }
</style>

<div class="content-service">
    <div class="header-content">
        <h2><span>Our Services:</span> From Course Selection to Post-Arrival Support</h2>
        <p>We at WTS Visa Consultancy will take care of each and every step of your study abroad process. From course selection to settling in, we handle SOPs, visas, interviews, and travel. Our professional assistance ensures a smooth transition and successful settlement in your new surroundings.</p>
    </div>
    <div class="flex">
        <div class="sidebar">
            <h2>Our Services</h2>
            <ul id="service-menu">
                <li><i class="fa-solid fa-book icon"></i> Course Selection</li>
                <li><i class="fa-solid fa-university icon"></i> Admission</li>
                <li><i class="fa-solid fa-file-signature icon"></i> SOP</li>
                <li><i class="fa-solid fa-comments icon"></i> Mock Interviews</li>
                <li><i class="fa-solid fa-plane icon"></i> Travel Arrangements</li>
                <li><i class="fa-solid fa-book icon"></i> Visa Assistance</li>
                <li><i class="fa-solid fa-house-user icon"></i> Post-Landing Services</li>
                <li><i class="fa-solid fa-address-card"></i></i> Free Profile Evaluation</li>
                <li><i class="fa-solid fa-user-graduate"></i> Education Loan</li>
                <li><i class="fa-solid fa-medal"></i> Counseling with an expert</li>
            </ul>
            <p class="swipe-up">Swipe Up to See More</p>
        </div>
        <div class="content">
            <h2 id="service-title">Course Selection</h2>
            <p id="service-content">Course choice is critical to your profession. We at WTS Visa Consultancy will evaluate your study history and career objectives to suggest appropriate programs for you. Our specialists will provide you foreign student visa information on course subjects, employment opportunities and market demand so that you can make a well-informed choice. We will also advise on flexible course options to suit your future aspirations. Our customized guidance will help you select a program that enhances your skills and career opportunities. With us, you can select a course that prepares you for long term.</p>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const serviceMenu = document.querySelectorAll('#service-menu li');
        const serviceTitle = document.getElementById('service-title');
        const serviceContent = document.getElementById('service-content');
        const contentMap = {
            'Course Selection': 'Course choice is critical to your profession. We at WTS Visa Consultancy will evaluate your study history and career objectives to suggest appropriate programs for you. Our specialists will provide you foreign student visa information on course subjects, employment opportunities and market demand so that you can make a well-informed choice. We will also advise on flexible course options to suit your future aspirations. Our customized guidance will help you select a program that enhances your skills and career opportunities. With us, you can select a course that prepares you for long term.',
            'Admission': 'Admission to a leading university needs a strong application. We assist you in identifying universities that suit your profile and career aspirations. Our professionals walk you through the application process, help you abroad visa consultants meet deadlines and provide the correct documents. We assist in writing a strong statement of purpose (SOP) and preparing for entrance exams such as GRE, GMAT and IELTS. Understanding each university`s requirements enables us to customize your application for maximum effect. Our track record of placements is evidence of the strength of our admission assistance. With our assistance you can enter your dream university.',
            'SOP': 'A good written Statement of Purpose (SOP) is the most important thing to secure admission. We assist you in writing an effective SOP that focuses on your academic accomplishments, professional objectives and desire to pursue education overseas. Our experts give constructive feedback on structure and content so that your SOP showcases your strengths and meets the expectations of a university. Our experts also assist you in tailoring your SOP to individual abroad study visa programs so that your application becomes stronger. A solid SOP differentiates you from other candidates and raises your chances of getting accepted. With our professional assistance you can submit an effective SOP that adds strength to your application.',
            'Mock Interviews': 'Preparation for interviews is key to gaining admission to university. Our mock interviews mimic actual interview situations, allow you to develop confidence and enhance your communication skills. We give you feedback on your responses, body language and presentation. Our experts assist you in honing answers to standard questions regarding your course, career aspirations and obstacles. Practicing in a low stress setting enables you to remain calm and focused at the actual interview. Knowing cultural differences and refining your presentation skills student visa help makes you better. With focused practice and expert guidance you will be confident to tackle university interviews.',
            'Travel Arrangements': 'Travel arrangements is the key to a seamless transition. We assist with the booking of flights, airport transfers and visa procedures. Our experts identify the most economical and convenient means of travel to your destination. We also recommend baggage rules, travel insurance and what to pack. Upon arrival, we assist you in local transport and acclimatization to the new time zone. If your university provides airport pickup, we assist you in making arrangements beforehand. With us you can manage travel arrangements hassle free and concentrate on beginning your academic life without any hassles.',
            'Post-Landing Services': 'Adjusting to a new nation can be challenging but we are here to make it easy. Our post-landing services comprise opening a bank account, acquiring a local SIM card and registration with local authorities. We assist you in securing accommodation and navigating rental contracts. Our advice on study permit application public transport, shopping and healthcare makes the transition seamless. We also offer cultural orientation to facilitate your integration into the local ways of life and social norms. Getting connected to student support services and peer networks enables you to feel at ease. With us, you can acclimatize promptly and concentrate on studying.',
            'Free Profile Evaluation':'At WTS Visa Consultancy, we know that planning to study abroad is a big deal—one that requires careful planning and expert advice. That’s why we offer 100% free profile evaluation for international students. We will help you to identify your strengths, academic opportunities and the best path forward. Whether you are just starting out or already exploring options, we will guide you through your study abroad profile evaluation from the very first step. Your dream of studying abroad starts here—with a personalized evaluation that puts you on the right track.'
        };

        serviceMenu.forEach(item => {
            item.addEventListener('click', () => {
                serviceMenu.forEach(i => i.classList.remove('active'));
                item.classList.add('active');
                serviceTitle.textContent = item.textContent.trim();
                serviceContent.textContent = contentMap[item.textContent.trim()];
            });
        });
    });
</script>
