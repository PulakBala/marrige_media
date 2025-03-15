@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">

            <div class="card shadow-lg border-0 rounded-4" style="background: linear-gradient(to right, rgba(46,187,85,0.2), rgba(46,187,85,0.05));">
                <div class="card-body p-4 text-center">
                    <h2 class="card-title mb-3 text-success fw-bold fs-4 fs-md-3">No Profile Data Available</h2>
                    <p class="card-text text-secondary mb-4 fs-6 fs-md-5">
                        Your profile information is not available. Please fill out your details to complete your profile.
                    </p>
                    <a href="{{ route('profile.edit') }}" class="btn btn-success px-4 py-2 fw-semibold shadow-sm w-100 w-md-auto">
                        <i class="fas fa-edit me-2"></i> Fill Out Your Profile
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
