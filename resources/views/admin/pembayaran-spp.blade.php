    @section('header1', "Transaksi")
    @section('header', " / Pembayaran ")

<x-master master="Pembayaran SPP">
    
    <livewire:transaksi.index-spp-pembayaran />
    
    {{-- @include('admin.modal.modal-setuju-bayar') --}}
</x-master>