@extends('layouts.app')

@section('content')
<style>
    .border-primary {
        border-color: #2ebb55 !important;
    }
    .text-justify {
        text-align: justify !important;
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <h1 class="mb-5 text-center fw-bold" style="color: #2ebb55;">
                সেবার শর্তাবলি (Terms of Use)
            </h1>

            <p class="lead text-justify">
                স্বাগতম আমাদের ইসলামিক দ্বীনিনিকাহ(deeninikah.com) ওয়েবসাইটে। আমাদের সাইট ব্যবহার করার পূর্বে
                দয়া করে নিচের শর্তাবলি মনোযোগ দিয়ে পড়ুন। আপনি যদি এই ওয়েবসাইট ব্যবহার
                করেন, তবে আপনি এই শর্তাবলিতে বর্ণিত সকল নিয়ম ও শর্ত মেনে চলতে সম্মত হচ্ছেন।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">
                ১. শর্তাবলিতে সম্মতি (Acceptance of Terms)
            </h4>
            <p class="text-justify">
                এই সাইট ব্যবহার করার মাধ্যমে, আপনি এই শর্তাবলির সমস্ত নিয়ম, শর্ত, প্রাইভেসি
                পলিসি এবং যেকোনো অন্যান্য নীতি মেনে চলতে সম্মত হচ্ছেন। যদি আপনি এই
                শর্তাবলিতে সম্মত না হন, অনুগ্রহ করে সাইট ব্যবহার বন্ধ করুন।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">
                ২. প্ল্যাটফর্মের উদ্দেশ্য (Purpose of the Platform)
            </h4>
            <p class="text-justify">
                এই প্ল্যাটফর্মটি শুধুমাত্র ইসলামিক মূল্যবোধ মেনে বৈধ এবং আন্তরিক বিবাহের জন্য
                তৈরি। স্বল্পমেয়াদী, অবৈধ বা বাণিজ্যিক উদ্দেশ্যে সাইট ব্যবহার করা কঠোরভাবে
                নিষিদ্ধ।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">
                ৩. যোগ্যতা (Eligibility)
            </h4>
            <ul class="mt-3">
                <li>বাংলাদেশের আইন অনুযায়ী বিবাহের বৈধ বয়স: নারী ১৮+ ও পুরুষ ২১+।</li>
                <li>আপনার বিবাহের উদ্দেশ্য নৈতিক ও আন্তরিক হতে হবে।</li>
                <li>আইনগতভাবে বিবাহযোগ্য হতে হবে এবং কোনো আইনি বাধা (যেমন পূর্বের বিবাহ,
                    গার্হস্থ্য হিংসা ইত্যাদি) থাকা যাবে না।</li>
                <li>মিথ্যা বা ভুয়া তথ্য প্রদান করা সম্পূর্ণরূপে নিষিদ্ধ।</li>
            </ul>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">
                ৪. ব্যবহারকারীর ধরন (User Types)
            </h4>
            <ul class="mt-3">
                <li>অতিথি (Guest): অ্যাকাউন্ট ছাড়াই শুধুমাত্র ব্রাউজ করতে পারবেন।</li>
                <li>নিবন্ধিত ব্যবহারকারী (Registered User): অ্যাকাউন্ট তৈরি করেছেন, তবে
                    বায়োডাটা এখনো যাচাই হয়নি।</li>
                <li>সদস্য (Verified Member): বায়োডাটা যাচাই ও অনুমোদন করা হয়েছে।</li>
            </ul>
            <p class="text-justify">
                যেকোনো সময়ে অভিযোগ বা সন্দেহজনক কার্যক্রমের ভিত্তিতে আপনার স্ট্যাটাস পরিবর্তন
                বা অ্যাকাউন্ট বাতিল করা হতে পারে।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">
                ৫. নিবন্ধন ও অ্যাকাউন্ট (Registration and Accounts)
            </h4>
            <p class="text-justify">
                নিবন্ধন করার সময় আপনাকে সঠিক এবং সম্পূর্ণ তথ্য প্রদান করতে হবে। আপনার
                পাসওয়ার্ড এবং অ্যাক্সেস ক্রেডেনশিয়ালের নিরাপত্তা রক্ষা আপনার দায়িত্ব। কোনো
                অননুমোদিত ব্যবহার বা নিরাপত্তা লঙ্ঘনের ঘটনা ঘটলে অবিলম্বে আমাদের
                অবহিত করুন।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">
                ৬. তথ্য সংগ্রহ ও গোপনীয়তা (Data Collection & Privacy)
            </h4>
            <p class="text-justify">
                আমরা আপনার ব্যক্তিগত তথ্য (নাম, ধর্ম, পেশা, যোগাযোগের তথ্য ইত্যাদি) সংগ্রহ করি
                এবং শুধুমাত্র সেবার গুণগত মান বজায় রাখা ও উন্নয়নের উদ্দেশ্যে ব্যবহার করি।
                আপনার তথ্যের গোপনীয়তা নিশ্চিত করতে আমরা যথাসাধ্য নিরাপত্তা ব্যবস্থা গ্রহণ
                করি। বিস্তারিত জানতে আমাদের <a href="#">প্রাইভেসি পলিসি</a> দেখুন।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">
                ৭. নিষিদ্ধ ব্যবহার (Prohibited Conduct)
            </h4>
            <ul class="mt-3">
                <li>অবৈধ, অত্যাচারমূলক বা সম্পত্তি-হানিকর কার্যকলাপে সাইট ব্যবহার।</li>
                <li>অশ্লীল, গালাগালি, বা আপত্তিকর কনটেন্ট প্রকাশ বা আদান-প্রদান।</li>
                <li>ব্যক্তিগত বা প্রাইভেট ডেটা অন্য কোথাও শেয়ার করা।</li>
                <li>স্বল্পমেয়াদী সম্পর্ক, বাণিজ্যিক ব্রোকারেজ বা প্রলোভনমূলক উদ্দেশ্যে সাইট
                    ব্যবহার।</li>
            </ul>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">
                ৮. বৌদ্ধিক সম্পত্তি (Intellectual Property)
            </h4>
            <p class="text-justify">
                ওয়েবসাইটের সকল কন্টেন্ট, লোগো, ট্রেডমার্ক, ডিজাইন এবং সফটওয়্যার আমাদের বা
                আমাদের লাইসেন্সদাতাদের স্বত্বাধীন। কোন অংশ আমাদের লিখিত অনুমতি ছাড়া প্রিন্ট,
                কপি বা পুনরায় বিতরণ করা যাবে না।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">
                ৯. পরিষেবা পরিবর্তন ও সমাপ্তি (Modification and Termination)
            </h4>
            <p class="text-justify">
                আমরা যে কোনো সময় সেবার বৈশিষ্ট্য, কার্যকারিতা বা সামগ্রিক পরিষেবা পরিবর্তন,
                স্থগিত বা সমাপ্ত করার অধিকার রাখি। শর্তাবলি লঙ্ঘনকারী ব্যবহারকারীর অ্যাকাউন্ট
                অবিলম্বে বাতিল করা হতে পারে।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">
                ১০. দায় বিমুক্তি (Disclaimer of Warranties)
            </h4>
            <p class="text-justify">
                এই সাইট এবং এর সার্ভিস “যেমন আছে” (as is) ভিত্তিতে সরবরাহ করা হচ্ছে এবং সরাসরি
                বা পরোক্ষ কোনো ওয়ারেন্টি দেওয়া হচ্ছে না। আমরা সাইটের নিরবিচ্ছিন্ন, ত্রুটিহীন
                বা নিরাপদ অপারেশন নিশ্চিত করতে পারি না।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">
                ১১. দায় সীমাবদ্ধতা (Limitation of Liability)
            </h4>
            <p class="text-justify">
                কোন ধরনের ক্ষতি বা ক্ষতির জন্য আমাদের সর্বোচ্চ দায় সীমাবদ্ধ থাকবে আপনার দ্বারা
                পরিশোধিত ফি-র সমপরিমাণ অর্থ পর্যন্ত (যদি থাকে)। কোন পরিস্থিতিতেই আমরা পরোক্ষ,
                ফলস্বরূপ বা বিশেষ ক্ষতির জন্য দায়ী থাকব না।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">
                ১২. ক্ষতিপূরণ (Indemnification)
            </h4>
            <p class="text-justify">
                আপনি সম্মত যে, আপনার সাইট ব্যবহারের কারণে বা এই শর্তাবলি লঙ্ঘনের ফলে
                উদ্ভূত সকল দাবি, ক্ষতি, দায় ও ব্যয় (সহ আইনগত খরচ) থেকে আমাদের, আমাদের
                পরিচালক, কর্মকর্তা, কর্মী ও প্রতিনিধিদের সম্পূর্ণরূপে রক্ষা করবেন এবং
                ক্ষতিপূরণ দেবেন।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">
                ১৩. শর্তাবলি পরিবর্তন (Changes to Terms)
            </h4>
            <p class="text-justify">
                আমরা যে কোনো সময় এই শর্তাবলি আপডেট বা সংশোধন করার অধিকার রাখি। পরিবর্তনগুলি
                এখানে প্রকাশ করা হবে এবং আপনার অব্যাহত ব্যবহার স্বয়ংক্রিয়ভাবে নতুন শর্তাবলিতে
                সম্মতিকে ইঙ্গিত করবে।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">
                ১৪. প্রযোজ্য আইন (Governing Law)
            </h4>
            <p class="text-justify">
                এই শর্তাবলি বাংলাদেশ সরকারের আইন অনুযায়ী ব্যাখ্যা ও প্রয়োগ করা হবে। কোনো
                বিতর্ক হলে বাংলাদেশি আদালতের একচেটিয়া দক্ষতাবঞ্চিত আদালতে তা নিষ্পত্তি
                করতে হবে।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">
                ১৫. যোগাযোগ (Contact Information)
            </h4>
            <p class="text-justify">
                আপনার কোন প্রশ্ন বা উদ্বেগ থাকলে, অনুগ্রহ করে ইমেইল করুন:
                <a href="mailto:support@yourwebsite.com">support@yourwebsite.com</a>
            </p>

            <hr class="my-5">

            <p class="text-center text-muted fst-italic">
                এই শর্তাবলি দ্বীনিনিকাহ-এর পক্ষ থেকে সম্মান ও দায়-দায়িত্বের নিদর্শন।<br>
                আল্লাহ্‌ আমাদের সকলকে হালাল, নিরাপদ ও দ্বীনময় বিবাহের পথে পরিচালিত করুন।
            </p>
        </div>
    </div>
</div>
@endsection