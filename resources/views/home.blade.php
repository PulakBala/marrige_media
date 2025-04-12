@extends('layouts.app')
@section('title', 'Home')
@section('content')

<div class="home_image">
    <div class="d-flex flex-column justify-content-center align-items-center vh-100 home_banner text-white">
        <h1 class="text-center mb-4">Trusted Matrimony & Matchmaking Service</h1>
        <div class="bg-dark p-4 rounded-3" style="opacity: 0.8;">
            <form class="row g-2">
                <!-- First Row -->
                <div class="col-md-2 col-6">
                    <label class="form-label">I'm looking for a</label>
                    <select class="form-select">
                        <option>Woman</option>
                        <option>Man</option>
                    </select>
                </div>
                <div class="col-md-2 col-3">
                    <label class="form-label">Aged</label>
                    <input type="number" class="form-control" placeholder="22">
                </div>
                <div class="col-md-2 col-3">
                    <label class="form-label">to</label>
                    <input type="number" class="form-control" placeholder="27">
                </div>

                <!-- Second Row -->
                <div class="col-md-2 col-6">
                    <label class="form-label">Of religion</label>
                    <select class="form-select">
                        <option>Select</option>
                    </select>
                </div>
                <div class="col-md-2 col-6">
                    <label class="form-label">And living in</label>
                    <select class="form-select">
                        <option>Select</option>
                    </select>
                </div>
                <div class="col-md-2 col-12 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">Let's Begin</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        @foreach ($basicInformation as $info)
        <div class="col-md-4 mb-2">
            <div class="card shadow rounded-4 border-0" style="background: linear-gradient(to bottom right, rgba(255,255,255,0.9), rgba(230,245,255,0.9));">

                <!-- Avatar Section -->
                <div class="text-center mt-3">
                    @if($info->biodata_type == 'Male')
                        <img src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png" alt="Male Avatar" class="rounded-circle shadow" width="80" height="80">
                    @elseif($info->biodata_type == 'Female')
                        <img src="https://cdn-icons-png.flaticon.com/512/4140/4140047.png" alt="Female Avatar" class="rounded-circle shadow" width="80" height="80">
                    @else
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Avatar" class="rounded-circle shadow" width="80" height="80">
                    @endif
                </div>

                <div class="card-body p-0 mt-2">

                    <!-- Centered Table Wrapper -->
                    <div class="d-flex justify-content-center">
                        <table class=" table-borderless w-auto mb-0">
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">Biodata Type</td>
                                <td class="text-muted text-start"> : {{ $info->biodata_type }}</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">Marital Status</td>
                                <td class="text-muted text-start"> : {{ $info->marital_status }}</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">Birth Year</td>
                                <td class="text-muted text-start"> : {{ $info->birth_year }}</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">Height</td>
                                <td class="text-muted text-start"> : {{ $info->height }}</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">Nationality</td>
                                <td class="text-muted text-start"> : {{ $info->nationality }}</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">Occupation</td>
                                <td class="text-muted text-start"> : {{ $info->occupationInformation->occupation ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">Description</td>
                                <td class="text-muted text-start"> : {{ $info->occupationInformation->description ?? 'N/A' }}</td>
                            </tr>
                        </table>
                    </div>

                    <!-- Button Section -->
                    {{-- <div class="text-center mt-3 mb-3">
                        <a href="{{ route('user.details', $info->user_id) }}" class="btn btn-outline-dark px-4 rounded-pill fw-semibold">Biodata Details</a>
                    </div> --}}

                    <div class="text-center mt-3 mb-3">
                        <button type="button" class="btn btn-outline-dark px-4 rounded-pill fw-semibold" data-bs-toggle="modal" data-bs-target="#loginModal">
                            Biodata Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection





