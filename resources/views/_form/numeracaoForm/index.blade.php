
<div class="row">
    <div class="form-select col-md-12">
        <label for="it_id_titulo_habilitante" class="form-label">Título Habilitante *</label>
        <div class="select-group">
            <select required class="form-control  mb-3 select2" name="it_id_titulo_habilitante" id="it_id_titulo_habilitante" >
                    <option value="" selected disabled>Selecione o Título</option>
                    @foreach ($titulo_habilitantes as $titulo_habilitante)
                    <option value="{{ $titulo_habilitante->id }}">{{ $titulo_habilitante->vc_numero_titulo }}/{{$titulo_habilitante->vc_nome}}</option>
                @endforeach
            </select>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_uNome">De:</label>
            <input type="number" name="inicio" class="form-control" value="{{isset($numeracao) ?$numeracao->inicio: old('inicio') }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_uNome">Até:</label>
            <input type="number" name="fim" class="form-control" value="{{isset($numeracao) ?$numeracao->fim: old('fim') }}" required>
        </div>
    </div>
</div>