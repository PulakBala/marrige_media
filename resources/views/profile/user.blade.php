@extends('layouts.app')
@section('content')
    <div class="containers min-vh-100 py-4">

        {{-- user profiel sidebar information  --}}
        <div class="sidebars">

            <div class="sidebar-content">
                <div class="avatar">
                    @if (trim(strtolower($basicInformation->biodata_type)) === 'male')
                        <img src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png" alt="Male Avatar">
                    @elseif(trim(strtolower($basicInformation->biodata_type)) === 'female')
                        <img src="https://cdn-icons-png.flaticon.com/512/4140/4140047.png" alt="Female Avatar">
                    @else
                        <img src="{{ asset('images/default.png') }}" alt="Default Avatar">
                    @endif
                </div>
                <table>
                    <tr>
                        <td><strong>পূর্ণ নাম</strong></td>
                        <td>{{ $basicInformation->full_name }}</td>
                    </tr>
                    <tr>
                        <td><strong>বায়োডাটা ধরণ</strong></td>
                        {{-- <td>{{ $basicInformation->biodata_type }}</td> --}}
                        <td>
                            @if (trim(strtolower($basicInformation->biodata_type)) === 'male')
                                পুরুষ
                            @elseif(trim(strtolower($basicInformation->biodata_type)) === 'female')
                                পাত্রী
                            @else
                                {{ $basicInformation->biodata_type }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td><strong>বৈবাহিক অবস্থা</strong></td>
                        <td>{{ $basicInformation->marital_status }}</td>
                    </tr>
                    <tr>
                        <td><strong>জন্ম বছর</strong></td>
                        <td>{{ $basicInformation->birth_year }}</td>
                    </tr>
                    <tr>
                        <td><strong>উচ্চতা</strong></td>
                        <td>{{ $basicInformation->height }}</td>
                    </tr>
                    <tr>
                        <td><strong>গায়ের রং</strong></td>
                        <td>{{ $basicInformation->complexion }}</td>
                    </tr>
                    <tr>
                        <td><strong>ওজন</strong></td>
                        <td>{{ round($basicInformation->weight) }} কেজি</td>
                    </tr>
                    <tr>
                        <td><strong> রক্তের গ্রুপ</strong></td>
                        <td>{{ $basicInformation->blood_group }}</td>
                    </tr>
                    <tr>
                        <td><strong>জাতীয়তা</strong></td>
                        <td>{{ $basicInformation->nationality }}</td>
                    </tr>
                </table>
            </div>
            <div class="mt-3">
                <div class="d-flex justify-content-center gap-3">
                    <button class="btn btn-primary px-4 py-2 rounded-pill"
                        onclick="shortlistUser({{ $basicInformation->user_id }})">
                        <i class="fas fa-check me-2"></i> শর্টলিস্ট
                    </button>
                    <button class="btn btn-danger px-4 py-2 rounded-pill"
                        onclick="ignoreUser({{ $basicInformation->user_id }})">
                        <i class="fas fa-times me-2"></i> ইগনোর
                    </button>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <button class="btn btn-outline-dark px-4 py-2 rounded-pill">
                        <i class="fas fa-link me-2"></i> কপি বায়োডাটা
                    </button>
                </div>
            </div>
        </div>



        <div class="content">
            <div class="logo-space">[ Add Your Logo Here ]</div>

            {{-- address  --}}
            <div class="section">
                <h3>ঠিকানা</h3>
                <table>
                    <tr>
                        <td> স্থায়ী ঠিকানা</td>
                        <td>
                            {{ $permanentAddress->country->name ?? 'N/A' }},
                            {{ $permanentAddress->state->name ?? 'N/A' }},
                            {{ $permanentAddress->district->name ?? 'N/A' }},
                            {{ $permanentAddress->city->name ?? 'N/A' }}
                        </td>
                    </tr>
                    <tr>
                        <td> বর্তমান ঠিকানা </td>

                        <td>
                            {{ $presenttAddress->country->name ?? 'N/A' }},
                            {{ $presenttAddress->state->name ?? 'N/A' }},
                            {{ $presenttAddress->district->name ?? 'N/A' }},
                            {{ $presenttAddress->city->name ?? 'N/A' }}
                        </td>
                    </tr>
                    <tr>
                        <td>আপনি কোথায় বড় হয়েছেন?</td>
                        <td>{{ $presenttAddress->grew_up ?? 'N/A' }}</td>
                    </tr>

                </table>
            </div>

            {{-- Educational Qualifications --}}
            <div class="section">
                <h3>শিক্ষাগত যোগ্যতা</h3>
                <table>

                    <tr>
                        <td>আপনার শিক্ষার পদ্ধতি</td>
                        <td>{{ $educationDetails->method }}</td>
                    </tr>
                    <tr>
                        <td> সর্বোচ্চ শিক্ষাগত যোগ্যতা</td>
                        <td>{{ $educationDetails->higher_qualification }}</td>
                    </tr>
                    <tr>
                        <td>এসএসসি / দাখিল / সমমান পাসের বছর</td>
                        <td>{{ $educationDetails->passing_year }}</td>
                    </tr>
                    <tr>
                        <td>বিভাগ</td>
                        <td>{{ $educationDetails->group_name }}</td>
                    </tr>
                    <tr>
                        <td>ফলাফল</td>
                        <td>{{ $educationDetails->result }}</td>
                    </tr>
                    <tr>
                        <td>অন্যান্য শিক্ষাগত যোগ্যতা</td>
                        <td>{{ $educationDetails->other_qualification }}</td>
                    </tr>
                    <tr>
                        <td>ইসলামিক শিক্ষা সংক্রান্ত উপাধি</td>
                        <td>{{ $educationDetails->islamic_title }}</td>
                    </tr>
                </table>
            </div>

            {{-- family information  --}}
            <div class="section">
                <h3>পারিবারিক তথ্য</h3>
                <table>
                    <tr>
                        <td> পিতার নাম</td>
                        <td>{{ $familyInformation->father_name ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>আপনার পিতা জীবিত আছেন কি?</td>
                        <td>{{ $familyInformation->father_alive ? 'হ্যাঁ' : 'না' }}</td>
                    </tr>
                    <tr>
                        <td>পিতার পেশা</td>
                        <td>{{ $familyInformation->father_profession ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>মাতার নাম</td>
                        <td>{{ $familyInformation->mother_name ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>আপনার মাতা জীবিত আছেন কি?</td>
                        <td>{{ $familyInformation->mother_alive ? 'হ্যাঁ' : 'না' }}</td>
                    </tr>
                    <tr>
                        <td>মাতার পেশার বিবরণ</td>
                        <td>{{ $familyInformation->mother_profession ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td> আপনার কতজন ভাই আছেন? </td>
                        <td>{{ $familyInformation->brothers_count ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>আপনার কতজন বোন আছেন?</td>
                        <td>{{ $familyInformation->sisters_count ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>পারিবারিক আর্থিক অবস্থা?</td>
                        <td>{{ $familyInformation->financial_status ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>আর্থিক অবস্থার বিবরণ</td>
                        <td>{{ $familyInformation->financial_condition ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>আপনার পারিবারিক ধর্মীয় অবস্থা কেমন?</td>
                        <td>{{ $familyInformation->religious_condition ?? 'N/A' }}</td>
                    </tr>
                </table>
            </div>

            {{-- personal information  --}}
            <div class="section">
                <h3>ব্যক্তিগত তথ্য</h3>
                <table>
                    <tr>
                        <td>আপনি সাধারণত ঘরের বাইরে কী ধরনের পোশাক পরেন?</td>
                        <td>{{ $personalInformation->clothes ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>আপনার কি সুন্নতি অনুযায়ী দাড়ি আছে? কবে থেকে? </td>
                        <td>{{ $personalInformation->beard ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td> আপনি কি দিনে পাঁচ ওয়াক্ত নামাজ পড়েন? কবে থেকে?</td>
                        <td>{{ $personalInformation->prayer ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td> আপনি কি মাহরাম / গায়রে মাহরাম মেনে চলেন? </td>
                        <td>{{ $personalInformation->mahram ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>আপনি কি কোরআন সঠিকভাবে তিলাওয়াত করতে পারেন?</td>
                        <td>{{ $personalInformation->quran_recitation ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td> আপনি কোন ফিকাহ অনুসরণ করেন?</td>
                        <td>{{ $personalInformation->fiqh ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>আপনি কি নাটক / সিনেমা / সিরিয়াল / গান দেখেন বা শোনেন? </td>
                        <td>{{ $personalInformation->media ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>আপনার কি কোনো মানসিক বা শারীরিক রোগ আছে?</td>
                        <td>{{ $personalInformation->diseases ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>আপনি কি কোনো বিশেষ দ্বীনি কাজের সাথে জড়িত?k</td>
                        <td>{{ $personalInformation->deen_work ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td> মাজার সম্পর্কে আপনার ধারণা বা বিশ্বাস কী?</td>
                        <td>{{ $personalInformation->shrine_beliefs ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>আপনি কোন ইসলামি বই পড়েছেন</td>
                        <td>{{ $personalInformation->islamic_books ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>আপনার পছন্দের অন্তত তিনজন ইসলামি আলেমের নাম লিখুন</td>
                        <td>{{ $personalInformation->islamic_scholars ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>আপনার জন্য প্রযোজ্য বিভাগটি নির্বাচন করুন</td>
                        <td>{{ $personalInformation->category ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>আপনার শখ, পছন্দ-অপছন্দ, রুচি, স্বপ্ন ইত্যাদি সম্পর্কে কিছু বলুন</td>
                        <td>{{ $personalInformation->hobbies ?? 'N/A' }}</td>
                    </tr>
                    {{-- <tr>
                        <td>Goroom's moblie number</td>
                        <td>{{ $personalInformation->mobile ?? 'N/A' }}</td>
                    </tr> --}}
                    {{-- <tr><td>Photo</td><td>{{ $personalInformation->photo ?? 'N/A' }}</td></tr> --}}
                </table>
            </div>

            {{-- occupation information  --}}
            <div class="section">
                <h3>পেশাগত তথ্য</h3>
                <table>
                    <tr>
                        <td>পেশা</td>
                        <td>{{ $occupationInformation->occupation ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>পেশার বিবরণ</td>
                        <td>{{ $occupationInformation->description ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>মাসিক আয়</td>
                        <td>{{ $occupationInformation->monthly_income ?? 'N/A' }}</td>
                    </tr>
                </table>
            </div>

            {{-- Marrige infromation  --}}
            <div class="section">
                <h3>বিবাহ সম্পর্কিত তথ্য</h3>
                <table>
                    <tr>
                        <td>আপনার অভিভাবকরা কি আপনার বিয়েতে সম্মত?</td>
                        <td>{{ $marriageInformation->guardians_agree ? 'হ্যাঁ' : 'না' }}</td>
                    </tr>
                    <tr>
                        <td>আপনি কি বিয়ের পর আপনার স্ত্রীকে পর্দার মধ্যে রাখতে পারবেন? </td>
                        <td>{{ $marriageInformation->keep_veil ? 'হ্যাঁ' : 'না' }}</td>
                    </tr>
                    <tr>
                        <td>আপনি কি বিয়ের পর আপনার স্ত্রীকে পড়াশোনা করার অনুমতি দিতে চান?</td>
                        <td>{{ $marriageInformation->allow_study ? 'হ্যাঁ' : 'না' }}</td>
                    </tr>
                    <tr>
                        <td>আপনি কি বিয়ের পর আপনার স্ত্রীকে কোনো চাকরি করতে দিতে চান?</td>
                        <td>{{ $marriageInformation->allow_job ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>বিয়ের পর আপনি আপনার স্ত্রীকে নিয়ে কোথায় থাকবেন?</td>
                        <td>{{ $marriageInformation->living_arrangement ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>আপনি বা আপনার পরিবার কি কনের পরিবার থেকে কোনো উপহার আশা করেন?</td>
                        <td>{{ $marriageInformation->expect_gift ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td> আপনি কেন বিয়ে করছেন? বিয়ে সম্পর্কে আপনার চিন্তাভাবনা কী? </td>
                        <td>{{ $marriageInformation->marriage_thoughts ?? 'N/A' }}</td>
                    </tr>
                </table>
            </div>

            {{-- expected partenr infromation  --}}
            <div class="section">
                <h3> প্রত্যাশিত জীবনসঙ্গীর তথ্য </h3>
                <table>
                    <tr>
                        <td>বয়স (কমপক্ষে)</td>
                        <td>{{ $expectedPartner->age_from ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>বয়স (সর্বোচ্চ)</td>
                        <td>{{ $expectedPartner->age_to ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>গায়ের রং</td>
                        <td>{{ $expectedPartner->complexion ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>উচ্চতা</td>
                        <td>{{ $expectedPartner->height ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>শিক্ষাগত যোগ্যতা</td>
                        <td>{{ $expectedPartner->educational_qualification ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>জেলা</td>
                        <td>{{ $expectedPartner->district ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>বৈবাহিক অবস্থা</td>
                        <td>{{ $expectedPartner->marital_status ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td> আর্থিক অবস্থা</td>
                        <td>{{ $expectedPartner->financial_condition ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>আপনার প্রত্যাশিত জীবনসঙ্গীর গুণাবলী বা বৈশিষ্ট্য</td>
                        <td>{{ $expectedPartner->expected_qualities ?? 'N/A' }}</td>
                    </tr>
                </table>
            </div>

            {{-- pledge information  --}}
            <div class="section">
                <h3>অঙ্গীকার সংক্রান্ত তথ্য</h3>
                <table>
                    <tr>
                        <td>আপনি কি এই ওয়েবসাইটে বায়োডাটা দিচ্ছেন তা আপনার বাবা-মা জানেন কি?</td>
                        <td>{{ $pledge->parents_know ? 'হ্যাঁ' : 'না' }}</td>
                    </tr>
                    <tr>
                        <td>আল্লাহর কসম করে বলুন, প্রদত্ত সমস্ত তথ্য সঠিক।</td>
                        <td>{{ $pledge->testify_truth ? 'হ্যাঁ' : 'না' }}</td>
                    </tr>
                    <tr>
                        <td>আপনি যদি কোনো মিথ্যা তথ্য প্রদান করেন, তবে এই ওয়েবসাইট পার্থিব আইন এবং পরকালের দায়ভার গ্রহণ
                            করবে না। আপনি কি এতে সম্মত? </td>
                        <td>{{ $pledge->agree ? 'হ্যাঁ' : 'না' }}</td>
                    </tr>
                </table>
            </div>

            {{-- contact information --}}
            <div class="section">
                <h3>যোগাযোগের তথ্য</h3>

                {{-- button view contact information  --}}

                <div class="text-center mt-5">
                    <button id="viewContactBtn" class="btn btn-outline-dark px-4 p-2 rounded-pill fw-semibold"
                        onclick="viewContactInformation()">যোগাযোগের তথ্য দেখুন </button>
                    <p class="mt-3 " style="color: #2ebb55">যোগাযোগের তথ্য দেখার জন্য আপনাকে সর্বনিম্ন 1 টি কানেকশন থাকতে
                        হবে।</p>
                </div>


                <table class="mt-5 w-100" id="contactInfo" data-contact-id="{{ $contact->id ?? '' }}"
                    style="display:none; ">
                    <tr>
                        <td>নাম</td>
                        <td>{{ $contact->groom_name ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>অভিভাবকের মোবাইল নম্বর</td>
                        <td>{{ $contact->guardian_mobile ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>অভিভাবকের সাথে সম্পর্ক</td>
                        <td>{{ $contact->relationship_with_guardian ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>অভিভাবকের ইমেইল </td>
                        <td>{{ $contact->guardian_email ?? 'N/A' }}</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>

    {{-- view hide contact information js code  --}}
    <script>
        function viewContactInformation() {
            const contactId = document.getElementById('contactInfo').getAttribute('data-contact-id');

            if (!contactId) {
                alert('Contact ID cannot be null. Please ensure that there are contacts available.');
                return;
            }

            axios.post('/check-package-status', {
                    contact_id: contactId
                })
                .then(response => {
                    if (response.data.success) {
                        const contactTable = document.getElementById('contactInfo');
                        contactTable.style.display = 'table';
                        contactTable.classList.add('w-100');
                    } else {
                        alert(response.data.message);
                    }
                })
                .catch(error => {
                    console.error("There was an error checking package status:", error);
                });
        }
    </script>

    {{-- shortlist and ignore list add js code  --}}

    <script>
        function shortlistUser(userId) {
            axios.post('/shortlist', {
                    user_id: userId
                })
                .then(response => {
                    if (response.data.success) {
                        alert(response.data.message);
                        // এখানে UI আপডেট করুন
                    }
                })
                .catch(error => {
                    console.error("There was an error shortlisting the user:", error);
                });
        }

        function ignoreUser(userId) {
            axios.post('/ignore', {
                    user_id: userId
                })
                .then(response => {
                    if (response.data.success) {
                        alert(response.data.message);
                        // এখানে UI আপডেট করুন
                    }
                })
                .catch(error => {
                    console.error("There was an error ignoring the user:", error);
                });
        }
    </script>

    <style>
        /* Add this CSS to your stylesheet */
        .sidebar-content table td,
        .section table td {
            font-size: 0.9rem;
            /* Adjust this value to make text smaller or larger */
            padding: 0.5rem;
            /* Optional: Adjust cell padding */
        }
    </style>
@endsection
