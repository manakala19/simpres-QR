@extends('layouts.home')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm mb-2">
                <div class="card-header">
                    Daftar Absensi Hari Ini
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        
                        <a href=""
                            class="list-group-item d-flex justify-content-between align-items-start py-3">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">ghfghff</div>
                                <p class="mb-0">jdhdhdh</p>
                            </div>
                            @include('partials.attendance-badges')
                        </a>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    Informasi Siswa
                </div>
                <div class="card-body">
                    <ul class="ps-3">
                        <li class="mb-1">
                            <span class="fw-bold d-block">Nama : </span>
                            <span>hfhfhdjd</span>
                        </li>
                        <li class="mb-1">
                            <span class="fw-bold d-block">Email : </span>
                            <a href="">hfhdhdjd</a>
                        </li>
                        <li class="mb-1">
                            <span class="fw-bold d-block">No. Telp : </span>
                            <a href="">65434567</a>
                        </li>
                        <li class="mb-1">
                            <span class="fw-bold d-block">Bergabung Pada : </span>
                            <span>2012</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection