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
                                @case(3) Educational Qualifications @break
                                @case(4) Family Information @break
                                @case(5) Personal Info @break
                                @case(6) Occupational Information @break
                                @case(7) Marriage related information @break
                                @case(8) Expected Life partner @break
                                @case(9) Pledge @break
                                @default Contact {{ $i }}
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
                                    <input type="text" class="form-control" wire:model.lazy="basicInfo.full_name" placeholder="Enter your full name">
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Biodata Type <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model.lazy="basicInfo.biodata_type">
                                        <option value="">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Marital Status <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model.lazy="basicInfo.marital_status">
                                        <option value="">Select</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Widowed">Widowed</option>
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Birth Year <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model.lazy="basicInfo.birth_year">
                                        <option value="">Select</option>
                                        @for($year = date('Y'); $year >= date('Y') - 60; $year--)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                        @endfor
                                    </select>
                                    <small class="text-muted">Please provide your actual date of birth as shown on your certificate and national ID card.</small>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Height <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model.lazy="basicInfo.height">
                                        <option value="">Select</option>
                                        @foreach(range(4.0, 7.0, 0.1) as $height)
                                            <option value="{{ number_format($height, 1) }}">{{ number_format($height, 1) }} ft</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Complexion <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model.lazy="basicInfo.complexion">
                                        <option value="">Select</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Dark">Dark</option>
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Weight (kg) <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" wire:model.lazy="basicInfo.weight" placeholder="Enter weight in kg">
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Blood Group <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model.lazy="basicInfo.blood_group">
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
                                    <input type="text" class="form-control" wire:model.lazy="basicInfo.nationality" placeholder="Enter nationality">
                                </div>
                            </div>

                        {{-- address form      --}}


                        @elseif ($currentStep === 2)
                            <h4 class="mb-4">Address Information</h4>


                            <!-- Permanent Address -->
                            <div class="mb-4">
                                <h5 class="border-bottom pb-2">Permanent Address</h5>
                                {{-- @livewire('location-dropdown') --}}
                                <livewire:location-dropdown  type="permanent"/>
                            </div>

                            <!-- Present Address -->
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
                                    <h5 class="mb-0">Present Address</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" wire:model.lazy="addressInfo.same_as_permanent" id="sameAsPermanent">
                                        <label class="form-check-label" for="sameAsPermanent">
                                            Same as Permanent Address
                                        </label>
                                    </div>
                                </div>
                                <livewire:location-dropdown  type="present" />
                            </div>

                            <div class="mb-2">
                                <label for="">Write the name of the village or area without entering the house number. Example - Mirpur 10, Baghmara</label>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Where did you grow up?</label>
                                <input type="text" class="form-control" wire:model.lazy="addressInfo.grew_up" placeholder="">
                            </div>








                        @elseif ($currentStep === 3)

                            <h4 class="mb-4">Educational Qualifications </h4>

                            <div class="mb-4">
                                <h5 class="border-bottom pb-2">Educational Information</h5>

                                <!-- Your Education Method -->
                                <div class="mb-3">
                                    <label class="form-label">Your Education Method</label>
                                    <select class="form-control" wire:model.lazy="education.method">
                                        <option value="">-- Select Method --</option>
                                        <option value="general">General Education</option>
                                        <option value="technical">Technical Education</option>
                                        <option value="vocational">Vocational Education</option>
                                        <option value="madrasah">Madrasah Education</option>
                                    </select>
                                    @error('education.method') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <!-- Higher Educational Qualification -->
                                <div class="mb-3">
                                    <label class="form-label">Higher Educational Qualification</label>
                                    <select class="form-control"  wire:model.lazy="education.higher_qualification">
                                        <option value="">-- Select Qualification --</option>
                                        <option value="ssc">SSC</option>
                                        <option value="hsc">HSC</option>
                                        <option value="honours">Honours</option>
                                        <option value="masters">Masters</option>
                                        <option value="mphil">MPhil</option>
                                        <option value="phd">PhD</option>
                                    </select>
                                    @error('education.higher_qualification') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">SSC / Dakhil / Equivalent Passing year</label>
                                    <input type="text" class="form-control" wire:model.lazy="education.passing_year"></input>

                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Group</label>
                                    <select class="form-control"  wire:model.lazy="education.group">
                                        <option value="">Select Group</option>
                                        <option value="science">Science</option>
                                        <option value="arts">Arts</option>
                                        <option value="commerce">Commerce</option>
                                        <option value="humanities">Humanities</option>
                                        <option value="vocational">Vocational</option>
                                    </select>
                                    @error('education.group') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Result</label>
                                    <select class="form-control"  wire:model.lazy="education.result">
                                        <option value="">Select Result</option>
                                        <option value="A">A</option>
                                        <option value="A+">A+</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="F">F</option>
                                    </select>
                                    @error('education.result') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>



                                <!-- Other Educational Qualification -->
                                <div class="mb-3">
                                    <label class="form-label">Other Educational Qualification</label>
                                    <textarea class="form-control" wire:model.lazy="education.other_qualification" rows="4" placeholder=""></textarea>
                                    @error('education.other_qualification') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="mb-3">
                                    <label>Write the details including the name of the institution, subject, passing year. If there is nothing, leave it empty.</label>
                                </div>

                                <!-- Islamic Educational Title -->
                                <div class="mb-3">
                                    <label class="form-label">Islamic Educational Title</label>
                                    <select class="form-control" wire:model.lazy="education.islamic_title">
                                        <option value="">-- Select Title --</option>
                                        <option value="hafez">Hafez</option>
                                        <option value="alim">Alim</option>
                                        <option value="fazil">Fazil</option>
                                        <option value="kamil">Kamil</option>
                                        <option value="mufti">Mufti</option>
                                        <option value="others">Others</option>
                                    </select>
                                    @error('education.islamic_title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>




                        @elseif ($currentStep === 4)

                            <h4 class="mb-4">Family Information</h4>
                            <div class="mb-4">
                                <label class="form-label">Father's Name</label>
                                <input type="text" class="form-control" wire:model.lazy="familyInfo.father_name" placeholder="Enter father's name">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Is your father alive?</label>
                                <select class="form-control" wire:model.lazy="familyInfo.father_alive">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Description of Father's Profession</label>
                                <textarea class="form-control" wire:model.lazy="familyInfo.father_profession" rows="3" placeholder="Describe father's profession"></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Mother's Name</label>
                                <input type="text" class="form-control" wire:model.lazy="familyInfo.mother_name" placeholder="Enter mother's name">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Is your mother alive?</label>
                                <select class="form-control" wire:model.lazy="familyInfo.mother_alive">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Description of Mother's Profession</label>
                                <textarea class="form-control" wire:model.lazy="familyInfo.mother_profession" rows="3" placeholder="Describe mother's profession"></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">How many brothers do you have?</label>
                                <input type="number" class="form-control" wire:model.lazy="familyInfo.brothers_count" placeholder="Enter number of brothers">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">How many sisters do you have?</label>
                                <input type="number" class="form-control" wire:model.lazy="familyInfo.sisters_count" placeholder="Enter number of sisters">
                            </div>



                            <div class="mb-4">
                                <label class="form-label">Family Financial Status</label>
                                <select class="form-control" wire:model.lazy="familyInfo.financial_status">
                                    <option value="">Select</option>
                                    <option value="stable">Stable</option>
                                    <option value="unstable">Unstable</option>
                                    <option value="poor">Poor</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Description of Financial Condition</label>
                                <textarea class="form-control" wire:model.lazy="familyInfo.financial_condition" rows="3" placeholder="Describe financial condition"></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">How is your family's religious condition?</label>
                                <textarea class="form-control" wire:model.lazy="familyInfo.religious_condition" rows="3" placeholder="Describe religious condition"></textarea>
                            </div>

                        @elseif ($currentStep === 5)
                            <h4 class="mb-4">Personal Information</h4>

                            <div class="mb-4">
                                <label class="form-label">What kind of clothes do you usually wear outside the house?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.clothes" rows="3" placeholder="Describe your clothing style"></textarea>
                                @error('personalInfo.clothes') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">For the bride, you can write like following- "Wear black burqa with niqab and hand foot socks" or "Wear burqa and hijab, do not wear niqab" or "Wear mask with hijab, do not wear niqab" or "Wear slawar kameez, do not wear niqab".</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Do you have beard according to sunnah? since when?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.beard" rows="3" placeholder="Describe your beard status"></textarea>
                                @error('personalInfo.beard') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">Please clearly write how many years you have been keeping a beard. If you have less beard growth due to biological reasons, it should be mentioned.</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Do you pray five times a day? since when?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.prayer" rows="3" placeholder="Describe your prayer habits"></textarea>
                                @error('personalInfo.prayer') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">Please write a clear answer with "Yes" or "No". It must be mentioned how many years you have been praying five times a day.</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Do you comply with mahram / non-mahram?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.mahram" rows="3" placeholder="Describe your compliance"></textarea>
                                @error('personalInfo.mahram') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Are you able to recite the Quran correctly?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.quran_recitation" rows="3" placeholder="Describe your Quran recitation skills"></textarea>
                                @error('personalInfo.quran_recitation') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Which Fiqh do you follow?</label>
                                <input type="text" class="form-control" wire:model.lazy="personalInfo.fiqh" placeholder="Enter your Fiqh">
                                @error('personalInfo.fiqh') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Do you watch or listen to dramas / movies / serials / songs?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.media" rows="3" placeholder="Describe your media consumption"></textarea>
                                @error('personalInfo.media') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Do you have any mental or physical diseases?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.diseases" rows="3" placeholder="Describe any diseases"></textarea>
                                @error('personalInfo.diseases') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Are you involved in any special work of deen?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.deen_work" rows="3" placeholder="Describe your involvement in deen work"></textarea>
                                @error('personalInfo.deen_work') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">Example: Tablig etc.</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">What are your ideas or beliefs about the shrine (Mazar)?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.shrine_beliefs" rows="3" placeholder="Describe your beliefs about shrines"></textarea>
                                @error('personalInfo.shrine_beliefs') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Write the names of at least 3 Islamic books you have read:</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.islamic_books" rows="3" placeholder="List the Islamic books"></textarea>
                                @error('personalInfo.islamic_books') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Write the names of at least 3 Islamic scholars of your choice:</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.islamic_scholars" rows="3" placeholder="List the Islamic scholars"></textarea>
                                @error('personalInfo.islamic_scholars') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Select the category applicable to you (Otherwise leave the field blank):</label>
                                <select class="form-control" wire:model.lazy="personalInfo.category">
                                    <option value="">Select Category</option>
                                    <option value="infertile">Infertile</option>
                                    <option value="converted_muslim">Converted Muslim</option>
                                    <option value="orphan">Orphan</option>
                                    <option value="interested_in_masna">Interested in being Masna</option>
                                    <option value="tablig">Tablig</option>
                                </select>
                                @error('personalInfo.category') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">Example: If you are a Converted Muslim, select the converted Muslim category. If you are associated with Tabligh, select the Tabligh category. In this way, you can select one or more of the mentioned categories.</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Write about your hobbies, likes and dislikes, tastes, dreams, and so on:</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.hobbies" rows="4" placeholder="Describe your hobbies and interests"></textarea>
                                @error('personalInfo.hobbies') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Groom's mobile number:</label>
                                <input type="text" class="form-control" wire:model.lazy="personalInfo.mobile" placeholder="Enter mobile number">
                                @error('personalInfo.mobile') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">Groom's personal mobile numbers are being taken for biodata verification. It will not be disclosed to anyone except the authorities.</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Take a selfie of the groom right now and upload it:</label>
                                <input type="file" class="form-control" wire:model.lazy="personalInfo.photo">
                                @error('personalInfo.photo') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">Passport sized photos, edited photos, or photos taken from a distance are not acceptable. Photo is taken only for identity verification. Upload a recent photo where the face is clearly defined. Your photo will not be disclosed to anyone other than the admin authorities.</small>
                            </div>
                        @elseif ($currentStep === 6)
                            <h4 class="mb-4">Occupation Information</h4>

                            <div class="mb-4">
                                <label class="form-label">Occupation</label>
                                <select class="form-control" wire:model.lazy="occupationInfo.occupation">
                                    <option value="">Select Occupation</option>
                                    <option value="employed">Employed</option>
                                    <option value="self_employed">Self Employed</option>
                                    <option value="student">Student</option>
                                    <option value="unemployed">Unemployed</option>
                                    <option value="retired">Retired</option>
                                    <option value="other">Other</option>
                                </select>
                                @error('occupationInfo.occupation') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Description of Profession</label>
                                <textarea class="form-control" wire:model.lazy="occupationInfo.description" rows="3" placeholder="Describe your profession"></textarea>
                                @error('occupationInfo.description') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">You may write where your working place is, which company you are working in, whether your earnings are halal or not, etc.</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Monthly Income</label>
                                <input type="number" class="form-control" wire:model.lazy="occupationInfo.monthly_income" placeholder="Enter your monthly income">
                                @error('occupationInfo.monthly_income') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                        @elseif ($currentStep === 7)


                          <h4 class="mb-4">Marriage Information</h4>

                            <div class="mb-4">
                                <label class="form-label">Do your guardians agree to your marriage?</label>
                                <select class="form-control" wire:model.lazy="marriageInfo.guardians_agree">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('marriageInfo.guardians_agree') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Will you be able to keep your wife in the veil after marriage?</label>
                                <select class="form-control" wire:model.lazy="marriageInfo.keep_veil">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('marriageInfo.keep_veil') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Would you like to allow your wife to study after marriage?</label>
                                <select class="form-control" wire:model.lazy="marriageInfo.allow_study">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('marriageInfo.allow_study') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Would you like to allow your wife to do any job after marriage?</label>
                                <select class="form-control" wire:model.lazy="marriageInfo.allow_job">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('marriageInfo.allow_job') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Where will you live with your wife after marriage?</label>
                                <input type="text" class="form-control" wire:model.lazy="marriageInfo.living_arrangement" placeholder="Enter living arrangement">
                                @error('marriageInfo.living_arrangement') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Would you or your family expect any gift from the bride's family?</label>
                                <select class="form-control" wire:model.lazy="marriageInfo.expect_gift">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('marriageInfo.expect_gift') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Why are you getting married? What are your thoughts on marriage?</label>
                                <textarea class="form-control" wire:model.lazy="marriageInfo.marriage_thoughts" rows="4" placeholder="Describe your thoughts on marriage"></textarea>
                                @error('marriageInfo.marriage_thoughts') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                        @elseif ($currentStep === 8 )
                            <h4 class="mb-4">Expected Life Partner</h4>

                            <div class="mb-4">
                                <label class="form-label">Age</label>
                                <div class="d-flex">
                                    <input type="number" class="form-control" wire:model.lazy="expectedPartner.age_from" placeholder="From" min="18" max="50" style="width: 100px;">
                                    <span class="mx-2">to</span>
                                    <input type="number" class="form-control" wire:model.lazy="expectedPartner.age_to" placeholder="To" min="18" max="50" style="width: 100px;">
                                </div>
                                @error('expectedPartner.age_from') <span class="text-danger">{{ $message }}</span> @enderror
                                @error('expectedPartner.age_to') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Complexion</label>
                                <select class="form-control" wire:model.lazy="expectedPartner.complexion">
                                    <option value="">Select Complexion</option>
                                    <option value="Fair">Fair</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Dark">Dark</option>
                                    <option value="Wheatish">Wheatish</option>
                                    <option value="Others">Others</option>
                                </select>
                                @error('expectedPartner.complexion') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Height (in cm)</label>
                                <input type="number" class="form-control" wire:model.lazy="expectedPartner.height" placeholder="Enter height in cm" min="100" max="250">
                                @error('expectedPartner.height') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Educational Qualification</label>
                                <select class="form-control" wire:model.lazy="expectedPartner.educational_qualification">
                                    <option value="">Select Qualification</option>
                                    <option value="ssc">SSC</option>
                                    <option value="hsc">HSC</option>
                                    <option value="bachelor">Bachelor's Degree</option>
                                    <option value="masters">Master's Degree</option>
                                    <option value="phd">PhD</option>
                                    <option value="others">Others</option>
                                </select>
                                @error('expectedPartner.educational_qualification') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">District</label>
                                <input type="text" class="form-control" wire:model.lazy="expectedPartner.district" placeholder="Enter specific district">
                                @error('expectedPartner.district') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">Do not write 'Any district'. Mention specific districts in consultation with family.</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Marital Status</label>
                                <select class="form-control" wire:model.lazy="expectedPartner.marital_status">
                                    <option value="">Select Marital Status</option>
                                    <option value="single">Single</option>
                                    <option value="divorced">Divorced</option>
                                    <option value="widowed">Widowed</option>
                                </select>
                                @error('expectedPartner.marital_status') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Financial Condition</label>
                                <select class="form-control" wire:model.lazy="expectedPartner.financial_condition">
                                    <option value="">Select Financial Condition</option>
                                    <option value="stable">Stable</option>
                                    <option value="unstable">Unstable</option>
                                    <option value="poor">Poor</option>
                                </select>
                                @error('expectedPartner.financial_condition') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Expected qualities or attributes of your life partner</label>
                                <textarea class="form-control" wire:model.lazy="expectedPartner.expected_qualities" rows="4" placeholder="Describe your expectations"></textarea>
                                @error('expectedPartner.expected_qualities') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">You may write your expectations in detail. Also, you may mention if there is any special condition.</small>
                            </div>

                        @elseif($currentStep === 9)
                            <h4 class="mb-4">Pledge</h4>

                            <div class="mb-4">
                                <label class="form-label">Do your parents know that you are submitting biodata to this website?</label>
                                <select class="form-control" wire:model.lazy="pledge.parents_know">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('pledge.parents_know') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">By Allah, testify that all the information given is true?</label>
                                <select class="form-control" wire:model.lazy="pledge.testify_truth">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('pledge.testify_truth') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">If you provide any false information, this website will not take any responsibility for the conventional law and the hereafter. Do you agree?</label>
                                <select class="form-control" wire:model.lazy="pledge.agree">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('pledge.agree') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        @elseif($currentStep === 10)
                            <h4 class="mb-4">Contact</h4>

                            <div class="mb-4">
                                <label class="form-label">Groom's Name</label>
                                <input type="text" class="form-control" wire:model.lazy="contact.groomName" placeholder="Enter full name">
                                @error('contact.groomName') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Guardian's Mobile Number</label>
                                <input type="text" class="form-control" wire:model.lazy="contact.guardianMobile" placeholder="Enter guardian's mobile number">
                                @error('contact.guardianMobile') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">This number will be given if anyone wants to contact your guardian. After verifying by calling this number, the biodata will be approved. If you write the number of your friend, colleague, cousin, or yourself here, biodata will be permanently banned.</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Relationship with Guardian</label>
                                <input type="text" class="form-control" wire:model.lazy="contact.relationshipWithGuardian" placeholder="Enter relationship with guardian">
                                @error('contact.relationshipWithGuardian') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">E-mail to Receive Biodata</label>
                                <input type="email" class="form-control" wire:model.lazy="contact.guardianEmail" placeholder="Enter guardian's email address">
                                @error('contact.guardianEmail') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">To avoid unwanted incidents, enter the guardian's email address if possible.</small>
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

