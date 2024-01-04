<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\CategoriaTituloHabilitante;
use Illuminate\Http\Request;

class GraficoController extends Controller
{
    //
    public function licencas_operadores()
    {
        //------------------------------------------------------------------
        $titulos_cont = [];
        $licensas_cont = [];
        $titulos = CategoriaTituloHabilitante::get();
        foreach ($titulos as $titulo) {
            array_push($titulos_cont, $titulo->vc_nome);
            array_push($licensas_cont, titulos()->where('categoria_titulo_habilitantes.id', $titulo->id)->count());

        }
        $response['labels_titulos_lo'] = $titulos_cont;
        // dd($response['titulos_cont']);
        $response['data_titulos_lo'] = $licensas_cont;
        //------------------------------------------------------------------

        //------------------------------------------------------------------
        $labels_op = [];
        $datas_op = [];
        $operadores = operadores()->get();
        // dd( $operadores );
        // $titulos = titulos()->get();
        foreach ($operadores as $operador) {
            array_push($labels_op, $operador->vc_nome);
            array_push($datas_op, titulos()->where('titulo_habilitantes.it_id_operador', $operador->id)->count());

        }
        $response['labels_op'] = $labels_op;
        // dd($response['titulos_cont']);
        $response['datas_op'] = $datas_op;


        // 
        //------------------------------------------------------------------

        //------------------------Start Título por Estado--------------------
        $labels_te = [];
        $datas_te = [];
        $operadores = operadores()->get();
        // dd(estado_titulo());
        foreach(estado_titulo() as $key=>$estado_titulo){
            array_push($labels_te, $estado_titulo);
            array_push($datas_te, titulos()->where('titulo_habilitantes.it_estado_titulo', $key)->count());
        }
        $response['labels_te'] = $labels_te;
        // dd($response['titulos_cont']);
        $response['datas_te'] = $datas_te;
         //------------------------End Título por Estado--------------------
        return response()->json($response);
    }
}
