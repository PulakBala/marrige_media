<div class="row">
    <!-- Country Dropdown -->
    <div class="col-md-3 mb-3">
        <label class="form-label">Country</label>
        <select wire:model.lazy="selectedCountry" class="form-control">
            <option value="">-- Select Country --</option>
            @foreach($countries as $country)
                {{-- @dd($country) --}}
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
    </div>

    <!-- State Dropdown -->
    {{-- @dd($seletedCountry) --}}
    @if($selectedCountry && $states->isNotEmpty())
    <div class="col-md-3 mb-3">
        <label class="form-label">State</label>
        <select wire:model.lazy="selectedState" class="form-control">
            <option value="">-- Select State --</option>
            @foreach($states as $state)

                <option value="{{ $state->id }}">{{ $state->name }}</option>
            @endforeach
        </select>
    </div>
    @endif

    <!-- District Dropdown -->
    @if($selectedState && $districts->isNotEmpty())
    <div class="col-md-3 mb-3">
        <label class="form-label">District</label>
        <select wire:model.lazy="selectedDistrict" class="form-control">
            <option value="">-- Select District --</option>
            @foreach($districts as $district)
                <option value="{{ $district->id }}">{{ $district->name }}</option>
            @endforeach
        </select>
    </div>
    @endif

    <!-- City Dropdown -->
    @if($selectedDistrict && $cities->isNotEmpty())
    <div class="col-md-3 mb-3">
        <label class="form-label">City</label>
        <select wire:model.lazy="selectedCity" class="form-control">
            <option value="">-- Select City --</option>
            @foreach($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
    </div>
    @endif

</div>


