@extends('layouts.home')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-6 mb-3 mb-md-0">
            <div class="mb-2">
                @include('partials.attendance-badges')
            </div>
            @include('partials.alerts')

            <h1 class="fs-2">hddhbfh</h1>
            <p class="text-muted">dhdhdbhdh</p>

            <div class="mb-4">
                <span class="badge text-bg-light border shadow-sm">Masuk : djjnjn</span>
                <span class="badge text-bg-light border shadow-sm">Pulang : terserah mau tidak masuk juga bebas</span>
            </div>

        </div>
        <div class="col-md-6">
            <h5 class="mb-3">Histori 30 Hari Terakhir</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jam Masuk</th>
                            <th scope="col">Jam Pulang</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">hjffjfjh</th>
                            {{-- not presence / tidak hadir --}}
                            <td>{{ $date }}</td>
                            <td colspan="3">
                                
                                <div class="badge text-bg-info">Belum Hadir</div>
                                
                                <div class="badge text-bg-danger">Tidak Hadir</div>
                                
                            </td>
                            
                            <td>hddhjfbfh</td>
                            <td>jdjddhjddj</td>
                            <td>
                                <span class="badge text-bg-danger">Belum Absensi Pulang</span>
                            </td>
                            <td>
                                
                                <div class="badge text-bg-warning">Izin</div>
                                
                                <div class="badge text-bg-success">Hadir</div>
                            </td>
                            
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection