@extends('layouts.app')

@section('title', 'ব্যবহারকারীর সংযোগ তালিকা')

@section('content')

    <div class="container">
        <h1>দেখা হয়েছে এমন যোগাযোগসমূহ</h1>

        @if($viewedContacts->count() > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>নাম</th>
                            <th>মোবাইল নম্বর</th>
                            <th>ইমেইল</th>
                            <th>সম্পর্কের ধরণ</th>
                            <th>দেখার সময়</th>
                            <th>প্রোফাইল</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($viewedContacts as $item)
                            <tr>
                                <td>{{ $item->contact->groom_name ?? 'অজানা' }}</td>
                                <td>{{ $item->contact->guardian_mobile ?? 'প্রযোজ্য নয়' }}</td>
                                <td>{{ $item->contact->guardian_email ?? 'প্রযোজ্য নয়' }}</td>
                                <td>{{ $item->contact->relationship_with_guardian ?? 'প্রযোজ্য নয়' }}</td>
                                <td>{{ $item->created_at->format('d M Y h:i A') }}</td>
                                <td>
                                    <a href="{{ route('user.details', ['id' => $item->contact->user_id]) }}" class="btn btn-primary">প্রোফাইল দেখুন</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="alert alert-info">আপনি এখনো কোন যোগাযোগ দেখেননি।</p>
        @endif
    </div>
@endsection
