@extends('layouts.app')

@section('title', 'Add Payment')

@section('content')
    <div class="container bg-white shadow p-2">
        <div class="h2 text-center">
            Add Payment
        </div>

        @forelse ($payment as $loan_payment)
            <table class="table table-sm table-hover align-middle bg-white border text-secondary w-75 mx-auto shadow">
                <tr class="text-align-start">
                    <td class="h6" colspan="6"><span class="fw-bold">Name:</span> <span class="">{{$loan_payment->first_name}} {{$loan_payment->last_name}}</span></td>
                </tr>
                <tr class="text-align-start">
                    <td class="h6" colspan="6"><span class="fw-bold">Date Granted:</span> <span class="">{{$loan_payment->created_at->format('d-m-Y')}}</span></td>
                </tr>
                <tr class="text-align-start">
                    <td class="h6" colspan="6"><span class="fw-bold">Maturity Date:</span> <span class=""></span> </td>
                    {{-- <td class="h5" colspan="5"><span class="fw-bold">Maturity Date:</span> <span class="">{{$loan_payment->created_at->addDays(360)->format('d-m-Y')}}</span> </td> --}}
                </tr>
                <tr class="text-align-start">
                    <td class="h6" colspan="6"><span class="fw-bold">Member ID:</span><span class=""> 000{{$loan_payment->member_id}}</span></td>
                </tr>
                <!--###############-->
                <tr class="text-align-start" rowspan="5">
                    {{-- <td class="h6" colspan="3"><span class="fw-bold">Principal Amount:</span> <span class="">{{$loan_payment->approved_loan_amount}} + Interest: {{$loan_payment->interest}}</span></td> --}}
                    <td class="h6" colspan="3"><span class="fw-bold">Principal Amount:</span> <span class="">{{$loan_payment->approved_loan_amount}} + Interest: {{$loan_payment->interest}}</span></td>
                    <td class="h6"><span class="fw-bold">Total Payable Amount:</span><span class="text-danger fw-bold"> {{$loan_payment->approved_loan_amount + $loan_payment->interest}}</span></td>
                    <td class="h6" colspan="1"><span class="fw-bold"><span class="">Total Payments: <span class="text-danger">{{$total_payments}}</span></td>
                    <td class="h6" colspan="1"><span class="fw-bold"><span class="">Current Balance: <span class="text-danger">{{($loan_payment->approved_loan_amount + $loan_payment->interest) - ($total_payments)}}</span></td>
                </tr>
                <!--###############-->
                <!--##########################################################################-->
                <!--<tr class="text-align-start" rowspan="5">-->
                <!--    <td class="h6" colspan="3"><span class="fw-bold">Principal Amount: {{$loan_payment->approved_loan_amount}}</span></td>-->
                <!--    <td class="h6" colspan="1"><span class="fw-bold"><span class="">Current Balance: <span class="text-danger">{{$loan_payment->approved_loan_amount - $total_payments}}</span>-->
                <!--    </td>-->
                <!--</tr>-->
                <!--<tr class="text-align-start" rowspan="5">-->
                <!--    <td class="h6" colspan="3"><span class="fw-bold">Principal Amount:</span> <span class="">{{$loan_payment->approved_loan_amount}} + Interest: {{$loan_payment->interest}}</span></td>-->
                <!--    <td class="h6"><span class="fw-bold">Total Payable Amount:</span><span class=""> {{$loan_payment->approved_loan_amount + $loan_payment->interest}}</span></td>-->
                <!--    <td class="h6" colspan="1"><span class="fw-bold"><span class="">Total Payments: <span class="text-danger">{{$total_payments}}</span></td>-->
                <!--    <td class="h6" colspan="1"><span class="fw-bold"><span class="">Current Balance: <span class="text-danger">{{$loan_payment->approved_loan_amount - $total_payments}}</span></td>-->
                <!--</tr>-->
                <!--##############################################################################-->
                <tr>
                    <td class="h6 text-start" colspan="6"><span class="fw-bold">Due Date:</span> <span class="text-danger">Every 5th & 20th of the Month</span> </td>
                </tr>
            </table>
            <div class="row mx-auto w-75">
                <div class="col">
                    <form action="{{route('member.makepayment', $loan_payment->member_id)}}" method="post">
                        @csrf
                        {{-- @method('PATCH') --}}
                        <div class="row">
                            <div class="col">
                                <input type="number" name="loan_id" id="loan-id" class="form-control form-control-sm w-25 form-control-lg text-center" hidden value="{{$loan_payment->id}}">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-3">
                                <input type="date" name="date_of_payment" id="date-of-payment" class="form-control form-control-sm text-center" value="{{old('date_of_payment')}}">
                                @error('date_of_payment')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <input type="number" name="principal_amount" id="principal-amount" class="form-control form-control-sm text-center" step="0.01" placeholder="Principal" value="{{old('principal_amount')}}" autofocus>
                                @error('principal_amount')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-md-3">
                                <input type="number" name="amount_interest" id="amount-interest" class="form-control form-control-sm text-center" step="0.01" value="{{old('amount_interest')}}" placeholder="Interest">
                                @error('amount_interest')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            {{-- @if (Input::has('principal_amount') && Input::has('amount_interest'))
                                <div class="col-md-3 mb-2">
                                    <input type="number" name="total_payment" id="total-payment" class="form-control form-control-lg text-center" value="{{Input::get('principal_amount') + Input::get('amount_interest')}}">
                                </div>
                            @endif --}}
                            {{-- @if (request()->input('principal_amount') && request()->input('amount_interest'))
                                <div class="col-md-3 mb-2">
                                    <input type="number" name="total_payment" id="total-payment" class="form-control form-control-lg text-center" value="{{request()->input('principal_amount') + request()->input('amount_interest')}}">
                                </div>
                            @endif --}}
                            {{-- <div class="col-md-3 mb-2">
                                <input type="number" name="total_payment" id="total-payment" class="form-control form-control-lg text-center" value="{{request()->input('principal_amount') + request()->input('amount_interest')}}">
                            </div> --}}


                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-outline-dark btn-md w-25 mt-3">Save Payment</button>
                            </div>

                        </div>
                        {{-- <div class="row justify-content-center">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-dark btn-lg mt-3">Save Payment</button>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
            <hr class="horizontal-devider">
            <div class="row mx-auto w-75 mt-2">
                <div class="col">
                    <div class="row">
                        <p>Payment History</p>
                    </div>
                </div>
            </div>
            <div class="row" style="width: 100%; height: 200px; overflow: scroll;">
                    <table class="table table-sm table-hover align-middle bg-white border text-secondary text-center w-75 mx-auto shadows">
                        <thead>
                            <tr>
                                <th class="bg-dark text-white">Date Of Payment</th>
                                <th class="bg-dark text-white">Principal Amount</th>
                                <th class="bg-dark text-white">Interest Amount</th>
                                <th class="bg-dark text-white">Total Amount</th>
                            </tr>
                        </thead>
                        <tbody style="overflow: scroll;">
                            @forelse ($all_payments as $l_payment)
                                <tr>
                                    <td>{{$l_payment->date_of_payment}}</td>
                                    <td>{{$l_payment->principal_amount}}</td>
                                    <td>{{$l_payment->interest_payment}}</td>
                                    <td>{{$l_payment->total_amount_paid}}</td>

                                </tr>

                            @empty
                                <p class="text-center text-danger">No Payment made yet.</p>
                            @endforelse

                        </tbody>
                    </table>
            </div>
        @empty
            <p>Member has no loans yet.</p>
        @endforelse
    </div>
@endsection
