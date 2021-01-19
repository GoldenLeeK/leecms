<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index()->default('')->comment('标题');
            $table->string('cover')->default('')->comment('文章封面');
            $table->text('content')->comment('文章内容');
            $table->bigInteger('user_id')->unsigned()->index()->default(0)->comment('作者用户id');
            $table->integer('category_id')->unsigned()->index()->default(0)->comment('分类id');
            $table->integer('reply_count')->unsigned()->default(0)->comment('评论数');
            $table->integer('view_count')->unsigned()->default(0)->comment('浏览数');
            $table->integer('last_reply_user_id')->unsigned()->default(0)->comment('上次回复用户id');
            $table->integer('order')->unsigned()->default(0)->comment('排序oid');
            $table->text('abstract')->comment('文章摘要');
            $table->string('slug')->default('')->comment('网页标题SEO');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('articles');
    }
}
