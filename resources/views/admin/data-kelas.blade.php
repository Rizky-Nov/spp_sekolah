    @section('header1', "Data Master ")
    @section('header', " / Data Kelas")

<x-master master="Data Kelas">
    @include('admin.modal.modal-edit-kelas')
    
    <livewire:data-kelas.index-data-kelas />

</x-master>