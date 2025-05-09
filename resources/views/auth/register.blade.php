<style>
    .profile-option, .gender-option {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .option {
        padding: 8px 15px;
        border: 2px solid #ddd;
        border-radius: 20px;
        cursor: pointer;
        user-select: none;
        transition: 0.3s;
        position: relative;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .option::before {
        content: "";
        width: 16px;
        height: 16px;
        border-radius: 50%;
        border: 2px solid #ddd;
        display: inline-block;
        transition: 0.3s;
    }
    .option.selected {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }
    .option.selected::before {
        background-color: white;
        border-color: white;
    }
    .continue-btn {
        width: 100%;
        padding: 10px;
        background: #ddd;
        border: none;
        border-radius: 20px;
        cursor: not-allowed;
    }
    .continue-btn.active {
        background: #007bff;
        color: white;
        cursor: pointer;
    }
</style>

<form action="{{ route('register') }}" method="POST">
    @csrf
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" id="backButton"><i class="fas fa-arrow-left"></i></button>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">

                    <div class="text-center mb-3">
                        <img src="https://img.favpng.com/6/14/2/account-icon-avatar-icon-man-icon-png-favpng-d9YxzGw3UPA07dE7sAQyMSiNk.jpg"
                             alt="Profile Icon" width="60" height="60"
                             class="rounded-circle bg-light p-2">
                    </div>
                    <div id="registerCarousel" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-inner">
                            {{-- slide number 1  --}}
                            <div class="carousel-item active">
                                <h5>এই প্রোফাইলটি কার জন্য</h5>
                                <div class="profile-option">
                                    <input type="hidden" name="profile_type" id="profileType">
                                    <div class="option" data-value="Myself">নিজের জন্য</div>
                                    <div class="option" data-value="My Son">আমার ছেলে</div>
                                    <div class="option" data-value="My Daughter">আমার মেয়ে</div>
                                    <div class="option" data-value="My Brother">আমার ভাই</div>
                                    <div class="option" data-value="My Sister">আমার বোন</div>
                                    <div class="option" data-value="My Friend">আমার বন্ধু</div>
                                    <div class="option" data-value="My Relative">আমার আত্মীয়</div>
                                </div>

                                <p class="mt-3"><strong>লিঙ্গ</strong></p>
                                <div class="gender-option">
                                    <input type="hidden" name="gender" id="gender">
                                    <div class="option" data-value="Male">পুরুষ</div>
                                    <div class="option" data-value="Female">নারী</div>
                                </div>
                            </div>

                            {{-- slide number 2 --}}
                            <div class="carousel-item">
                                <h5>নাম</h5>
                                <input type="text" name="first_name" class="form-control mb-4 p-2" placeholder="প্রথম  নাম">
                                <input type="text" name="last_name" class="form-control mb-4 p-2" placeholder="লাস্ট নাম">

                                <h5>জন্ম তারিখ</h5>
                                <div class="d-flex gap-2">
                                    <input type="text" name="dob_day" class="form-control" placeholder="Day">
                                    <input type="text" name="dob_month" class="form-control" placeholder="Month">
                                    <input type="text" name="dob_year" class="form-control" placeholder="Year">
                                </div>
                            </div>

                            {{-- slide number 3 --}}
                            <div class="carousel-item">
                                <h5>আমাদের ধর্ম</h5>
                                <select name="religion" class="form-select mb-2 p-2" aria-label="Select an option">
                                    <option selected>নির্বাচন করুন</option>
                                    <option value="Muslim">মুসলিম</option>

                                </select>

                                <h5>ইমেইল আইডি</h5>
                                <input type="email" name="email" class="form-control mb-4 p-2" placeholder="Enter your Email">

                                <h5>মোবাইল নম্বর </h5>
                                <div class="d-flex mb-2 gap-2">
                                    <!-- Country Code Dropdown -->
                                    <select class="form-select p-2" name="country_code" aria-label="Country Code" id="countryCode" style="width: 120px">
                                        <option value="+88">+0 (BAD)</option>

                                        <!-- Add more countries and their codes as needed -->
                                    </select>

                                    <!-- Mobile Number Input -->
                                    <input type="text" name="mobile_number" class="form-control" placeholder="আপনার মোবাইল নম্বর লিখুন" id="mobileNumber">
                                </div>

                            </div>


                           {{-- slide number 4 --}}
                            <div class="carousel-item">


                                <h5>পাসওয়ার্ড</h5>
                                <input type="password" name="password" class="form-control mb-4 p-2" placeholder="আপনার পাসওয়ার্ড দিন">

                                <h5>পাসওয়ার্ড নিশ্চিত করুন</h5>
                                <input type="password" name="password_confirmation" class="form-control mb-4 p-2" placeholder="পাসওয়ার্ড নিশ্চিত করুন">
                            </div>




                        </div>
                    </div>
                    <button class="continue-btn mt-4" disabled>Continue</button>
                    <button type="submit" class="submit-btn mt-4" style="display: none;">Submit</button>
                </div>
            </div>
        </div>
    </div>


</form>
<script>

document.addEventListener("DOMContentLoaded", function() {
    const options = document.querySelectorAll(".option");
    const profileTypeInput = document.querySelector("#profileType");
    const genderInput = document.querySelector("#gender");
    const continueBtn = document.querySelector(".continue-btn");
    const carouselItems = document.querySelectorAll(".carousel-item");
    let profileSelected = false;
    let genderSelected = false;
    let currentSlide = 0;  // Track the current slide

    // Handle selecting options
    options.forEach(option => {
        option.addEventListener("click", function() {
            const isGender = this.parentElement.classList.contains("gender-option");
            this.parentElement.querySelectorAll(".option").forEach(opt => opt.classList.remove("selected"));
            this.classList.add("selected");

            if (isGender) {
                genderSelected = true;
                genderInput.value = this.getAttribute("data-value"); // Set gender value
            } else {
                profileSelected = true;
                profileTypeInput.value = this.getAttribute("data-value"); // Set profile type value
            }

            // Enable "Continue" button if both options are selected
            continueBtn.disabled = !(profileSelected && genderSelected);
            continueBtn.classList.toggle("active", profileSelected && genderSelected);
        });
    });

    // Handle "Continue" button click to move to the next slide
    continueBtn.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default form submission
        if (profileSelected && genderSelected) {
            // Move to the next slide (slide 1 -> slide 2, slide 2 -> slide 3)
            carouselItems[currentSlide].classList.remove("active");

            // Increase currentSlide to go to the next slide
            currentSlide++;

            if (currentSlide < carouselItems.length) {
                carouselItems[currentSlide].classList.add("active");
            }

            // Change button text to "Submit" on the last slide
            if (currentSlide === carouselItems.length - 1) {
                continueBtn.style.display = "none"; // Hide the Continue button
                document.querySelector(".submit-btn").style.display = "block"; // Show the Submit button
            } else {
                continueBtn.textContent = "Continue";
                continueBtn.style.display = "block"; // Show the Continue button
                document.querySelector(".submit-btn").style.display = "none"; // Hide the Submit button
            }
        }
    });

    // Handle form submission
    const form = document.querySelector("form");
    form.addEventListener("submit", function(event) {
        // Log the form data
        const formData = new FormData(form);
        for (const [key, value] of formData.entries()) {
            console.log(`${key}: ${value}`);
        }

        // Close the modal
        const modal = document.querySelector("#registerModal");
        const modalInstance = bootstrap.Modal.getInstance(modal);
        modalInstance.hide();
    });

    // Handle "Back" button functionality
    const backButton = document.querySelector("#backButton");  // Now using the ID to target the Back button
    if (backButton) {
        backButton.addEventListener("click", function() {
            // Only go back if we're not already on the first slide
            if (currentSlide > 0) {
                carouselItems[currentSlide].classList.remove("active");
                currentSlide--;

                if (currentSlide >= 0) {
                    carouselItems[currentSlide].classList.add("active");
                }
            }
        });
    }


    //profilte type and gender value pass with function
    function setProfileType(value) {
    document.getElementById('profileType').value = value;
}

function setGender(value) {
    document.getElementById('gender').value = value;
}
});


</script>
