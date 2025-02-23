
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="loginModalLabel">Login</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('login')}}" method="POST" class="p-4">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email or Mobile Number</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label fw-bold">Confirm Password</label>
                        <input type="password" name="confirm-password" class="form-control" id="confirm-password" placeholder="Confirm password">
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
                        <p class="fw-bold">New to Shaadi? <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#registerModal">Sign Up Free</a></p>
                    </div>
                </form>
            </div>



        </div>
    </div>
</div>

@include('auth.register')


