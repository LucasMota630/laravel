<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anuncio', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->unsignedBigInteger('id_veiculo');
            $table->string('titulo', 255);
            $table->string('descricao', 255);
            $table->string('preco', 255);
            $table->string('data_publicacao', 255);

            // $table->foreign('id_veiculo')->references('id')->on('veiculo');
            // $table->unique('id_veiculo');

            // $table->foreign('id_proprietario')->references('id')->on('proprietario');

        });

        // Schema::table('proprietario', function(Blueprint $table) {
        //     $table->unsignedBigInteger('id_proprietario');
        //     $table->foreign('id_proprietario')->references('id_proprietario')->on('anuncio');
        // });

        // Schema::table('veiculo', function(Blueprint $table) {
        //     $table->unsignedBigInteger('id_veiculo');
        //     $table->foreign('id_veiculo')->references('id_veiculo')->on('anuncio');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('proprietario', function(Blueprint $table) {
        //     $table->dropForeign('proprietario_id_anuncio_foreign');
        //     $table->dropColumn('id_anuncio');
        // });

        // Schema::table('anuncio', function(Blueprint $table) {
        //     $table->dropForeign('anuncio_id_proprietario_foreign');
        //     $table->dropColumn('id_proprietario');
        // });
        Schema::dropIfExists('anuncio');
    }
};
