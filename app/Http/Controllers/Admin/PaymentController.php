<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Loan;
use App\Models\Member;

class PaymentController extends Controller
{
    private $payment;
    private $loan;
    private $member;

    public function __construct(Payment $payment, Loan $loan, Member $member){
        $this->payment = $payment;
        $this->loan = $loan;
        $this->member = $member;
    }

    // public function index(){
    //     $all_payments = $this->payment->orderBy('date_of_payment', 'desc')->get();
    //     return view('members.loans.add-payment')->with('all_payments', $all_payments);
    // }

    public function makePayment(Request $request, $member_id){
        $request->validate([
            'loan_id' => 'required',
            'date_of_payment' => 'required',
            'principal_amount' => 'required',
            'amount_interest' => 'required'
            // 'total_payable' => 'required'
        ]);

        $this->payment->member_id = $member_id;
        $this->payment->loan_id = $request->loan_id;
        $this->payment->principal_amount = $request->principal_amount;
        $this->payment->date_of_payment = $request->date_of_payment;
        $this->payment->interest_payment = $request->amount_interest;
        $this->payment->total_amount_paid = $request->principal_amount + $request->amount_interest;
        $this->payment->save();

        return redirect()->back();
    }
    public function viewPaymentById($loan_id){
        $loan_id_to_pay = $loan_id;
        $loan = $this->loan->findOrFail($loan_id);

        $loan_payment = $this->payment->where('loan_id', $loan_id)->latest()->get();


        return view('members.loans.post-payment-by-id')
            ->with('loan',$loan)
            ->with('loan_id_to_pay', $loan_id_to_pay)
            ->with('loan_payment', $loan_payment);
    }

    public function viewThePostedPayment($loan_id){
        $loan_payment = $this->payment->findOrFail($loan_id);
        return view('members.loans.post-payment-by-id')->with('loan_payment', $loan_payment);
    }

    public function postThePaymentById(Request $request)
    {
        $request->validate([
            'loan_id' => 'required|numeric',
            'member_id' => 'required|numeric',
            'principal_amount' => 'required|numeric',
            'date_of_payment' => 'required|date',
            'interest_payment' => 'required|numeric',
            'total_payment_paid' => 'required|numeric'
        ]);

        $this->payment->member_id = $request->member_id;
        $this->payment->loan_id = $request->loan_id;
        $this->payment->principal_amount = $request->principal_amount;
        $this->payment->date_of_payment = $request->date_of_payment;
        $this->payment->interest_payment = $request->interest_payment;
        $this->payment->total_amount_paid = $request->total_payment_paid;
        $this->payment->save();

        return redirect()->back();
    }
}
