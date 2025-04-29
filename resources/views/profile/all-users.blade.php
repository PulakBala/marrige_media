@extends('layouts.app')
@section('title', 'All Users')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($basicInformation as $info)
        <div class="col-md-4 mb-4">
            <div class="px-3 py-2 shadow rounded-4 border-0" style="background: linear-gradient(to bottom right, rgba(255,255,255,0.9), rgba(230,245,255,0.9));">

                <!-- Avatar Section -->
                <div class="text-center">
                    @if($info->biodata_type == 'Male')
                        <img src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png" alt="Male Avatar" class="rounded-circle shadow" width="80" height="80">
                    @elseif($info->biodata_type == 'Female')
                        <img src="https://cdn-icons-png.flaticon.com/512/4140/4140047.png" alt="Female Avatar" class="rounded-circle shadow" width="80" height="80">
                    @else
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Avatar" class="rounded-circle shadow" width="80" height="80">
                    @endif
                </div>



                    <!-- Centered Table Wrapper -->

                        <table class=" table-borderless w-auto mb-0">

                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start"> ধরণ</td>
                                <td class="text-muted text-start">
                                    :
                                    @if($info->biodata_type == 'Female')
                                        পাত্রীর বায়োডাটা
                                    @elseif($info->biodata_type == 'Male')
                                        পাত্রের বায়োডাটা
                                    @else
                                        বায়োডাটা
                                    @endif
                                </td>
                            </tr
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">নাম</td>
                                <td class="text-muted text-start"> : {{ $info->full_name }}</td>
                            </tr>

                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">জন্ম বছর</td>
                                <td class="text-muted text-start"> : {{ $info->birth_year }}</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">উচ্চতা </td>
                                <td class="text-muted text-start"> : {{ $info->height }}</td>
                            </tr>

                            <tr>
                                <td class="fw-semibold text-dark pe-3 text-start">পেশা </td>
                                <td class="text-muted text-start"> : {{ $info->occupationInformation->description ?? 'N/A' }}</td>
                            </tr>
                        </table>


                    <!-- Button Section -->
                    <div class="text-center mt-3 mb-3">
                        <a href="{{ route('user.details', $info->user_id) }}" class="btn btn-outline-dark px-4 rounded-pill fw-semibold">Biodata Details</a>
                    </div>

            </div>
        </div>
        @endforeach

        <div class="d-flex justify-content-center mt-4">
            {{ $basicInformation->links() }}
        </div>
    </div>
</div>




@endsection
