<div>
    <form wire:submit.prevent="saveEmployees" method="post" novalidate>
        @include('partials.alerts')
        <div class="mb-3">
            <div class="w-100">
                <div class="mb-3">
                    <x-form-label id="name" label='Nama Siswa' />
                    <x-form-input id="name" name="name" wire:model.defer="employees..name" />
                    <x-form-error key="employees..name" />
                </div>
                <div class="mb-3">
                    <x-form-label id="email" label='Nis Siswa' />
                    <x-form-input id="email" name="email" type="email"
                        wire:model.defer="employees..email" placeholder="Email aktif" />
                    <x-form-error key="employees..email" />
                </div>
                <div class="mb-3">
                    <x-form-label id="phone" label='Kelas' />
                    <x-form-input id="phone" name="phone" wire:model.defer="employees..phone"
                        placeholder="Format: 08**" />
                    <x-form-error key="employees..phone" />
                </div>
                <div class="mb-3">
                    <x-form-label id="password"
                        label='Password Siswa (default: "123" jika tidak diisi)' required="false" />
                    <x-form-input id="password" name="password"
                        wire:model.defer="employees..password" required="false" />
                    <x-form-error key=" employees..password" />
                </div>
                <div class="mb-3">
                    <x-form-label id="position_id" label='Jabatan / Posisi ' />
                    <select class="form-select" aria-label="Default select example" name="position_id"
                        wire:model.defer="employees..position_id">
                        <option selected disabled>-- Pilih Posisi --</option>
                        <option value="">siswa</option>
                    </select>
                    <x-form-error key="employees..position_id" />
                </div>
                <div class="mb-3">
                    <x-form-label id="role_id" label='Role' />
                    <select class="form-select" aria-label="Default select example" name="role_id"
                        wire:model.defer="employees..role_id">
                        <option selected disabled>-- Pilih Role --</option>
                        <option value="">admin</option>
                        
                    </select>
                    <x-form-error key="employees..role_id" />
                </div>
            </div>
            
            <button class="btn btn-sm btn-danger mt-2" wire:click="removeEmployeeInput()"
                wire:target="removeEmployeeInput()" type="button" wire:loading.attr="disabled">Hapus</button>
            
        </div>
        <hr>
        

        <div class="d-flex justify-content-between align-items-center mb-5">
            <button class="btn btn-primary">
                Simpan
            </button>
            <button class="btn btn-light" type="button" wire:click="addEmployeeInput" wire:loading.attr="disabled">
                Tambah Input
            </button>
        </div>
    </form>
</div>