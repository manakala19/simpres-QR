@extends('layouts.app')

@section('content')
@include('partials.alerts')

<div class="row">
    <div class="col-md-7">
        <ul class="list-group">
            
            <a href="{{ route('presences.show') }}"
                class="list-group-item d-flex justify-content-between align-items-start py-3">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">hari libur nasional</div>
                    <p class="mb-0">karena sedang diadakan panjat pinang</p>
                </div>
                @include('partials.attendance-badges')
            </a>
            
        </ul>
    </div>
</div>
@endsection