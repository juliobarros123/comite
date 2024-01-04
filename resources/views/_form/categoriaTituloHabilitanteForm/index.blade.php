<div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="vc_nome">Nome</label>
            <input type="text" id="vc_nome" name="vc_nome" class="form-control" value="{{isset($categoria_titulo_habilitante) ?$categoria_titulo_habilitante->vc_nome: old('vc_nome') }}">
        </div>
    </div> <!-- /.col -->
</div>
