    @section('header1', "Transaksi")
    @section('header', " / Pembayaran ")

<x-master master="Pembayaran SPP">
    
    <livewire:transaksi.index-spp-pembayaran />
    
    {{-- @include('admin.modal.modal-setuju-bayar') --}}
    <x-modal id="konfirmPembayaran">
        <livewire:modal-create-pembayaran />
    </x-modal>
</x-master>