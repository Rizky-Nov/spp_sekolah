<div class="modal-body">
    <div class="col-12 text-center">
        @if ($siswa)
            <h2>Konfirmasi Pembayaran</h2>
            <p>Konfirmasi bahwa Siswa Dengan Nama {{ $siswa->nama }} Telah Melakukan Pembayaran ?</p>
        @endif
        <button class="button button-primary" wire:click="store({{ $bulan_id }},{{ $pembayaran_id }})" data-bs-dismiss="modal">Konfirmasi</button>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('konfirmPembayaran', function () {
            $('#konfirmPembayaran').modal('show');
            console.log("asdasdasd");
        })
    </script>
@endpush