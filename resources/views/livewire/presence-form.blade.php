<div>

    
    <div class="alert alert-success">
        <small class="fw-bold">Hari ini adalah hari libur.</small>
    </div>
    

    {{-- jika tidak menggunakan qrcode (button) dan karyawan saat ini tidak menekan tombol izin --}}
    
    {{-- jika belum absen dan absen masuk sudah dimulai --}}
    
    <button class="btn btn-primary px-3 py-2 btn-sm fw-bold d-block w-100 mb-2" wire:click="sendEnterPresence"
        wire:loading.attr="disabled" wire:target="sendEnterPresence">Masuk</button>
    <a href="{{ route('home.permission') }}"
        class="btn btn-info px-3 py-2 btn-sm fw-bold d-block w-100">Izin</a>
    

    
    <div class="alert alert-success">
        <small class="d-block fw-bold text-success">Anda sudah berhasil mengirim absensi masuk.</small>
    </div>
    

    {{-- jika absen pulang sudah dimulai, dan karyawan sudah absen masuk dan belum absen pulang --}}
    
    <button class="btn btn-primary px-3 py-2 btn-sm fw-bold d-block w-100" wire:click="sendOutPresence"
        wire:loading.attr="disabled" wire:target="sendOutPresence">Pulang</button>
    

    {{-- sudah absen masuk dan absen pulang --}}
    
    <div class="alert alert-success">
        <small class="d-block fw-bold text-success">Anda sudah melakukan absen masuk dan absen pulang.</small>
    </div>
   

    {{-- jika sudah absen masuk dan belum saatnya absen pulang --}}
    
    <div class="alert alert-danger">
        <small class="fw-bold">Belum saatnya melakukan absensi pulang.</small>
    </div>
    

    
    <div class="alert alert-info">
        <small class="fw-bold">Permintaan izin sedang diproses (atau masih belum di terima).</small>
    </div>
    

    
    <div class="alert alert-success">
        <small class="fw-bold">Permintaan izin sudah diterima.</small>
    </div>
    

</div>