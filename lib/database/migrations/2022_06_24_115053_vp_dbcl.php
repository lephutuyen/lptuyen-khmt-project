<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpDbcl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_dbcl', function (Blueprint $table) {
            $table->increments('dbcl_id');
            $table->integer('dbcl_count');
            $table->string('dbcl_code');
            $table->string('dbcl_title');
            $table->string('dbcl_file');
            $table->string('dbcl_cate');
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
        Schema::dropIfExists('vp_dbcl');
    }
}
