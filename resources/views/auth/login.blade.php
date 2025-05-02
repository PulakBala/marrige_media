
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="loginModalLabel">প্রবেশ করুন</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('login')}}" method="POST" class="p-4">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">আপনার ইমেইল লিখুন</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="ইমেইল লিখুন">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">পাসওয়ার্ড</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="পাসওয়ার্ড লিখুন">
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label fw-bold">পাসওয়ার্ড নিশ্চিত করুন</label>
                        <input type="password" name="confirm-password" class="form-control" id="confirm-password" placeholder="পাসওয়ার্ড পুনরায় লিখুন">
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input " id="stayLoggedIn" name="remember">
                            <label class="form-check-label fw-bold" for="stayLoggedIn">প্রবেশ অবস্থায় থাকুন?</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3 fw-bold">
                            <a href="#" class="text-decoration-none">পাসওয়ার্ড ভুলে গেছেন?</a>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary w-100 fw-bold">লগইন</button>
                    <div class="text-center mt-3 ">
                        <p class="fw-bold">নতুন ব্যবহারকারী? <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#registerModal">রেজিস্ট্রেশন করুন</a></p>
                    </div>
                </form>
            </div>



        </div>
    </div>
</div>

@include('auth.register')


