<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_member', function (Blueprint $table) {
            $table->increments('member_id');
            $table->string('member_name');
            $table->string('email_address');
            $table->string('contact_number');
            $table->string('nid');
            $table->string('present_organization');
            $table->string('blood_group');
            $table->string('department');
            $table->string('designation');
            $table->string('present_address');
            $table->string('password');
            $table->string('image');
            $table->string('member_skill');
            $table->string('member_hobby');
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
        //
    }
}
