<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactrequests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->string('title');
            $table->unsignedBigInteger('department_id');
            $table->string('employee_id');
            $table->string('image');
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('extension')->nullable();
            $table->string('flexcube')->nullable();
            $table->unsignedBigInteger('location_id');
            $table->timestamps();
            $table->foreign('location_id')->references('id')
                                            ->on('locations')
                                            ->onUpdate('cascade')
                                            ->onDelete('cascade');
            $table->foreign('department_id')->references('id')
                                            ->on('departments')
                                            ->onUpdate('cascade')
                                            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactrequests');
    }
};
