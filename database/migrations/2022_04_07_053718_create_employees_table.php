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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->string('title');
            $table->unsignedBigInteger('department_id');
            $table->string('employee_id');
            $table->string('present_address',1000)->nullable();
            $table->string('vehicle_no')->nullable();
            $table->string('image');
            $table->enum('status', ['active','disabled']);
            $table->timestamps();
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
        Schema::dropIfExists('employees');
    }
};
