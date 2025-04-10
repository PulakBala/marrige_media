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
                        <h5 class="fw-semibold mb-1">Available Connections</h5>
                        <h3 class="fw-bold text-success">{{ $remainingConnections }}</h3>
                        <p class="text-muted small mt-2">You need one connection to view a contact's details.</p>
                    </div>
                    <a href="{{ route('connection') }}" class="btn btn-primary mt-3 rounded-pill">
                        <i class="bi bi-bag-plus-fill me-1"></i> Buy Package
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
                        <h5 class="fw-semibold mb-1">Viewed Contacts</h5>
                        <p class="text-muted small mt-md-5">See the profiles you’ve already accessed.</p>
                    </div>
                    <a href="{{ route('profile.contacts/viewed') }}" class="btn btn-warning text-white mt-3 rounded-pill">
                        <i class="bi bi-person-lines-fill me-1"></i> View Contacts
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
                        <h5 class="fw-semibold mb-1">My Purchases</h5>
                        <p class="text-muted small mt-md-5">Access your full purchase and subscription history.</p>
                    </div>
                    <a href="{{ route('subscriptions.index') }}" class="btn btn-success mt-3 rounded-pill">
                        <i class="bi bi-arrow-right-circle-fill me-1"></i> View History
                    </a>
                </div>
            </div>
        </div>


        <div class="row text-center my-4">
            <div class="col-6 col-md-3 mb-3">
                <div class="bg-light p-3 rounded shadow-sm">
                    <h6 class="text-muted">Profiles Viewed</h6>
                    <h4 class="fw-bold text-primary">120</h4>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <div class="bg-light p-3 rounded shadow-sm">
                    <h6 class="text-muted">Proposals Sent</h6>
                    <h4 class="fw-bold text-success">15</h4>
                </div>
            </div>
            <!-- Add more cards as needed -->
        </div>

    </div>
</div>
@endsection
