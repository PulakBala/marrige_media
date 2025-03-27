@extends('layouts.app')
@section('title', 'Connection')

@section('content')
<div class="container mt-4">
    <div class="row">

        @foreach($packages as $package)
        <div class="col-md-4 mb-2">
            <div class="card shadow rounded-4 border-0" style="background: linear-gradient(to bottom right, rgba(255,255,255,0.9), rgba(230,245,255,0.9));">
                <div class="card-body mt-2 text-cneter" style="margin-left: 10px; padding: 0;">

                  <div style="margin-left: 10px">
                    <h3 class="card-title text-uppercase" style="font-weight: 700; font-size: 1.25rem;">{{ $package->name }} <span class="text-muted" style="margin-left: 20px; font-size:16px;">{{$package->months}} MONTHS</span></h3>

                    <p class="card-text mb-2 text-uppercase" style="font-size: 1rem; color: #555;">discount {{ $package->discount }}</p>

                    <p class="card-text mb-3 text-uppercase" style="font-size: 1.25rem; font-weight: 600; color: #333;">PACKAGE PRICE: <span style="color: #007bff;">${{ $package->price }}</span></p>
                    <p class="card-text mb-2 text-uppercase" style="font-size: 1rem; color: #555;"> <i class="fas fa-check bold"  style="color: #2ebb55"></i> {{ $package->feature_1 }}</p>
                    <p class="card-text mb-2 text-uppercase" style="font-size: 1rem; color: #555;"> <i class="fas fa-check" style="color: #2ebb55"></i> VIEW UPTO {{ $package->connections }} CONTACT NUMBERS</p>
                    {{-- <p class="card-text mb-2" style="font-size: 1rem; color: #555;">{{ $package->feature_2 }}</p> --}}
                    <p class="card-text mb-2 text-uppercase" style="font-size: 1rem; color: #555;"> <i class="fas fa-check" style="color: #2ebb55"></i> {{ $package->feature_3 }}</p>
                    <p class="card-text mb-2 text-uppercase" style="font-size: 1rem; color: #555;"> <i class="fas fa-check" style="color: #2ebb55"></i> {{ $package->feature_4 }}</p>

                </div>

                <!-- Button Section -->
                              <!-- Button Section -->
                              <div class="text-center mt-3 mb-3">
                                <a href="#" class="btn btn-sm btn-outline-dark px-2 rounded-pill fw-semibold text-uppercase">connection</a>
                                <a href="{{ route('package.edit', $package->id) }}" class="btn btn-sm btn-warning px-4 rounded-pill fw-semibold" title="Edit">
                                    <i class="fas fa-edit"></i> <!-- Edit icon -->
                                </a>
                                <form class="pt-2" action="{{ route('package.delete', $package->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger px-4 rounded-pill fw-semibold" title="Delete">
                                        <i class="fas fa-trash"></i> <!-- Delete icon -->
                                    </button>
                                </form>
                            </div>
            </div>
        </div>
    </div>
    @endforeach

    </div>
</div>




@endsection
