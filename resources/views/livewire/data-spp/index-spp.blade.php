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

    <div class="col-12 d-flex flex-column">
        <div class="tabel col-10 mt-4">
            <table class="col-12">
                <thead class="head">
                    <tr>
                        <th class="text-neutral-90 text-l-medium fw-bold">Tahun</th>
                        <th class="text-neutral-90 text-l-medium fw-bold">Nominal</th>
                        <th style="width: 20px"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($spps as $spp)
                        <tr>
                            <td class="text-neutral-90 text-m-regular">{{ $spp->tahun }}</td>
                            <td class="text-neutral-90 text-m-regular">{{ $spp->nominal }}</td>
                            <td>
                                <div class="d-flex" style="gap: 12px; width: 180px">
                                    <div class="w-50">
                                        <a class="btn btn-warning" wire:click='getSpp({{ $spp->id }})' data-bs-toggle="modal" data-bs-target="#EditSpp">Edit</a>
                                    </div>
                                    
                                    <div class="w-50">
                                        <button class="btn btn-danger" wire:click='deletecek({{ $spp->id }})'>Hapus</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="col-11" style="margin-top: 24px">
            <span class="header-s text-neutral-90">Data SPP</span>
            
            <livewire:data-spp.create-spp />
            
        </div>
    </div>
</div>