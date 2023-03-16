<div class="input-siswa col-12 w-100 d-flex">
    <div class="form-group" style="width: 620px;">
        <label for="spp">Tahun Spp</label>
        <input type="text" id="spp" class="form-control" placeholder="tahun spp"
        dir="ltr" spellcheck=false autocorrect="off" autocomplete="off" autocapitalize="off" maxlength="2048" tabindex="1">
    </div>

    @foreach ($spps as $spp)
        <input type="hidden" class="pilih-spp input-form" value="{{ $spp->id . " - " . $spp->tahun . " -- " . $spp->nominal . " --" }}">
    @endforeach
</div>

@push('scripts')
    <script>
        var dataList = document.querySelectorAll('input.pilih-spp');
        var arrayData = [];
        dataList.forEach((item) => {
            arrayData.push(item.value);
        });

        let spp = 2;
        // console.log(arrayData);
        const autoCompleteSpp = new autoComplete({
            selector: "#spp",
            placeHolder: "Cari . . . . . . . . .  ",
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
                        message.innerHTML = `<span>Tidak ditemukan data seperti  "${data.query}"</span>`;
                        // Append message element to the results list
                        list.prepend(message);
                        // if (ketik == 3) {
                        //     Livewire.emit('toastify', ['warning', 'Barang Tidak Ditemukan', 2500]);
                        //     ketik = 0;
                        // }
                        // spp++;
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
                        Livewire.emit('setSpp', params);
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
@endpush