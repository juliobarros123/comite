<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Admin\OperadorController;





Route::prefix('admin')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    /*START UTILIZADORES*/
    Route::prefix('utilizadores')->group(function () {
        Route::get('', ['as' => 'admin.utilizadores.index', 'uses' => 'Admin\UserController@index']);
        Route::get('create', ['as' => 'admin.utilizadores.create', 'uses' => 'Admin\UserController@create']);
        Route::post('store', ['as' => 'admin.utilizadores.store', 'uses' => 'Admin\UserController@store']);
        Route::get('show/{id}', ['as' => 'admin.utilizadores.show', 'uses' => 'Admin\UserController@show']);
        Route::get('edit/{id}', ['as' => 'admin.utilizadores.edit', 'uses' => 'Admin\UserController@edit']);
        Route::post('update/{id}', ['as' => 'admin.utilizadores.update', 'uses' => 'Admin\UserController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.utilizadores.destroy', 'uses' => 'Admin\UserController@destroy']);
        Route::get('purge/{id}', ['as' => 'admin.utilizadores.purge', 'uses' => 'Admin\UserController@purge']);
    });

    /*END UTILIZADORES*/

    /*START OPERADOR*/
    Route::prefix('/federacoes')->group(function () {
        Route::get('', ['as' => 'admin.federacoes.index', 'uses' => 'Admin\FederacaoController@index']);
        Route::get('create', ['as' => 'admin.federacoes.create', 'uses' => 'Admin\FederacaoController@create']);
        Route::post('store', ['as' => 'admin.federacoes.store', 'uses' => 'Admin\FederacaoController@store']);
        Route::get('show/{id}', ['as' => 'admin.federacoes.show', 'uses' => 'Admin\FederacaoController@show']);
        Route::get('detail/{id}', ['as' => 'admin.federacoes.detail', 'uses' => 'Admin\FederacaoController@detail']);
        Route::get('edit/{id}', ['as' => 'admin.federacoes.edit', 'uses' => 'Admin\FederacaoController@edit']);
        Route::post('update/{id}', ['as' => 'admin.federacoes.update', 'uses' => 'Admin\FederacaoController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.federacoes.destroy', 'uses' => 'Admin\FederacaoController@destroy']);
        Route::get('purge/{id}', ['as' => 'admin.federacoes.purge', 'uses' => 'Admin\FederacaoController@purge']);
   
    });

    /*END OPERADOR*/


    /*START CategoriaTituloHabilitante*/
    Route::prefix('categoria_titulo_habilitante')->group(function () {
        Route::get('index', ['as' => 'admin.categoria_titulo_habilitante.index', 'uses' => 'Admin\CategoriaTituloHabilitanteController@index']);
        Route::get('create', ['as' => 'admin.categoria_titulo_habilitante.create', 'uses' => 'Admin\CategoriaTituloHabilitanteController@create']);
        Route::post('store', ['as' => 'admin.categoria_titulo_habilitante.store', 'uses' => 'Admin\CategoriaTituloHabilitanteController@store']);
        Route::get('show/{id}', ['as' => 'admin.categoria_titulo_habilitante.show', 'uses' => 'Admin\CategoriaTituloHabilitanteController@show']);
        Route::get('edit/{id}', ['as' => 'admin.categoria_titulo_habilitante.edit', 'uses' => 'Admin\CategoriaTituloHabilitanteController@edit']);
        Route::post('update/{id}', ['as' => 'admin.categoria_titulo_habilitante.update', 'uses' => 'Admin\CategoriaTituloHabilitanteController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.categoria_titulo_habilitante.destroy', 'uses' => 'Admin\CategoriaTituloHabilitanteController@destroy']);
        Route::get('purge/{id}', ['as' => 'admin.categoria_titulo_habilitante.purge', 'uses' => 'Admin\CategoriaTituloHabilitanteController@purge']);
    });

    /*END CategoriaTituloHabilitante*/


    /*START TituloHabilitante*/
    Route::prefix('titulo-habilitante')->group(function () {
        Route::get('index', ['as' => 'admin.titulo_habilitante.index', 'uses' => 'Admin\TituloHabilitanteController@index']);
        Route::get('create', ['as' => 'admin.titulo_habilitante.create', 'uses' => 'Admin\TituloHabilitanteController@create']);
        Route::post('store', ['as' => 'admin.titulo_habilitante.store', 'uses' => 'Admin\TituloHabilitanteController@store']);
        Route::get('show/{id}', ['as' => 'admin.titulo_habilitante.show', 'uses' => 'Admin\TituloHabilitanteController@show']);
        Route::get('edit/{id}', ['as' => 'admin.titulo_habilitante.edit', 'uses' => 'Admin\TituloHabilitanteController@edit']);
        Route::post('update/{id}', ['as' => 'admin.titulo_habilitante.update', 'uses' => 'Admin\TituloHabilitanteController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.titulo_habilitante.destroy', 'uses' => 'Admin\TituloHabilitanteController@destroy']);
        Route::get('purge/{id}', ['as' => 'admin.titulo_habilitante.purge', 'uses' => 'Admin\TituloHabilitanteController@purge']);
        Route::get('mudar_estado/{id_operador}/{id_titulo}', ['as' => 'admin.titulo_habilitante.mudar_estado', 'uses' => 'Admin\TituloHabilitanteController@mudar_estado']);
   
    });
    /*END TituloHabilitante*/



    /*START CategoriaServico*/
    Route::prefix('categoria-servico')->group(function () {
        Route::get('index', ['as' => 'admin.categoria_servico.index', 'uses' => 'Admin\CategoriaServicoController@index']);
        Route::get('create', ['as' => 'admin.categoria_servico.create', 'uses' => 'Admin\CategoriaServicoController@create']);
        Route::post('store', ['as' => 'admin.categoria_servico.store', 'uses' => 'Admin\CategoriaServicoController@store']);
        Route::get('show/{id}', ['as' => 'admin.categoria_servico.show', 'uses' => 'Admin\CategoriaServicoController@show']);
        Route::get('edit/{id}', ['as' => 'admin.categoria_servico.edit', 'uses' => 'Admin\CategoriaServicoController@edit']);
        Route::post('update/{id}', ['as' => 'admin.categoria_servico.update', 'uses' => 'Admin\CategoriaServicoController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.categoria_servico.destroy', 'uses' => 'Admin\CategoriaServicoController@destroy']);
        Route::get('purge/{id}', ['as' => 'admin.categoria_servico.purge', 'uses' => 'Admin\CategoriaServicoController@purge']);
    });

    /*END CategoriaServico*/

    /*START FrequenciaNumeracao*/
    Route::prefix('frequencias')->group(function () {
        Route::get('index', ['as' => 'admin.frequencia_numeracao.index', 'uses' => 'Admin\FrequenciaNumeracaoController@index']);
        Route::get('create', ['as' => 'admin.frequencia_numeracao.create', 'uses' => 'Admin\FrequenciaNumeracaoController@create']);
        Route::post('store', ['as' => 'admin.frequencia_numeracao.store', 'uses' => 'Admin\FrequenciaNumeracaoController@store']);
        Route::get('show/{id}', ['as' => 'admin.frequencia_numeracao.show', 'uses' => 'Admin\FrequenciaNumeracaoController@show']);
        Route::get('edit/{id}', ['as' => 'admin.frequencia_numeracao.edit', 'uses' => 'Admin\FrequenciaNumeracaoController@edit']);
        Route::post('update/{id}', ['as' => 'admin.frequencia_numeracao.update', 'uses' => 'Admin\FrequenciaNumeracaoController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.frequencia_numeracao.destroy', 'uses' => 'Admin\FrequenciaNumeracaoController@destroy']);
        Route::get('purge/{id}', ['as' => 'admin.frequencia_numeracao.purge', 'uses' => 'Admin\FrequenciaNumeracaoController@purge']);
    });

    /*END FrequenciaNumeracao*/
    /*START Numeracao*/
    Route::prefix('numeracoes')->group(function () {
        Route::get('', ['as' => 'admin.numeracoes.index', 'uses' => 'Admin\NumeracaoController@index']);
        Route::get('create', ['as' => 'admin.numeracoes.create', 'uses' => 'Admin\NumeracaoController@create']);
        Route::post('store', ['as' => 'admin.numeracoes.store', 'uses' => 'Admin\NumeracaoController@store']);
        Route::get('show/{id}', ['as' => 'admin.numeracoes.show', 'uses' => 'Admin\NumeracaoController@show']);
        Route::get('edit/{id}', ['as' => 'admin.numeracoes.edit', 'uses' => 'Admin\NumeracaoController@edit']);
        Route::post('update/{id}', ['as' => 'admin.numeracoes.update', 'uses' => 'Admin\NumeracaoController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.numeracoes.destroy', 'uses' => 'Admin\NumeracaoController@destroy']);
        Route::get('purge/{id}', ['as' => 'admin.numeracoes.purge', 'uses' => 'Admin\NumeracaoController@purge']);
    });

    /*END Numeracao*/


    /*START TELEFONE*/
    Route::prefix('telefone')->group(function () {
        Route::get('index', ['as' => 'admin.telefone.index', 'uses' => 'Admin\TelefoneController@index']);
        Route::get('create', ['as' => 'admin.telefone.create', 'uses' => 'Admin\TelefoneController@create']);
        Route::post('store', ['as' => 'admin.telefone.store', 'uses' => 'Admin\TelefoneController@store']);
        Route::get('show/{id}', ['as' => 'admin.telefone.show', 'uses' => 'Admin\TelefoneController@show']);
        Route::get('edit/{id}', ['as' => 'admin.telefone.edit', 'uses' => 'Admin\TelefoneController@edit']);
        Route::post('update/{id}', ['as' => 'admin.telefone.update', 'uses' => 'Admin\TelefoneController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.telefone.destroy', 'uses' => 'Admin\TelefoneController@destroy']);
        Route::get('purge/{id}', ['as' => 'admin.telefone.purge', 'uses' => 'Admin\TelefoneController@purge']);
    });

    /*END TELEFONE*/

    /*START PONTO FOCAL*/
    Route::prefix('ponto-focal')->group(function () {
        Route::get('index', ['as' => 'admin.ponto_focal.index', 'uses' => 'Admin\PontoFocalController@index']);
        Route::get('create', ['as' => 'admin.ponto_focal.create', 'uses' => 'Admin\PontoFocalController@create']);
        Route::post('store', ['as' => 'admin.ponto_focal.store', 'uses' => 'Admin\PontoFocalController@store']);
        Route::get('show/{id}', ['as' => 'admin.ponto_focal.show', 'uses' => 'Admin\PontoFocalController@show']);
        Route::get('edit/{id}', ['as' => 'admin.ponto_focal.edit', 'uses' => 'Admin\PontoFocalController@edit']);
        Route::post('update/{id}', ['as' => 'admin.ponto_focal.update', 'uses' => 'Admin\PontoFocalController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.ponto_focal.destroy', 'uses' => 'Admin\PontoFocalController@destroy']);
        Route::get('purge/{id}', ['as' => 'admin.ponto_focal.purge', 'uses' => 'Admin\PontoFocalController@purge']);
    });

    /*END PONTO FOCAL*/

    /*START MORADA SEDE*/
    Route::prefix('morada-sede')->group(function () {
        Route::get('index', ['as' => 'admin.morada_sede.index', 'uses' => 'Admin\MoradaSedeController@index']);
        Route::get('create', ['as' => 'admin.morada_sede.create', 'uses' => 'Admin\MoradaSedeController@create']);
        Route::post('store', ['as' => 'admin.morada_sede.store', 'uses' => 'Admin\MoradaSedeController@store']);
        Route::get('show/{id}', ['as' => 'admin.morada_sede.show', 'uses' => 'Admin\MoradaSedeController@show']);
        Route::get('edit/{id}', ['as' => 'admin.morada_sede.edit', 'uses' => 'Admin\MoradaSedeController@edit']);
        Route::post('update/{id}', ['as' => 'admin.morada_sede.update', 'uses' => 'Admin\MoradaSedeController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.morada_sede.destroy', 'uses' => 'Admin\MoradaSedeController@destroy']);
        Route::get('purge/{id}', ['as' => 'admin.morada_sede.purge', 'uses' => 'Admin\MoradaSedeController@purge']);
    });

    /*END MORADA SEDE*/

    /*START EMAIL*/
    Route::prefix('email')->group(function () {
        Route::get('index', ['as' => 'admin.email.index', 'uses' => 'Admin\EmailController@index']);
        Route::get('create', ['as' => 'admin.email.create', 'uses' => 'Admin\EmailController@create']);
        Route::post('store', ['as' => 'admin.email.store', 'uses' => 'Admin\EmailController@store']);
        Route::get('show/{id}', ['as' => 'admin.email.show', 'uses' => 'Admin\EmailController@show']);
        Route::get('edit/{id}', ['as' => 'admin.email.edit', 'uses' => 'Admin\EmailController@edit']);
        Route::post('update/{id}', ['as' => 'admin.email.update', 'uses' => 'Admin\EmailController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.email.destroy', 'uses' => 'Admin\EmailController@destroy']);
        Route::get('purge/{id}', ['as' => 'admin.email.purge', 'uses' => 'Admin\EmailController@purge']);
    });

    /*END EMAIL*/

    /*START EMAIL*/
    Route::prefix('servico-licenciado')->group(function () {
        Route::get('index', ['as' => 'admin.servico_licenciado.index', 'uses' => 'Admin\ServicoLicenciadoController@index']);
        Route::get('create', ['as' => 'admin.servico_licenciado.create', 'uses' => 'Admin\ServicoLicenciadoController@create']);
        Route::post('store', ['as' => 'admin.servico_licenciado.store', 'uses' => 'Admin\ServicoLicenciadoController@store']);
        Route::get('show/{id}', ['as' => 'admin.servico_licenciado.show', 'uses' => 'Admin\ServicoLicenciadoController@show']);
        Route::get('edit/{id}', ['as' => 'admin.servico_licenciado.edit', 'uses' => 'Admin\ServicoLicenciadoController@edit']);
        Route::post('update/{id}', ['as' => 'admin.servico_licenciado.update', 'uses' => 'Admin\ServicoLicenciadoController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.servico_licenciado.destroy', 'uses' => 'Admin\ServicoLicenciadoController@destroy']);
        Route::get('purge/{id}', ['as' => 'admin.servico_licenciado.purge', 'uses' => 'Admin\ServicoLicenciadoController@purge']);
    });

    /*END EMAIL*/

    /*START Motivo da Revogação*/
    Route::prefix('motivo-revogacao-licenca')->group(function () {
        Route::get('index', ['as' => 'admin.motivo_revogacao_licenca.index', 'uses' => 'Admin\MotivoRevogacaoLicencaController@index']);
        Route::get('create', ['as' => 'admin.motivo_revogacao_licenca.create', 'uses' => 'Admin\MotivoRevogacaoLicencaController@create']);
        Route::post('store', ['as' => 'admin.motivo_revogacao_licenca.store', 'uses' => 'Admin\MotivoRevogacaoLicencaController@store']);
        Route::get('show/{id}', ['as' => 'admin.motivo_revogacao_licenca.show', 'uses' => 'Admin\MotivoRevogacaoLicencaController@show']);
        Route::get('edit/{id}', ['as' => 'admin.motivo_revogacao_licenca.edit', 'uses' => 'Admin\MotivoRevogacaoLicencaController@edit']);
        Route::post('update/{id}', ['as' => 'admin.motivo_revogacao_licenca.update', 'uses' => 'Admin\MotivoRevogacaoLicencaController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.motivo_revogacao_licenca.destroy', 'uses' => 'Admin\MotivoRevogacaoLicencaController@destroy']);
        Route::get('purge/{id}', ['as' => 'admin.motivo_revogacao_licenca.purge', 'uses' => 'Admin\MotivoRevogacaoLicencaController@purge']);
    });

    /*END Motivo da Revogação*/

    /*START CATEG*/
    Route::prefix('categoria-servico')->group(function () {
        Route::get('', ['as' => 'admin.categorias-servicos', 'uses' => 'Admin\CategoriaServicoController@index']);
        Route::get('create', ['as' => 'admin.categoria_servico.create', 'uses' => 'Admin\CategoriaServicoController@create']);
        Route::post('store', ['as' => 'admin.categoria_servico.store', 'uses' => 'Admin\CategoriaServicoController@store']);
        Route::get('show/{id}', ['as' => 'admin.categoria_servico.show', 'uses' => 'Admin\CategoriaServicoController@show']);
        Route::get('edit/{id}', ['as' => 'admin.categoria_servico.edit', 'uses' => 'Admin\CategoriaServicoController@edit']);
        Route::post('update/{id}', ['as' => 'admin.categoria_servico.update', 'uses' => 'Admin\CategoriaServicoController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.categoria_servico.destroy', 'uses' => 'Admin\CategoriaServicoController@destroy']);
        Route::get('purge/{id}', ['as' => 'admin.categoria_servico.purge', 'uses' => 'Admin\CategoriaServicoController@purge']);
    });
    Route::prefix('frequencia-mov-terrestres')->group(function () {
        Route::get('', ['as' => 'admin.frequencia_mov_terrestres', 'uses' => 'Admin\FrequenciaMovTerrestreController@index']);
        Route::get('create', ['as' => 'admin.frequencia_mov_terrestres.create', 'uses' => 'Admin\FrequenciaMovTerrestreController@create']);
        Route::post('store', ['as' => 'admin.frequencia_mov_terrestres.store', 'uses' => 'Admin\FrequenciaMovTerrestreController@store']);
        Route::get('show/{id}', ['as' => 'admin.frequencia_mov_terrestres.show', 'uses' => 'Admin\FrequenciaMovTerrestreController@show']);
        Route::get('edit/{id}', ['as' => 'admin.frequencia_mov_terrestres.edit', 'uses' => 'Admin\FrequenciaMovTerrestreController@edit']);
        Route::post('update/{id}', ['as' => 'admin.frequencia_mov_terrestres.update', 'uses' => 'Admin\FrequenciaMovTerrestreController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.frequencia_mov_terrestres.destroy', 'uses' => 'Admin\FrequenciaMovTerrestreController@destroy']);
        Route::get('purge/{id}', ['as' => 'admin.frequencia_mov_terrestres.purge', 'uses' => 'Admin\FrequenciaMovTerrestreController@purge']);
    });

    Route::prefix('tom-prots')->group(function () {
        Route::get('', ['as' => 'admin.tom_prots', 'uses' => 'Admin\TomProtController@index']);
        Route::get('create', ['as' => 'admin.tom_prots.create', 'uses' => 'Admin\TomProtController@create']);
        Route::post('store', ['as' => 'admin.tom_prots.store', 'uses' => 'Admin\TomProtController@store']);
        Route::get('show/{id}', ['as' => 'admin.tom_prots.show', 'uses' => 'Admin\TomProtController@show']);
        Route::get('edit/{id}', ['as' => 'admin.tom_prots.edit', 'uses' => 'Admin\TomProtController@edit']);
        Route::post('update/{id}', ['as' => 'admin.tom_prots.update', 'uses' => 'Admin\TomProtController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.tom_prots.destroy', 'uses' => 'Admin\TomProtController@destroy']);
        Route::get('purge/{id}', ['as' => 'admin.tom_prots.purge', 'uses' => 'Admin\TomProtController@purge']);
    });

    /*START RELATÓRIO*/
    Route::prefix('relatorios')->group(function () {
        Route::prefix('servicos-licenciados')->group(function () {
            Route::get('', ['as' => 'admin.relatorios.servico_licenciado', 'uses' => 'Admin\RelatorioController@servico_licenciado']);
            Route::post('servico_licenciado_imprimir', ['as' => 'admin.relatorios.servico_licenciado_imprimir', 'uses' => 'Admin\RelatorioController@servico_licenciado_imprimir']);

        });
        Route::prefix('titulos')->group(function () {
            Route::get('', ['as' => 'admin.relatorios.titulo', 'uses' => 'Admin\RelatorioController@titulo']);
            Route::post('titulo_imprimir', ['as' => 'admin.relatorios.titulo_imprimir', 'uses' => 'Admin\RelatorioController@titulo_imprimir']);

        });
        Route::prefix('titulos_operadores')->group(function () {
            Route::get('', ['as' => 'admin.relatorios.titulos_operadores', 'uses' => 'Admin\RelatorioController@titulo_operador']);
            Route::post('titulo_operador_imprimir', ['as' => 'admin.relatorios.titulos_operadores.titulo_operador_imprimir', 'uses' => 'Admin\RelatorioController@titulo_operador_imprimir']);

        });
        
    });
    Route::prefix('ajax')->group(function () {
        Route::prefix('licencas_operadores')->group(function () {
            Route::get('', ['as' => 'admin.ajax.licencas_operadores', 'uses' => 'Ajax\GraficoController@licencas_operadores']);
           

        });
    
        
    });


    /*END RELATÓRIO*/
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::get('dashboard', ['as' => 'admin', 'uses' => 'Admin\HomeController@index']);

    });
});
/*END EMPRESA*/

/*START CATEG*/
// Route::prefix('categorias-servicos')->group(function () {
//     Route::get('', ['as' => 'admin.categorias-servicos', 'uses' => 'Admin\CategoriaServicoController@index']);
//     Route::get('create', ['as' => 'admin.categorias-servicos.create', 'uses' => 'Admin\CategoriaServicoController@create']);
//     Route::post('store', ['as' => 'admin.categorias-servicos.store', 'uses' => 'Admin\CategoriaServicoController@store']);
//     Route::get('show/{id}', ['as' => 'admin.categorias-servicos.show', 'uses' => 'Admin\CategoriaServicoController@show']);
//     Route::get('edit/{id}', ['as' => 'admin.categorias-servicos.edit', 'uses' => 'Admin\CategoriaServicoController@edit']);
//     Route::post('update/{id}', ['as' => 'admin.categorias-servicos.update', 'uses' => 'Admin\CategoriaServicoController@update']);
//     Route::get('destroy/{id}', ['as' => 'admin.categorias-servicos.destroy', 'uses' => 'Admin\CategoriaServicoController@destroy']);
//     Route::get('purge/{id}', ['as' => 'admin.categorias-servicos.purge', 'uses' => 'Admin\CategoriaServicoController@purge']);
// });
// });
/*END EMPRESA*/



/*START CATEG*/
// Route::prefix('categorias-servicos')->group(function () {
//     Route::get('', ['as' => 'admin.categorias-servicos', 'uses' => 'Admin\CategoriaServicoController@index']);
//     Route::get('create', ['as' => 'admin.categorias-servicos.create', 'uses' => 'Admin\CategoriaServicoController@create']);
//     Route::post('store', ['as' => 'admin.categorias-servicos.store', 'uses' => 'Admin\CategoriaServicoController@store']);
//     Route::get('show/{id}', ['as' => 'admin.categorias-servicos.show', 'uses' => 'Admin\CategoriaServicoController@show']);
//     Route::get('edit/{id}', ['as' => 'admin.categorias-servicos.edit', 'uses' => 'Admin\CategoriaServicoController@edit']);
//     Route::post('update/{id}', ['as' => 'admin.categorias-servicos.update', 'uses' => 'Admin\CategoriaServicoController@update']);
//     Route::get('destroy/{id}', ['as' => 'admin.categorias-servicos.destroy', 'uses' => 'Admin\CategoriaServicoController@destroy']);
//     Route::get('purge/{id}', ['as' => 'admin.categorias-servicos.purge', 'uses' => 'Admin\CategoriaServicoController@purge']);
// });
// });
/*END EMPRESA*/
