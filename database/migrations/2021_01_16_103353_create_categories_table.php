<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id')->comment('id');
            $table->string('name')->default('')->comment('分类名');
            $table->text('description')->comment('分类描述');
            $table->integer('article_count')->default(0)->comment('文章');
        });
    }

    public function down()
    {
        Schema::drop('categories');
    }
}
