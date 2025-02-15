
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

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="p-4">
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email or Mobile Number</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter email or mobile number">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password">
                </div>
                <div class="mb-3">
                    <label for="confirm-password" class="form-label fw-bold">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm-password" placeholder="Confirm password">
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input " id="stayLoggedIn">
                        <label class="form-check-label fw-bold" for="stayLoggedIn">Stay Logged In?</label>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3 fw-bold">
                        <a href="#" class="text-decoration-none">Forgot Password?</a>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary w-100 fw-bold">Login</button>
                <div class="text-center mt-3 ">
                    <p class="fw-bold">New to Shaadi? <a href="#" class="text-decoration-none">Sign Up Free</a></p>
                </div>
            </form>
        </div>



      </div>
    </div>
  </div>

  @endsection

