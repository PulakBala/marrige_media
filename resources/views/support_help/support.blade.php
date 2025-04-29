@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 fw-bold">সহায়তা ও তথ্য কেন্দ্র</h2>

    <div class="card mb-3">
        <div class="card-header bg-info text-white">যোগাযোগ</div>
        <div class="card-body">
            <p><strong>ইমেইল:</strong> support@example.com</p>
            <p><strong>ফোন:</strong> +880 1234 567890</p>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header bg-primary text-white">সাধারণ প্রশ্নোত্তর</div>
        <div class="card-body">
            <ul>
                <li>কিভাবে প্রোফাইল সম্পাদনা করবেন?</li>
                <li>প্যাকেজ কেনার নিয়ম কি?</li>
                <li>প্রোফাইল কীভাবে সংরক্ষণ বা উপেক্ষা করবেন?</li>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-secondary text-white">অতিরিক্ত সহায়তা</div>
        <div class="card-body">
            <p>আমাদের টিমের সাথে যোগাযোগ করুন অথবা ফর্ম পূরণ করে সাহায্যের জন্য অনুরোধ পাঠান।</p>
            <a href="#" class="btn btn-outline-primary">সহায়তা ফর্ম পূরণ করুন</a>
        </div>
    </div>
</div>
@endsection
