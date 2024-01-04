
<div class=" form-group col-md-6">
    <label class="">Nome: <span class="required">*</span>
    </label>

    <input name="nome" type="text" value="{{ isset($federacao)?$federacao->nome:''}}" id="first-name" required class="form-control ">
</div>
<div class=" form-group col-md-6">
    <label class="">Presidente <span class="required">*</span>
    </label>

    <input type="text" id="first-name" name="presidente" value="{{ isset($federacao)?$federacao->presidente:''}}" required class="form-control ">
</div>
<div class=" form-group col-md-6">
    <label class="">Seleção <span class="required">*</span>
    </label>

    <input type="text" id="selecao" name="selecao" value="{{ isset($federacao)?$federacao->selecao:''}}" required class="form-control ">
</div>
<div class=" form-group col-md-6">
    <label class="">Data de Fundação <span class="required">*</span>
    </label>

    <input type="date" id="fundacao" name="fundacao" value="{{ isset($federacao)?$federacao->fundacao:''}}" required class="form-control ">
</div>
<div class=" form-group col-md-6">
    <label class="">Sede <span class="required">*</span>
    </label>

    <input type="text" id="sede" name="sede" required value="{{ isset($federacao)?$federacao->sede:''}}" class="form-control ">
</div>
<div class=" form-group col-md-6">
    <label class="">Treinador <span class="required">*</span>
    </label>

    <input type="text" id="treinador" name="treinador" value="{{ isset($federacao)?$federacao->treinador:''}}" required class="form-control ">
</div>
<div class=" form-group col-md-6">
    <label class="">E-mail <span class="required">*</span>
    </label>

    <input type="email" id="email_contato" name="email_contato" value="{{ isset($federacao)?$federacao->email_contato:''}}" required
        class="form-control ">
</div>
<div class=" form-group col-md-6">
    <label class="">Telefone <span class="required">*</span>
    </label>

    <input type="number" id="telefone" name="telefone" value="{{ isset($federacao)?$federacao->telefone:''}}" required class="form-control ">
</div>
<div class=" form-group col-md-6">
    <label class="">URL do Site <span class="required">*</span>
    </label>

    <input type="text" id="url_site" name="url_site" value="{{ isset($federacao)?$federacao->url_site:''}}" required class="form-control ">
</div>
<div class=" form-group col-md-6">
    <label class="">Confederação<span class="required">*</span>
    </label>

    <input type="text" id="confederacao" name="confederacao" value="{{ isset($federacao)?$federacao->confederacao:''}}" required class="form-control ">
</div>
@isset($federacao)
<div class=" form-group col-md-6">
    <label class="">Logotipo<span class="required">*</span>
    </label>

    <input type="file" id="logo_url" name="logo_url"  value="{{ isset($federacao)?$federacao->logo_url:''}}" class="form-control ">
</div>
@endisset


<div class=" form-group col-md-12">
    <div class="form-group">
        <label for="descricao">{{ __('Descrição *') }}</label>
        <textarea required class="form-control editor" name="descricao{{ isset($federacao)?$federacao->id:''}}"   placeholder="Coloca uma descrição sobre a Federação" cols="15" rows="15" >{{ isset($federacao->descricao) ? $federacao->descricao : '' }}</textarea>
        @error('{{ $federacao->descricao }}')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
