<form wire:submit.prevent='store'>
    @csrf
    <div class="d-flex flex-column" style="gap: 48px; margin-top: 28px">
        <div class="input-petugas col-12 w-100 d-flex">
            <div class="form-group w-100">
              <label for="namakelas">Kelas</label>
              <input type="text" wire:model.lazy='namakelas' id="namakelas" class="form-control" placeholder="masukkan kelas ">
            </div>

            <div class="form-group" style="width: 100% ">
              <label for="jurusan">Kompetensi Keahlian</label>
              <input type="text" wire:model.lazy='jurusan' id="jurusan" class="form-control" placeholder="masukkan kompetensi keahlian">
            </div>
        </div>

        <div class="input-petugas col-12 w-100 h-100 d-flex">
            <div class="form-group w-100 h-100 d-flex justify-content-end align-items-end">
                <button class="buatpetugas text-neutral-10 text-m-medium">Simpan</button>
            </div>
        </div>
    </div>
</form>