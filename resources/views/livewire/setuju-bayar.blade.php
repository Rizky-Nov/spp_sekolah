<form wire:submit.prevent='store({{ $bulan->id }},{{ $id }})'>
    <div class="d-flex justify-content-center" style="gap: 24px;">
        <div class="">
            <button class="btn btn-success" data-bs-dismiss="modal">Bayar</button>
        </div>

        <div class="">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
        </div>
    </div>
</form>