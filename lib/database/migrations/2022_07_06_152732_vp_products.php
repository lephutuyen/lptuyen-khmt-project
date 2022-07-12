<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_products', function (Blueprint $table) {
            $table->increments('prod_id');
            $table->string('prod_author');
            $table->string('prod_acticle');
            $table->string('prod_publisher');
            $table->string('prod_year');
            $table->string('prod_chapter');
            $table->integer('prod_cate')->unsigned();
            $table->integer('prod_profile')->unsigned();
            $table->foreign('prod_cate')
                ->references('cate_id')
                ->on('vp_categories')
                ->onDelete('cascade');
            $table->foreign('prod_profile')
                ->references('prol_id')
                ->on('vp_profile')
                ->onDelete('cascade');
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
        Schema::dropIfExists('vp_products');
    }
}
