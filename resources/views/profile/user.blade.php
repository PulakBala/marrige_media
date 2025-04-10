@extends('layouts.app')
@section('content')
    <div class="containers min-vh-100 py-4">

        <div class="sidebars">
            <div class="avatar">

            </div>
            <table>
                <tr>
                    <td><strong>Biodata Type</strong></td>
                    <td>{{ $basicInformation->biodata_type }}</td>
                </tr>
                <tr>
                    <td><strong>Marital Status</strong></td>
                    <td>{{ $basicInformation->marital_status }}</td>
                </tr>
                <tr>
                    <td><strong>Birth Year</strong></td>
                    <td>{{ $basicInformation->birth_year }}</td>
                </tr>
                <tr>
                    <td><strong>Height</strong></td>
                    <td>{{ $basicInformation->height }}</td>
                </tr>
                <tr>
                    <td><strong>Complexion</strong></td>
                    <td>{{ $basicInformation->complexion }}</td>
                </tr>
                <tr>
                    <td><strong>Weight</strong></td>
                    <td>{{ round($basicInformation->weight) }} kg</td>
                </tr>
                <tr>
                    <td><strong>Blood Group</strong></td>
                    <td>{{ $basicInformation->blood_group }}</td>
                </tr>
                <tr>
                    <td><strong>Nationality</strong></td>
                    <td>{{ $basicInformation->nationality }}</td>
                </tr>
            </table>
            <a href="#" class="button">Copy Biodata Link</a>
        </div>



        <div class="content">
            <div class="logo-space">[ Add Your Logo Here ]</div>

            {{-- address  --}}
            <div class="section">
                <h3>Address</h3>
                <table>
                    <tr>
                        <td>Permanent Address</td>
                        <td>
                            {{ $permanentAddress->country->name ?? 'N/A' }},
                            {{ $permanentAddress->state->name ?? 'N/A' }},
                            {{ $permanentAddress->district->name ?? 'N/A' }},
                            {{ $permanentAddress->city->name ?? 'N/A' }}
                        </td>
                    </tr>
                    <tr>
                        <td>Present Address</td>

                        <td>
                            {{ $presenttAddress->country->name ?? 'N/A' }},
                            {{ $presenttAddress->state->name ?? 'N/A' }},
                            {{ $presenttAddress->district->name ?? 'N/A' }},
                            {{ $presenttAddress->city->name ?? 'N/A' }}
                        </td>
                    </tr>
                    <tr>
                        <td>Where did you grow up?</td>
                        <td>{{ $presenttAddress->grew_up ?? 'N/A' }}</td>
                    </tr>

                </table>
            </div>

            {{-- Educational Qualifications --}}
            <div class="section">
                <h3>Educational Qualifications</h3>
                <table>

                    <tr>
                        <td>Your Education Method</td>
                        <td>{{ $educationDetails->method }}</td>
                    </tr>
                    <tr>
                        <td>Highest educational qualification</td>
                        <td>{{ $educationDetails->higher_qualification }}</td>
                    </tr>
                    <tr>
                        <td>SSC / Dakhil / Equivalent Passing year</td>
                        <td>{{ $educationDetails->passing_year }}</td>
                    </tr>
                    <tr>
                        <td>Group</td>
                        <td>{{ $educationDetails->group_name }}</td>
                    </tr>
                    <tr>
                        <td>Result</td>
                        <td>{{ $educationDetails->result }}</td>
                    </tr>
                    <tr>
                        <td>Other educational qualifications</td>
                        <td>{{ $educationDetails->other_qualification }}</td>
                    </tr>
                    <tr>
                        <td>Islamic educational titles</td>
                        <td>{{ $educationDetails->islamic_title }}</td>
                    </tr>
                </table>
            </div>

            {{-- family information  --}}
            <div class="section">
                <h3>Family Information</h3>
                <table>
                    <tr>
                        <td>Father's Name</td>
                        <td>{{ $familyInformation->father_name ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Is your father alive?</td>
                        <td>{{ $familyInformation->father_alive ? 'Yes' : 'No' }}</td>
                    </tr>
                    <tr>
                        <td>Father's Profession</td>
                        <td>{{ $familyInformation->father_profession ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Mother's Name</td>
                        <td>{{ $familyInformation->mother_name ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Is your mother alive?</td>
                        <td>{{ $familyInformation->mother_alive ? 'Yes' : 'No' }}</td>
                    </tr>
                    <tr>
                        <td>Description of mother's profession</td>
                        <td>{{ $familyInformation->mother_profession ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>How many brothers do you have ? </td>
                        <td>{{ $familyInformation->brothers_count ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>How many sisters do you have ?</td>
                        <td>{{ $familyInformation->sisters_count ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Family financial Status?</td>
                        <td>{{ $familyInformation->financial_status ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Description of financial Condition ?</td>
                        <td>{{ $familyInformation->financial_condition ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>How ir your family's religious Condition ?</td>
                        <td>{{ $familyInformation->religious_condition ?? 'N/A' }}</td>
                    </tr>
                </table>
            </div>

            {{-- personal information  --}}
            <div class="section">
                <h3>Personal Information</h3>
                <table>
                    <tr>
                        <td>What kind of clothes do you have usually wear outside the house?</td>
                        <td>{{ $personalInformation->clothes ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Do you have beard according to sunnah ? Since when? </td>
                        <td>{{ $personalInformation->beard ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Do you pray five times a day? Since when ?</td>
                        <td>{{ $personalInformation->prayer ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Do you comply with mahram / non-mahram ? </td>
                        <td>{{ $personalInformation->mahram ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Are you able to recite the Quran correctly ?</td>
                        <td>{{ $personalInformation->quran_recitation ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Which Fiqh do you follow ?</td>
                        <td>{{ $personalInformation->fiqh ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Do you watch or listen to dramas / movies / serials / songs? </td>
                        <td>{{ $personalInformation->media ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Do you have any mental or physical diseases ?</td>
                        <td>{{ $personalInformation->diseases ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Are you involved in any spcieal deen Work</td>
                        <td>{{ $personalInformation->deen_work ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Yor ideas or beliefs about the shrine(Majar) ?</td>
                        <td>{{ $personalInformation->shrine_beliefs ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Islamic Books you have read</td>
                        <td>{{ $personalInformation->islamic_books ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Writes the name of at least 3 islamic scholars of your choice</td>
                        <td>{{ $personalInformation->islamic_scholars ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Select the category is appllicable to you</td>
                        <td>{{ $personalInformation->category ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>What about your hobbies , likes and dislikes, tastes, dreams, and so on.</td>
                        <td>{{ $personalInformation->hobbies ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Goroom's moblie number</td>
                        <td>{{ $personalInformation->mobile ?? 'N/A' }}</td>
                    </tr>
                    {{-- <tr><td>Photo</td><td>{{ $personalInformation->photo ?? 'N/A' }}</td></tr> --}}
                </table>
            </div>

            {{-- occupation information  --}}
            <div class="section">
                <h3>Occupation Information</h3>
                <table>
                    <tr>
                        <td>Occupation</td>
                        <td>{{ $occupationInformation->occupation ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Description of profession</td>
                        <td>{{ $occupationInformation->description ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Monthly Income</td>
                        <td>{{ $occupationInformation->monthly_income ?? 'N/A' }}</td>
                    </tr>
                </table>
            </div>

            {{-- Marrige infromation  --}}
            <div class="section">
                <h3>Marriage Information</h3>
                <table>
                    <tr>
                        <td>Do your guardians agree to your marriage ?</td>
                        <td>{{ $marriageInformation->guardians_agree ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Will you be able to keep your wife in the veli after marriage ? </td>
                        <td>{{ $marriageInformation->keep_veil ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Would you like to allorw your wife to study after marriage ? </td>
                        <td>{{ $marriageInformation->allow_study ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Would you like to allow your wife to do any job after marriage ? </td>
                        <td>{{ $marriageInformation->allow_job ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Where will you live with youir wife after marriage ? </td>
                        <td>{{ $marriageInformation->living_arrangement ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Would you or your family expect any figt from the brides's family ?</td>
                        <td>{{ $marriageInformation->expect_gift ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Why are you fetting married ? What are your thoughts on marriage ? </td>
                        <td>{{ $marriageInformation->marriage_thoughts ?? 'N/A' }}</td>
                    </tr>
                </table>
            </div>

            {{-- expected partenr infromation  --}}
            <div class="section">
                <h3>Expected Partner Information</h3>
                <table>
                    <tr>
                        <td>Age From</td>
                        <td>{{ $expectedPartner->age_from ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Age To</td>
                        <td>{{ $expectedPartner->age_to ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Complexion</td>
                        <td>{{ $expectedPartner->complexion ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Height</td>
                        <td>{{ $expectedPartner->height ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Educational Qualification</td>
                        <td>{{ $expectedPartner->educational_qualification ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>District</td>
                        <td>{{ $expectedPartner->district ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Marital Status</td>
                        <td>{{ $expectedPartner->marital_status ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Financial Condition</td>
                        <td>{{ $expectedPartner->financial_condition ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>Expected Qualities or attributes of your life partner</td>
                        <td>{{ $expectedPartner->expected_qualities ?? 'N/A' }}</td>
                    </tr>
                </table>
            </div>

            {{-- pledge information  --}}
            <div class="section">
                <h3>Pledge Information</h3>
                <table>
                    <tr>
                        <td>Do your parents know that you are submitting biodata to the this website ?</td>
                        <td>{{ $pledge->parents_know ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>By Allah, testify that all the information given is true.</td>
                        <td>{{ $pledge->testify_truth ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td>If you provide any false infromation, this website will not take any responsibility for the
                            conventional law and the hereafter . Do you agree? </td>
                        <td>{{ $pledge->agree ?? 'N/A' }}</td>
                    </tr>
                </table>
            </div>

            {{-- contact information --}}
            <div class="section w-full">
                <h3>Contact Information</h3>

                {{-- button view contact information  --}}

                <div class="text-center mt-5">
                    <button id="viewContactBtn" class="btn btn-outline-dark px-4 p-2 rounded-pill fw-semibold"
                        onclick="viewContactInformation()">View Contact Information</button>
                </div>


                <table class="mt-5 border" id="contactInfo" data-contact-id="{{ $contact->id ?? '' }}" style="display:none;">
                    <tr>
                        <td style="width: 100%;">Groom Name</td>
                        <td style="width: 50%;">{{ $contact->groom_name ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td style="width: 50%;">Guardian Mobile</td>
                        <td style="width: 50%;">{{ $contact->guardian_mobile ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td style="width: 50%;">Relationship with Guardian</td>
                        <td style="width: 50%;">{{ $contact->relationship_with_guardian ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td style="width: 50%;">Guardian Email</td>
                        <td style="width: 50%;">{{ $contact->guardian_email ?? 'N/A' }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    {{-- view contact button js code heare  --}}
    {{-- <script>
        function viewContactInformation() {
            axios.get('/check-package-status')
                .then(response => {
                    if (response.data.success) {
                        // Show contact info if conditions are met
                        document.getElementById('contactInfo').style.display = 'block';
                    } else {
                        // Show error message if conditions are not met
                        alert(response.data.message);
                    }
                })
                .catch(error => {
                    console.error("There was an error checking package status:", error);
                });
        }
    </script> --}}


<script>
    function viewContactInformation() {
        const contactId = document.getElementById('contactInfo').getAttribute('data-contact-id');

          // Check if contactId is null or empty
    if (!contactId) {
        alert('Contact ID cannot be null. Please ensure that there are contacts available.');
        return; // Exit the function if contactId is not valid
    }

        axios.post('/check-package-status', {
            contact_id: contactId
        })
        .then(response => {
            if (response.data.success) {
                document.getElementById('contactInfo').style.display = 'block';
            } else {
                alert(response.data.message);
            }
        })
        .catch(error => {
            console.error("There was an error checking package status:", error);
        });
    }
</script>

@endsection
