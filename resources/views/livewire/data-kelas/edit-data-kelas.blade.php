<form wire:submit.prevent='update'>
    @csrf
    <div class="d-flex flex-column" style="gap: 48px; margin-top: 28px">
        <div class="input col-12 w-100 d-flex">
            <div class="form-group w-100">
              <label for="namakelas">Kelas</label>
              <input type="text" wire:model.lazy='namakelas' id="namakelas" class="form-control">
            </div>

            <div class="form-group" style="width: 100% ">
              <label for="KK">Kompetensi Keahlian</label>
              <input type="text" wire:model.lazy='jurusan' id="KK" class="form-control">
            </div>
        </div>

        <div class="input col-12 w-100 h-100 d-flex">
            <div class="form-group w-100 h-100 d-flex justify-content-end align-items-end">
                <button class="buatsiswa text-neutral-10 text-m-medium" data-bs-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>
</form>