<div class="form-group" style="width: 520px">
    <label for="level">Level</label>
    <input type="text" wire:model.lazy='level_id' id="level" class="form-control" placeholder="level petugas"
    dir="ltr" spellcheck=false autocorrect="off" autocomplete="off" autocapitalize="off" maxlength="2048" tabindex="1">

    @foreach ($levels as $level)
        <input type="hidden" class="pilih-level input-form" wire:model='level' value="{{ $level->id . " - " . $level->level }}">
    @endforeach
</div>

@push('scripts')
    <script>
        var dataList = document.querySelectorAll('input.pilih-level');
        var arrayData = [];
        dataList.forEach((item) => {
            arrayData.push(item.value);
        });

        let Level = 2;
        // console.log(arrayData);
        const autoCompleteLevel = new autoComplete({
            selector: "#level",
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
                        Level++;
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
                        Livewire.emit('setLevel', params);
                        autoCompleteLevel.input.value = selection;
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
            autoCompleteLevel.input.value = '';
            Livewire.emit('toastify', ['success','Ditambahkan', 2000]);
        })
    </script>
@endpush