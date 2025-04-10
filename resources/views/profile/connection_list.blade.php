@extends('layouts.app')

@section('title', 'User Connection List')

@section('content')

    <div class="container">
        <h1>Viewed Contacts</h1>

        @if($viewedContacts->count() > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Relationship Status</th>
                            <th>Viewed On</th>
                            <th>Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($viewedContacts as $item)
                            <tr>
                                <td>{{ $item->contact->groom_name ?? 'Unknown' }}</td>
                                <td>{{ $item->contact->guardian_mobile ?? 'N/A' }}</td>
                                <td>{{ $item->contact->guardian_email ?? 'N/A' }}</td>
                                <td>{{ $item->contact->relationship_with_guardian ?? 'N/A' }}</td>
                                <td>{{ $item->created_at->format('d M Y h:i A') }}</td>
                                <td>
                                    <a href="{{ route('user.details', ['id' => $item->contact->user_id]) }}" class="btn btn-primary">View Profile</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="alert alert-info">You haven't viewed any contacts yet.</p>
        @endif
    </div>
@endsection