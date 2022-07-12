<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_information', function (Blueprint $table) {
            $table->increments('info_id')->unsigned();
            $table->integer('info_cate_id')->unsigned();
            $table->foreign('info_cate_id')
                ->references('post_cate_id')
                ->on('vp_post_cate')
                ->onDelete('cascade');
            $table->string('info_title');
            $table->mediumText('info_content');
            $table->string('info_image');
            $table->dateTime('date_post');
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
        Schema::dropIfExists('vp_information');
    }
}
