@extends('layouts.app')

@section('title', 'Settings')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 p-0 m-0">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-white text-center rounded-top-4">
                    <h4 class="mb-0"><i class="fas fa-lock me-2 text-primary"></i>Change Password</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('settings.updatePassword') }}" method="POST">
                        @csrf

                        {{-- Current Password --}}
                        <div class="mb-3">
                            <label for="current_password" class="form-label">Current Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="current_password" name="current_password" required>
                                <span class="input-group-text toggle-password" onclick="togglePassword('current_password')">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </div>

                        {{-- New Password --}}
                        <div class="mb-3">
                            <label for="new_password" class="form-label">New Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="new_password" name="new_password" required>
                                <span class="input-group-text toggle-password" onclick="togglePassword('new_password')">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </div>

                        {{-- Confirm New Password --}}
                        <div class="mb-4">
                            <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required>
                                <span class="input-group-text toggle-password" onclick="togglePassword('new_password_confirmation')">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-save me-1"></i> Update Password
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Password Toggle Script --}}
<script>
    function togglePassword(id) {
        const input = document.getElementById(id);
        const icon = input.nextElementSibling.querySelector('i');
        if (input.type === "password") {
            input.type = "text";
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            input.type = "password";
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>
@endsection
