<?php

namespace App\Livewire;

use App\Models\BasicInformation;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Education;
use App\Models\ExpectedPartner;
use App\Models\FamilyInformation;
use App\Models\MarriageInformation;
use App\Models\OccupationInformation;
use App\Models\PermanentAddress;
use App\Models\PersonalInformation;
use App\Models\Pledge;
use App\Models\PresentAddress;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileComponent extends Component
{
    use WithFileUploads;

    public $currentStep = 1;
    public $totalSteps = 10;
    public $showForm = false;

    // Step 1: Basic Information
    public $basicInfo = [
        'full_name' => '',
        'biodata_type' => '',
        'marital_status' => '',
        'birth_year' => '',
        'height' => '',
        'complexion' => '',
        'weight' => '',
        'blood_group' => '',
        'nationality' => '',
    ];

    public $permanent_address = [
        'country_id' => null,
        'state_id' => null,
        'district_id' => null,
        'city_id' => null,
    ];

    public $present_address = [
        'country_id' => null,
        'state_id' => null,
        'district_id' => null,
        'city_id' => null,
    ];

    public $addressInfo = [
        'same_as_permanent' => false,
        'grew_up' => '',
    ];

    public $education = [
        'method' => '',
        'higher_qualification' => '',
        'other_qualification' => '',
        'islamic_title' => '',
    ];

    public $familyInfo = [
        'father_name' => '',
        'father_alive' => '',
        'father_profession' => '',
        'mother_name' => '',
        'mother_alive' => '',
        'mother_profession' => '',
        'brothers_count' => null,
        'sisters_count' => null,
        'financial_status' => '',
        'financial_condition' => '',
        'religious_condition' => '',
    ];

    public $personalInfo = [
        'clothes' => '',
        'beard' => '',
        'prayer' => '',
        'mahram' => '',
        'quran_recitation' => '',
        'fiqh' => '',
        'media' => '',
        'diseases' => '',
        'deen_work' => '',
        'shrine_beliefs' => '',
        'islamic_books' => '',
        'islamic_scholars' => '',
        'category' => '',
        'hobbies' => '',
        'mobile' => '',
        'photo' => null,
    ];

    public $occupationInfo = [
        'occupation' => '',
        'description' => '',
        'monthly_income' => null,
    ];

    public $marriageInfo = [
        'guardians_agree' => '',
        'keep_veil' => '',
        'allow_study' => '',
        'allow_job' => '',
        'living_arrangement' => '',
        'expect_gift' => '',
        'marriage_thoughts' => '',
    ];

    public $expectedPartner = [
        'age_from' => null,
        'age_to' => null,
        'complexion' => '',
        'height' => null,  // Add this line
        'educational_qualification' => '',
        'district' => '',
        'marital_status' => '',
        'financial_condition' => '',
        'expected_qualities' => '',
    ];

    public $pledge = [
        'parents_know' => '',
        'testify_truth' => '',
        'agree' => '',
    ];

    public $contact = [
        'groomName' => '',
        'guardianMobile' => '',
        'relationshipWithGuardian' => '',
        'guardianEmail' => '',
    ];

    protected $listeners = [
        'locationUpdated_permanent' => 'handlePermanentLocationUpdated',
        'locationUpdated_present' => 'handlePresentLocationUpdated',
    ];

    public function handlePermanentLocationUpdated($data)
    {
        $this->permanent_address = $data;
    }

    public function handlePresentLocationUpdated($data)
    {
        $this->present_address = $data;
    }

    protected $rules = [
        'education.method' => 'required|string',
        'education.higher_qualification' => 'required|string',
        'education.other_qualification' => 'nullable|string|max:1000',
        'education.islamic_title' => 'nullable|string',
        'education.passing_year' => 'required|integer|digits:4',  // New validation rule
        'education.group' => 'required|string',  // New validation rule
        'education.result' => 'required|string',  // New validation rule
        // family info
        'familyInfo.father_name' => 'required|string|max:255',
        'familyInfo.father_alive' => 'required|string|in:yes,no',
        'familyInfo.father_profession' => 'nullable|string|max:1000',
        'familyInfo.mother_name' => 'required|string|max:255',
        'familyInfo.mother_alive' => 'required|string|in:yes,no',
        'familyInfo.mother_profession' => 'nullable|string|max:1000',
        'familyInfo.brothers_count' => 'nullable|integer|min:0',
        'familyInfo.sisters_count' => 'nullable|integer|min:0',
        'familyInfo.financial_status' => 'required|string|in:stable,unstable,poor',
        'familyInfo.financial_condition' => 'nullable|string|max:1000',
        'familyInfo.religious_condition' => 'nullable|string|max:1000',
        // Personal Information validation rules
        'personalInfo.clothes' => 'required|string|max:1000',
        'personalInfo.beard' => 'required|string|max:1000',
        'personalInfo.prayer' => 'required|string|max:1000',
        'personalInfo.mahram' => 'nullable|string|max:1000',
        'personalInfo.quran_recitation' => 'nullable|string|max:1000',
        'personalInfo.fiqh' => 'required|string|max:255',
        'personalInfo.media' => 'nullable|string|max:1000',
        'personalInfo.diseases' => 'nullable|string|max:1000',
        'personalInfo.deen_work' => 'nullable|string|max:1000',
        'personalInfo.shrine_beliefs' => 'nullable|string|max:1000',
        'personalInfo.islamic_books' => 'nullable|string|max:1000',
        'personalInfo.islamic_scholars' => 'nullable|string|max:1000',
        'personalInfo.category' => 'nullable|string',
        'personalInfo.hobbies' => 'nullable|string|max:1000',
        'personalInfo.mobile' => 'required|string|max:15',  // Assuming a max length for mobile numbers
        'personalInfo.photo' => 'nullable|image|max:2048',  // Assuming a max size for uploaded images
        // Occupation Information validation rules
        'occupationInfo.occupation' => 'required|string',
        'occupationInfo.description' => 'required|string|max:1000',
        'occupationInfo.monthly_income' => 'required|numeric|min:0',
        // marriage information
        'marriageInfo.guardians_agree' => 'required|string',
        'marriageInfo.keep_veil' => 'required|string',
        'marriageInfo.allow_study' => 'required|string',
        'marriageInfo.allow_job' => 'required|string',
        'marriageInfo.living_arrangement' => 'required|string|max:255',
        'marriageInfo.expect_gift' => 'required|string',
        'marriageInfo.marriage_thoughts' => 'required|string|max:1000',
        // expected life partner
        'expectedPartner.age_from' => 'required|integer|min:18|max:50',
        'expectedPartner.age_to' => 'required|integer|min:18|max:50|gte:expectedPartner.age_from',
        'expectedPartner.complexion' => 'required|string',
        'expectedPartner.height' => 'required|integer|min:100|max:250',
        'expectedPartner.educational_qualification' => 'required|string',
        'expectedPartner.district' => 'required|string|max:255',
        'expectedPartner.marital_status' => 'required|string',
        'expectedPartner.financial_condition' => 'required|string',
        'expectedPartner.expected_qualities' => 'required|string|max:1000',
        // pledge
        'pledge.parents_know' => 'required|string',
        'pledge.testify_truth' => 'required|string',
        'pledge.agree' => 'required|string',
        // contact
        'contact.groomName' => 'required|string|max:255',
        'contact.guardianMobile' => 'required|string|regex:/^(\+?\d{1,3}[- ]?)?\d{10}$/',
        'contact.relationshipWithGuardian' => 'required|string|max:255',
        'contact.guardianEmail' => 'required|email|max:255',
    ];

    public function mount()
    {
        $user = auth()->user();
        if ($user) {
            // Load basic info
            $basicInfo = BasicInformation::where('user_id', $user->id)->first();
            if ($basicInfo) {
                $this->basicInfo = $basicInfo->toArray();
            }

            // Load permanent address
            $permanentAddress = PermanentAddress::where('user_id', $user->id)->first();
            if ($permanentAddress) {
                $this->permanent_address = [
                    'country_id' => $permanentAddress->country_id,
                    'state_id' => $permanentAddress->state_id,
                    'district_id' => $permanentAddress->district_id,
                    'city_id' => $permanentAddress->city_id
                ];
            }

            // Load present address
            $presentAddress = PresentAddress::where('user_id', $user->id)->first();
            if ($presentAddress) {
                $this->present_address = [
                    'country_id' => $presentAddress->country_id,
                    'state_id' => $presentAddress->state_id,
                    'district_id' => $presentAddress->district_id,
                    'city_id' => $presentAddress->city_id
                ];
                $this->addressInfo['same_as_permanent'] = $presentAddress->same_as_permanent;
                $this->addressInfo['grew_up'] = $presentAddress->grew_up;
            }

            // Load education info
            $education = Education::where('user_id', $user->id)->first();
            if ($education) {
                $this->education = [
                    'method' => $education->method,
                    'higher_qualification' => $education->higher_qualification,
                    'other_qualification' => $education->other_qualification,
                    'islamic_title' => $education->islamic_title,
                    'passing_year' => $education->passing_year,
                    'group' => $education->group_name,
                    'result' => $education->result
                ];
            }
            // Load family information
            $familyInfo = FamilyInformation::where('user_id', $user->id)->first();
            if ($familyInfo) {
                $this->familyInfo = [
                    'father_name' => $familyInfo->father_name,
                    'father_alive' => $familyInfo->father_alive,
                    'father_profession' => $familyInfo->father_profession,
                    'mother_name' => $familyInfo->mother_name,
                    'mother_alive' => $familyInfo->mother_alive,
                    'mother_profession' => $familyInfo->mother_profession,
                    'brothers_count' => $familyInfo->brothers_count,
                    'sisters_count' => $familyInfo->sisters_count,
                    'financial_status' => $familyInfo->financial_status,
                    'financial_condition' => $familyInfo->financial_condition,
                    'religious_condition' => $familyInfo->religious_condition
                ];
            }

            // Load personal information
            $personalInfo = PersonalInformation::where('user_id', $user->id)->first();
            if ($personalInfo) {
                $this->personalInfo = [
                    'clothes' => $personalInfo->clothes,
                    'beard' => $personalInfo->beard,
                    'prayer' => $personalInfo->prayer,
                    'mahram' => $personalInfo->mahram,
                    'quran_recitation' => $personalInfo->quran_recitation,
                    'fiqh' => $personalInfo->fiqh,
                    'media' => $personalInfo->media,
                    'diseases' => $personalInfo->diseases,
                    'deen_work' => $personalInfo->deen_work,
                    'shrine_beliefs' => $personalInfo->shrine_beliefs,
                    'islamic_books' => $personalInfo->islamic_books,
                    'islamic_scholars' => $personalInfo->islamic_scholars,
                    'category' => $personalInfo->category,
                    'hobbies' => $personalInfo->hobbies,
                    'mobile' => $personalInfo->mobile,
                    'photo' => $personalInfo->photo
                ];
            }

            // Load occupational information
            $occupationInfo = OccupationInformation::where('user_id', $user->id)->first();
            if ($occupationInfo) {
                $this->occupationInfo = [
                    'occupation' => $occupationInfo->occupation,
                    'description' => $occupationInfo->description,
                    'monthly_income' => $occupationInfo->monthly_income
                ];
            }

            // Load marriage information
            $marriageInfo = MarriageInformation::where('user_id', $user->id)->first();
            if ($marriageInfo) {
                $this->marriageInfo = [
                    'guardians_agree' => $marriageInfo->guardians_agree,
                    'keep_veil' => $marriageInfo->keep_veil,
                    'allow_study' => $marriageInfo->allow_study,
                    'allow_job' => $marriageInfo->allow_job,
                    'living_arrangement' => $marriageInfo->living_arrangement,
                    'expect_gift' => $marriageInfo->expect_gift,
                    'marriage_thoughts' => $marriageInfo->marriage_thoughts
                ];
            }

            // Load expected life partner information
            $expectedPartner = ExpectedPartner::where('user_id', $user->id)->first();
            if ($expectedPartner) {
                $this->expectedPartner = [
                    'age_from' => $expectedPartner->age_from,
                    'age_to' => $expectedPartner->age_to,
                    'complexion' => $expectedPartner->complexion,
                    'height' => $expectedPartner->height,
                    'educational_qualification' => $expectedPartner->educational_qualification,
                    'district' => $expectedPartner->district,
                    'marital_status' => $expectedPartner->marital_status,
                    'financial_condition' => $expectedPartner->financial_condition,
                    'expected_qualities' => $expectedPartner->expected_qualities
                ];
            }

            // Load pledge information
            $pledge = Pledge::where('user_id', $user->id)->first();
            if ($pledge) {
                $this->pledge = [
                    'parents_know' => $pledge->parents_know,
                    'testify_truth' => $pledge->testify_truth,
                    'agree' => $pledge->agree
                ];
            }

            // Load contact information
            $contact = Contact::where('user_id', $user->id)->first();
            if ($contact) {
                $this->contact = [
                    'groomName' => $contact->groom_name,
                    'guardianMobile' => $contact->guardian_mobile,
                    'relationshipWithGuardian' => $contact->relationship_with_guardian,
                    'guardianEmail' => $contact->guardian_email
                ];
            }
        }
    }

    public function startForm()
    {
        $this->showForm = true;
    }

    // next step functions

    public function nextStep()
    {
        try {
            $this->validateCurrentStep();

            if ($this->currentStep < $this->totalSteps) {
                $this->currentStep++;
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation failed in step ' . $this->currentStep, [
                'errors' => $e->errors(),
                'data' => [
                    'basicInfo' => $this->basicInfo,
                    'currentStep' => $this->currentStep
                ]
            ]);
            throw $e;
        }
    }

    public function previousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    protected function validateCurrentStep()
    {
        if ($this->currentStep === 1) {
            $this->validate([
                'basicInfo.full_name' => 'required',
                'basicInfo.biodata_type' => 'required',
                'basicInfo.marital_status' => 'required',
                'basicInfo.birth_year' => 'required',
                'basicInfo.height' => 'required',
                'basicInfo.complexion' => 'required',
                'basicInfo.weight' => 'required|numeric',
                'basicInfo.blood_group' => 'required',
                'basicInfo.nationality' => 'required',
            ]);
        } elseif ($this->currentStep === 2) {
            try {
                $this->validate([
                    'permanent_address.country_id' => 'required',
                    'permanent_address.state_id' => 'required',
                    'permanent_address.district_id' => 'required',
                    'permanent_address.city_id' => 'nullable',  // Make city optional
                    'addressInfo.grew_up' => 'nullable|string|min:3',
                ]);
            } catch (\Illuminate\Validation\ValidationException $e) {
                // Handle validation errors
                Log::error('Validation failed: ', $e->errors());
            }

            // If checkbox is NOT checked, then validate present address separately
            if (!$this->addressInfo['same_as_permanent']) {
                $this->validate([
                    'present_address.country_id' => 'required',
                    'present_address.state_id' => 'required',
                    'present_address.district_id' => 'required',
                    'present_address.city_id' => 'nullable',  // Make city optional
                ]);
            } else {
                // If same_as_permanent is checked, copy data
                $this->present_address = $this->permanent_address;
            }
        } elseif ($this->currentStep === 3) {
            $this->validate([
                'education.method' => 'required|string',
                'education.higher_qualification' => 'required|string',
                'education.other_qualification' => 'nullable|string|max:1000',
                'education.islamic_title' => 'nullable|string',
                'education.passing_year' => 'required|integer|digits:4',  // New validation rule
                'education.group' => 'required|string',  // New validation rule
                'education.result' => 'required|string',  // New validation rule
            ]);
        } elseif ($this->currentStep === 4) {
            $this->validate([
                'familyInfo.father_name' => 'required|string|max:255',
                'familyInfo.father_alive' => 'required|string|in:yes,no',
                'familyInfo.father_profession' => 'nullable|string|max:1000',
                'familyInfo.mother_name' => 'required|string|max:255',
                'familyInfo.mother_alive' => 'required|string|in:yes,no',
                'familyInfo.mother_profession' => 'nullable|string|max:1000',
                'familyInfo.brothers_count' => 'nullable|integer|min:0',
                'familyInfo.sisters_count' => 'nullable|integer|min:0',
                'familyInfo.financial_status' => 'required|string|in:stable,unstable,poor',
                'familyInfo.financial_condition' => 'nullable|string|max:1000',
                'familyInfo.religious_condition' => 'nullable|string|max:1000',
            ]);
        } elseif ($this->currentStep === 5) {
            $this->validate([
                'personalInfo.clothes' => 'required|string|max:1000',
                'personalInfo.beard' => 'required|string|max:1000',
                'personalInfo.prayer' => 'required|string|max:1000',
                'personalInfo.mahram' => 'nullable|string|max:1000',
                'personalInfo.quran_recitation' => 'nullable|string|max:1000',
                'personalInfo.fiqh' => 'required|string|max:255',
                'personalInfo.media' => 'nullable|string|max:1000',
                'personalInfo.diseases' => 'nullable|string|max:1000',
                'personalInfo.deen_work' => 'nullable|string|max:1000',
                'personalInfo.shrine_beliefs' => 'nullable|string|max:1000',
                'personalInfo.islamic_books' => 'nullable|string|max:1000',
                'personalInfo.islamic_scholars' => 'nullable|string|max:1000',
                'personalInfo.category' => 'nullable|string',
                'personalInfo.hobbies' => 'nullable|string|max:1000',
                'personalInfo.mobile' => 'required|string|max:15',
                'personalInfo.photo' => 'nullable|image|max:2048',
            ]);
        } elseif ($this->currentStep === 6) {
            $this->validate([
                'occupationInfo.occupation' => 'required|string',
                'occupationInfo.description' => 'required|string|max:1000',
                'occupationInfo.monthly_income' => 'required|numeric|min:0',
            ]);
        } elseif ($this->currentStep === 7) {
            $this->validate([
                'marriageInfo.guardians_agree' => 'required|string',
                'marriageInfo.keep_veil' => 'required|string',
                'marriageInfo.allow_study' => 'required|string',
                'marriageInfo.allow_job' => 'required|string',
                'marriageInfo.living_arrangement' => 'required|string|max:255',
                'marriageInfo.expect_gift' => 'required|string',
                'marriageInfo.marriage_thoughts' => 'required|string|max:1000',
            ]);
        } elseif ($this->currentStep === 8) {
            $this->validate([
                'expectedPartner.age_from' => 'required|integer|min:18|max:50',
                'expectedPartner.age_to' => 'required|integer|min:18|max:50|gte:expectedPartner.age_from',
                'expectedPartner.complexion' => 'required|string',
                'expectedPartner.height' => 'required|integer|min:100|max:250',
                'expectedPartner.educational_qualification' => 'required|string',
                'expectedPartner.district' => 'required|string|max:255',
                'expectedPartner.marital_status' => 'required|string',
                'expectedPartner.financial_condition' => 'required|string',
                'expectedPartner.expected_qualities' => 'required|string|max:1000',
            ]);
        } elseif ($this->currentStep === 9) {
            $this->validate([
                'pledge.parents_know' => 'required|string',
                'pledge.testify_truth' => 'required|string',
                'pledge.agree' => 'required|string',
            ]);
        } elseif ($this->currentStep === 10) {
            $this->validate([
                'contact.groomName' => 'required|string|max:255',
                'contact.guardianMobile' => 'required|string|regex:/^(\+?\d{1,3}[- ]?)?\d{10}$/',
                'contact.relationshipWithGuardian' => 'required|string|max:255',
                'contact.guardianEmail' => 'required|email|max:255',
            ]);
        }
        // Add validation for other steps...
    }

    public function submit()
    {
        $this->validateCurrentStep();
        $user = auth()->user();

        // Update or Create Basic Information
        $basicInfo = BasicInformation::firstOrNew(['user_id' => $user->id]);
        $basicInfo->fill([
            'full_name' => $this->basicInfo['full_name'],
            'biodata_type' => $this->basicInfo['biodata_type'],
            'marital_status' => $this->basicInfo['marital_status'],
            'birth_year' => $this->basicInfo['birth_year'],
            'height' => $this->basicInfo['height'],
            'complexion' => $this->basicInfo['complexion'],
            'weight' => $this->basicInfo['weight'],
            'blood_group' => $this->basicInfo['blood_group'],
            'nationality' => $this->basicInfo['nationality'],
        ])->save();

        // Update or Create Permanent Address
        $permanentAddress = PermanentAddress::firstOrNew(['user_id' => $user->id]);
        $permanentAddress->fill([
            'country_id' => $this->permanent_address['country_id'],
            'state_id' => $this->permanent_address['state_id'],
            'district_id' => $this->permanent_address['district_id'],
            'city_id' => $this->permanent_address['city_id'] ?? null,
        ])->save();

        // Update or Create Present Address
        $presentAddress = PresentAddress::firstOrNew(['user_id' => $user->id]);
        $presentAddress->fill([
            'country_id' => $this->present_address['country_id'],
            'state_id' => $this->present_address['state_id'],
            'district_id' => $this->present_address['district_id'],
            'city_id' => $this->present_address['city_id'] ?? null,
            'same_as_permanent' => $this->addressInfo['same_as_permanent'],
            'grew_up' => $this->addressInfo['grew_up'],
        ])->save();

        // Update or Create Education
        $education = Education::firstOrNew(['user_id' => $user->id]);
        $education->fill([
            'method' => $this->education['method'],
            'higher_qualification' => $this->education['higher_qualification'],
            'other_qualification' => $this->education['other_qualification'],
            'islamic_title' => $this->education['islamic_title'],
            'passing_year' => $this->education['passing_year'],
            'group_name' => $this->education['group'],
            'result' => $this->education['result'],
        ])->save();

        // Update or Create Family Information
        $familyInfo = FamilyInformation::firstOrNew(['user_id' => $user->id]);
        $familyInfo->fill([
            'father_name' => $this->familyInfo['father_name'],
            'father_alive' => $this->familyInfo['father_alive'],
            'father_profession' => $this->familyInfo['father_profession'],
            'mother_name' => $this->familyInfo['mother_name'],
            'mother_alive' => $this->familyInfo['mother_alive'],
            'mother_profession' => $this->familyInfo['mother_profession'],
            'brothers_count' => $this->familyInfo['brothers_count'],
            'sisters_count' => $this->familyInfo['sisters_count'],
            'financial_status' => $this->familyInfo['financial_status'],
            'financial_condition' => $this->familyInfo['financial_condition'],
            'religious_condition' => $this->familyInfo['religious_condition'],
        ])->save();

        // Update or Create Personal Information
        $personalInfo = PersonalInformation::firstOrNew(['user_id' => $user->id]);
        $personalInfo->fill([
            'clothes' => $this->personalInfo['clothes'],
            'beard' => $this->personalInfo['beard'],
            'prayer' => $this->personalInfo['prayer'],
            'mahram' => $this->personalInfo['mahram'],
            'quran_recitation' => $this->personalInfo['quran_recitation'],
            'fiqh' => $this->personalInfo['fiqh'],
            'media' => $this->personalInfo['media'],
            'diseases' => $this->personalInfo['diseases'],
            'deen_work' => $this->personalInfo['deen_work'],
            'shrine_beliefs' => $this->personalInfo['shrine_beliefs'],
            'islamic_books' => $this->personalInfo['islamic_books'],
            'islamic_scholars' => $this->personalInfo['islamic_scholars'],
            'category' => $this->personalInfo['category'],
            'hobbies' => $this->personalInfo['hobbies'],
            'mobile' => $this->personalInfo['mobile'],
            'photo' => $this->personalInfo['photo'],
        ])->save();

        // Update or Create Occupation Information
        $occupationInfo = OccupationInformation::firstOrNew(['user_id' => $user->id]);
        $occupationInfo->fill([
            'occupation' => $this->occupationInfo['occupation'],
            'description' => $this->occupationInfo['description'],
            'monthly_income' => $this->occupationInfo['monthly_income'],
        ])->save();

        // Update or Create Marriage Information
        $marriageInfo = MarriageInformation::firstOrNew(['user_id' => $user->id]);
        $marriageInfo->fill([
            'guardians_agree' => $this->marriageInfo['guardians_agree'],
            'keep_veil' => $this->marriageInfo['keep_veil'],
            'allow_study' => $this->marriageInfo['allow_study'],
            'allow_job' => $this->marriageInfo['allow_job'],
            'living_arrangement' => $this->marriageInfo['living_arrangement'],
            'expect_gift' => $this->marriageInfo['expect_gift'],
            'marriage_thoughts' => $this->marriageInfo['marriage_thoughts'],
        ])->save();

        // Update or Create Expected Partner Information
        $expectedPartner = ExpectedPartner::firstOrNew(['user_id' => $user->id]);
        $expectedPartner->fill([
            'age_from' => $this->expectedPartner['age_from'],
            'age_to' => $this->expectedPartner['age_to'],
            'complexion' => $this->expectedPartner['complexion'],
            'height' => $this->expectedPartner['height'],
            'educational_qualification' => $this->expectedPartner['educational_qualification'],
            'district' => $this->expectedPartner['district'],
            'marital_status' => $this->expectedPartner['marital_status'],
            'financial_condition' => $this->expectedPartner['financial_condition'],
            'expected_qualities' => $this->expectedPartner['expected_qualities'],
        ])->save();

        // Update or Create Pledge Information
        $pledge = Pledge::firstOrNew(['user_id' => $user->id]);
        $pledge->fill([
            'parents_know' => $this->pledge['parents_know'],
            'testify_truth' => $this->pledge['testify_truth'],
            'agree' => $this->pledge['agree'],
        ])->save();

        // Update or Create Contact Information
        $contact = Contact::firstOrNew(['user_id' => $user->id]);
        $contact->fill([
            'groom_name' => $this->contact['groomName'],
            'guardian_mobile' => $this->contact['guardianMobile'],
            'relationship_with_guardian' => $this->contact['relationshipWithGuardian'],
            'guardian_email' => $this->contact['guardianEmail'],
        ])->save();

        session()->flash('notification', 'Profile updated successfully!');
        $this->showForm = false;
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.profile-component');
    }
}
