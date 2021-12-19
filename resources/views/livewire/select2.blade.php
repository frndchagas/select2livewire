<div>
    <div class="row">
        <div class="col-md-12 p-5">
            <h3 class="text-dark fw-bold">Exemplo de uso de Select2 dentro de um modal</h3>

            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                Abrir
            </button>

            <!-- The Modal -->
            <div wire:ignore>
                <div class="modal" id="myModal">
                    <div class="modal-dialog  modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>

                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span class="svg-icon svg-icon-2x"></span>
                                </div>
                                <!--end::Close-->
                            </div>

                            <div class="modal-body">
                                <div class="mb-10">
                                    <label for="" class="form-label">Modal example</label>
                                    <select class="form-select form-select-solid select2"
                                        data-placeholder="Selecione..." style="width: 400px" wire:model='selectedMovie'
                                        id="select2-dropdown">
                                        <option></option>
                                        @foreach ($movies as $movie)
                                            <option style="width: 400px" value="{{ $movie->id }}">
                                                {{ $movie['title'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" wire:click='showMovie'
                                    data-bs-dismiss="modal">Save
                                    changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script>
            $(document).ready(function() {
                $(document).ready(function() {
                    $('#select2-dropdown').select2();
                    $('#select2-dropdown').on('change', function(e) {
                        var data = $('#select2-dropdown').select2("val");
                        @this.set('selectedMovie', data);
                    });
                });
            });
        </script>

    </div>
    @if ($show)
        <div class="row">
            <div class="col-md-12 p-5">
                <h3 class="text-dark fw-bold">Selecionado: {{ $selectedMovie['title'] }}</h3>
            </div>
        </div>
    @endif
</div>
