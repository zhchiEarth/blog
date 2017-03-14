<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedMediumInteger('category_id')->defaul(0)->comment('分类编号');
            $table->unsignedMediumInteger('user_id')->defaul(0)->comment('用户编号');
            $table->string('title', 128)->defaul('')->comment('标题');
            $table->string('slug', 128)->default('')->comment('简介');
            $table->text('content')->comment('内容');
            $table->unsignedTinyInterger('is_draft')->default(0)->comment('是否草稿:0是,1 不是');
            $table->unsignedMediumInteger('view_count')->default(0)->comment('点击量');
            $table->unsignedMediumInteger('comment_count')->default(0)->comment('评论数');
            $table->unsignedMediumInteger('vote_count')->defaul(0)->comment('点赞数');
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
        Schema::dropIfExists('articles');
    }
}
