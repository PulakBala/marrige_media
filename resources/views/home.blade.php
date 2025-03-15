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
        <div class="col-md-4 mb-4">


                    <div class="sidebars">
                        <div class="avatar">

                        </div>


                        {{-- <h5 class="card-title">Biodata</h5> --}}
                        <table class="">
                            <tr><td><strong>Biodata Type</strong></td><td>{{ $info->biodata_type }}</td></tr>
                            <tr><td><strong>Marital Status</strong></td><td>{{ $info->marital_status }}</td></tr>
                            <tr><td><strong>Birth Year</strong></td><td>{{ $info->birth_year }}</td></tr>
                            <tr><td><strong>Height</strong></td><td>{{ $info->height }}"</td></tr>
                            <tr><td><strong>Complexion</strong></td><td>{{ $info->complexion }}</td></tr>
                            <tr><td><strong>Weight</strong></td><td>{{ round($info->weight) }} kg</td></tr>
                            <tr><td><strong>Blood Group</strong></td><td>{{ $info->blood_group }}</td></tr>
                            <tr><td><strong>Nationality</strong></td><td>{{ $info->nationality }}</td></tr>
                        </table>
                        <a href="#" class="button">See Biodata -> </a>
                    </div>


        </div>
        @endforeach
    </div>
</div>

@endsection





