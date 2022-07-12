<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VpProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_profile', function (Blueprint $table) {
            $table->increments('prol_id');
            $table->string('prol_name');
            $table->string('prol_info');
            $table->integer('prol_date');
            $table->string('prol_sex');
            $table->string('prol_mail');
            $table->string('prol_phone');
            $table->string('prol_contact');
            $table->string('prol_address');
            $table->string('prol_image');
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
        Schema::dropIfExists('vp_profile');
    }
}
