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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('extension')->nullable();
            $table->string('flexcube')->nullable();
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('employee_id');
            $table->timestamps();
            $table->foreign('location_id')->references('id')
                                            ->on('locations')
                                            ->onUpdate('cascade')
                                            ->onDelete('cascade');
            $table->foreign('employee_id')->references('id')
                                            ->on('employees')
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
        Schema::dropIfExists('contacts');
    }
};
