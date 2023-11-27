@extends('layouts.app')

@section('title', 'Computation')

@section('content')
    <div class="container">

        {{-- Alert Message --}}
        @if (session('loan-computation-added'))
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Success!</strong> {{session('loan-computation-added')}}
            </div>
        @endif
        @if (session('exists'))
            <div class="alert alert-danger">
                <ul>
                    <li>{{session('exists')}}</li>
                </ul>
            </div>
        @endif
    </div>
    <a href="{{url()->previous()}}" class="display-6 ms-5">
        <i class="fas fa-arrow-left text-dark"></i>
    </a>
	<div class="container-fluid p-2 bg-white shadow-lg">
        <div class="p-2 text-white" style="background-color: #000000">
            <h5><i class="fa-solid fa-landmark"></i> Loan Computation</h5>
        </div>
        @forelse ($loan_member_id as $item)
        {{-- Note: $item->id --- refers to loan id --}}
        
        @empty
            <p class="text-danger">No Loan Yet</p>
        @endforelse
        
        
        <form action="{{route('member.store.loan.computation', $item->id)}}" method="post" class="mx-auto">
            @csrf
            <p class="m-0 p-0 text-danger pt-1 small">Please add the details of the loan computation here. The computed result will be displayed below.</p>
            <table class="table">
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-2">
                                <label class="form-label fw-bold mb-0">Principal Amount</label>
                                <input type="number" step="0.01" name="principal_amount" class="form-control form-control-sm text-center" required>
                                @error('principal_amount')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-2">
                                <label class="form-label fw-bold mb-0">Interest</label>
                                <input type="number" step="0.01" name="interest_amount" class="form-control form-control-sm text-center" required>
                                @error('interest_amount')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-2">
                                <label class="form-label fw-bold mb-0">Term Payment</label>
                                <input type="number" name="payment_terms" id="payment-terms" class="form-control form-control-sm text-center" required>

                            </div>
                            @error('payment_terms')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="row mt-2">
                            <h5>Less Deduction</h5>
                            <div class="col-2">
                                <label class="form-label fw-bold mb-0">Service Charge</label>
                                <input type="number" step="0.01" name="service_charge" class="form-control mb-0 text-center" arialabelledby="service-charge-info" required>
                                <div class="form-text" id="service-charge-info">
                                    <p class="text-muted p-0 fst-italic">1% of the principal amount</p>
                                </div>
                                @error('service_charge')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-2">
                                <label class="form-label fw-bold mb-0">CBU</label>
                                <input type="number" step="0.01" name="capital_build_up" class="form-control text-center" arialabelledby="cbu-info" required>

                                <div class="form-text" id="cbu-info">
                                    <p class="text-muted p-0 fst-italic">For new member only</p>
                                </div>
                                @error('capital_build_up')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-2">
                                <label class="form-label fw-bold mb-0">Membership Fee</label>
                                <input type="number" step="0.01" name="membership_fee" class="form-control text-center" arialabelledby="membership-fee-info" required>
                                <div class="form-text" id="membership-fee-info">
                                    <p class="text-muted p-0 fst-italic">One time payment upon registration</p>
                                </div>
                                @error('membership_fee')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-2">
                                <label class="form-label fw-bold mb-0">Loan Balance</label>
                                <input type="number" step="0.01" name="loan_balance" class="form-control text-center" arialabelledby="loan-renewal-info" required>
                                <div class="form-text" id="loan-renewal-info">
                                    <p class="text-muted p-0 fst-italic">For loan renewal</p>
                                </div>
                                @error('loan_balance')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                        </div>

                        <div class="row mb-0 p-1" style="background-color: #000000">
                            <h6 class="text-white">Loan Status</h6>
                            <div class="col-4 mb-1">
                                <select class="form-select form-select-sm" name="loan_status" required>
                                    <option value="" hidden>Select Loan Status</option>
                                    <option value="Approved">Appoved</option>
                                    <option value="Disapproved">Disapproved</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <input type="number" name="member_id" class="form-control text-center" value="{{ $m_member_id }}" hidden>
                            </div>
                            <div class="col-4">
                                <label class="form-label fw-bold mb-0 text-white mb-1">Approved by:</label>
                                <input type="text" name="approved_by" class="form-control form-control-sm" required>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="col-12 text-end"><button class="btn btn-sm btn-dark text-white text-center w-25">SAVE</button></div>
                    </td>
                </tr>
            </table>
        </form>
        
    </div>
    <div class="container-fluid">
        <div class="row">
            <table class="table table-sm table-hover align-middle bg-white border text-secondary w-100 mx-auto shadow text-center">
                <thead>
                    <tr>
                        <th class="bg-success text-white">Name of Borrower</th>
                        <th class="bg-success text-white">Principal Amount</th>
                        <th class="bg-success text-white">Interest</th>
                        <th class="bg-success text-white">Service Charge</th>
                        <th class="bg-success text-white">Total CBU</th>
                        <th class="bg-success text-white">Membership Fee</th>
                        <th class="bg-success text-white">Loan Balance</th>
                        <th class="bg-success text-white">Net Proceeds</th>
                        <th class="bg-success text-white">Monthly Amortization</th>
                        <th class="bg-success text-white">Per Payroll Deduction</th>
                        <th class="bg-success text-white">Loan Status</th>
                        <th class="bg-success text-white">Approved By</th>
                        <th class="bg-success text-white">Term Of Payment (Months)</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ( $loan_computed as $l_computed )

                            <tr>
                                <td>{{$item->first_name}} {{$item->last_name}}</td>
                                <td>{{$l_computed->principal_amount}}</td>
                                <td>{{$l_computed->interest_amount}}</td>
                                <td>{{$l_computed->service_charge}}</td>
                                <td>{{ $l_computed->capital_build_up }}</td>
                                <td>{{$l_computed->membership_fee}}</td>
                                <td>{{$l_computed->loan_balance}}</td>
                                <td>{{$l_computed->principal_amount - ($l_computed->service_charge + $l_computed->capital_build_up + $l_computed->membership_fee + $l_computed->loan_balance)}}</td>
                                <td>{{round((($item->interest_rate /100) * $item->approved_loan_amount * $item->term_of_loan / $item->term_of_loan) + ($item->approved_loan_amount / $item->term_of_loan), 2)}}</td>
                                <td>{{round((($item->interest_rate /100) * $item->approved_loan_amount * $item->term_of_loan / $item->term_of_loan) / 2 + ($item->approved_loan_amount / $item->term_of_loan) / 2, 2)}}</td>
                                <td>{{$l_computed->loan_status}}</td>
                                <td>{{$l_computed->approved_by}}</td>
                                <td>{{$l_computed->term_of_payment}}</td>
                            </tr>
                    @endforeach
                    <?php
                    $test = 0;
                    foreach ($loan_computed as $aaa) {
                        $test += $aaa->capital_build_up;
                    }

                     ?>
                    <?php

                     echo "<p class='bg-dark text-white p-2'>Member's Total CBU: $test</p>";

                     ?>
                   {{-- @if ($loan_computed)
                        @forelse ( $loan_computed as $l_computed)
                            @if($l_computed->loan_id == $item->id)
                                <tr>
                                    <td>{{$item->first_name}} {{$item->last_name}}</td>
                                    <td>{{$l_computed->principal_amount}}</td>
                                    <td>{{$l_computed->interest_amount}}</td>
                                    <td>{{$l_computed->service_charge}}</td>
                                    <td>{{$l_computed->capital_build_up}}</td>
                                    <td>{{$l_computed->membership_fee}}</td>
                                    <td>{{$l_computed->loan_balance}}</td>
                                    <td>{{$l_computed->principal_amount - ($l_computed->service_charge + $l_computed->capital_build_up + $l_computed->membership_fee + $l_computed->loan_balance)}}</td>
                                    <td>{{round((($item->interest_rate /100) * $item->approved_loan_amount * $item->term_of_loan / $item->term_of_loan) + ($item->approved_loan_amount / $item->term_of_loan), 2)}}</td>
                                    <td>{{round((($item->interest_rate /100) * $item->approved_loan_amount * $item->term_of_loan / $item->term_of_loan) / 2 + ($item->approved_loan_amount / $item->term_of_loan) / 2, 2)}}</td>
                                    <td>{{$l_computed->loan_status}}</td>
                                    <td>{{$l_computed->approved_by}}</td>
                                    <td>{{$l_computed->term_of_payment}}</td>
                                </tr>
                            @endif
                        @empty

                        @endforelse
                   @endif --}}
                </tbody>
            </table>
        </div>

    </div>
@endsection
