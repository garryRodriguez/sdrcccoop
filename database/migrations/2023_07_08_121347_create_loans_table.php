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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->string('first_name', 40)->nullable();
            $table->string('middle_name', 40)->nullable();
            $table->string('last_name', 40)->nullable();
            $table->text('address')->nullable();
            $table->string('contact_number', 12)->nullable();
            $table->string('nature_of_loan', 5)->nullable();
            $table->date('date_of_loan_application', 5)->nullable();
            $table->float('monthly_salary', 10, 2)->nullable();
            $table->float('other_income', 10, 2)->nullable();
            $table->float('less_deduction', 10, 2)->nullable();
            $table->float('monthly_net_pay', 10, 2)->nullable();
            $table->string('term_of_loan', 20)->nullable();
            $table->string('name_of_comaker', 50)->nullable();
            $table->float('loan_balance', 10, 2)->nullable();
            $table->float('approved_loan_amount', 10, 2)->nullable();
            $table->string('notes_and_comments', 1000)->nullable();
            $table->timestamps();

            $table->foreign('member_id')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
