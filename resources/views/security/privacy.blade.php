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
            <h1 class="mb-5 text-center fw-bold" style="color: #2ebb55;">গোপনীয়তা নীতি (Privacy Policy)</h1>

            <p class="lead text-justify">
                <strong>deeninikah.com</strong> আপনার ব্যক্তিগত গোপনীয়তা ও তথ্যের নিরাপত্তাকে অত্যন্ত গুরুত্ব দেয়। এই নীতিটি আপনাকে জানাতে তৈরি করা হয়েছে যে, আমরা কী ধরনের তথ্য সংগ্রহ করি, কীভাবে তা ব্যবহার করি এবং কার সাথে তা ভাগ করি।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">১. আমরা কী ধরণের তথ্য সংগ্রহ করি:</h4>
            <ul class="mt-3">
                <li>ব্যক্তিগত তথ্য: নাম, ইমেইল, মোবাইল নাম্বার, জন্মতারিখ, ঠিকানা, ছবি (পাত্র/পাত্রী), শিক্ষা ও পেশাগত তথ্য।</li>
                <li>যোগাযোগ তথ্য: মোবাইল ব্যাংকিং/পেমেন্ট তথ্য (যদি প্রযোজ্য)।</li>
                <li>লগইন/ব্যবহার তথ্য: পছন্দকৃত প্রোফাইল, লগইন সময়, OTP লগইন রেকর্ড।</li>
                <li>সাহায্য কেন্দ্র বা কাস্টমার সার্ভিসে দেয়া মতামত বা অভিযোগ।</li>
            </ul>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">২. আমরা এই তথ্য কীভাবে ব্যবহার করি:</h4>
            <ul class="mt-3">
                <li>আপনার জীবনসঙ্গী নির্বাচনে উপযুক্ত বায়োডাটা প্রদর্শন।</li>
                <li>আপনার অভিজ্ঞতা উন্নত করা এবং রেফারেন্স হিসেবে ব্যবহার।</li>
                <li>নিরাপত্তা ও তথ্য যাচাইয়ের জন্য।</li>
            </ul>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">৩. তথ্য প্রকাশের সীমাবদ্ধতা:</h4>
            <p class="text-justify">
                আপনার যোগাযোগের তথ্য কখনোই প্রকাশ করা হয় না। আমরা নারী প্রোফাইলে অভিভাবকের নাম্বার ব্যবহারের পরামর্শ দিই। আইনগত বাধ্যবাধকতা ছাড়া কোনোভাবেই তথ্য তৃতীয় পক্ষের কাছে প্রকাশ করা হয় না।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">৪. তথ্য পরিবর্তন ও এক্সেস:</h4>
            <p class="text-justify">
                আপনি যেকোনো সময় আপনার প্রোফাইল সম্পাদনা করতে পারবেন। পরিবর্তিত তথ্য যাচাইয়ের পর পুনরায় প্রকাশ করা হবে।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">৫. তথ্য নিরাপত্তা:</h4>
            <p class="text-justify">
                আপনার তথ্য সর্বোচ্চ নিরাপত্তার সাথে সংরক্ষণ করা হয়। মোবাইল ব্যাংকিং তথ্য এনক্রিপ্টেড রাখা হয়।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">৬. তথ্য সংরক্ষণের সময়সীমা:</h4>
            <p class="text-justify">
                একাউন্ট ডিলিট করার পর আপনার প্রোফাইল আর কারো সাথে শেয়ার করা হয় না। তবে ভবিষ্যতের যাচাইয়ের জন্য কিছু তথ্য সংরক্ষণ করা হতে পারে।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">৭. নীতিমালার আপডেট:</h4>
            <p class="text-justify">
                গোপনীয়তা নীতিতে পরিবর্তন হলে ইমেইলের মাধ্যমে জানানো হবে এবং নতুন ব্যবহারের জন্য আপনার অনুমতি নেয়া হবে।
            </p>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">৮. কুকিজ ব্যবহারের কারণ:</h4>
            <ul class="mt-3">
                <li>ব্যবহারকারীর অভিজ্ঞতা উন্নত করতে।</li>
                <li>সাইটের পারফরম্যান্স বিশ্লেষণে।</li>
                <li>পূর্ববর্তী লগইন ও প্রোফাইল স্মরণে রাখতে।</li>
            </ul>

            <h4 class="mt-5 text-dark border-start border-4 ps-3 border-primary fw-semibold">৯. যোগাযোগ:</h4>
            <p class="text-justify">
                আপনার প্রশ্ন বা মতামতের জন্য যোগাযোগ করুন:<br>
                <strong>ইমেইল:</strong> <a href="mailto:support@dininikah.com" class="text-decoration-none">support@dininikah.com</a>
            </p>

            <hr class="my-5">
            <p class="text-center text-muted fst-italic">
                এই নীতিমালা দ্বীনিনিকাহ-এর পক্ষ থেকে সম্মান ও দায়িত্ববোধের নিদর্শন। <br>
                আল্লাহ্‌ আমাদের সকলকে হালাল, নিরাপদ ও দ্বীনময় বিবাহের পথে পরিচালিত করুন।
            </p>
        </div>
    </div>
</div>
@endsection
