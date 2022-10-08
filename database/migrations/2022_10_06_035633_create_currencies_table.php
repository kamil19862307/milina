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
        Schema::create('currencies', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->timestamps();

            $table->string('name');
            $table->decimal('price')->unsigned();// Для цен и валют decimal более удобный тип данных, не округляет значения
            $table->boolean('active')->default(true);
            $table->integer('sort')->default(999);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currencies');
    }
};
