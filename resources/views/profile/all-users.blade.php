@extends('layouts.app')
@section('title', 'All Users')

@section('content')
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
                                <td class="fw-semibold text-dark pe-3 text-start">Name</td>
                                <td class="text-muted text-start"> : {{ $info->full_name }}</td>
                            </tr>
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
                    <div class="text-center mt-3 mb-3">
                        <a href="{{ route('user.details', $info->user_id) }}" class="btn btn-outline-dark px-4 rounded-pill fw-semibold">Biodata Details</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>




@endsection
