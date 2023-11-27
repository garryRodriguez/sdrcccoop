<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\LoanComputation;
use App\Models\Member;
use App\Models\Payment;

class LoanController extends Controller
{
    private $loan;
    private $member;
    private $loan_computation;
    private $payment;

    public function __construct(Loan $loan, Member $member, LoanComputation $loan_computation, Payment $payment){
        $this->loan = $loan;
        $this->member = $member;
        $this->loan_computation = $loan_computation;
        $this->payment = $payment;

    }

    public function index(){
        // Display members who have loan
    }

    public function getMemberDetails($member_id){
        $m_details = $this->member->findOrFail($member_id);
        return view('members.loans.loan')->with('m_details', $m_details);
    }
    // Store loan application
    public function store(Request $request, $member_id){
        $request->validate([
            'first_name' => 'required|min:1|max:40',
            'middle_name' => 'required|min:1|max:40',
            'last_name' => 'required|min:1|max:40',
            'member_residence_address' => 'required|min:1|max:200',
            'contact_no' => 'required|min:1|max:11',
            'nature_of_loan' => 'required',
            'date_of_application' => 'required',
            'monthly_salary' => 'required',
            'other_income' => 'required',
            'less_deduction' => 'required',
            'monthly_net_pay' => 'required',
            'term_of_loan' => 'required',
            'comakers_name' => 'required|min:1|max:40',
            'loan_balance' => 'required',
            'approved_loan' => 'required',
            'notes_comments' => 'min:1|max:1000'
        ]);

        $this->loan->member_id = $member_id;
        $this->loan->first_name = $request->first_name;
        $this->loan->middle_name = $request->middle_name;
        $this->loan->last_name = $request->last_name;
        $this->loan->address = $request->member_residence_address;
        $this->loan->contact_number = $request->contact_no;
        $this->loan->nature_of_loan = $request->nature_of_loan;
        $this->loan->date_of_loan_application = $request->date_of_application;
        $this->loan->monthly_salary = $request->monthly_salary;
        $this->loan->other_income = $request->other_income;
        $this->loan->less_deduction = $request->less_deduction;
        $this->loan->monthly_net_pay = $request->monthly_net_pay;
        $this->loan->term_of_loan = $request->term_of_loan;
        $this->loan->name_of_comaker = $request->comakers_name;
        $this->loan->loan_balance = $request->loan_balance;
        $this->loan->approved_loan_amount = $request->approved_loan;
        $this->loan->notes_and_comments = $request->notes_comments;
        $this->loan->cbu = $request->cbu_data;
        $this->loan->interest_rate = $request->monthly_interest_rate;
        $this->loan->interest = $this->totalInterest();
        $this->loan->save();

        return redirect()->back();
    }

    public function totalInterest(){
            // return $this->loan->approved_loan_amount * ($this->loan->term_of_loan * 0.03);
            return ($this->loan->interest_rate / 100) * $this->loan->approved_loan_amount * $this->loan->term_of_loan;
    }

    // public function getInterest(){
    //     return $this->loan->approved_loan_amount * 0.12;
    //     // if ($this->loan->nature_of_loan == "4") {
    //     //     return $this->loan->approved_loan_amount * 0.4;
    //     // } elseif ($this->loan->nature_of_loan == "6") {
    //     //     return $this->loan->approved_loan_amount * 0.6;
    //     // } elseif ($this->loan->nature_of_loan == "8") {
    //     //     return $this->loan->approved_loan_amount * 0.8;
    //     // } elseif ($this->loan->nature_of_loan == "10") {
    //     //     return $this->loan->approved_loan_amount * 0.10;
    //     // } elseif ($this->loan->nature_of_loan == "11") {
    //     //     return $this->loan->approved_loan_amount * 0.11;
    //     // }elseif ($this->loan->nature_of_loan == "12") {
    //     //     return $this->loan->arpproved_loan_amount * 0.12;
    //     // }elseif ($this->loan->nature_of_loan == "24") {
    //     //     return $this->loan->arpproved_loan_amount * 0.24;
    //     // }elseif ($this->loan->nature_of_loan == "36") {
    //     //     return $this->loan->arpproved_loan_amount * 0.36;
    //     // }
    // }

    public function getServiceCharge(){
        return $this->loan->approved_loan_amount * 0.1;
    }

    public function viewloanComputation($member_id){
        // $loan_details = $this->loan->where('member_id', $member_id)->get();
        $loan_member_id = $this->loan->where('member_id', $member_id)->get();
        
        $m_member_id = $member_id;
        
        // $loan_computed = $this->loan_computation->latest()->get();
        $loan_computed = $this->loan_computation->where('member_id', $member_id)->get();
        // $loan_interest = $loan_member_id->approved_loan_amount * $interest_amount;

        return view('members.loans.loancomputation')
            ->with('loan_member_id', $loan_member_id)
            ->with('loan_computed', $loan_computed)
            ->with('m_member_id', $m_member_id);
    }

    public function storeLoanComputation(Request $request, $loan_id){
        $request->validate([
            'principal_amount' => 'required',
            'interest_amount' => 'required',
            'payment_terms' => 'required',
            'service_charge' => 'required',
            'capital_build_up' => 'required',
            'membership_fee' => 'required',
            'loan_balance' => 'required',
            // 'net_proceeds' => 'required',
            // 'monthly_amortization' => 'required',
            // 'per_payroll_deduction' => 'required',
            'loan_status' => 'required',
            'member_id' => 'required',
            'approved_by' => 'required'
        ]);
        //*********************************************************************************************
        // $this->loan_computation->loan_id = $loan_id; //ok
        // $this->loan_computation->principal_amount = $request->principal_amount; //ok
        // $this->loan_computation->interest_amount = $request->interest_amount; // user will input manually
        // $this->loan_computation->service_charge = $request->service_charge; //ok
        // $this->loan_computation->capital_build_up = $request->capital_build_up; // user will input manually
        // $this->loan_computation->membership_fee = $request->membership_fee; //ok
        // $this->loan_computation->loan_balance = $request->loan_balance;
        // // $this->loan_computation->net_proceeds = $request->net_proceeds; // will calculate once data is saved to db
        // // $this->loan_computation->monthly_amortization = $request->monthly_amortization; // will calculate once data is saved to db
        // // $this->loan_computation->per_payroll_deduction = $request->per_payroll_deduction; // will calculate once data is saved to db
        // $this->loan_computation->loan_status = $request->loan_status; //ok user will input manually
        // $this->loan_computation->approved_by = $request->approved_by; //ok user will input manually
        // $this->loan_computation->term_of_payment = $request->payment_terms; //ok user will input manually
        // $this->loan_computation->save();

        // return redirect()->back()->with('loan-computation-added', 'Loan Computation Added Successfully');
        //****************************************************************************************************
        if ($this->loan_computation->where('loan_id', $loan_id)->exists())
        {
            return redirect()->back()->with('exists', 'Loan computation already exists!');
        }else {
                $this->loan_computation->loan_id = $loan_id; //ok
                $this->loan_computation->principal_amount = $request->principal_amount; //ok
                $this->loan_computation->interest_amount = $request->interest_amount; // user will input manually
                $this->loan_computation->service_charge = $request->service_charge; //ok
                $this->loan_computation->capital_build_up = $request->capital_build_up; // user will input manually
                $this->loan_computation->membership_fee = $request->membership_fee; //ok
                $this->loan_computation->loan_balance = $request->loan_balance;
                // $this->loan_computation->net_proceeds = $request->net_proceeds; // will calculate once data is saved to db
                // $this->loan_computation->monthly_amortization = $request->monthly_amortization; // will calculate once data is saved to db
                // $this->loan_computation->per_payroll_deduction = $request->per_payroll_deduction; // will calculate once data is saved to db
                $this->loan_computation->loan_status = $request->loan_status; //ok user will input manually
                $this->loan_computation->member_id = $request->member_id;
                $this->loan_computation->approved_by = $request->approved_by; //ok user will input manually
                $this->loan_computation->term_of_payment = $request->payment_terms; //ok user will input manually
                $this->loan_computation->save();

                return redirect()->back()->with('loan-computation-added', 'Loan Computation Added Successfully');
        }
    }

    # View Amortization Schedule
    public function viewAmort($member_id){
        $amort_data = $this->loan->where('member_id', $member_id)->get();
        return view('members.loans.amortization-sched')->with('amort_data', $amort_data);
    }

    public function payment($member_id){
        // $all_payments = $this->payment->latest()->get();
        $all_payments = $this->payment->where('member_id', $member_id)->latest()->get();
        $total_payments = $this->payment->where('member_id', $member_id)->sum('total_amount_paid');
        $total_payment_of_interest = $this->payment->where('member_id', $member_id)->sum('interest_payment');
        $payment = $this->loan->where('member_id', $member_id)->get();
        return view('members.loans.add-payment')
            ->with('payment', $payment)
            ->with('all_payments', $all_payments)
            ->with('total_payment_of_interest', $total_payment_of_interest)
            ->with('total_payments', $total_payments);
    }

    //Search for member_id records in loan computations and
    //open up the add-payment-by-loan-id page
    public function openAddPaymentByLoanIDPage($member_id)
    {
        //query the loans computations table to get the loans id
        $member_loan_ids = $this->loan_computation->where('member_id', $member_id)->get();
        return view('members.loans.add-payment-by-loan-id')->with('member_loan_ids', $member_loan_ids);
    }

}
