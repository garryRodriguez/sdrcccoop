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
        Schema::create('loancomputations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('loan_id');
            $table->float('principal_amount', 10, 2);
            $table->float('interest_amount', 10, 2)->nullable();
            $table->float('service_charge', 10, 2)->nullable();
            $table->float('capital_build_up', 10, 2)->nullable();
            $table->float('membership_fee', 10, 2)->nullable();
            $table->float('loan_balance', 10, 2)->nullable();
            $table->float('net_proceeds', 10, 2)->nullable();
            $table->float('monthly_amortization', 10, 2)->nullable();
            $table->float('per_payroll_deduction', 10, 2)->nullable();
            $table->string('loan_status');
            $table->string('approved_by');
            $table->timestamps();

            $table->foreign('loan_id')->references('id')->on('loans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loancomputations');
    }
};
