@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4 fw-bold" style="color: #2ebb55;">উপেক্ষিত ব্যবহারকারীদের তালিকা</h3>

    <div class="table-responsive shadow rounded">
        <table class="table table-striped table-bordered align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>ক্রমিক</th>
                    <th>নাম</th>
                    <th>ইমেইল</th>
                    <th>মোবাইল নম্বর</th>
                    <th>প্রোফাইল দেখুন</th>
                </tr>
            </thead>
            <tbody>
                @forelse($ignored as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->user->name ?? 'উল্লেখ নেই' }}</td>
                        <td>{{ $item->user->email ?? 'উল্লেখ নেই' }}</td>
                        <td>
                            @if(!empty($item->user->mobile_number))
                                {{ $item->user->mobile_number }}
                            @else
                                <span class="text-muted">যোগাযোগের তথ্য নেই</span>
                            @endif
                        </td>
                        <td>
                            @if($item->user)
                                <a href="{{ route('user.details', ['id' => $item->user->id]) }}" class="btn btn-sm btn-outline-primary">
                                    বিস্তারিত দেখুন
                                </a>
                            @else
                                <span class="text-muted">তথ্য নেই</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-muted">কোনো ব্যবহারকারী উপেক্ষিত হিসেবে তালিকাভুক্ত নয়।</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
