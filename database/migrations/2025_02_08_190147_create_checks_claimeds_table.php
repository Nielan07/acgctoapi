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
        Schema::create('checks_claimeds', function (Blueprint $table) {
            $table->id();
            $table->date('tran_date');
            $table->integer('fund_cluster_id');
            $table->integer('bank_id');
            $table->integer('encoded_by_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checks_claimeds');
    }
};
