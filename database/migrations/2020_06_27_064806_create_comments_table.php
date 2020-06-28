<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id')->comment('id Задачи')->constrained();
            $table->longText('comment_next')->comment('Текст комментария');
            $table->foreignId('user_id')->comment('id Пользователя, оставившего комментарий')->constrained();
            $table->boolean('type_of_comment')->comment('Личный - true/ общий - false')->default(true);
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
        Schema::dropIfExists('comments');
    }
}
