    @section('header1', "Data Master ")
    @section('header', " / Data Siswa")

<x-master master="Data Siswa">

    <livewire:data-siswa.index-data-siswa />

    @include('admin.modal.modal-edit-siswa')
</x-master>