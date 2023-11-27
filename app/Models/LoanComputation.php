<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Loan;

class LoanComputation extends Model
{
    use HasFactory;
    public $table = "loancomputations";
}
