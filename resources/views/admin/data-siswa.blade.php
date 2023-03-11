<x-master master="Data Siswa">
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
            <table class="tabel-siswa">
                <thead class="tabel-head">
                        <tr class="w-100">
                            <th>NISN</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>No Telephone</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>

                            </td>
                        </tr>
                    </tbody>
                </table>

            {{-- <div class="col-12">
            </div> --}}
            
            
            <div class="col-11" style="margin-top: 24px">
                <span class="header-s text-neutral-90">Data Siswa</span>
                
                <form action="">
                    <div class="d-flex flex-column" style="gap: 48px; margin-top: 28px">
                        <div class="input-siswa col-12 w-100 d-flex">
                            <div class="form-group w-100">
                              <label for="nisn">NISN</label>
                              <input type="text" name="" id="nisn" class="form-control" placeholder="masukkan nisn siswa">
                            </div>
    
                            <div class="form-group w-100">
                              <label for="nis">NIS</label>
                              <input type="text" name="" id="nis" class="form-control" placeholder="masukkan nis siswa">
                            </div>
                        </div>
    
                        <div class="input-siswa col-12 w-100 d-flex">
                            <div class="form-group w-100">
                              <label for="nama">Nama Lengkap</label>
                              <input type="text" name="" id="nama" class="form-control" placeholder="masukkan nama lengkap siswa">
                            </div>
    
                            <div class="form-group" style="width: 520px">
                              <label for="no">No Telephone</label>
                              <input type="text" name="" id="no" class="form-control" placeholder="0812 2131 8221">
                            </div>
                        </div>
    
                        <div class="input-siswa col-12 w-100 d-flex">
                            <div class="form-group" style="width: 520px">
                              <label for="kelas">Kelas</label>
                              <input type="text" name="" id="kelas" class="form-control" placeholder="masukkan kelas siswa">
                            </div>
    
                            <div class="form-group w-100">
                              <label for="keahlian">Kepetensi Keahlian</label>
                              <input type="text" name="" id="keahlian" class="form-control" placeholder="masukkan jurusan siswa">
                            </div>
                        </div>
    
                        <div class="form-group w-100">
                          <label for="alamat">Alamat</label>
                          <textarea name="" class="w-100 p-2" id="alamat" rows="4" placeholder="masukkan alamat siswa lengkap"></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>