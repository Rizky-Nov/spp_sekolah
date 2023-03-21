<form wire:submit.prevent='storeSiswa'>
    @csrf
    <div class="d-flex flex-column" style="gap: 40px; margin-top: 28px">
        <div class="input col-12 w-100 d-flex">
            <div class="form-group w-100">
                <label for="nisn">NISN</label>
                <input type="text" wire:model.lazy='nisn' id="nisn" class="form-control" placeholder="masukkan nisn siswa">
                @error('nisn')
                    <small class="form-text text-m-regular text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group w-100">
                <label for="nis">NIS</label>
                <input type="text" wire:model.lazy='nis' id="nis" class="form-control" placeholder="masukkan nis siswa">
                @error('nis')
                    <small class="form-text text-m-regular text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="input col-12 w-100 d-flex">
            <div class="form-group w-100">
                <label for="nama">Nama Lengkap</label>
                <input type="text" wire:model.lazy='namasiswa' id="nama" class="form-control" placeholder="masukkan nama lengkap siswa">
                @error('namasiswa')
                    <small class="form-text text-s-regular text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group" style="width: 520px">
                <label for="no">No Telephone</label>
                <input type="text" wire:model.lazy='notelp' id="no" class="form-control" placeholder="0812 2131 8221">
                @error('notelp')
                    <small class="form-text text-m-regular text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="input col-12 w-100 d-flex">
            <div class="form-group" style="width: 720px">
              <label for="pw">Password</label>
              <input type="text"  id="pw" wire:model.lazy='password' class="form-control" placeholder="masukkan password siswa">
              @error('password')
                    <small class="form-text text-m-regular text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group w-100">
                <label for="alamat">Alamat</label>
                <input type="text" wire:model.lazy='alamat' class="form-control" placeholder="masukkan alamat siswa lengkap">
                @error('alamat')
                    <small class="form-text text-m-regular text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        
        <livewire:pilih-kelas />

        <livewire:pilih-spp />

        <div class="col-12 d-flex justify-content-end align-items-center">
            <button class="buatsiswa text-neutral-10 text-m-medium">Simpan</button>
        </div>
    </div>
</form>