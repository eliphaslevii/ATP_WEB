<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_table',function(Blueprint $table)
        {
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->integer('cod_item')->unique;
            $table->string('nome_item');
            $table->string('desc_item');
            $table->timestamp('created_item_data');


        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
