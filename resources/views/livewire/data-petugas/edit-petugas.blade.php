<form wire:submit.prevent='update'>
    @csrf
    <div class="d-flex flex-column" style="gap: 48px; margin-top: 28px">
        <div class="input-petugas col-12 w-100 d-flex">
            <div class="form-group w-100">
              <label for="namapetugas">Nama Lengkap Petugas</label>
              <input type="text" wire:model.lazy='namapetugas' id="namapetugas" class="form-control" placeholder="masukkan nama lengkap petugas">
            </div>
        </div>

        <div class="input-petugas col-12 w-100 d-flex">
            <div class="form-group w-100">
              <label for="username">Username</label>
              <input type="text" wire:model.lazy='username' id="username" class="form-control" placeholder="masukkan username petugas">
            </div>

            <div class="form-group" style="width: 100% ">
              <label for="pw">Password</label>
              <input type="text" wire:model.lazy='password' id="pw" class="form-control" placeholder="masukkan password petugas">
            </div>
        </div>

        <div class="input-petugas col-12 w-100 h-100 d-flex">
            <div class="form-group" style="width: 520px">
              <label for="level">Level</label>
              <input type="text"  id="level" class="form-control" placeholder="masukkan level petugas">
            </div>

            <div class="form-group w-100 h-100 d-flex justify-content-end align-items-end">
                <button class="buatpetugas text-neutral-10 text-m-medium">Simpan</button>
            </div>
        </div>
    </div>
</form>