<div class="row">
    <div class="col-md-12">
        <div class="form-group mb-3">
            <label for="vc_email">Email</label>
            <input type="text" name="vc_email" class="form-control" value="{{isset($item) ?$item->vc_email: old('vc_email') }}" required>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group mb-3">
            <label for="vc_servico">Selecionar operador</label>
            <select class="form-control select2" name="it_id_operadore" required>
                {{-- @if ( isset($operador->id))
                <option  selected  disabled value="{{$operador->id}}">{{$operador->vc_nome}}</option>
                @endif --}}

                @if((isset($operador->id)))
                    <option  selected   value="{{$operador->id}}">{{$operador->vc_nome}}</option>
                @else
                    @if  ( isset($item->it_id_operadore))
                        <option selected  value="{{$item->it_id_operadore}}">{{$item->vc_nome}}</option>

                        @foreach($operadores as $key => $item)
                        <option value="{{$item->id}}">{{$item->vc_nome}}<option>
                            @endforeach
                    @else
                        <option value="" selected disabled>Selecione o Operador</option>
                    @endif
                     @endif


            <select>
        </div>
    </div>
</div> <!-- /.col -->

