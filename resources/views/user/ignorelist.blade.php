@extends('layouts.app')

@section('content')
<h3 class="mb-3">Ignored Users</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>View profile</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ignored as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->user->name ?? 'N/A' }}</td>
                <td>{{ $item->user->email ?? 'N/A' }}</td>
                <td>
                    @if(!empty($item->user->mobile_number))
                        {{ $item->user->mobile_number }}
                    @else
                        <span class="text-muted">Contact information not available</span>
                    @endif
                </td>
                <td>
                    @if($item->user)
                    <a href="{{ route('user.details', ['id' => $item->user->id]) }}" class="btn btn-primary">View Profile</a>
                @else
                    <span class="text-muted">No Contact Info</span>
                @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
