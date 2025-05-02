<?php
namespace App\Livewire;

use App\Models\City;
use App\Models\Country;
use App\Models\District;
use App\Models\State;
use App\Models\PermanentAddress;  // সঠিক নেমস্পেস যোগ করুন
use App\Models\PresentAddress;    // সঠিক নেমস্পেস যোগ করুন
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class LocationDropdown extends Component
{
    public $countries,
        $states,
        $districts,
        $cities;

    public $selectedCountry = null,
        $selectedState = null,
        $selectedDistrict = null,
        $selectedCity = null;

    public $type = 'permanent';  // default

    public function mount($type = 'permanent')
    {
        $this->type = $type;
        $this->countries = Country::all();  // Load all countries initially
        $this->states = collect();
        $this->districts = collect();
        $this->cities = collect();

        $user = auth()->user();
        if ($user) {
            if ($type === 'permanent') {
                $address = PermanentAddress::where('user_id', $user->id)->first();
            } else {
                $address = PresentAddress::where('user_id', $user->id)->first();
            }

            // যদি আগের ঠিকানা থাকে, তাহলে সেটা ড্রপডাউনে দেখাই
            if ($address) {
                $this->selectedCountry = $address->country_id;
                $this->selectedState = $address->state_id;
                $this->selectedDistrict = $address->district_id;
                $this->selectedCity = $address->city_id;

                // সিলেক্টেড কান্ট্রির জন্য স্টেট লোড করি
                if ($this->selectedCountry) {
                    $this->states = State::where('country_id', $this->selectedCountry)->get();
                }

                // সিলেক্টেড স্টেটের জন্য ডিস্ট্রিক্ট লোড করি
                if ($this->selectedState) {
                    $this->districts = District::where('state_id', $this->selectedState)->get();
                }

                // সিলেক্টেড ডিস্ট্রিক্টের জন্য সিটি লোড করি
                if ($this->selectedDistrict) {
                    $this->cities = City::where('district_id', $this->selectedDistrict)->get();
                }
            }
        }
    }

    public function updatedSelectedCountry($countryId)
    {
        // Log::info('Selected Country ID: ' . $countryId);
        $this->selectedState = null;
        $this->selectedDistrict = null;
        $this->selectedCity = null;

        $this->states = State::where('country_id', $countryId)->get();
        $this->districts = collect();
        $this->cities = collect();
    }

    public function updatedSelectedState($stateId)
    {
        // Log::info('Selected State ID: ' . $stateId);
        $this->selectedDistrict = null;
        $this->selectedCity = null;

        $this->districts = District::where('state_id', $stateId)->get();
        $this->cities = collect();
    }

    public function updatedSelectedDistrict($districtId)
    {
        // Log::info('Selected District ID: ' . $districtId);
        $this->selectedCity = null;  // Reset selected city

        // Get cities based on selected district
        $this->cities = City::where('district_id', $districtId)->get();

        $this->dispatch("locationUpdated_{$this->type}", [
            'country_id' => $this->selectedCountry,
            'state_id' => $this->selectedState,
            'district_id' => $this->selectedDistrict,
            'city_id' => $this->selectedCity,  // This will be null if not selected
        ]);
    }

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
