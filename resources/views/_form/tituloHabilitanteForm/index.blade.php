<div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_numero_titulo">Número do Título</label>
            <input type="text" id="vc_numero_titulo" name="vc_numero_titulo" class="form-control"
                value="{{ isset($titulo_habilitante) ? $titulo_habilitante->vc_numero_titulo : old('vc_numero_titulo') }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label class="form-label">Date de Emissão do Título</label>
            <input type="date" class="form-control " placeholder="Data de Emissão do Título"
                name="dt_emissao"
                value="{{ isset($titulo_habilitante->dt_emissao) ? $titulo_habilitante->dt_emissao : '' }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label class="form-label">Data de Validade do Título </label>
            <input type="date" class="form-control " placeholder="Data de Validade do Título"
                name="dt_validade"
                value="{{ isset($titulo_habilitante->dt_validade) ? $titulo_habilitante->dt_validade : '' }}">
        </div>
    </div>

    <div  class="form-select col-md-6" id="box_it_estado_titulo" >
        <label for="it_estado_titulo" class="form-label">Estado do Título Habilitante*</label>
        <div class="select-group">
            <select class="form-control select2" name="it_estado_titulo"  id="it_estado_titulo" >
                @if ( isset($titulo_habilitante->it_estado_titulo))
                <option selected  value="{{$titulo_habilitante->it_estado_titulo}}">{{$titulo_habilitante->it_estado_titulo}}</option>
                @else
                <option value="" selected disabled>Selecione o Estado</option>
                @endif

                <option value="0">Título Revogado</option>
                <option value="1">Em Operação</option>
                <option value="2">Título Caducado</option>
                <option value="3">Verificar Estado</option>
            </select>
        </div>
    </div>

    <div class="form-select col-md-6">
        <label for="it_id_operador" class="form-label">Operador *</label>
        <div class="select-group">
            <select class="form-control  mb-3 select2" name="it_id_operador" id="it_id_operador" >
                    @if ( isset($titulo_habilitante->it_id_operador))
                    <option selected  value="{{$titulo_habilitante->it_id_operador}}">{{$titulo_habilitante->vc_nome}}</option>
                    @else
                    <option value="" selected disabled>Selecione o Operador</option>
                    @endif


                @foreach ($operadores as $operador)
                    <option  {{$operador->it_situacao_tributaria?'':'disabled'}} value="{{ $operador->id }}">{{ $operador->vc_nome }}({{ situacao_tributaria($operador->it_situacao_tributaria) }})</option>
                @endforeach
            </select>
            <small id="emailHelp" class="form-text text-muted">Apenas Será Possível Seleccionar os Operadores Regularizados</small>
        </div>
    </div>

    <div class="form-select col-md-6">
        <label for="it_id_categoria_titulo_habilitante" class="form-label">Categoria do Titulo Habilitante *</label>
        <div class="select-group">
            <select class="form-control  mb-3 select2" name="it_id_categoria_titulo_habilitante" id="it_id_categoria_titulo_habilitante" >
                    @if ( isset($titulo_habilitante->it_id_categoria_titulo_habilitante))
                    <option selected  value="{{$titulo_habilitante->it_id_categoria_titulo_habilitante}}">{{$titulo_habilitante->categoria_nome}}</option>
                    @else
                    <option value="" selected disabled>Selecione a Categoria do Titulo Habilitante</option>
                    @endif
                @foreach ($categoria_titulo_habilitantes as $categoria_titulo_habilitante)
                    <option value="{{ $categoria_titulo_habilitante->id }}">{{ $categoria_titulo_habilitante->vc_nome }}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- <div class="form-select col-md-4">
        <label for="it_id_categoria_titulo_habilitante" class="form-label">Selecionar Frequencia *</label>
        <div class="select-group">
            <select class="form-control  mb-3" name="it_frequencia_numeracao" id="it_frequencia_numeracao" >
                    @if ( isset($titulo_habilitante->it_id_frequencia_numeracao))
                    <option selected  value="{{$titulo_habilitante->it_id_frequencia_numeracao}}">{{$titulo_habilitante->vc_frequencia}} | {{$titulo_habilitante->vc_numeracao}}</option>
                    @else
                    <option value="" selected disabled>Selecione a Selecionar Frequencia</option>
                    @endif

                @foreach ($frequencia_numeracaos as $frequencia_numeracao)
                    <option value="{{ $frequencia_numeracao->id }}">{{$frequencia_numeracao->vc_frequencia}} | {{$frequencia_numeracao->vc_numeracao}}</option>
                @endforeach
            </select>
        </div>
    </div><!-- /.col --> --}}
</div>


