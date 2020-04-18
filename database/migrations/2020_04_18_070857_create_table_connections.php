<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableConnections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('f_member_id');
            $table->bigInteger('s_member_id');
            $table->tinyInteger('status')->comment('0-Pending. 1-Accepted, 2-Declined, 3-Blocked');
            $table->bigInteger('action_by')->comment('member id who do the last action(status)');
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
        Schema::dropIfExists('connections');
    }
}
