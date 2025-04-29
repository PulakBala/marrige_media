@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
<div class="container py-5">
    <div class="row g-4">

        {{-- Card 1: Available Connections --}}
        <div class="col-md-4 col-sm-6">
            <div class="card shadow-lg border-0 h-100 rounded-4">
                <div class="card-body d-flex flex-column justify-content-between text-center p-4">
                    <div>
                        <div class="mb-3">
                            <i class="bi bi-plug-fill text-primary fs-1"></i>
                        </div>
                        <h5 class="fw-semibold mb-1">আপনার কানেকশন আছে</h5>
                        <h3 class="fw-bold text-success">{{ $remainingConnections }}</h3>
                        <p class="text-muted small mt-2">কারো যোগাযোগের বিস্তারিত দেখতে, আপনার অন্তত একটি কানেকশন থাকা জরুরি ।</p>
                    </div>
                    <a href="{{ route('connection') }}" class="btn btn-primary mt-3 rounded-pill">
                        <i class="bi bi-bag-plus-fill me-1"></i> প্যাকেজ কিনুন
                    </a>
                </div>
            </div>
        </div>

        {{-- Card 2: Viewed Contacts --}}
        <div class="col-md-4 col-sm-6">
            <div class="card shadow-lg border-0 h-100 rounded-4">
                <div class="card-body d-flex flex-column justify-content-between text-center p-4">
                    <div>
                        <div class="mb-3">
                            <i class="bi bi-eye-fill text-warning fs-1"></i>
                        </div>
                        <h5 class="fw-semibold mb-1">আপনার দেখা যোগাযোগ তালিকা</h5>
                        <p class="text-muted small mt-md-3">আপনার ইতিমধ্যেই এই প্রোফাইলগুলিতে অ্যাক্সেস আছে।</p>
                    </div>
                    <a href="{{ route('profile.contacts/viewed') }}" class="btn btn-warning text-white mt-3 rounded-pill">
                        <i class="bi bi-person-lines-fill me-1"></i> যোগাযোগ দেখুন
                    </a>
                </div>
            </div>
        </div>

        {{-- Card 3: Purchase History --}}
        <div class="col-md-4 col-sm-12">
            <div class="card shadow-lg border-0 h-100 rounded-4">
                <div class="card-body d-flex flex-column justify-content-between text-center p-4">
                    <div>
                        <div class="mb-3">
                            <i class="bi bi-cart-check-fill text-success fs-1"></i>
                        </div>
                        <h5 class="fw-semibold mb-1">আমার ক্রয়সমূহ</h5>
                        <p class="text-muted small mt-md-4">আপনার সম্পূর্ণ ক্রয় ও সাবস্ক্রিপশন ইতিহাস একসাথে দেখুন।</p>
                    </div>
                    <a href="{{ route('subscriptions.index') }}" class="btn btn-success mt-3 rounded-pill">
                        <i class="bi bi-arrow-right-circle-fill me-1"></i> ইতিহাস দেখুন
                    </a>
                </div>
            </div>
        </div>


        <div class="row text-center my-5">
            <div class="col-12 col-md-3 mb-4">
                <div class="bg-white p-4 rounded-4 shadow-lg h-100">
                    <div class="mb-3">
                        <i class="bi bi-eye-fill fs-1 text-primary"></i>
                    </div>
                    <h5 class="text-muted">দেখেছেন এমন প্রোফাইল</h5>
                    <h3 class="fw-bold text-primary">120</h3>
                </div>
            </div>

            <div class="col-12 col-md-3 mb-4">
                <div class="bg-white p-4 rounded-4 shadow-lg h-100">
                    <div class="mb-3">
                        <i class="bi bi-send-check-fill fs-1 text-success"></i>
                    </div>
                    <h5 class="text-muted">প্রস্তাবনা পাঠানো হয়েছে</h5>
                    <h3 class="fw-bold text-success">15</h3>
                </div>
            </div>

            <div class="col-12 col-md-3 mb-4">
                <div class="bg-white p-4 rounded-4 shadow-lg h-100">
                    <div class="mb-3">
                        <i class="bi bi-bookmark-check-fill fs-1 text-warning"></i>
                    </div>
                    <h5 class="text-muted">শর্টলিস্ট করা হয়েছে</h5>
                    <h3 class="fw-bold text-warning">8</h3>
                </div>
            </div>

            <div class="col-12 col-md-3 mb-4">
                <div class="bg-white p-4 rounded-4 shadow-lg h-100">
                    <div class="mb-3">
                        <i class="bi bi-slash-circle-fill fs-1 text-danger"></i>
                    </div>
                    <h5 class="text-muted">ইগনোর লিস্টে যুক্ত</h5>
                    <h3 class="fw-bold text-danger">3</h3>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
