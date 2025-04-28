@php
$faqs = [
    ['question' => '1. What Types of Visas Do You Assist with?', 'answer' => 'We support student, work, tourist, business and family reunion visas. Our team ensures your application meets all the requirements—financial proof, travel details and sponsorship documents among them. We\'ll give you personalized guidance to boost your chances of approval, while staying on top of the latest visa policies.'],
    ['question' => '2. How Long Does the Visa Application Process Take?', 'answer' => 'Processing times vary by visa type and country. Tourist and business visas take weeks, while other visa types may take months. Expedited processing is available for some countries. We\'ll keep track of your application, handle follow-ups, and help you navigate any delays to get you through the process as smoothly and quickly as possible.'],
    ['question' => '3. What Documents Are Required for a Visa Application?', 'answer' => 'You\'ll need a valid passport, visa application form, passport photos, financial proof, and travel details. Some visa types require additional documents, such as an acceptance letter or job offers. We\'ll give you a tailored document checklist to prevent errors and avoid delays or rejections.'],
    ['question' => '4. Do You Offer Visa Interview Preparation?', 'answer' => 'We do. Our mock interviews will simulate real visa interviews. Our experts will help you answer questions, build your confidence and refine your body language. We\'ll teach you how to respond clearly, truthfully and without contradictions so you can walk into that interview feeling confident and prepared.'],
    ['question' => '5. Can You Help if My Visa Application Gets Rejected?', 'answer' => 'Absolutely. We\'ll go over the reasons for rejection, guide you on reapplying and help you correct any errors. We\'ll strengthen your supporting documents, provide additional interview training if needed. And if possible, we\'ll communicate with the embassy to clarify any issues. That way, you can get a better shot at approval the second time around.'],
];
@endphp

<x-faq :faqs="$faqs" />
