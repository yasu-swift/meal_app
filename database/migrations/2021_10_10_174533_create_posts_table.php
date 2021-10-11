<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
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
            $table->string('title');
            $table->text('body');
            $table->text('image');
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('category_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            // $table->unsignedInteger('category_id')->nullable();
            // $table->foreign('category_id')              // category_idに外部キーを設定する
            //     ->references('id')->on('categories')    // categoriesテーブルのidカラムを外部キーにする
            //     ->onDelete('restrict')->nullable();                 // 参照先の削除を禁止する
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
        Schema::dropIfExists('posts');
    }
}
