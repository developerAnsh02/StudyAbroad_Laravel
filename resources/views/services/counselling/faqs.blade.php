@php
    $faqs = [
         ['question' => '1. What Happens in an Expert Counselling Session for an International Study?', 'answer' => 'This is a personal session guiding you on courses and universities, visas, etc., with a tailor-made approach for you. '],
        ['question' => '2.	Is the Counselling Session Free of Cost?', 'answer' => 'Yes, our first free expert counselling is totally free. '],
        ['question' => '3.	What Other Topics Are Covered in the Session?', 'answer' => 'We cover course selection, university options, scholarships, and visa inquiries. '],
        ['question' => '4.	How Long Is the Session?', 'answer' => 'Approximately 45 minutes to 1 hour. '],
        ['question' => '5. Can Parents/Guardians Participate in the Counselling Session?', 'answer' => 'Yes, parents/guardians are welcome to join in.'],
    ];
@endphp

<x-faq :faqs="$faqs" />