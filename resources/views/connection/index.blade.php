@extends('layouts.app')
@section('title', 'Connection')

@section('content')
    <div class="container mt-4">
        <div class="row">

            @foreach ($packages as $package)
                <div class="col-md-4 mb-2">

                        <div class="card-body shadow rounded-4 bg-white p-4" style="margin-left: 10px;">

                            <!-- Package Title -->
                            <h3 class="card-title text-uppercase mb-3 d-flex align-items-center justify-content-between" style="font-weight: 700; font-size: 1.5rem; color: #333;">
                                {{ $package->name }}
                                <span class="text-muted fw-medium" style="font-size: 1rem;">{{ $package->months }} মাস</span>
                            </h3>

                            <!-- Discount -->
                            <p class="text-success fw-semibold mb-2" style="font-size: 1rem;">
                                {{ $package->discount }}
                            </p>

                            <!-- Price -->
                            <p class="mb-3" style="font-size: 1.2rem; font-weight: 600; color: #444;">
                                প্যাকেজ মূল্য:
                                <span style="color: #2ebb55; font-size: 1.7rem; font-weight: 700;">
                                    <span style="font-size: 1.6rem;">৳</span> {{ $package->price }}
                                </span>
                            </p>

                            <!-- Features -->
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <i class="fas fa-check-circle me-2" style="color: #2ebb55;"></i>
                                    {{ $package->feature_1 }}
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check-circle me-2" style="color: #2ebb55;"></i>
                                    আপনি {{ $package->connections }} জন মানুষের যোগাযোগের তথ্য দেখতে পারবেন।
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check-circle me-2" style="color: #2ebb55;"></i>
                                    {{ $package->feature_3 }}
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check-circle me-2" style="color: #2ebb55;"></i>
                                    {{ $package->feature_4 }}
                                </li>
                            </ul>

                            <!-- Button Section -->
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <button onclick="purchasePackage({{ $package->id }})"
                                    class="btn btn-outline-primary rounded-pill fw-bold text-uppercase px-4">
                                    কানেকশন
                                </button>

                                <div class="d-flex gap-2">
                                    <a href="{{ route('package.edit', $package->id) }}"
                                        class="btn btn-warning rounded-pill px-3 fw-bold" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form action="{{ route('package.delete', $package->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger rounded-pill px-3 fw-bold" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>


                </div>
            @endforeach
        </div>
    </div>


    <script>
        function purchasePackage(packageId) {
            fetch('/purchase-package', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        package_id: packageId
                    })
                })
                .then(response => {
                    console.log("Response", response);
                    return response.json();
                })
                .then(data => {
                    console.log("Data", data);

                    if (data.success) {
                        alert("Package purchased successfully!");
                        location.reload();
                    } else {
                        alert(data.message || "Something went wrong!");
                    }
                })
                .catch(error => console.error("Error:", error));
        }
    </script>



@endsection
