@extends('layouts.app')
@section('title', 'My Subscriptions')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-5 fw-bold" style="color:  #2ebb55;">📜 আমার সাবস্ক্রিপশন</h2>

        @if ($totalConnections > 0)
            <h5 class="text-center mt-4">
                🎉 আপনি এখন পর্যন্ত মোট
                <span class="fw-bold text-success">{{ $totalConnections }}</span>
                টি কানেকশন কিনেছেন! 🚀
            </h5>

            <div class="row justify-content-center">
                @foreach ($subscriptions as $subscription)
                    <div class="col-lg-5 col-md-6 mb-4">
                        <div class="card border-0 shadow-lg rounded-4 p-4 bg-light">
                            <div class="card-body">
                                <h4 class="card-title text-dark fw-semibold text-uppercase">
                                    {{ $subscription->package->name }}</h4>
                                <hr>
                                <p class="mb-2"><strong>🔗 ব্যবহৃত কানেকশন:</strong>
                                    <span class="text-dark">{{ $subscription->used_connections }} /
                                        {{ $subscription->package->connections }}</span>
                                </p>
                                <p class="mb-2"><strong>⏳ মেয়াদ শেষ হবে:</strong>
                                    <span class="text-danger fw-semibold">{{ $subscription->expiry_date }}</span>
                                </p>
                                <p class="mb-2"><strong>💳 পেমেন্টের অবস্থা:</strong>
                                    <span
                                        class="badge {{ $subscription->payment_status == 'pending' ? 'bg-warning text-dark' : 'bg-success' }}">
                                        {{ ucfirst($subscription->payment_status) }}
                                    </span>
                                </p>
                                <p class="mb-2"><strong>📅 নিবন্ধনের সময়:</strong>
                                    <span class="text-secondary">{{ $subscription->subscribed_at }}</span>
                                </p>
                                @if ($subscription->transaction_id)
                                    <p class="mb-2"><strong>🆔 ট্রানজ্যাকশন নম্বর:</strong>
                                        <span class="text-primary">{{ $subscription->transaction_id }}</span>
                                    </p>
                                @endif




                                <!-- Upgrade Button -->
                                @php
                                    $nextPackage = \App\Models\Package::where('id', '>', $subscription->package_id)
                                        ->orderBy('id', 'asc')
                                        ->first();
                                @endphp

                                @if ($nextPackage)
                                <div class="mt-3">
                                    <form action="{{ route('subscriptions.upgrade') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="package_id" value="{{ $nextPackage->id }}">
                                        <button type="submit" class="btn btn-success w-100" onclick="return confirm('Are you sure you want to upgrade your subscription?')">
                                            🚀 Upgrade to {{ $nextPackage->name }}
                                        </button>
                                    </form>
                                </div>
                                @endif


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- If no subscriptions found -->
            <div class="text-center mt-5">
                <h3 class="text-danger fw-bold">😢 No subscriptions found!</h3>
                <p class="text-secondary">It looks like you haven't purchased any packages yet.</p>
                <a href="{{ route('connection') }}" class="btn btn-sm btn-outline-dark mt-3">Purchase a Package</a>
            </div>
        @endif
    </div>
@endsection
