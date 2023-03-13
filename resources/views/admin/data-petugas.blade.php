<x-master master="Data Petugas">
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
            
            <livewire:data-petugas.index-data-petugas />
            
            <div class="col-11" style="margin-top: 24px">
                <span class="header-s text-neutral-90">Data Petugas</span>
                
                <livewire:data-petugas.create-data-petugas />
                
            </div>
        </div>
    </div>

    @include('admin.modal.modal-edit-petugas')
</x-master>