<x-master master="Data Kelas">
    <div class="col-12 d-flex flex-column">
        <div class="col-12 d-flex justify-content-end">
            <div class="search form-group">
              {{-- <label for=""></label> --}}
              <input type="text" name="" id="" class="form-control" placeholder="Search . . . .">
            </div>
        </div>

        <div class="col-12">
            
            <livewire:data-kelas.index-data-kelas />
            
            <div class="col-11" style="margin-top: 24px">
                <span class="header-s text-neutral-90">Data Kelas</span>
                
                <livewire:data-kelas.create-data-kelas />
                
            </div>
        </div>
    </div>

    @include('admin.modal.modal-edit-kelas')
</x-master>