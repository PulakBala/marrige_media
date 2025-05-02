@php
    \Log::info('Profile cards view rendering', [
        'data_count' => count($basicInformation ?? []),
        'first_item' => $basicInformation->first() ?? null
    ]);
@endphp

@foreach ($basicInformation as $info)
    <div class="col-md-4 mb-4">
        <div class="px-3 py-2 shadow rounded-4 border-0" style="background: linear-gradient(to bottom right, rgba(255,255,255,0.9), rgba(230,245,255,0.9));">
            <div class="text-center mt-3">
                @if($info->biodata_type == 'Male')
                    <img src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png" alt="পুরুষ ছবি" class="rounded-circle shadow" width="80" height="80">
                @elseif($info->biodata_type == 'Female')
                    <img src="https://cdn-icons-png.flaticon.com/512/4140/4140047.png" alt="মহিলা ছবি" class="rounded-circle shadow" width="80" height="80">
                @endif
            </div>
            <div class="card-body p-0 mt-2">
                <table class="table-borderless w-auto mb-0">
                    <tr>
                        <td class="fw-semibold text-dark pe-3 text-start">ধরণ</td>
                        <td class="text-muted text-start"> : {{ $info->biodata_type == 'Female' ? 'পাত্রীর বায়োডাটা' : 'পাত্রের বায়োডাটা' }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold text-dark pe-3 text-start">নাম</td>
                        <td class="text-muted text-start"> : {{ $info->full_name }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold text-dark pe-3 text-start">বৈবাহিক অবস্থা</td>
                        <td class="text-muted text-start"> : {{ $info->marital_status }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold text-dark pe-3 text-start">জাতীয়তা</td>
                        <td class="text-muted text-start"> : {{ $info->nationality }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold text-dark pe-3 text-start">জন্ম বছর</td>
                        <td class="text-muted text-start"> : {{ $info->birth_year }}</td>
                    </tr>
                    <tr>
                        <td class="fw-semibold text-dark pe-3 text-start">উচ্চতা</td>
                        <td class="text-muted text-start"> : {{ $info->height }}</td>
                    </tr>
                </table>
                <div class="text-center mt-3 mb-3">
                    <button type="button" class="btn btn-outline-dark px-4 rounded-pill fw-semibold" data-bs-toggle="modal" data-bs-target="#loginModal">
                        বায়োডাটা বিস্তারিত
                    </button>
                </div>
            </div>
        </div>
    </div>
@endforeach