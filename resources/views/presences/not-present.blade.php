@extends('layouts.app')

@section('buttons')
<div class="btn-toolbar mb-2 mb-md-0">
    <div>
        <a href="{{ route('presences.show') }}" class="btn btn-sm btn-light">
            <span data-feather="arrow-left-circle" class="align-text-bottom"></span>
            Kembali
        </a>
    </div>
</div>
@endsection

@section('content')
@include('partials.alerts')

<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 mb-3 mb-md-0">
                <h5 class="card-title">hari libur agama</h5>
                <h6 class="card-subtitle mb-2 text-muted">karena sedang sasalaman</h6>
                <div class="d-flex align-items-center gap-2">
                    <span href="" class="badge text-bg-warning">Tidak Hadir</span>
                </div>
            </div>
            <div class="col-md-6">
                <form action="" method="get">
                    <div class="mb-3">
                        <label for="filterDate" class="form-label fw-bold">Tampilkan Berdasarkan Tanggal</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" id="filterDate" name="display-by-date"
                                value="{{ request('display-by-date') }}">
                            <button class="btn btn-primary" type="submit" id="button-addon1">Tampilkan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<small class="text-danger fw-bold">Tidak ada data yang bisa ditampilkan, <a href="">Tampilkan data berdasarkan hari
        ini.</a></small>



<div>
    
    <div class="p-3 rounded bg-light border my-3 d-flex align-items-center justify-content-between">
        <div>Hari : <span class="fw-bold">
                kamis
            </span>
        </div>
        <div>Tanggal : <span class="fw-bold">30</span></div>
        <div>Jumlah : <span class="fw-bold">2</span></div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Email</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Posisi</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <th scope="row">3</th>
                    <td>jajang</td>
                    <td>
                        <a href="mailto:">email jajang</a>
                        <span class="fw-bold"> / </span>
                        <a href="tel:">987656543</a>
                    </td>
                    <td>guru</td>
                    <td>
                        <form action="{{ route('presences.present')}}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="3">
                            <input type="hidden" name="presence_date" value="2">
                            <button class="badge text-bg-primary border-0" type="submit">Hadir</button>
                        </form>
                    </td>
                </tr>
        
            </tbody>
        </table>
    </div>

</div>

@endsection