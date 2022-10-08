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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

//            $table->bigInteger('user_id')->unsigned()->nullable();//связывающее поле
//            $table->foreign('user_id')->references('id')->on('user')->onDelete('set null');//внешний ключ
            // идентично двум строкам вышеуказанных, только без удаления. Сам поймёт, что это таблица users
            $table->foreignId('user_id')->constrained();

            $table->string('title');
            $table->text('content');
            $table->boolean('active')->default(true);
            $table->timestamp('published_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
