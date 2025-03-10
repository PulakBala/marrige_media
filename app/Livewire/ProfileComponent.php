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
        // 'biodata_type' => '',
        // 'marital_status' => '',
        // 'birth_year' => '',
        // 'height' => '',
        // 'complexion' => '',
        // 'weight' => '',
        // 'blood_group' => '',
        // 'nationality' => '',
    ];

    public $permanent_address = [
        'country_id' => null,
        'state_id' => null,
        'district_id' => null,
        'city_id' => null,
    ];

    protected $listeners = ['locationUpdated' => 'handleLocationUpdated'];

public function handleLocationUpdated($data)
{
    dd($data);
    $this->permanent_address = $data;
}




    public function startForm()
    {
        $this->showForm = true;
    }

    public function nextStep()
    {
        $this->validateCurrentStep();

        // Debugging line to check the value of permanent_address
        // dd($this->permanent_address);

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
                // 'basicInfo.biodata_type' => 'required',
                // 'basicInfo.marital_status' => 'required',
                // 'basicInfo.birth_year' => 'required',
                // 'basicInfo.height' => 'required',
                // 'basicInfo.complexion' => 'required',
                // 'basicInfo.weight' => 'required|numeric',
                // 'basicInfo.blood_group' => 'required',
                // 'basicInfo.nationality' => 'required',
            ]);
        } elseif ($this->currentStep === 2) {
            $this->validate([
                'permanent_address.country_id' => 'required|exists:countries,id',
                'permanent_address.state_id' => 'required|exists:states,id',
                'permanent_address.district_id' => 'required|exists:districts,id',
                'permanent_address.city_id' => 'required|exists:cities,id',
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
