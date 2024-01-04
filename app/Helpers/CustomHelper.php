<?php
use App\Models\CategoriaTituloHabilitante;
use App\Models\Federacao;
use App\Models\FrequenciaMovTerrestre;
use App\Models\FrequenciaMovTom;
use App\Models\FrequenciaNumeracao;
use App\Models\Numeracao;
use App\Models\Operador;
use App\Models\TituloHabilitante;
use App\Models\CategoriaServico;
use App\Models\TomProt;

function federacoes()
{
    return Federacao::orderBy('id', 'desc');
}
function slug_gerar()
{

    $slug =
        //  Keygen::numeric(2)->generate() . 
        uniqid(date('HisYmd'));
    // . Keygen::numeric(4)->generate();

    return $slug;
}
// app/Helpers/CustomHelper.php

if (!function_exists('formatar_reais')) {
    function formatar_reais($valor)
    {
        return 'R$ ' . number_format($valor, 2, ',', '.');
    }
}
function operadores()
{
    return Operador::orderBy('id', 'desc');
}
function licencas()
{
    return CategoriaTituloHabilitante::orderBy('id', 'desc');

}
// function servicos(){

//     return  CategoriaServico::orderBy('id','desc');

//   }

function numeracoes()
{
    return Numeracao::join('titulo_habilitantes', 'titulo_habilitantes.id', '=', 'numeracaos.it_id_titulo_habilitante')
        ->join('operadores', 'titulo_habilitantes.it_id_operador', '=', 'operadores.id')
        ->join('categoria_titulo_habilitantes', 'titulo_habilitantes.it_id_categoria_titulo_habilitante', '=', 'categoria_titulo_habilitantes.id')
        ->select(
            'titulo_habilitantes.*',
            'operadores.vc_nome as vc_operador',
            'operadores.vc_nif',
            'operadores.yr_ano_fundacao',
            'categoria_titulo_habilitantes.vc_nome as categoria_nome',
            'numeracaos.*'
        );

}
function frequencias()
{
    return FrequenciaNumeracao::join('titulo_habilitantes', 'titulo_habilitantes.id', '=', 'frequencia_numeracaos.it_id_titulo_habilitante')
        ->join('operadores', 'titulo_habilitantes.it_id_operador', '=', 'operadores.id')
        ->join('categoria_titulo_habilitantes', 'titulo_habilitantes.it_id_categoria_titulo_habilitante', '=', 'categoria_titulo_habilitantes.id')
        ->select(
            'titulo_habilitantes.*',
            'operadores.vc_nome as vc_operador',
            'operadores.vc_nif',
            'operadores.yr_ano_fundacao',
            'categoria_titulo_habilitantes.vc_nome as categoria_nome',
            'frequencia_numeracaos.*'
        );

}
function licencas_operadores()
{
    $titulos_cont = [];
    $licensas_cont = [];
    $titulos = CategoriaTituloHabilitante::get();
    foreach ($titulos as $titulo) {
        array_push($titulos_cont, $titulo->vc_nome);
        array_push($licensas_cont, titulos()->where('categoria_titulo_habilitantes.id', $titulo->id)->count());

    }
    $response['titulos_cont'] = $titulos_cont;
    // dd($response['titulos_cont']);
    $response['licensas_cont'] = $licensas_cont;

    return response()->json($response);
}
function tom_prots()
{
    return TomProt::orderBy('id', 'desc');
}
function frequencias_mov_terrestres()
{
    return FrequenciaMovTerrestre::join('titulo_habilitantes', 'titulo_habilitantes.id', '=', 'frequencia_mov_terrestres.it_id_titulo_habilitante')
        ->join('operadores', 'titulo_habilitantes.it_id_operador', '=', 'operadores.id')
        ->join('categoria_titulo_habilitantes', 'titulo_habilitantes.it_id_categoria_titulo_habilitante', '=', 'categoria_titulo_habilitantes.id')
        ->select(
            'titulo_habilitantes.*',
            'operadores.vc_nome as vc_operador',
            'operadores.vc_nif',
            'operadores.yr_ano_fundacao',
            'categoria_titulo_habilitantes.vc_nome as categoria_nome',

            'frequencia_mov_terrestres.*'
        );
}
function tons()
{

    return FrequenciaMovTom::join('frequencia_mov_terrestres', 'frequencia_mov_terrestres.id', 'frequencia_mov_toms.it_id_frequencia_mov_terrestre')
        ->join('tom_prots', 'frequencia_mov_toms.it_id_tom_prot', 'tom_prots.id')
        ->select('frequencia_mov_terrestres.*', 'tom_prots.*', 'frequencia_mov_toms.*');

}
function titulos()
{
    return TituloHabilitante::join('categoria_titulo_habilitantes', 'categoria_titulo_habilitantes.id', 'titulo_habilitantes.it_id_categoria_titulo_habilitante')
        ->join('operadores', 'operadores.id', 'titulo_habilitantes.it_id_operador')
        ->orderBy('categoria_titulo_habilitantes.vc_nome', 'asc')
        ->select(
            'titulo_habilitantes.*',
            'operadores.vc_nome',
            'operadores.vc_nif',
            'operadores.yr_ano_fundacao',
            'operadores.vc_zona_geografica_actuacao',
            'operadores.vc_tecnologia_usada',
            'operadores.vc_site_oficial',
            'operadores.vc_caminho',
            'categoria_titulo_habilitantes.vc_nome as nome_categoria_titulo',
        );

}
function categorias_titulos()
{
    return CategoriaTituloHabilitante::get();



}
function titulos_habilitante()
{
    return TituloHabilitante::join('categoria_titulo_habilitantes', 'categoria_titulo_habilitantes.id', 'titulo_habilitantes.it_id_categoria_titulo_habilitante')
        ->select(
            'titulo_habilitantes.*',
            'categoria_titulo_habilitantes.vc_nome as nome_categoria_titulo',
        );

}
function servicos()
{
    return CategoriaServico::get();
}
function estado_titulo()
{
    return [
        'Título Revogado',
        'Em Operação',
        'Título Caducado',
        'Verificar Estado',
    ];
}
function titulo_por_operador($id_operador)
{
    return $response['titulos'] = TituloHabilitante::join('categoria_titulo_habilitantes', 'categoria_titulo_habilitantes.id', 'titulo_habilitantes.it_id_categoria_titulo_habilitante')
        ->join('operadores', 'operadores.id', 'titulo_habilitantes.it_id_operador')
        ->where('operadores.id', $id_operador)
        ->select(

            'titulo_habilitantes.*',
            'operadores.vc_nome',
            'operadores.vc_nif',
            'operadores.yr_ano_fundacao',
            'operadores.vc_zona_geografica_actuacao',
            'operadores.vc_tecnologia_usada',
            'operadores.vc_site_oficial',
            'operadores.vc_caminho',
            'categoria_titulo_habilitantes.vc_nome as nome_categoria_titulo',
        )->get();

}
function servicos_titulo_operador($id_operador, $id_titulo)
{
    return DB::table('servico_licenciados')
        ->join('titulo_habilitantes', 'titulo_habilitantes.id', 'servico_licenciados.it_id_titulo_habilitante')
        ->join('operadores', 'operadores.id', 'titulo_habilitantes.it_id_operador')
        ->join('categoria_servicos', 'categoria_servicos.id', 'servico_licenciados.it_id_categoria_servico')
        // ->leftJoin('frequencia_numeracaos', 'titulo_habilitantes.it_frequencia_numeracao', '=', 'frequencia_numeracaos.id') //
        ->leftJoin('categoria_titulo_habilitantes', 'titulo_habilitantes.it_id_categoria_titulo_habilitante', '=', 'categoria_titulo_habilitantes.id')
        ->where('operadores.id', $id_operador)
        ->where('titulo_habilitantes.id', $id_titulo)
        ->select(
            'categoria_servicos.vc_nome as servico_licenciado',
            'titulo_habilitantes.*',
            'operadores.vc_nome',
            'operadores.vc_nif',
            'operadores.yr_ano_fundacao',
            'operadores.vc_zona_geografica_actuacao',
            'operadores.vc_tecnologia_usada',
            'operadores.vc_site_oficial',
            'operadores.vc_caminho',

            'categoria_titulo_habilitantes.vc_nome as nome_categoria_titulo',


        )
        ->get();
}
function detalhes_operador($id_operador)
{
    return Operador::join('telefones', 'telefones.it_id_operadore', 'operadores.id')
        ->join('morada_sedes', 'morada_sedes.it_id_operadore', 'operadores.id')
        ->join('emails', 'emails.it_id_operadore', 'operadores.id')
        ->join('ponto_focals', 'ponto_focals.it_id_operadore', 'operadores.id')
        ->where('operadores.id', $id_operador)
        ->limit(2)
        ->get();
}
function formatarDataPortugues($data)
{
    return date("d/m/Y", strtotime($data));
}
function situacao_tributaria($valor)
{
    if ($valor == 1) {
        return "Regularizada";
    } else if ($valor == 0) {
        return "Por Regularizar";
    }
}
function texto_dividido($texto)
{
    $textoCompleto = $texto;
    $textoResumido = substr($textoCompleto, 0, 30);
    return [$textoCompleto, $textoResumido];
}
function upload_file($request, $input, $caminho)
{
    if (isset($request[$input]) && $request[$input]->isValid()) {

        // Define um aleatório para o arquivo baseado no timestamps atual
        $name = uniqid(date('HisYmd'));

        // Recupera a extensão do arquivo
        $extension = $request[$input]->extension();

        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";


        // Faz o upload:
        // $upload = $request[$input]->storeAs($caminho, $nameFile);
        $requestImage = $request[$input];
        //    dd($requestImage);
        $upload = $requestImage->move(public_path($caminho), $nameFile);

        //    dd($upload,"O",$nameFile);

        //            $upload = substr($upload, 7, strlen($upload));
        // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao

        // Verifica se NÃO deu certo o upload ( Redireciona de volta )

        if (!$upload) {

            return -1;
        } else {
            return "$caminho/$nameFile";
            //         $size= getimagesize('storage/'.$upload);

            //  return ['caminho'=>$upload,'altura'=>$size[0],'largura'=>$size[1],'bits'=>$size["bits"],'mime'=>$size["mime"]];

        }
    } else {
        return null;
        // $size= getimagesize('storage/timeline/capa/capa.jpg');
        // return ['caminho'=>'timeline/capa/capa.jpg','altura'=>$size[0],'largura'=>$size[1],'bits'=>$size["bits"],'mime'=>$size["mime"]];

    }
}