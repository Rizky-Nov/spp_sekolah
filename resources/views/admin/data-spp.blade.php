<x-master master="Data SPP">
    <div class="col-12 d-flex flex-column">
        <div class="col-12 d-flex justify-content-end">
            <form action="#">
                @csrf
                <div class="search form-group">
                  {{-- <label for=""></label> --}}
                  <input type="text" name="" id="" class="form-control" placeholder="Search . . . .">
                </div>
            </form>
        </div>

        <div class="col-12">
            <table class="tabel-siswa flex-column">
                <thead class="tabel-head">
                        <tr class="w-100">
                            <th>Tahun</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>

                            </td>
                        </tr>
                    </tbody>
                </table>
            
            <div class="col-11" style="margin-top: 24px">
                <span class="header-s text-neutral-90">Data SPP</span>
                
                <form action="">
                    <div class="d-flex flex-column" style="gap: 48px; margin-top: 28px">
                        <div class="input-siswa col-12 w-100 d-flex">
                            <div class="form-group w-100">
                              <label for="tahun">Tahun</label>
                              <input type="text" name="" id="tahun" class="form-control" placeholder="tahun spp">
                            </div>
    
                            <div class="form-group" style="width: 520px">
                              <label for="nominal">Nominal</label>
                              <input type="text" name="" id="nominal" class="form-control" placeholder="nominal spp">
                            </div>
                        </div>

                        <div class="w-100 d-flex justify-content-end align-items-end h-100">
                            <button type="submit" class="buatsiswa text-neutral-10 text-m-medium">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>