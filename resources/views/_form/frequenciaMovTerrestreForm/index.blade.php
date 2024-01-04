<div class="row p-1">
    <div class="form-select col-md-6">
        <label for="it_id_titulo_habilitante" class="form-label">Título Habilitante(Entidade)</label>
        <div class="select-group">
            <select required class="form-control  mb-3 select2" name="it_id_titulo_habilitante"
                id="it_id_titulo_habilitante">
                @isset($frequencia_mov_terrestre)
                    <option value="{{ $frequencia_mov_terrestre->it_id_titulo_habilitante }}">
                        {{ $frequencia_mov_terrestre->vc_numero_titulo }}/{{ $frequencia_mov_terrestre->vc_operador }}
                    </option>
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
            <label for="vc_ml_estacao_movel">ML(estação móvel)
            </label>
            <input required type="text" id="vc_ml_estacao_movel" name="vc_ml_estacao_movel" class="form-control"
                placeholder="Descrição"
                value="{{ isset($frequencia_mov_terrestre) ? $frequencia_mov_terrestre->vc_ml_estacao_movel : old('vc_ml_estacao_movel') }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_fb_estacao_fixa">FB(estação fixa)

            </label>
            <input type="text" required id="vc_fb_estacao_fixa" name="vc_fb_estacao_fixa" class="form-control"
                placeholder="Canal"
                value="{{ isset($frequencia_mov_terrestre) ? $frequencia_mov_terrestre->vc_fb_estacao_fixa : old('vc_fb_estacao_fixa') }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_localizao_equipamento">Localização (coordenadas) do equipamento


            </label>
            <input type="text" required id="vc_localizao_equipamento" name="vc_localizao_equipamento"
                class="form-control" placeholder="Localização"
                value="{{ isset($frequencia_mov_terrestre) ? $frequencia_mov_terrestre->vc_localizao_equipamento : old('vc_localizao_equipamento') }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_nota">Nota



            </label>
            <input type="text" id="vc_nota" name="vc_nota" class="form-control" required placeholder="Nota"
                value="{{ isset($frequencia_mov_terrestre) ? $frequencia_mov_terrestre->vc_nota : old('vc_nota') }}">
        </div>
    </div>
   
        <div class="col-md-12">
            <div class="form-group mb-3">
                <label for="vc_servico">Tons de Prot.
                </label>

                <select class="form-control select2-multi" id="multi-select2" name="it_id_tom_prot[]" multiple required>
                    <optgroup label="Serviços">

                        @isset($frequencia_mov_terrestre)
                        @else
    @endisset

                        @foreach (tom_prots()->get() as $tom)
                            <option value="{{ $tom->id }}">
                                {{ $tom->vc_tom_prot }}</option>
                        @endforeach
                    </optgroup>

                </select>
            </div>
        </div>

    <!-- /.col -->




</div>
