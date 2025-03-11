<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\State;
use App\Models\District;
use App\Models\City;

class LocationDropdown extends Component
{
    public $countries, $states, $districts, $cities;
    public $selectedCountry = null, $selectedState = null, $selectedDistrict = null, $selectedCity = null;

    public $type = 'permanent'; // default

    public function mount($type = 'permanent')
    {
        $this->type = $type;
        $this->countries = Country::all(); // Load all countries initially
        $this->states = collect();
        $this->districts = collect();
        $this->cities = collect();
    }

    public function updatedSelectedCountry($countryId)
    {
        // dd($countryId);
        $this->selectedState = null;
        $this->selectedDistrict = null;
        $this->selectedCity = null;

        $this->states = State::where('country_id', $countryId)->get();
        $this->districts = collect();
        $this->cities = collect();
    }

    public function updatedSelectedState($stateId)
    {
        // dd($stateId);
        $this->selectedDistrict = null;
        $this->selectedCity = null;

        $this->districts = District::where('state_id', $stateId)->get();
        $this->cities = collect();

    }

    public function updatedSelectedDistrict($districtId)
    {
        $this->selectedCity = null;
        $this->cities = City::where('district_id', $districtId)->get();


    }


        // No need to reset the selectedCity here because it's already the one that's selected.
        // You can handle any other logic when the city is updated.

        public function updatedSelectedCity($cityId)
        {
            $this->dispatch("locationUpdated_{$this->type}", [
                'country_id' => $this->selectedCountry,
                'state_id' => $this->selectedState,
                'district_id' => $this->selectedDistrict,
                'city_id' => $this->selectedCity,
            ]);
        }




    public function render()
    {
        return view('livewire.location-dropdown');
    }
}
