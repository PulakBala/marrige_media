@extends('layouts.app')
@section('title', 'Home')
@section('content')

<div class="home_image">
    <div class="d-flex flex-column justify-content-center align-items-center vh-100 home_banner text-white">
        <h1 class="text-center mb-4">বিশ্বস্ত ম্যাট্রিমোনি ও বিয়ের উপযুক্ত জীবনসঙ্গী খোঁজার সেবা</h1>
        <div class="bg-dark p-4 rounded-3" style="opacity: 0.8;">
            <form class="row g-2">
                <!-- First Row -->
                <div class="col-md-2 col-6">
                    <label class="form-label">আমি খুঁজছি একজন</label>
                    <select class="form-select">
                        <option>মহিলা</option>
                        <option>পুরুষ</option>
                    </select>
                </div>
                <div class="col-md-2 col-3">
                    <label class="form-label">বয়স</label>
                    <input type="number" class="form-control" placeholder="২২">
                </div>
                <div class="col-md-2 col-3">
                    <label class="form-label">থেকে</label>
                    <input type="number" class="form-control" placeholder="২৭">
                </div>

                <!-- Second Row -->
                <div class="col-md-2 col-6">
                    <label class="form-label">ধর্ম</label>
                    <select class="form-select">
                        <option>নির্বাচন করুন</option>
                    </select>
                </div>
                <div class="col-md-2 col-6">
                    <label class="form-label">বাসস্থান</label>
                    <select class="form-select">
                        <option>নির্বাচন করুন</option>
                    </select>
                </div>
                <div class="col-md-2 col-12 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">চলুন শুরু করি</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        @foreach ($basicInformation as $info)
        <div class="col-md-4 mb-4">
            <div class="px-3 py-2 shadow rounded-4 border-0" style="background: linear-gradient(to bottom right, rgba(255,255,255,0.9), rgba(230,245,255,0.9));">

                <!-- Avatar Section -->
                <div class="text-center mt-3">
                    @if($info->biodata_type == 'Male')
                        <img src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png" alt="পুরুষ ছবি" class="rounded-circle shadow" width="80" height="80">
                    @elseif($info->biodata_type == 'Female')
                        <img src="https://cdn-icons-png.flaticon.com/512/4140/4140047.png" alt="মহিলা ছবি" class="rounded-circle shadow" width="80" height="80">
                    @else
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="ছবি" class="rounded-circle shadow" width="80" height="80">
                    @endif
                </div>

                <div class="card-body p-0 mt-2">

                    <!-- Centered Table Wrapper -->

                        <table class=" table-borderless w-auto mb-0">

                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start"> ধরণ</td>
                                <td class="text-muted text-start">
                                    :
                                    @if($info->biodata_type == 'Female')
                                        পাত্রীর বায়োডাটা
                                    @elseif($info->biodata_type == 'Male')
                                        পাত্রের বায়োডাটা
                                    @else
                                        বায়োডাটা
                                    @endif
                                </td>
                            </tr
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">নাম</td>
                                <td class="text-muted text-start"> : {{ $info->full_name }}</td>
                            </tr>

                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">জন্ম বছর</td>
                                <td class="text-muted text-start"> : {{ $info->birth_year }}</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">উচ্চতা </td>
                                <td class="text-muted text-start"> : {{ $info->height }}</td>
                            </tr>

                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">পেশা </td>
                                <td class="text-muted text-start"> : {{ $info->occupationInformation->description ?? 'N/A' }}</td>
                            </tr>
                        </table>


                    <!-- Button Section -->
                    <div class="text-center mt-3 mb-3">
                        <button type="button" class="btn btn-outline-dark px-4 rounded-pill fw-semibold" data-bs-toggle="modal" data-bs-target="#loginModal">
                            বায়োডাটা বিস্তারিত
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection





{{-- bU.EcVT?YRA& --}}