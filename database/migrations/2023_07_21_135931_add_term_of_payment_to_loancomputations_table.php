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
        Schema::table('loancomputations', function (Blueprint $table) {
            $table->biginteger('term_of_payment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loancomputations', function (Blueprint $table) {
            $table->dropColumn('term_of_payment');
        });
    }
};
