<div class="container mt-5">
    <div class="row">
        <!-- Left Sidebar - Steps -->
        <div class="col-md-3">
            <div class="steps-list">
                @for ($i = 1; $i <= $totalSteps; $i++)
                    <div class="step-item {{ $currentStep === $i ? 'active' : '' }}
                                        {{ $i < $currentStep ? 'completed' : '' }}">
                        <div class="step-number">{{ $i }}</div>
                        <div class="step-title">
                            @switch($i)
                                @case(1) General Info @break
                                @case(2) Address @break
                                @case(3) Professional Info @break
                                @case(4) Family Info @break
                                @case(5) Personal Info @break
                                @default Step {{ $i }}
                            @endswitch
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        <!-- Right Side - Form -->
        <div class="col-md-9">
            <div class="card shadow-lg">
                <div class="card-body">
                    <form wire:submit.prevent="{{ $currentStep === $totalSteps ? 'submit' : 'nextStep' }}">
                        @if ($currentStep === 1)
                            <h4 class="mb-4">General Information</h4>
                            <div class="row">

                                <div class="col-12 mb-3">
                                    <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model="basicInfo.full_name" placeholder="Enter your full name">
                                </div>

                                {{-- <div class="col-12 mb-3">
                                    <label class="form-label">Biodata Type <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model="basicInfo.biodata_type">
                                        <option value="">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Marital Status <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model="basicInfo.marital_status">
                                        <option value="">Select</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widowed">Widowed</option>
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Birth Year <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model="basicInfo.birth_year">
                                        <option value="">Select</option>
                                        @for($year = date('Y'); $year >= date('Y') - 60; $year--)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                        @endfor
                                    </select>
                                    <small class="text-muted">Please provide your actual date of birth as shown on your certificate and national ID card.</small>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Height <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model="basicInfo.height">
                                        <option value="">Select</option>
                                        @foreach(range(4.0, 7.0, 0.1) as $height)
                                            <option value="{{ number_format($height, 1) }}">{{ number_format($height, 1) }} ft</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Complexion <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model="basicInfo.complexion">
                                        <option value="">Select</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Dark">Dark</option>
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Weight (kg) <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" wire:model="basicInfo.weight" placeholder="Enter weight in kg">
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Blood Group <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model="basicInfo.blood_group">
                                        <option value="">Select</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Nationality <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model="basicInfo.nationality" placeholder="Enter nationality">
                                </div> --}}
                            </div>

                        {{-- address form      --}}


                        @elseif ($currentStep === 2)
                            <h4 class="mb-4">Address Information</h4>


                            <!-- Permanent Address -->
                            <div class="mb-4">
                                <h5 class="border-bottom pb-2">Permanent Address</h5>
                                {{-- @livewire('location-dropdown') --}}
                                <livewire:location-dropdown />
                            </div>

                            <!-- Present Address -->
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
                                    <h5 class="mb-0">Present Address</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" wire:model="addressInfo.same_as_permanent" id="sameAsPermanent">
                                        <label class="form-check-label" for="sameAsPermanent">
                                            Same as Permanent Address
                                        </label>
                                    </div>
                                </div>
                                <livewire:location-dropdown />
                            </div>








                        @elseif ($currentStep === 3)
                            <h4 class="mb-4">Educational Qualifications </h4>

                            <div class="mb-4">
                                <h5 class="border-bottom pb-2">Educational Information</h5>

                                <!-- Your Education Method -->
                                <div class="mb-3">
                                    <label class="form-label">Your Education Method</label>
                                    <select class="form-control">
                                        <option value="">-- Select Method --</option>
                                        <option value="general">General Education</option>
                                        <option value="technical">Technical Education</option>
                                        <option value="vocational">Vocational Education</option>
                                        <option value="madrasah">Madrasah Education</option>
                                    </select>
                                </div>

                                <!-- Higher Educational Qualification -->
                                <div class="mb-3">
                                    <label class="form-label">Higher Educational Qualification</label>
                                    <select class="form-control">
                                        <option value="">-- Select Qualification --</option>
                                        <option value="ssc">SSC or Equivalent</option>
                                        <option value="hsc">HSC or Equivalent</option>
                                        <option value="honours">Honours</option>
                                        <option value="masters">Masters</option>
                                        <option value="mphil">MPhil</option>
                                        <option value="phd">PhD</option>
                                    </select>
                                </div>

                                <!-- Other Educational Qualification -->
                                <div class="mb-3">
                                    <label class="form-label">Other Educational Qualification</label>
                                    <textarea class="form-control" rows="4" placeholder="Write the details including the name of the institution, subject, passing year. If there is nothing, leave it empty."></textarea>
                                </div>

                                <!-- Islamic Educational Title -->
                                <div class="mb-3">
                                    <label class="form-label">Islamic Educational Title</label>
                                    <select class="form-control">
                                        <option value="">-- Select Title --</option>
                                        <option value="hafez">Hafez</option>
                                        <option value="alim">Alim</option>
                                        <option value="fazil">Fazil</option>
                                        <option value="kamil">Kamil</option>
                                        <option value="mufti">Mufti</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>


                        @endif






                        <div class="d-flex justify-content-between mt-4">
                            @if ($currentStep > 1)
                                <button type="button" class="btn btn-secondary" wire:click="previousStep">
                                    <i class="fas fa-arrow-left"></i> Back
                                </button>
                            @endif
                            @if ($currentStep === $totalSteps)
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-check"></i> Submit
                                </button>
                            @else
                                <button type="submit" class="btn btn-primary">
                                    Next <i class="fas fa-arrow-right"></i>
                                </button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#country').on('change', function() {
            var country_id = $(this).val();
            if (country_id) {
                $.ajax({
                    url: '/get-states/' + country_id,
                    type: 'GET',
                    success: function(data) {
                        $('#state').html('<option value="">Select State</option>');
                        $.each(data, function(key, value) {
                            $('#state').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            }
        });

        $('#state').on('change', function() {
            var state_id = $(this).val();
            if (state_id) {
                $.ajax({
                    url: '/get-cities/' + state_id,
                    type: 'GET',
                    success: function(data) {
                        $('#city').html('<option value="">Select City</option>');
                        $.each(data, function(key, value) {
                            $('#city').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            }
        });

        $('#city').on('change', function() {
            var city_id = $(this).val();
            if (city_id) {
                $.ajax({
                    url: '/get-areas/' + city_id,
                    type: 'GET',
                    success: function(data) {
                        $('#area').html('<option value="">Select Area</option>');
                        $.each(data, function(key, value) {
                            $('#area').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            }
        });
    });

</script> --}}
