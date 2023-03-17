<div class="input-siswa col-12 w-100 d-flex">
    <div class="form-group w-100">
        <label for="kelas">Kelas</label>
        <input type="text" id="kelas" class="form-control" placeholder="masukkan kelas siswa"
        dir="ltr" spellcheck=false autocorrect="off" autocomplete="off" autocapitalize="off" maxlength="2048" tabindex="1">
    </div>

    @foreach ($datakelases as $kelas)
        <input type="hidden" class="pilih-kelas input-form" value="{{ $kelas->id . " - " . $kelas->nama_kelas . " -- " . $kelas->kompetensi_keahlian . " --" }}">
    @endforeach
</div>

@push('scripts')
    <script>
        var dataList = document.querySelectorAll('input.pilih-kelas');
        var arrayData = [];
        dataList.forEach((item) => {
            arrayData.push(item.value);
        });

        let Kelas = 2;
        // console.log(arrayData);
        const autoCompleteKelas = new autoComplete({
            selector: "#kelas",
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
                        Kelas++;
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
                        Livewire.emit('setKelas', params);
                        autoCompleteKelas.input.value = selection;
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
            autoCompleteKelas.input.value = '';
            Livewire.emit('toastify', ['success','Ditambahkan', 2000]);
        })
    </script>
@endpush