    @section('header1', "Data Master ")
    @section('header', " / Data Petugas")

<x-master master="Data Petugas">

    <livewire:data-petugas.index-data-petugas />

    @include('admin.modal.modal-edit-petugas')
</x-master>