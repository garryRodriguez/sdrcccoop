<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Loan;

class Member extends Model
{
    use HasFactory, SoftDeletes;

    public function loan(){
        return $this->hasOne(Loan::class);
    }
}
