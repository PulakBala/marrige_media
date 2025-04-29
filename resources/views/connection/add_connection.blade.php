@extends('layouts.app')
@section('title', 'প্যাকেজ তৈরি করুন')

@section('content')
<div class="container mt-4 p-5 shadow">
    <h2 class="mb-4">{{ isset($package) ? 'ইডিট প্যাকেজ' : 'প্যাকেজ তৈরি করুন' }}</h2>
    <form action="{{ isset($package) ? route('package.update', $package->id) : route('package.store') }}" method="POST">
        @csrf
        @if(isset($package))
            @method('PUT')
        @endif
        <div class="row ">
            <!-- Left Side -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">প্যাকেজের নাম</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="উদাহরণ: ব্যাসিক প্যাকেজ"  value="{{ isset($package) ? $package->name : '' }}" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">
                        প্যাকেজ মূল্য </label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="উদাহরণ: ২০০"  value="{{ isset($package) ? $package->price : '' }}" required>
                </div>
                <div class="mb-3">
                    <label for="connections" class="form-label">কানেকশন </label>
                    <input type="number" class="form-control" id="connections" name="connections"  placeholder="উদাহরণ: ৫"  value="{{ isset($package) ? $package->connections : '' }}" required>
                </div>
                <div class="mb-3">
                    <label for="offer_details" class="form-label">
                        অফার বিবরণ</label>
                    <textarea class="form-control" placeholder="উদাহরণ: দ্বিতীয়বার কিনলে ৫০% ছাড়" id="offer_details" name="offer_details">{{ isset($package) ? $package->offer_details : '' }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="discount" class="form-label">ডিসকাউন্ট </label>
                    <input type="text" class="form-control" id="discount" name="discount"  placeholder="উদাহরণ: ৫০% ছাড়"  value="{{ isset($package) ? $package->discount : '' }}">
                </div>
                <div class="mb-3">
                    <label for="months" class="form-label">সাবস্ক্রিপশনের সময়কাল (মাস)</label>
                    <input type="number" class="form-control" id="months" name="months"   placeholder="উদাহরণ: ২"  value="{{ isset($package) ? $package->months : '' }}">
                </div>
            </div>

            <!-- Right Side -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="feature_1" class="form-label">বৈশিষ্ট্য 1</label>
                    <textarea class="form-control" id="feature_1" name="feature_1"  placeholder="উদাহরণ: আনলিমিটেড এসএমএস পাঠানোর সুবিধা">{{ isset($package) ? $package->feature_1 : '' }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="feature_2" class="form-label">বৈশিষ্ট্য 2</label>
                    <textarea class="form-control" id="feature_2" name="feature_2"  placeholder="উদাহরণ: আপনি ৫ জন মানুষের যোগাযোগের তথ্য দেখতে পারবেন">{{ isset($package) ? $package->feature_2 : '' }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="feature_3" class="form-label">বৈশিষ্ট্য 3</label>
                    <textarea class="form-control" id="feature_3" name="feature_3"  placeholder="উদাহরণ: প্রোফাইল হাইলাইট অপশন">{{ isset($package) ? $package->feature_3 : '' }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="feature_4" class="form-label">বৈশিষ্ট্য 4</label>
                    <textarea class="form-control" id="feature_4" name="feature_4" placeholder="উদাহরণ: কম টাকায় সেরা কানেকশন" >{{ isset($package) ? $package->feature_4 : '' }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="notification_message" class="form-label">বিজ্ঞপ্তি বার্তা</label>
                    <textarea class="form-control" placeholder="উদাহরণ: আপনার প্যাকেজটি সফলভাবে সক্রিয় হয়েছে" id="notification_message" name="notification_message">{{ isset($package) ? $package->notification_message : '' }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="send_sms" class="form-label">এসএমএস পাঠান</label>
                    <select class="form-control" id="send_sms" name="send_sms">
                        <option value="1" {{ isset($package) && $package->send_sms == 1 ? 'selected' : '' }}>
                            হ্যাঁ</option>
                        <option value="0" {{ isset($package) && $package->send_sms == 0 ? 'selected' : '' }}>না
                        </option>
                    </select>
                </div>
                <!-- Submit Button at Bottom Right -->
                <div class="text-end">
                    <button type="submit" class="btn btn-outline-dark px-4 rounded-pill fw-semibold text-uppercase">{{ isset($package) ? 'প্যাকেজ আপডেট করুন' : 'প্যাকেজ তৈরি করুন' }}</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
