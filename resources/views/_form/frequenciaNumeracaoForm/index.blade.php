<div class="row p-1">
    <div class="form-select col-md-6">
        <label for="it_id_titulo_habilitante" class="form-label">Título Habilitante *</label>
        <div class="select-group">
            <select required class="form-control  mb-3 select2" name="it_id_titulo_habilitante"
                id="it_id_titulo_habilitante">
                @isset($frequencia)
                    <option value="{{ $frequencia->it_id_titulo_habilitante }}">
                        {{ $frequencia->vc_numero_titulo }}/{{ $frequencia->vc_operador }}</option>
                @else
                    <option value="" selected disabled>Seleccione o Título</option>
                    @foreach ($titulo_habilitantes as $titulo_habilitante)
                        <option value="{{ $titulo_habilitante->id }}">
                            {{ $titulo_habilitante->vc_numero_titulo }}/{{ $titulo_habilitante->vc_nome }}</option>
                    @endforeach
                @endisset


            </select>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_descricao">Descrição</label>
            <input type="text" id="vc_descricao" name="vc_descricao" class="form-control" placeholder="Descrição"
                value="{{ isset($frequencia) ? $frequencia->vc_descricao : old('vc_descricao') }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_canal">Canal
            </label>
            <input type="text" id="vc_canal" name="vc_canal" class="form-control" placeholder="Canal"
                value="{{ isset($frequencia) ? $frequencia->vc_canal : old('vc_canal') }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_frequencia">Frequência(fn (MHz))
            </label>
            <input type="text" id="vc_frequencia" name="vc_frequencia" class="form-control" placeholder="Frequência"
                value="{{ isset($frequencia) ? $frequencia->vc_frequencia : old('vc_frequencia') }}">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_frequencia_linha">Frequência Linha(f'n (MHz) )</label>
            <input type="text" id="vc_frequencia_linha" name="vc_frequencia_linha" class="form-control" placeholder="Frequência Linha"
                value="{{ isset($frequencia) ? $frequencia->vc_frequencia_linha : old('vc_frequencia_linha') }}">
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_a">A</label>
            <input type="text" id="vc_a" name="vc_a" class="form-control" placeholder="A"
                value="{{ isset($frequencia) ? $frequencia->vc_a : old('vc_a') }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_b">B
            </label>
            <input type="text" id="vc_b" name="vc_b" class="form-control" placeholder="B"
                value="{{ isset($frequencia) ? $frequencia->vc_b : old('vc_b') }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_b">Observação
            </label>
            <input type="text" id="vc_observacao" name="vc_observacao" class="form-control" placeholder="Observação"
                value="{{ isset($frequencia) ? $frequencia->vc_observacao : old('vc_observacao') }}">
        </div>
    </div>
    <!-- /.col -->




</div>
