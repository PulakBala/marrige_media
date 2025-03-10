     <!-- Permanent Address -->
     <div class="mb-4">
                                <h5 class="border-bottom pb-2">Permanent Address</h5>
                                {{-- @livewire('location-dropdown') --}}
                                <livewire:location-dropdown />
                            </div>

                            <!-- Present Address -->
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
                                    <h5 class="mb-0">Present Address</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" wire:model="addressInfo.same_as_permanent" id="sameAsPermanent">
                                        <label class="form-check-label" for="sameAsPermanent">
                                            Same as Permanent Address
                                        </label>
                                    </div>
                                </div>
                                <livewire:location-dropdown />
                            </div>
