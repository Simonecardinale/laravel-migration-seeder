<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecigs', function (Blueprint $table) {
            $table->id();
            $table -> string('marca');
            $table -> string('tipologia');
            $table -> string('liquidi');
            $table -> float('prezzo',5,2);
            $table -> text('description');
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
        Schema::dropIfExists('ecigs');
    }
}
