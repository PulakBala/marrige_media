@extends('layouts.app')
@section('title', 'My Subscriptions')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-5 fw-bold" style="color:  #2ebb55;">📜 My Subscriptions</h2>

    @if ($totalConnections > 0)
        <h5 class="text-center mt-4">
            🎉 You've purchased
            <span class="fw-bold text-success">{{ $totalConnections }}</span>
            connections so far! 🚀
        </h5>

        <div class="row justify-content-center">
            @foreach ($subscriptions as $subscription)
                <div class="col-lg-5 col-md-6 mb-4">
                    <div class="card border-0 shadow-lg rounded-4 p-4 bg-light">
                        <div class="card-body">
                            <h4 class="card-title text-dark fw-semibold text-uppercase">{{ $subscription->package->name }}</h4>
                            <hr>
                            <p class="mb-2"><strong>🔗 Connections Used:</strong>
                                <span class="text-dark">{{ $subscription->used_connections }} / {{ $subscription->package->connections }}</span>
                            </p>
                            <p class="mb-2"><strong>⏳ Expires On:</strong>
                                <span class="text-danger fw-semibold">{{ $subscription->expiry_date }}</span>
                            </p>
                            <p class="mb-2"><strong>💳 Payment Status:</strong>
                                <span class="badge {{ $subscription->payment_status == 'pending' ? 'bg-warning text-dark' : 'bg-success' }}">
                                    {{ ucfirst($subscription->payment_status) }}
                                </span>
                            </p>
                            <p class="mb-2"><strong>📅 Subscribed At:</strong>
                                <span class="text-secondary">{{ $subscription->subscribed_at }}</span>
                            </p>
                            @if ($subscription->transaction_id)
                                <p class="mb-2"><strong>🆔 Transaction ID:</strong>
                                    <span class="text-primary">{{ $subscription->transaction_id }}</span>
                                </p>
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
