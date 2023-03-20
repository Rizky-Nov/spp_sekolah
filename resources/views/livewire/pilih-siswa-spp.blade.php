<div class="col-12 d-flex" style="gap: 24px">
    <div class="col-10">
        <div class="pilih-siswa" style="height: 120px">
            <div class="form-group">
                <label for="pilih">Pilih Data Siswa</label>
                <input type="text" id="pilih" class="form-control" placeholder="pilih siswa"
                dir="ltr" spellcheck=false autocorrect="off" autocomplete="off" autocapitalize="off" maxlength="2048" tabindex="1">
            </div>
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            <label for="tahunspp"></label>
            <input type="number" id="tahunspp" class="form-control" wire:model='tahun_spp' placeholder="tahun">
        </div>
    </div>
    
    @foreach ($datasiswas as $siswa)
        <input type="hidden" class="pilih-siswa input-form" value="{{ $siswa->id . ' - ' .$siswa->nisn .' -- '. $siswa->nis .' -- '. $siswa->nama .' -- '. $siswa->kelas->nama_kelas .' '. '(' . ' ' . $siswa->kelas->kompetensi_keahlian . ' ' .')' }}">
    @endforeach
</div>

@push('scripts')
    <script>
        var dataList = document.querySelectorAll('input.pilih-siswa');
        var arrayData = [];
        dataList.forEach((item) => {
            arrayData.push(item.value);
        });

        let ketik = 2;
        console.log(arrayData);
        const autoCompleteJS = new autoComplete({
            selector: "#pilih",
            placeHolder: "Search Data Siswa",
            data: {
                src: arrayData,
                cache: true,
            },
            resultsList: {
                element: (list, data) => {
                    if (!data.results.length) {
                        // Create "No Results" message element
                        const message = document.createElement("div");
                        // Add class to the created element
                        message.setAttribute("class", "no_result");
                        // Add message text content
                        message.innerHTML = `<span>Found No Results for "${data.query}"</span>`;
                        // Append message element to the results list
                        list.prepend(message);
                        // if (ketik == 3) {
                        //     Livewire.emit('toastify', ['warning', 'Barang Tidak Ditemukan', 2500]);
                        //     ketik = 0;
                        // }
                        ketik++;
                    }
                },
                noResults: true,
                maxResults: 15,
                tabSelect: true,
            },
            resultItem: {
                highlight: true
            },
            events: {
                input: {
                    selection: (event) => {
                        const selection = event.detail.selection.value;
                        const params = selection;
                        Livewire.emit('setSiswa', params);
                        autoCompleteJS.input.value = selection;
                    }
                }
            }
         });
        // Livewire.on('setSiswa', function (params) {
        //     setTimeout(()=>{                
        //         Livewire.emit('swal', ['success', "Percobaan", 2000])
        //     }, 1500)
        // });
        Livewire.on('200', function () {
            autoCompleteJS.input.value = '';
            Livewire.emit('toastify', ['success','Ditambahkan', 2000]);
        })
    </script>
    <script>
        const jml = document.querySelectorAll('.jml');
        jml.forEach((item) => {
            let valueinput = 1;
            item.addEventListener('keyup', function () {
                if (item.value <= 0) {
                    item.value = valueitem;
                } else {
                    valueitem = item.value;
                }
            });
            item.addEventListener('change', function () {
                if (item.value <= 0) {
                    item.value = valueitem;
                } else {
                    valueitem = item.value;
                }
            })    
        });        
    </script>
@endpush