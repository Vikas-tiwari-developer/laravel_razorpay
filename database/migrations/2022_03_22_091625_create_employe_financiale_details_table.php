<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeFinancialeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_financiale_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('emp_id')->constrained('employee_details')->onDelete('cascade');
            $table->string('bank_name')->nullable();
            $table->string('acc_no')->nullable();
            $table->string('ifsc')->nullable();
            $table->timestamps();
        });
    }
//$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employe_financiale_details');
    }
}
