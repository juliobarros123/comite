<div class="row">
    <div class="col-md-12">
        <div class="form-group mb-3">
            <label for="vc_descricao">Descrição da revogação</label>
            <textarea name="vc_descricao" class="form-control" cols="30" rows="10" required>{{isset($motivo_revogacao_licenca) ?$motivo_revogacao_licenca->vc_descricao: old('vc_descricao') }}</textarea>
        </div>
    </div>

    <div class="form-select col-md-4">
        <label for="it_id_titulo_habilitante" class="form-label">Título Habilitante *</label>
        <div class="select-group">
            <select class="form-control  mb-3 select2" name="it_id_titulo_habilitante" id="it_id_titulo_habilitante" >
                    @if ( isset($motivo_revogacao_licenca->it_id_titulo_habilitante))
                    <option selected  value="{{$motivo_revogacao_licenca->it_id_titulo_habilitante}}">{{$motivo_revogacao_licenca->vc_numero_titulo}}</option>
                    @else
                    <option value="" selected disabled>Selecione o item </option>
                    @endif


                @foreach ($titulo_habilitantes as $titulo_habilitante)
                    <option value="{{ $titulo_habilitante->id }}">{{ $titulo_habilitante->vc_numero_titulo }}/{{$titulo_habilitante->vc_nome}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div> <!-- /.col -->

