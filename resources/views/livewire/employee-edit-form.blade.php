<div>
    <form wire:submit.prevent="saveEmployees" method="post" novalidate>
        @include('partials.alerts')
        

        <div class="mb-3">
            <div class="w-100">
                <div class="mb-3">
                    <x-form-label id="name"
                        label="Nama Siswa" />
                    <x-form-input id="name" name="name"
                        wire:model.defer="employees name" />
                    <x-form-error key="employees name" />
                </div>
                <div class="mb-3">
                    <x-form-label id="email" label='Nis Siswa' />
                    <x-form-input id="email" name="email" type="email"
                        wire:model.defer="employees email" placeholder="Email aktif" />
                    <x-form-error key="employees email" />
                </div>
                <div class="mb-3">
                    <x-form-label id="phone" label='Kelas' />
                    <x-form-input id="phone" name="phone"
                        wire:model.defer="employees phone" placeholder="Format: 08**" />
                    <x-form-error key="employees phone" />
                </div>
                <div class="mb-3">
                    <x-form-label id="password" label='Password hanya bisa diubah oleh petugas'
                        required="false" />
                    <x-form-input id="password" name="password" disabled
                        required="false" />
                </div>
                <div class="mb-3">
                    <x-form-label id="position_id"
                        label='Jabatan / Posisi' />
                    <select class="form-select" aria-label="Default select example" name="position_id"
                        wire:model.defer="employees position_id">
                        <option selected disabled>-- Pilih Role --</option>
                        <option value="">admin</option>
                    </select>
                    <x-form-error key="employees role_id" />
                </div>
                <div class="mb-3">
                    <x-form-label id="role_id" label='Role' />
                    <select class="form-select" aria-label="Default select example" name="role_id"
                        wire:model.defer="employees role_id">
                        <option selected disabled>-- Pilih Role --</option>
                        
                        <option value="">admin</option>
                        
                    </select>
                    <x-form-error key="employees role_id" />
                </div>
            </div>
        </div>
        <hr>
        @endforeach

        <div class="d-flex justify-content-between align-items-center mb-5">
            <button class="btn btn-primary">
                Simpan
            </button>
        </div>
    </form>
</div>