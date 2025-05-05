@extends('layouts.app')
@section('title', 'Home')
@section('content')

<div class="home_image">
    <div class="d-flex flex-column justify-content-center align-items-center vh-100 home_banner text-white">
        <h1 class="text-center mb-4">বিশ্বস্ত দ্বীনিনিকাহ ও বিয়ের উপযুক্ত জীবনসঙ্গী খোঁজার সেবা ।</h1>
        <div class="bg-dark p-4 rounded-3" style="opacity: 0.8;">
            <form class="row g-2" id="searchForm">
                @csrf
                <!-- First Row -->
                <div class="col-md-2 col-6">
                    <label class="form-label">আমি খুঁজছি </label>
                    <select class="form-select" name="biodata_type">
                        <option value="">নির্বাচন করুন</option>
                        <option value="Female">মহিলা</option>
                        <option value="Male">পুরুষ</option>
                    </select>
                </div>
                <!-- Second Row -->
                <div class="col-md-2 col-6">
                    <label class="form-label">বৈবাহিক অবস্থা</label>
                    <select class="form-select" name="marital_status">
                        <option value="">নির্বাচন করুন</option>
                        <option value="অবিবাহিত">অবিবাহিত</option>
                        <option value="বিবাহিত">বিবাহিত</option>
                        <option value="তালাকপ্রাপ্ত">তালাকপ্রাপ্ত</option>
                        <option value="বিধবা/বিপত্নীক">বিধবা/বিপত্নীক</option>
                    </select>
                </div>
                <div class="col-md-2 col-6">
                    <label class="form-label">বয়স (থেকে)</label>
                    <select class="form-select" name="age_from">
                        <option value="">নির্বাচন করুন</option>
                        @for($i = 18; $i <= 60; $i++)
                            <option value="{{ $i }}">{{ $i }} বছর</option>
                        @endfor
                    </select>
                </div>
                <div class="col-md-2 col-6">
                    <label class="form-label">বয়স (পর্যন্ত)</label>
                    <select class="form-select" name="age_to">
                        <option value="">নির্বাচন করুন</option>
                        @for($i = 18; $i <= 60; $i++)
                            <option value="{{ $i }}">{{ $i }} বছর</option>
                        @endfor
                    </select>
                </div>
                <div class="col-md-2 col-6">
                    <label class="form-label">জাতীয়তা</label>
                    <select class="form-select" name="nationality">
                        <option value="">নির্বাচন করুন</option>
                        <option value="Bangladeshi">বাংলাদেশী</option>
                        <option value="India">ভারতীয়</option>
                        <option value="Other">অন্যান্য</option>
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
    <div class="row" id="profileCards">
        @foreach ($basicInformation as $info)
            <div class="col-md-4 mb-4">
                <div class="px-3 py-2 shadow rounded-4 border-0" style="background: linear-gradient(to bottom right, rgba(255,255,255,0.9), rgba(230,245,255,0.9));">
                    <div class="text-center mt-3">
                        @if($info->biodata_type == 'Male')
                            <img src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png" alt="পুরুষ ছবি" class="rounded-circle shadow" width="80" height="80">
                        @elseif($info->biodata_type == 'Female')
                            <img src="https://cdn-icons-png.flaticon.com/512/4140/4140047.png" alt="মহিলা ছবি" class="rounded-circle shadow" width="80" height="80">
                        @endif
                    </div>
                    <div class="card-body p-0 mt-2">
                        <table class="table-borderless w-auto mb-0">
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">ধরণ</td>
                                <td class="text-muted text-start"> : {{ $info->biodata_type == 'Female' ? 'পাত্রীর বায়োডাটা' : 'পাত্রের বায়োডাটা' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">নাম</td>
                                <td class="text-muted text-start"> : {{ $info->full_name }}</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">বৈবাহিক অবস্থা</td>
                                <td class="text-muted text-start"> : {{ $info->marital_status }}</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">জাতীয়তা</td>
                                <td class="text-muted text-start"> : {{ $info->nationality }}</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">জন্ম বছর</td>
                                <td class="text-muted text-start"> : {{ $info->birth_year }}</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">উচ্চতা</td>
                                <td class="text-muted text-start"> : {{ $info->height }}</td>
                            </tr>
                        </table>
                        <div class="text-center mt-3 mb-3">
                            <a
                                href="{{ route('user.details', $info->user_id) }}"
                                class="btn btn-outline-dark px-4 rounded-pill fw-semibold text-decoration-none"
                            >
                                Biodata Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


<script>
    document.getElementById('searchForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        console.log('Form data:', Object.fromEntries(formData));

        fetch('{{ route("search.profiles") }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            }
        })
        .then(response => {
            console.log('Response status:', response.status);
            if (!response.ok) {
                return response.json().then(err => {
                    console.log('Error response:', err);
                    throw new Error(err.message || 'একটি ত্রুটি ঘটেছে');
                });
            }
            return response.json();
        })
        .then(data => {
            console.log('Received data:', data);
            console.log('HTML length:', data.html ? data.html.length : 0);
            if (data.html === '') {
                document.getElementById('profileCards').innerHTML = `
                    <div class="col-12 text-center">
                        <p class="text-muted">কোন ফলাফল পাওয়া যায়নি</p>
                        <p class="text-muted">অনুগ্রহ করে আপনার অনুসন্ধানের মানদণ্ড পরিবর্তন করুন</p>
                    </div>
                `;
            } else {
                document.getElementById('profileCards').innerHTML = data.html;
            }
        })
        .catch(error => {
            console.error('Error details:', error);
            document.getElementById('profileCards').innerHTML = `
                <div class="col-12 text-center">
                    <p class="text-danger">${error.message}</p>
                    <p class="text-muted">দয়া করে আবার চেষ্টা করুন</p>
                </div>
            `;
        });
    });
</script>

@endsection
