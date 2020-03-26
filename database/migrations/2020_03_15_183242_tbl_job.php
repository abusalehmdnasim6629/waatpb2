<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblJob extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_job', function (Blueprint $table) {
            $table->increments('job_id');
            $table->string('employee_name');
            $table->string('department');
            $table->string('position');
            $table->string('vacancies');
            $table->string('job_location');
            $table->string('joining_date');
            $table->string('package');
            $table->string('deadline');
            $table->string('additional_notes');
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
