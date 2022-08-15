<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumpulan_documents', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dokumen',1000);
            $table->unsignedBigInteger('id_undangan')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->string('status',1000);
            $table->foreign('id_undangan')->references('id')->on('undangan');
            $table->foreign('id_user')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengumpulan_documents');
    }
};
