<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('federacaos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('presidente');
            $table->string('selecao');
            $table->date('fundacao');
            $table->string('sede');
            $table->string('treinador')->nullable();
            $table->string('logo_url');
            $table->string('email_contato');
            $table->string('telefone')->nullable();
            $table->string('url_site')->default('/federacoes/logo/bandeira.jpeg');
            $table->string('confederacao');
            $table->longText('descricao');
            $table->string('slug')->unique();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('federacaos');
    }
};
