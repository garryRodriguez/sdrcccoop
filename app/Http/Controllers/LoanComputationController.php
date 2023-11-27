<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanComputation;
use App\Models\Loan;

class LoanComputationController extends Controller
{
    private $loancomputation;
    private $loan;

    public function __construct(LoanComputation $loancomputation, Loan $loan){
        $this->loancomputation = $loancomputation;
        $this->loan = $loan;
    }

    // public function index(){
    //     $loan_computed = $this->loancomputation->latest()->get();
    //     return view('members.loans.loancomputation')->with('loan_computed', $loan_computed);
    // }

    // public function loanDetails($member_id){
    //     $loan_details = $this->loan->findOrFail($member_id);
    //     return view('members.loans.loancomputation')->with('loan_details', $loan_details);
    // }

    // public function store(Request $request, $loan_id){
    //     $request->validate([
    //         'principal_amount' => 'required|float',
    //         'interest_amount' => 'required',
    //         'service_charge' => 'required',
    //         'capital_build_up' => 'required|between:1,10000',
    //         'membership_fee' => 'required',
    //         'loan_balance' => 'required',
    //         'net_proceeds' => 'required',
    //         'monthly_amortization' => 'required',
    //         'per_payroll_deduction' => 'required',
    //         'loan_status' => 'required|min:1|max:10',
    //         'member_id' => 'required',
    //         'approved_by' => 'required|min:1|max:20'
    //     ]);

    //     $this->loancomputation->loan_id = $loan_id;
    //     $this->loancomputation->interest_amount = $request->interest_amount;
    //     $this->loancomputation->service_charge = $request->service_charge;
    //     $this->loancomputation->capital_build_up = $request->capital_build_up;
    //     $this->loancomputation->membership_fee = $request->membership_fee;
    //     $this->loancomputation->loan_balance = $request->loan_balance;
    //     $this->loancomputation->net_proceeds = $request->net_proceeds;
    //     $this->loancomputation->monthly_amortization = $request->monthly_amortization;
    //     $this->loancomputation->per_payroll_deduction = $request->per_payroll_deduction;
    //     $this->loancomputation->loan_status = $request->loan_status;
    //     $this->loancomputation->member_id = $request->member_id;
    //     $this->loancomputation->approved_by = $request->approved_by;
    //     $this->loancomputation->save();
    // }
}
