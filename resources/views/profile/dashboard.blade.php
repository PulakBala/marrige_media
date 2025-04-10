@extends('layouts.app')

@section('content')
<div class="container min-vh-100 py-4">
    {{-- <h2 class="text-center mb-4">My Profile</h2> --}}

    <div class="row row-cols-3 g-4">
        <div class="col">
        <a href="{{route('profile.user-profile')}}" class="text-decoration-none">
            <div class="card h-100 text-white text-center responsive-card" >
                <div class="card-body d-flex flex-column justify-content-center align-items-center w-100">
                    <img src="{{asset('assets/uploads/profile.svg')}}" alt="icon" class="mb-3 w-100" style="max-width: 100px; height: auto;">
                    <p class="card-text fs-5">Profile</p>
                </div>
            </div>
        </a>
        </div>

        <div class="col">
        <a  href="{{route('profile.edit')}}" class="text-decoration-none">
            <div class="card h-100 text-white text-center responsive-card">
                <div class="card-body d-flex flex-column justify-content-center align-items-center w-100">
                    <img src="{{asset('assets/uploads/edit-bio.svg')}}" alt="icon" class="mb-3 w-100" style="max-width: 100px; height: auto;">
                    <p class="card-text fs-5">Edit </p>
                </div>
            </div>
        </a>
        </div>

        <div class="col">
            <div class="card h-100 text-white text-center responsive-card" >
                <div class="card-body d-flex flex-column justify-content-center align-items-center w-100">
                    <img src="{{asset('assets/uploads/search-bio.svg')}}" alt="icon" class="mb-3 w-100" style="max-width: 100px; height: auto;">
                    <p class="card-text fs-5">Search</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-white text-center responsive-card">
                <div class="card-body d-flex flex-column justify-content-center align-items-center w-100">
                    <img src="{{asset('assets/uploads/received-proposal.svg')}}" alt="icon" class="mb-3 w-100" style="max-width: 100px; height: auto;">
                    <p class="card-text fs-5">Received</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-white text-center responsive-card" >
                <div class="card-body d-flex flex-column justify-content-center align-items-center w-100">
                    <img src="{{asset('assets/uploads/sent-proposal.svg')}}" alt="icon" class="mb-3 w-100" style="max-width: 100px; height: auto;">
                    <p class="card-text fs-5">Send</p>
                </div>
            </div>
        </div>
        <div class="col">
            <a href="{{route('profile.contacts/viewed')}}">
            <div class="card h-100 text-white text-center responsive-card" >
                <div class="card-body d-flex flex-column justify-content-center align-items-center w-100">
                    <img src="{{asset('assets/uploads/accepted-proposal.svg')}}" alt="icon" class="mb-3 w-100" style="max-width: 100px; height: auto;">
                    <p class="card-text fs-5">Contact</p>
                </div>
            </div>
          </a>
        </div>

        <div class="col">
            <div class="card h-100 text-white text-center responsive-card" >
                <div class="card-body d-flex flex-column justify-content-center align-items-center w-100">
                    <img src="{{asset('assets/uploads/proposal-list.svg')}}" alt="icon" class="mb-3 w-100" style="max-width: 100px; height: auto;">
                    <p class="card-text fs-5">Proposal</p>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card h-100 text-white text-center responsive-card" >
                <div class="card-body d-flex flex-column justify-content-center align-items-center w-100">
                    <img src="{{asset('assets/uploads/message.svg')}}" alt="icon" class="mb-3 w-100" style="max-width: 100px; height: auto;">
                    <p class="card-text fs-5">Messages</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-white text-center responsive-card">
                <div class="card-body d-flex flex-column justify-content-center align-items-center w-100">
                    <img src="{{asset('assets/uploads/video.svg')}}" alt="icon" class="mb-3 w-100" style="max-width: 100px; height: auto;">
                    <p class="card-text fs-5">Video</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-white text-center responsive-card">
                <div class="card-body d-flex flex-column justify-content-center align-items-center w-100">
                    <img src="{{asset('assets/uploads/video.svg')}}" alt="icon" class="mb-3 w-100" style="max-width: 100px; height: auto;">
                    <p class="card-text fs-5">Video</p>
                </div>
            </div>
        </div>
        <div class="col">
            <a href="{{route('settings')}}">
            <div class="card h-100 text-white text-center responsive-card" >
                <div class="card-body d-flex flex-column justify-content-center align-items-center w-100">
                    <img src="{{asset('assets/uploads/password.svg')}}" alt="icon" class="mb-3 w-100" style="max-width: 100px; height: auto;">
                    <p class="card-text fs-5">Passwrod</p>
                </div>
            </div>
            </a>
        </div>

        <div class="col">
            <form action="{{ route('logout') }}" method="POST" style="display:inline; text-decoration: noen;">
                @csrf
                <div class="card h-100 text-white text-center responsive-card">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center w-100">
                        <img src="{{asset('assets/uploads/signout.svg')}}" alt="icon" class="mb-3 w-100" style="max-width: 100px; height: auto;">
                        <button type="submit" class="card-text fs-5 btn btn-link text-white" style="text-decoration: none;">Logout</button>
                    </div>
                </div>
            </form>
        </div>


    </div>
</div>
@endsection
