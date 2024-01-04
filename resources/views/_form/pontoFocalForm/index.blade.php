{{-- @dd($ponto_focal); --}}
<div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_pNome">Primeiro nome</label>
            <input type="text" name="vc_pNome" class="form-control" value="{{isset($ponto_focal) ?$ponto_focal->vc_pNome: old('vc_pNome') }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_nomeMeio">Nome do meio</label>
            <input type="text" name="vc_nomeMeio" class="form-control" value="{{isset($ponto_focal) ?$ponto_focal->vc_nomeMeio: old('vc_nomeMeio') }}" >
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_uNome">Último nome</label>
            <input type="text" name="vc_uNome" class="form-control" value="{{isset($ponto_focal) ?$ponto_focal->vc_uNome: old('vc_uNome') }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_servico">Selecionar operador</label>
            <select class="form-control select2" name="it_id_operadore" required>
                @foreach($operadores as $key => $ponto_focal)
                <option value="{{$ponto_focal->id}}">{{$ponto_focal->vc_nome}}<option>
                    @endforeach
            <select>
        </div>
    </div>
</div> <!-- /.col -->



