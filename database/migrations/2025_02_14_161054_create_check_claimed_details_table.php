<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('checks_claimed_details', function (Blueprint $table) {
            $table->id();
            $table->integer('check_claimed_id');
            $table->date('check_date');
            $table->string('check_number');
            $table->integer('db_payroll_number');
            $table->string('ors_burs_number');
            $table->integer('department_id');
            $table->string('payee');
            $table->string('nature_of_payment');
            $table->decimal('amount', 12, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checks_claimed_details');
    }
};
