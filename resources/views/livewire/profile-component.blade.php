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
                            <h4 class="mb-4">সাধারণ তথ্য</h4>
                            <div class="row">

                                <div class="col-12 mb-3">
                                    <label class="form-label">পূর্ণ নাম  <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model.lazy="basicInfo.full_name" placeholder="আপনার পূর্ণ নাম লিখুন">
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">বায়োডাটা ধরণ <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model.lazy="basicInfo.biodata_type">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="Male">পুরুষ</option>
                                        <option value="Female">মহিলা</option>
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">বৈবাহিক অবস্থা <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model.lazy="basicInfo.marital_status">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="Single">অবিবাহিত</option>
                                        <option value="Married">বিবাহিত</option>
                                        <option value="Divorced">তালাকপ্রাপ্ত</option>
                                        <option value="Widowed">বিধবা/বিপত্নীক</option>
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">জন্ম বছর <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model.lazy="basicInfo.birth_year">
                                        <option value="">নির্বাচন করুন</option>
                                        @for($year = date('Y'); $year >= date('Y') - 60; $year--)
                                            <option value="{{ $year }}">{{ $year }}</option>
                                        @endfor
                                    </select>
                                    <small class="text-muted">অনুগ্রহ করে আপনার জন্ম সনদ ও জাতীয় পরিচয়পত্র অনুযায়ী প্রকৃত জন্ম তারিখ প্রদান করুন।</small>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">উচ্চতা  <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model.lazy="basicInfo.height">
                                        <option value="">নির্বাচন করুন</option>
                                        @foreach(range(4.0, 7.0, 0.1) as $height)
                                            <option value="{{ number_format($height, 1) }}">{{ number_format($height, 1) }} ft</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">গায়ের রঙ <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model.lazy="basicInfo.complexion">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="Fair">ফর্সা</option>
                                        <option value="Medium">মধ্যম</option>
                                        <option value="Dark">গাঢ়</option>
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">ওজন (কেজি) <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" wire:model.lazy="basicInfo.weight" placeholder="ওজন কেজিতে লিখুন">
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">রক্তের গ্রুপ <span class="text-danger">*</span></label>
                                    <select class="form-select" wire:model.lazy="basicInfo.blood_group">
                                        <option value="">নির্বাচন করুন</option>
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
                                    <label class="form-label">জাতীয়তা  <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model.lazy="basicInfo.nationality" placeholder="আপনার জাতীয়তা লিখুন">
                                </div>
                            </div>

                        {{-- address form      --}}


                        @elseif ($currentStep === 2)
                            <h4 class="mb-4">ঠিকানা সংক্রান্ত তথ্য</h4>


                            <!-- Permanent Address -->
                            <div class="mb-4">
                                <h5 class="border-bottom pb-2">স্থায়ী ঠিকানা </h5>
                                {{-- @livewire('location-dropdown') --}}
                                <livewire:location-dropdown  type="permanent"/>
                            </div>

                            <!-- Present Address -->
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
                                    <h5 class="mb-0">বর্তমান ঠিকানা</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" wire:model.lazy="addressInfo.same_as_permanent" id="sameAsPermanent">
                                        <label class="form-check-label" for="sameAsPermanent">
                                            স্থায়ী ঠিকানার সাথে মিল আছে
                                        </label>
                                    </div>
                                </div>
                                <livewire:location-dropdown  type="present" />
                            </div>

                            <div class="mb-2">
                                <label for="">বাড়ির নম্বর বাদ দিয়ে গ্রামের নাম বা এলাকার নাম লিখুন। উদাহরণ - মিরপুর ১০, বাঘমারা</label>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনি কোথায় বড় হয়েছেন?</label>
                                <input type="text" class="form-control" wire:model.lazy="addressInfo.grew_up" placeholder="">
                            </div>








                        @elseif ($currentStep === 3)

                            <h4 class="mb-4">শিক্ষাগত যোগ্যতা </h4>

                            <div class="mb-4">
                                <h5 class="border-bottom pb-2">শিক্ষাগত তথ্য</h5>

                                <!-- Your Education Method -->
                                <div class="mb-3">
                                    <label class="form-label">আপনার শিক্ষা পদ্ধতি</label>
                                    <select class="form-control" wire:model.lazy="education.method">
                                        <option value="">-- পদ্ধতি নির্বাচন করুন --</option>
                                        <option value="general">সাধারণ শিক্ষা</option>
                                        <option value="technical">প্রযুক্তিগত শিক্ষা</option>
                                        <option value="vocational">পেশাগত শিক্ষা</option>
                                        <option value="madrasah">মাদ্রাসা শিক্ষা</option>
                                    </select>
                                    @error('education.method') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <!-- Higher Educational Qualification -->
                                <div class="mb-3">
                                    <label class="form-label">উচ্চ শিক্ষাগত যোগ্যতা</label>
                                    <select class="form-control"  wire:model.lazy="education.higher_qualification">
                                        <option value="">-- যোগ্যতা নির্বাচন করুন --</option>
                                        <option value="ssc">এসএসসি</option>
                                        <option value="hsc">এইচএসসি</option>
                                        <option value="honours">স্নাতক (সম্মান)</option>
                                        <option value="masters">মাস্টার্স</option>
                                        <option value="mphil">এমফিল</option>
                                        <option value="phd">পিএইচডি</option>
                                    </select>
                                    @error('education.higher_qualification') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">সএসসি / দাখিল / সমমান পাসের সাল</label>
                                    <input type="text" class="form-control" wire:model.lazy="education.passing_year"></input>

                                </div>

                                <div class="mb-4">
                                    <label class="form-label">বিভাগ</label>
                                    <select class="form-control"  wire:model.lazy="education.group">
                                        <option value="">বিভাগ নির্বাচন করুন</option>
                                        <option value="science">বিজ্ঞান</option>
                                        <option value="arts">কলা</option>
                                        <option value="commerce">ব্যবসা শিক্ষা</option>
                                        <option value="humanities">মানবিক</option>
                                        <option value="vocational">পেশাগত</option>
                                    </select>
                                    @error('education.group') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">ফলাফল</label>
                                    <select class="form-control"  wire:model.lazy="education.result">
                                        <option value="">ফলাফল নির্বাচন করুন</option>
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
                                    <label class="form-label">অন্যান্য শিক্ষাগত যোগ্যতা</label>
                                    <textarea class="form-control" wire:model.lazy="education.other_qualification" rows="4" placeholder=""></textarea>
                                    @error('education.other_qualification') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="mb-3">
                                    <label>প্রতিষ্ঠানের নাম, বিষয়, পাসের সালসহ বিস্তারিত লিখুন। যদি কিছু না থাকে তবে খালি রাখুন।</label>
                                </div>

                                <!-- Islamic Educational Title -->
                                <div class="mb-3">
                                    <label class="form-label">ইসলামিক শিক্ষাগত উপাধি</label>
                                    <select class="form-control" wire:model.lazy="education.islamic_title">
                                        <option value="">-- উপাধি নির্বাচন করুন --</option>
                                        <option value="hafez">হাফেজ</option>
                                        <option value="alim">আলিম</option>
                                        <option value="fazil">ফাজিল</option>
                                        <option value="kamil">কামিল</option>
                                        <option value="mufti">মুফতি</option>
                                        <option value="others">অন্যান্য</option>
                                    </select>
                                    @error('education.islamic_title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>




                        @elseif ($currentStep === 4)

                            <h4 class="mb-4">পারিবারিক তথ্য</h4>
                            <div class="mb-4">
                                <label class="form-label">পিতার নাম</label>
                                <input type="text" class="form-control" wire:model.lazy="familyInfo.father_name" placeholder="পিতার নাম লিখুন">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনার পিতা কি বেঁচে আছেন?</label>
                                <select class="form-control" wire:model.lazy="familyInfo.father_alive">
                                    <option value="">নির্বাচন করুন</option>
                                    <option value="yes">হ্যাঁ</option>
                                    <option value="no">না</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">পিতার পেশার বর্ণনা</label>
                                <textarea class="form-control" wire:model.lazy="familyInfo.father_profession" rows="3" placeholder="পিতার পেশা বর্ণনা করুন"></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">মাতার নাম</label>
                                <input type="text" class="form-control" wire:model.lazy="familyInfo.mother_name" placeholder="মাতার নাম লিখুন">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনার মাতা কি বেঁচে আছেন?</label>
                                <select class="form-control" wire:model.lazy="familyInfo.mother_alive">
                                    <option value="">নির্বাচন করুন</option>
                                    <option value="yes">হ্যাঁ</option>
                                    <option value="no">না</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">মাতার পেশার বর্ণনা</label>
                                <textarea class="form-control" wire:model.lazy="familyInfo.mother_profession" rows="3" placeholder="মাতার পেশা বর্ণনা করুন"></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনার কতজন ভাই আছে?</label>
                                <input type="number" class="form-control" wire:model.lazy="familyInfo.brothers_count" placeholder="ভাইয়ের সংখ্যা লিখুন">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনার কতজন বোন আছে?</label>
                                <input type="number" class="form-control" wire:model.lazy="familyInfo.sisters_count" placeholder="বোনের সংখ্যা লিখুন">
                            </div>



                            <div class="mb-4">
                                <label class="form-label">পারিবারিক আর্থিক অবস্থা</label>
                                <select class="form-control" wire:model.lazy="familyInfo.financial_status">
                                    <option value="">নির্বাচন করুন</option>
                                    <option value="stable">স্থিতিশীল</option>
                                    <option value="unstable">অস্থিতিশীল</option>
                                    <option value="poor">দরিদ্র</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আর্থিক অবস্থার বর্ণনা</label>
                                <textarea class="form-control" wire:model.lazy="familyInfo.financial_condition" rows="3" placeholder="আর্থিক অবস্থা বর্ণনা করুন"></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনার পরিবারের ধর্মীয় অবস্থা কেমন?</label>
                                <textarea class="form-control" wire:model.lazy="familyInfo.religious_condition" rows="3" placeholder="ধর্মীয় অবস্থা বর্ণনা করুন"></textarea>
                            </div>

                        @elseif ($currentStep === 5)
                            <h4 class="mb-4">ব্যক্তিগত তথ্য</h4>

                            <div class="mb-4">
                                <label class="form-label">বাড়ির বাইরে সাধারণত আপনি কেমন ধরণের পোশাক পরেন?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.clothes" rows="3" placeholder="আপনার পোশাকের ধরন ব্যাখ্যা করুন"></textarea>
                                @error('personalInfo.clothes') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">উদাহরণস্বরূপ কনের ক্ষেত্রে লিখতে পারেন - "ব্ল্যাক বোরখা, নিকাব, হাত-পা মোজা পরিধান করি" বা "বোরখা ও হিজাব পরি, নিকাব পরি না" বা "হিজাবের সাথে মাস্ক পরি, নিকাব পরি না" ইত্যাদি।</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনার দাড়ি সুন্নতের মত রয়েছে কি? কতদিন ধরে?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.beard" rows="3" placeholder="আপনার দাড়ির অবস্থা ব্যাখ্যা করুন"></textarea>
                                @error('personalInfo.beard') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">দয়া করে স্পষ্টভাবে লিখুন কত বছর ধরে আপনি দাড়ি রাখছেন। জেনেটিক কারণে দাড়ির বৃদ্ধি কম হলে তা উল্লেখ করুন।</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনি কি পাঁচ ওয়াক্ত নামাজ পড়েন? কতদিন ধরে?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.prayer" rows="3" placeholder="আপনার নামাজের অভ্যাস ব্যাখ্যা করুন"></textarea>
                                @error('personalInfo.prayer') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">স্পষ্টভাবে "হ্যাঁ" বা "না" লিখুন। কত বছর ধরে পাঁচ ওয়াক্ত নামাজ পড়ছেন তা উল্লেখ করুন।</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনি কি মাহরাম / গায়রে মাহরাম মেনে চলেন?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.mahram" rows="3" placeholder="আপনার প্রতিপালনের অবস্থা ব্যাখ্যা করুন"></textarea>
                                @error('personalInfo.mahram') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনি কি কুরআন সঠিকভাবে তেলাওয়াত করতে পারেন?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.quran_recitation" rows="3" placeholder="আপনার কুরআন তেলাওয়াত দক্ষতা ব্যাখ্যা করুন"></textarea>
                                @error('personalInfo.quran_recitation') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনি কোন মাযহাব অনুসরণ করেন?</label>
                                <input type="text" class="form-control" wire:model.lazy="personalInfo.fiqh" placeholder="Enter your Fiqh">
                                @error('personalInfo.fiqh') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনি কি নাটক / সিনেমা / সিরিয়াল / গান দেখেন বা শুনেন?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.media" rows="3" placeholder="আপনার মিডিয়া দেখার অভ্যাস ব্যাখ্যা করুন"></textarea>
                                @error('personalInfo.media') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনার কি কোনো মানসিক বা শারীরিক রোগ আছে?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.diseases" rows="3" placeholder="যদি থাকে তবে তা উল্লেখ করুন"></textarea>
                                @error('personalInfo.diseases') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনি কি দ্বীনের কোনো বিশেষ কাজে যুক্ত?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.deen_work" rows="3" placeholder="আপনার দ্বীনি কাজের বিবরণ দিন"></textarea>
                                @error('personalInfo.deen_work') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">উদাহরণ: তাবলিগ ইত্যাদি।</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনার মাজার সম্পর্কে কী ধারণা বা বিশ্বাস আছে?</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.shrine_beliefs" rows="3" placeholder="মাজার সম্পর্কে আপনার বিশ্বাস ব্যাখ্যা করুন"></textarea>
                                @error('personalInfo.shrine_beliefs') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনি পড়া তিনটি ইসলামী বইয়ের নাম লিখুন:</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.islamic_books" rows="3" placeholder="ইসলামী বইয়ের নাম লিখুন"></textarea>
                                @error('personalInfo.islamic_books') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনার পছন্দের অন্তত ৩ জন ইসলামী আলেমের নাম লিখুন:</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.islamic_scholars" rows="3" placeholder="ইসলামী আলেমদের নাম লিখুন"></textarea>
                                @error('personalInfo.islamic_scholars') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনার ক্ষেত্রে প্রযোজ্য ক্যাটাগরি নির্বাচন করুন (না হলে ফাঁকা রাখুন):</label>
                                <select class="form-control" wire:model.lazy="personalInfo.category">
                                    <option value="">ক্যাটাগরি নির্বাচন করুন</option>
                                    <option value="infertile">বন্ধ্যত্ব</option>
                                    <option value="converted_muslim">নব মুসলিম</option>
                                    <option value="orphan">অনাথ</option>
                                    <option value="interested_in_masna">মাসনা করতে আগ্রহী</option>
                                    <option value="tablig">তাবলিগ</option>
                                </select>
                                @error('personalInfo.category') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">উদাহরণ: আপনি যদি নব মুসলিম হন, তাহলে ‘নব মুসলিম’ নির্বাচন করুন। তাবলিগে যুক্ত থাকলে ‘তাবলিগ’ নির্বাচন করুন। এইভাবে প্রযোজ্য ক্যাটাগরি নির্বাচন করুন।</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনার শখ, পছন্দ-অপছন্দ, স্বাদ, স্বপ্ন ইত্যাদি সম্পর্কে লিখুন:</label>
                                <textarea class="form-control" wire:model.lazy="personalInfo.hobbies" rows="4" placeholder="আপনার শখ ও আগ্রহ ব্যাখ্যা করুন"></textarea>
                                @error('personalInfo.hobbies') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">মোবাইল নম্বর:</label>
                                <input type="text" class="form-control" wire:model.lazy="personalInfo.mobile" placeholder="মোবাইল নম্বর লিখুন">
                                @error('personalInfo.mobile') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">বায়োডাটা যাচাইয়ের জন্য বর-এর ব্যক্তিগত মোবাইল নম্বর নেওয়া হচ্ছে। এটি কর্তৃপক্ষ ছাড়া অন্য কারো সাথে শেয়ার করা হবে না।</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">সেলফি তুলে আপলোড করুন</label>
                                <input type="file" class="form-control" wire:model.lazy="personalInfo.photo">
                                @error('personalInfo.photo') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">সপোর্ট সাইজ ছবি, এডিট করা ছবি, বা দূর থেকে তোলা ছবি গ্রহণযোগ্য নয়। শুধুমাত্র পরিচয় যাচাইয়ের জন্য সদ্য তোলা একটি পরিষ্কার মুখমণ্ডলের ছবি আপলোড করুন। এটি শুধুমাত্র অ্যাডমিন কর্তৃপক্ষের জন্য সংরক্ষিত থাকবে।</small>
                            </div>
                        @elseif ($currentStep === 6)
                            <h4 class="mb-4">পেশাগত তথ্য</h4>

                            <div class="mb-4">
                                <label class="form-label">পেশা</label>
                                <select class="form-control" wire:model.lazy="occupationInfo.occupation">
                                    <option value="">পেশা নির্বাচন করুন</option>
                                    <option value="employed">চাকরিজীবী</option>
                                    <option value="self_employed">স্বনিযুক্ত</option>
                                    <option value="student">ছাত্র/ছাত্রী</option>
                                    <option value="unemployed">বেকার</option>
                                    <option value="retired">অবসরপ্রাপ্ত</option>
                                    <option value="other">অন্যান্য</option>
                                </select>
                                @error('occupationInfo.occupation') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">পেশার বিবরণ</label>
                                <textarea class="form-control" wire:model.lazy="occupationInfo.description" rows="3" placeholder="আপনার পেশার বিবরণ দিন"></textarea>
                                @error('occupationInfo.description') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">আপনি কোথায় কাজ করেন, কোন কোম্পানিতে কাজ করেন, আপনার আয় হালাল কি না ইত্যাদি লিখতে পারেন।</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">মাসিক আয়</label>
                                <input type="number" class="form-control" wire:model.lazy="occupationInfo.monthly_income" placeholder="আপনার মাসিক আয় লিখুন">
                                @error('occupationInfo.monthly_income') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                        @elseif ($currentStep === 7)


                          <h4 class="mb-4">বিবাহ সংক্রান্ত তথ্য</h4>

                            <div class="mb-4">
                                <label class="form-label">আপনার অভিভাবকগণ কি আপনার বিয়েতে সম্মত?</label>
                                <select class="form-control" wire:model.lazy="marriageInfo.guardians_agree">
                                    <option value="">নির্বাচন করুন</option>
                                    <option value="yes">হ্যাঁ</option>
                                    <option value="no">না</option>
                                </select>
                                @error('marriageInfo.guardians_agree') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">বিয়ের পর আপনি কি আপনার স্ত্রীকে পর্দায় রাখতে পারবেন?</label>
                                <select class="form-control" wire:model.lazy="marriageInfo.keep_veil">
                                    <option value="">নির্বাচন করুন</option>
                                    <option value="yes">হ্যাঁ</option>
                                    <option value="no">না</option>
                                </select>
                                @error('marriageInfo.keep_veil') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">বিয়ের পর আপনি কি আপনার স্ত্রীকে পড়াশোনা করতে দিতে ইচ্ছুক?</label>
                                <select class="form-control" wire:model.lazy="marriageInfo.allow_study">
                                    <option value="">নির্বাচন করুন</option>
                                    <option value="yes">হ্যাঁ</option>
                                    <option value="no">না</option>
                                </select>
                                @error('marriageInfo.allow_study') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">বিয়ের পর আপনি কি আপনার স্ত্রীকে কোনো চাকরি করতে দিতে ইচ্ছুক?</label>
                                <select class="form-control" wire:model.lazy="marriageInfo.allow_job">
                                    <option value="">নির্বাচন করুন</option>
                                    <option value="yes">হ্যাঁ</option>
                                    <option value="no">না</option>
                                </select>
                                @error('marriageInfo.allow_job') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">বিয়ের পর আপনি আপনার স্ত্রীকে কোথায় নিয়ে থাকবেন?</label>
                                <input type="text" class="form-control" wire:model.lazy="marriageInfo.living_arrangement" placeholder="Enter living arrangement">
                                @error('marriageInfo.living_arrangement') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনি বা আপনার পরিবার কি কনের পরিবারের পক্ষ থেকে কোনো উপহার আশা করেন?</label>
                                <select class="form-control" wire:model.lazy="marriageInfo.expect_gift">
                                    <option value="">নির্বাচন করুন</option>
                                    <option value="yes">হ্যাঁ</option>
                                    <option value="no">না</option>
                                </select>
                                @error('marriageInfo.expect_gift') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনি কেন বিয়ে করছেন? বিয়ে নিয়ে আপনার চিন্তা-ভাবনা কী?</label>
                                <textarea class="form-control" wire:model.lazy="marriageInfo.marriage_thoughts" rows="4" placeholder="Describe your thoughts on marriage"></textarea>
                                @error('marriageInfo.marriage_thoughts') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                        @elseif ($currentStep === 8 )
                            <h4 class="mb-4">প্রত্যাশিত জীবনসঙ্গী</h4>

                            <div class="mb-4">
                                <label class="form-label">বয়স</label>
                                <div class="d-flex">
                                    <input type="number" class="form-control" wire:model.lazy="expectedPartner.age_from" placeholder="From" min="18" max="50" style="width: 100px;">
                                    <span class="mx-2">থেকে</span>
                                    <input type="number" class="form-control" wire:model.lazy="expectedPartner.age_to" placeholder="To" min="18" max="50" style="width: 100px;">
                                </div>
                                @error('expectedPartner.age_from') <span class="text-danger">{{ $message }}</span> @enderror
                                @error('expectedPartner.age_to') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">গাত্রবর্ণ</label>
                                <select class="form-control" wire:model.lazy="expectedPartner.complexion">
                                    <option value="">নির্বাচন করুন</option>
                                    <option value="Fair">উজ্জ্বল</option>
                                    <option value="Medium">মধ্যম</option>
                                    <option value="Dark">শ্যামলা</option>
                                    <option value="Wheatish">গমবর্ণ</option>
                                    <option value="Others">অন্যান্য</option>
                                </select>
                                @error('expectedPartner.complexion') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">উচ্চতা (সেন্টিমিটারে)</label>
                                <input type="number" class="form-control" wire:model.lazy="expectedPartner.height" placeholder="Enter height in cm" min="100" max="250">
                                @error('expectedPartner.height') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">শিক্ষাগত যোগ্যতা</label>
                                <select class="form-control" wire:model.lazy="expectedPartner.educational_qualification">
                                    <option value="">যোগ্যতা নির্বাচন করুন</option>
                                    <option value="ssc">এসএসসি</option>
                                    <option value="hsc">এইচএসসি</option>
                                    <option value="bachelor">স্নাতক</option>
                                    <option value="masters">স্নাতকোত্তর</option>
                                    <option value="phd">পিএইচডি</option>
                                    <option value="others">অন্যান্য</option>
                                </select>
                                @error('expectedPartner.educational_qualification') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">জেলা</label>
                                <input type="text" class="form-control" wire:model.lazy="expectedPartner.district" placeholder="Enter specific district">
                                @error('expectedPartner.district') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">যেকোনো জেলা’ লিখবেন না। পরিবারের সঙ্গে পরামর্শ করে নির্দিষ্ট জেলা উল্লেখ করুন।</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">বৈবাহিক অবস্থা</label>
                                <select class="form-control" wire:model.lazy="expectedPartner.marital_status">
                                    <option value="">বৈবাহিক অবস্থা নির্বাচন করুন</option>
                                    <option value="single">অবিবাহিত</option>
                                    <option value="divorced">তালাকপ্রাপ্ত</option>
                                    <option value="widowed">বিধবা/বিপত্নীক</option>
                                </select>
                                @error('expectedPartner.marital_status') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আর্থিক অবস্থা</label>
                                <select class="form-control" wire:model.lazy="expectedPartner.financial_condition">
                                    <option value="">আর্থিক অবস্থা নির্বাচন করুন</option>
                                    <option value="stable">স্থিতিশীল</option>
                                    <option value="unstable">অস্থিতিশীল</option>
                                    <option value="poor">দরিদ্র</option>
                                </select>
                                @error('expectedPartner.financial_condition') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনার প্রত্যাশিত জীবনসঙ্গীর গুণাবলী বা বৈশিষ্ট্য</label>
                                <textarea class="form-control" wire:model.lazy="expectedPartner.expected_qualities" rows="4" placeholder="Describe your expectations"></textarea>
                                @error('expectedPartner.expected_qualities') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">আপনার প্রত্যাশাগুলি বিস্তারিতভাবে লিখতে পারেন। যদি কোনো বিশেষ শর্ত থাকে, তাও উল্লেখ করতে পারেন।</small>
                            </div>

                        @elseif($currentStep === 9)
                            <h4 class="mb-4">অঙ্গীকার</h4>

                            <div class="mb-4">
                                <label class="form-label">আপনার পিতা-মাতা কি জানেন যে আপনি এই ওয়েবসাইটে বায়োডাটা জমা দিচ্ছেন?</label>
                                <select class="form-control" wire:model.lazy="pledge.parents_know">
                                    <option value="">নির্বাচন করুন</option>
                                    <option value="yes">হ্যাঁ</option>
                                    <option value="no">না</option>
                                </select>
                                @error('pledge.parents_know') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আল্লাহর নামে অঙ্গীকার করেন যে আপনি প্রদত্ত সকল তথ্য সত্য?</label>
                                <select class="form-control" wire:model.lazy="pledge.testify_truth">
                                    <option value="">নির্বাচন করুন</option>
                                    <option value="yes">হ্যাঁ</option>
                                    <option value="no">না</option>
                                </select>
                                @error('pledge.testify_truth') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">আপনি যদি কোনো ভুল তথ্য প্রদান করেন, তবে এই ওয়েবসাইট প্রচলিত আইন ও পরকালে তার দায়ভার গ্রহণ করবে না – আপনি কি একমত?</label>
                                <select class="form-control" wire:model.lazy="pledge.agree">
                                    <option value="">নির্বাচন করুন</option>
                                    <option value="yes">হ্যাঁ</option>
                                    <option value="no">না</option>
                                </select>
                                @error('pledge.agree') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        @elseif($currentStep === 10)
                            <h4 class="mb-4">যোগাযোগ</h4>

                            <div class="mb-4">
                                <label class="form-label">নাম</label>
                                <input type="text" class="form-control" wire:model.lazy="contact.groomName" placeholder="পূর্ণ নাম লিখুন">
                                @error('contact.groomName') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">অভিভাবকের মোবাইল নম্বর</label>
                                <input type="text" class="form-control" wire:model.lazy="contact.guardianMobile" placeholder="Enter guardian's mobile number">
                                @error('contact.guardianMobile') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">যদি কেউ যোগাযোগ করতে চায়, তাহলে এই নম্বরটি দেওয়া হবে। এই নম্বরে কল করে যাচাই-বাছাই করার পর বায়োডাটা অনুমোদন করা হবে। এখানে যদি আপনি বন্ধুর, সহকর্মীর, আত্মীয়ের বা নিজের নম্বর দেন, তাহলে বায়োডাটা স্থায়ীভাবে নিষিদ্ধ করা হবে।</small>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">অভিভাবকের সাথে সম্পর্ক</label>
                                <input type="text" class="form-control" wire:model.lazy="contact.relationshipWithGuardian" placeholder="Enter relationship with guardian">
                                @error('contact.relationshipWithGuardian') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">বায়োডাটা গ্রহণের জন্য ইমেইল</label>
                                <input type="email" class="form-control" wire:model.lazy="contact.guardianEmail" placeholder="Enter guardian's email address">
                                @error('contact.guardianEmail') <span class="text-danger">{{ $message }}</span> @enderror
                                <small class="text-muted">অপ্রত্যাশিত পরিস্থিতি এড়াতে অভিভাবকের ইমেইল ঠিকানা প্রদান করার চেষ্টা করুন।</small>
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

