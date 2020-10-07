<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->string('memberno');
            $table->string('unitname');
            $table->string('unitno');
            $table->string('name');
            $table->string('age');
            $table->string('fhname');
            $table->string('profession');
            $table->string('village');
            $table->string('post');
            $table->string('upazila');
            $table->string('district');
            $table->string('subname');
            $table->string('relation');
            $table->string('subvillage');
            $table->string('subpost');
            $table->string('subupazila');
            $table->string('subdistrict');
            $table->string('status');
            $table->string('free');
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
        Schema::dropIfExists('members');
    }
}
