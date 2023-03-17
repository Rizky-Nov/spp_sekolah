<form wire:submit.prevent='store'>
  @csrf
    <div class="d-flex flex-column" style="gap: 48px; margin-top: 28px">
        <div class="input col-12 w-100 d-flex">
            <div class="form-group w-100">
              <label for="tahun">Tahun</label>
              <input type="text" wire:model.lazy='tahun_spp' id="tahun" class="form-control" placeholder="tahun spp">
              @error('tahun_spp')
                  <small class="form-text text-m-regular text-danger">{{ $message }}</small>
              @enderror
            </div>
            
            <div class="form-group" style="width: 520px">
                <label for="nominal">Nominal</label>
                <input type="text" wire:model.lazy='nominal_spp' id="nominal" class="form-control" placeholder="nominal spp">
                @error('nominal_spp')
                    <small class="form-text text-m-regular text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="w-100 d-flex justify-content-end align-items-end h-100">
            <button class="buatsiswa text-neutral-10 text-m-medium">Simpan</button>
        </div>
    </div>
</form>