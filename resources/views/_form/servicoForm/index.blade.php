<div class="row">
    {{-- <div class="col-md-12">
        <div class="form-group mb-3">
            <label for="vc_servico">Serviço</label>
            <input type="text" name="vc_servico" class="form-control" value="{{isset($item) ?$item->vc_servico: old('vc_servico') }}" required>
        </div>
    </div> --}}

    <div class="col-md-12">
        <div class="form-group mb-3">
            <label for="vc_servico">Selecionar titulo Habilitante</label>
            <select class="form-control select2" name="it_id_titulo_habilitante" required>
                @foreach ($titulo_habilitantes as $key => $item)
                    <option value="{{ $item->id }}">{{ $item->vc_numero_titulo }}
                    <option>
                @endforeach
                <select>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group mb-3">
            <label for="vc_servico">Selecionar categoria serviço</label>

            <select class="form-control select2-multi" id="multi-select2" name="it_id_categoria_servico[]" multiple required>
                <optgroup label="Serviços">
                    @foreach ($categoria_servicos as $key => $item)
                        <option value="{{ $item->id }}">{{ $item->vc_nome }}
                        <option>
                    @endforeach
                </optgroup>

            </select>
        </div>
    </div>


</div> <!-- /.col -->
