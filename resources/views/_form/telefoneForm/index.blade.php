<div class="row">
    <div class="col-md-12">
        <div class="form-group mb-3">
            <label for="vc_numero">Telefone</label>
            <input type="number" name="vc_numero" class="form-control" value="{{isset($telefone) ?$telefone->vc_numero: old('vc_numero') }}" required>
        </div>
    </div> <!-- /.col -->


    <div class="col-md-12">
        <div class="form-group mb-3">
            <label for="vc_servico">Selecionar operador</label>
            <select class="form-control select2" name="it_id_operadore" required>
                @foreach($operadores as $key => $telefone)
                <option value="{{$telefone->id}}">{{$telefone->vc_nome}}<option>
                    @endforeach
            <select>
        </div>
    </div>
</div>
