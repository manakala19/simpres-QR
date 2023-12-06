<div>
    <form wire:submit.prevent="saveHolidays" method="post" novalidate>
        @include('partials.alerts')
        
        <div class="mb-3">
            <div class="w-100">
                <div class="mb-3">
                    <x-form-label id="title" label='Nama/Judul Hari Libur ' />
                    <x-form-input id="title" name="title" wire:model.defer="holidays..title" />
                    <x-form-error key="holidays..title" />
                </div>
                <div class="mb-3">
                    <x-form-label id="description" label='Keterangan ' />
                    <textarea id="description" name="description" class="form-control"
                        wire:model.defer="holidays..description"></textarea>
                    <x-form-error key="holidays..description" />
                </div>
                <div class="mb-3">
                    <x-form-label id="holiday_date" label='Tanggal Hari Libur ' />
                    <x-form-input type="date" id="holiday_date" name="holiday_date" class="form-control"
                        wire:model.defer="holidays..holiday_date" />
                    <small class="text-muted d-block mt-2">Perhatikan format tanggal d (Hari), m (Bulan) dan y
                        (Tahun)</small>
                    <x-form-error key="holidays..holiday_date" />
                </div>
            </div>
        </div>
        <hr>
        

        <div class="d-flex justify-content-between align-items-center mb-5">
            <button class="btn btn-primary">
                Simpan
            </button>
        </div>
    </form>
</div>