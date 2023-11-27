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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50);
            $table->string('middle_name', 50);
            $table->string('last_name', 50);
            $table->longText('image');
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('contact_number', 11);
            $table->string('email_address', 40);
            $table->string('no_of_dependents', 5);
            $table->string('religion', 40)->nullable();
            $table->string('nationality', 20)->nullable();
            $table->text('present_address');
            $table->string('civil_status', 15);
            $table->string('spouse_first_name', 50);
            $table->string('spouse_middle_name', 50);
            $table->string('spouse_last_name', 50);
            $table->date('spouse_date_of_birth')->nullable();
            $table->string('spouse_contact_number', 11)->nullable();
            $table->string('spouse_spouse_occupation')->nullable();
            $table->string('spouse_employer_name')->nullable();
            $table->string('spouse_employer_contact_no', 11)->nullable();
            $table->string('spouse_monthly_income')->nullable();
            $table->string('spouse_employment_status', 10)->nullable();
            $table->string('spouse_employment_length_service')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
