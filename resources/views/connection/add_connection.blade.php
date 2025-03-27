@extends('layouts.app')
@section('title', 'Create Package')

@section('content')
<div class="container mt-4 p-5 shadow">
    <h2 class="mb-4">{{ isset($package) ? 'EDIT PACKAGE' : 'CREATE PACKAGE' }}</h2>
    <form action="{{ isset($package) ? route('package.update', $package->id) : route('package.store') }}" method="POST">
        @csrf
        @if(isset($package))
            @method('PUT')
        @endif
        <div class="row ">
            <!-- Left Side -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Package Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ isset($package) ? $package->name : '' }}" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ isset($package) ? $package->price : '' }}" required>
                </div>
                <div class="mb-3">
                    <label for="connections" class="form-label">Connections</label>
                    <input type="number" class="form-control" id="connections" name="connections" value="{{ isset($package) ? $package->connections : '' }}" required>
                </div>
                <div class="mb-3">
                    <label for="offer_details" class="form-label">Offer Details</label>
                    <textarea class="form-control" id="offer_details" name="offer_details">{{ isset($package) ? $package->offer_details : '' }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="discount" class="form-label">Discount</label>
                    <input type="text" class="form-control" id="discount" name="discount" value="{{ isset($package) ? $package->discount : '' }}">
                </div>
                <div class="mb-3">
                    <label for="months" class="form-label">Subscription Duration (Months)</label>
                    <input type="number" class="form-control" id="months" name="months" value="{{ isset($package) ? $package->months : '' }}">
                </div>
            </div>

            <!-- Right Side -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="feature_1" class="form-label">Feature 1</label>
                    <textarea class="form-control" id="feature_1" name="feature_1">{{ isset($package) ? $package->feature_1 : '' }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="feature_2" class="form-label">Feature 2</label>
                    <textarea class="form-control" id="feature_2" name="feature_2">{{ isset($package) ? $package->feature_2 : '' }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="feature_3" class="form-label">Feature 3</label>
                    <textarea class="form-control" id="feature_3" name="feature_3">{{ isset($package) ? $package->feature_3 : '' }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="feature_4" class="form-label">Feature 4</label>
                    <textarea class="form-control" id="feature_4" name="feature_4">{{ isset($package) ? $package->feature_4 : '' }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="notification_message" class="form-label">Notification Message</label>
                    <textarea class="form-control" id="notification_message" name="notification_message">{{ isset($package) ? $package->notification_message : '' }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="send_sms" class="form-label">Send SMS</label>
                    <select class="form-control" id="send_sms" name="send_sms">
                        <option value="1" {{ isset($package) && $package->send_sms == 1 ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ isset($package) && $package->send_sms == 0 ? 'selected' : '' }}>No</option>
                    </select>
                </div>
                <!-- Submit Button at Bottom Right -->
                <div class="text-end">
                    <button type="submit" class="btn btn-outline-dark px-4 rounded-pill fw-semibold text-uppercase">{{ isset($package) ? 'Update Package' : 'Create Package' }}</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
