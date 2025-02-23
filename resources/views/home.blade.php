
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


@endsection



