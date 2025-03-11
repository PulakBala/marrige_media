<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Country;

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
        'height' => null, // Add this line
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
        'education.passing_year' => 'required|integer|digits:4', // New validation rule
        'education.group' => 'required|string', // New validation rule
        'education.result' => 'required|string', // New validation rule

        //family info
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
          'personalInfo.mobile' => 'required|string|max:15', // Assuming a max length for mobile numbers
          'personalInfo.photo' => 'nullable|image|max:2048', // Assuming a max size for uploaded images

           // Occupation Information validation rules
           'occupationInfo.occupation' => 'required|string',
           'occupationInfo.description' => 'required|string|max:1000',
           'occupationInfo.monthly_income' => 'required|numeric|min:0',

           //marriage information
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

            //pledge
            'pledge.parents_know' => 'required|string',
            'pledge.testify_truth' => 'required|string',
            'pledge.agree' => 'required|string',


            //contact
            'contact.groomName' => 'required|string|max:255',
            'contact.guardianMobile' => 'required|string|regex:/^(\+?\d{1,3}[- ]?)?\d{10}$/',
            'contact.relationshipWithGuardian' => 'required|string|max:255',
            'contact.guardianEmail' => 'required|email|max:255',

    ];



    public function startForm()
    {
        $this->showForm = true;
    }

    public function nextStep()
    {
        $this->validateCurrentStep();

        dd($this->basicInfo, $this->permanent_address, $this->present_address, $this->education, $this->familyInfo, $this->personalInfo, $this->occupationInfo, $this->marriageInfo, $this->expectedPartner, $this->pledge, $this->contact);

        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
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
            $this->validate([
                'permanent_address.country_id' => 'required|exists:countries,id',
                'permanent_address.state_id' => 'required|exists:states,id',
                'permanent_address.district_id' => 'required|exists:districts,id',
                'permanent_address.city_id' => 'required|exists:cities,id',
                'addressInfo.grew_up' => 'required|string|min:3',
            ]);

            // If checkbox is NOT checked, then validate present address separately
            if (!$this->addressInfo['same_as_permanent']) {
                $this->validate([
                    'present_address.country_id' => 'required|exists:countries,id',
                    'present_address.state_id' => 'required|exists:states,id',
                    'present_address.district_id' => 'required|exists:districts,id',
                    'present_address.city_id' => 'required|exists:cities,id',
                ]);
            } else {
                // If same_as_permanent is checked, copy data
                $this->present_address = $this->permanent_address;
            }
        } elseif ($this->currentStep === 3){
            $this->validate([
                'education.method' => 'required|string',
                'education.higher_qualification' => 'required|string',
                'education.other_qualification' => 'nullable|string|max:1000',
                'education.islamic_title' => 'nullable|string',
                'education.passing_year' => 'required|integer|digits:4', // New validation rule
                'education.group' => 'required|string', // New validation rule
                'education.result' => 'required|string', // New validation rule
            ]);

        } elseif ($this->currentStep === 4){
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
        } elseif($this->currentStep === 5){
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
        } elseif($this->currentStep === 6){
            $this->validate([
                'occupationInfo.occupation' => 'required|string',
                'occupationInfo.description' => 'required|string|max:1000',
                'occupationInfo.monthly_income' => 'required|numeric|min:0',
            ]);
        } elseif($this->currentStep === 7){
            $this->validate([
                'marriageInfo.guardians_agree' => 'required|string',
                'marriageInfo.keep_veil' => 'required|string',
                'marriageInfo.allow_study' => 'required|string',
                'marriageInfo.allow_job' => 'required|string',
                'marriageInfo.living_arrangement' => 'required|string|max:255',
                'marriageInfo.expect_gift' => 'required|string',
                'marriageInfo.marriage_thoughts' => 'required|string|max:1000',
            ]);
        } elseif($this->currentStep === 8){
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
        } elseif($this->currentStep === 9){
            $this->validate([
                'pledge.parents_know' => 'required|string',
                'pledge.testify_truth' => 'required|string',
                'pledge.agree' => 'required|string',
            ]);
        } elseif($this->currentStep === 10){
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

        // Save all data to database
        // You can create separate methods for saving each section

        session()->flash('message', 'Profile updated successfully!');
        $this->showForm = false;
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.profile-component');
    }


}
