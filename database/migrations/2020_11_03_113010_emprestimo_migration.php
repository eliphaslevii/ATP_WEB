<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmprestimoMigration extends Migration
{

    public function up()
    {
        Schema::create('item_emprestimo',function(Blueprint $table)
        {
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->unsignedBigInteger('id_funcionario');
            $table->foreign('id_funcionario')->references('id')->on('users');
            $table->unsignedBigInteger('id_item')->unique;
            $table->foreign('id_item')->references('cod_item')->on('item_table');
            $table->date('data_devolucao')->nullable;
            $table->timestamp('data_emprestimo');
            $table->integer('status');

        });

    }

    public function down()
    {
        //
    }
}
