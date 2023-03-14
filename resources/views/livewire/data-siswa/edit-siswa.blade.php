<form wire:submit.prevent='update'>
    @csrf
    <div class="d-flex flex-column" style="gap: 48px; margin-top: 28px">
        <div class="input-siswa col-12 w-100 d-flex">
            <div class="form-group w-100">
                <label for="nisn">NISN</label>
                <input type="text" wire:model.lazy='nisn' id="nisn" class="form-control" placeholder="masukkan nisn siswa">
            </div>

            <div class="form-group w-100">
                <label for="nis">NIS</label>
                <input type="text" wire:model.lazy='nis' id="nis" class="form-control" placeholder="masukkan nis siswa">
            </div>
        </div>

        <div class="input-siswa col-12 w-100 d-flex">
            <div class="form-group w-100">
                <label for="nama">Nama Lengkap</label>
                <input type="text" wire:model.lazy='namasiswa' id="nama" class="form-control" placeholder="masukkan nama lengkap siswa">
            </div>

            <div class="form-group" style="width: 520px">
                <label for="no">No Telephone</label>
                <input type="text" wire:model.lazy='notelp' id="no" class="form-control" placeholder="0812 2131 8221">
            </div>
        </div>

        
        <div class="form-group w-100">
            <label for="alamat">Alamat</label>
            <textarea wire:model.lazy='alamat' class="w-100 p-2" id="alamat" rows="4" placeholder="masukkan alamat siswa lengkap"></textarea>
        </div>

        <div class="input-siswa col-12 w-100 d-flex">
            <div class="form-group w-100">
                <label for="keahlian">Kepetensi Keahlian</label>
                <input type="text" wire:model.lazy='jurusan' id="keahlian" class="form-control" placeholder="masukkan jurusan siswa">
            </div>
        </div>

        <div class="form-group">
          <label for="spp">Tahun Spp</label>
          <input type="text" wire:model.lazy='tahun_spp' id="spp" class="form-control" placeholder="tahun spp">
        </div>

        <div class="col-12 d-flex justify-content-end align-items-center">
            <button class="buatsiswa text-neutral-10 text-m-medium">Simpan</button>
        </div>
    </div>
</form>