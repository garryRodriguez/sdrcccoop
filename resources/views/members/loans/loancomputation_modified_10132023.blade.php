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
        <!--Added 10/13/2023-->
        @if ($item->nature_of_loan == "renewal")
            <form action="{{route('member.store.loan.computation', $item->id)}}" method="post" class="mx-auto">
                @csrf
                <table class="table">
                    <tr>

                        <td>
                            {{-- @forelse ($loan_member_id as $item) --}}
                            <div class="row">
                                <div class="col-2">
                                    <label class="form-label fw-bold mb-0">Principal Amount</label>
                                    <input type="number" step="0.01" name="principal_amount" class="form-control form-control-sm text-center" value="{{$item->approved_loan_amount}}">
                                    @error('principal_amount')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="col-2">
                                    <label class="form-label fw-bold mb-0">Interest</label>
                                    <input type="number" step="0.01" name="interest_amount" class="form-control form-control-sm text-center" value="{{old('interest_amount', (($item->interest_rate /100) * $item->approved_loan_amount * $item->term_of_loan))}}">
                                    @error('interest_amount')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <label class="form-label fw-bold mb-0">Term Payment</label>
                                    <input type="number" name="payment_terms" id="payment-terms" class="form-control form-control-sm text-center" value="{{old('payment_terms', $item->term_of_loan)}}">
                                    {{-- <select name="payment_terms" id="payment-terms" class="form-select form-select-sm" required>
                                        <option value="" hidden selected>Payment Terms</option>
                                        <option value="4">4 Months</option>
                                        <option value="6">6 Months</option>
                                        <option value="8">8 Months</option>
                                        <option value="10">10 Months</option>
                                        <option value="11">11 Months</option>
                                        <option value="12">12 Months (1 Year)</option>
                                        <option value="24">24 Months (2 Years)</option>
                                        <option value="36">36 Months (3 Years)</option>
                                    </select> --}}
                                </div>
                                @error('payment_terms')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="row mt-2">
                                <h5>Less Deduction</h5>
                                <div class="col-2">
                                    <label class="form-label fw-bold mb-0">Service Charge</label>
                                    <input type="number" step="0.01" name="service_charge" class="form-control mb-0 text-center" value="{{$item->approved_loan_amount * 0.01}}" arialabelledby="service-charge-info">
                                    <div class="form-text" id="service-charge-info">
                                        <p class="text-muted p-0 fst-italic">1% of the principal amount</p>
                                    </div>
                                    @error('service_charge')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="col-2">
                                    <label class="form-label fw-bold mb-0">CBU</label>
                                    <input type="number" step="0.01" name="capital_build_up" class="form-control text-center" value="{{old('capital_build_up', ($item->cbu))}}" arialabelledby="cbu-info">
                                    {{-- <input type="number" name="capital_build_up" class="form-control text-center" value="{{old('capital_build_up', ($item->approved_loan_amount * 0.25) > 10000 ? 10000:($item->approved_loan_amount * 0.25))}}" arialabelledby="cbu-info"> --}}
                                    <div class="form-text" id="cbu-info">
                                        <p class="text-muted p-0 fst-italic">For new member only</p>
                                    </div>
                                    @error('capital_build_up')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <label class="form-label fw-bold mb-0">Membership Fee</label>
                                    <input type="number" step="0.01" name="membership_fee" value="{{150}}" class="form-control text-center" arialabelledby="membership-fee-info">
                                    <div class="form-text" id="membership-fee-info">
                                        <p class="text-muted p-0 fst-italic">One time payment upon registration</p>
                                    </div>
                                    @error('membership_fee')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <label class="form-label fw-bold mb-0">Loan Balance</label>
                                    <input type="number" step="0.01" name="loan_balance" class="form-control text-center" value="{{old('loan_balance')}}" arialabelledby="loan-renewal-info">
                                    <div class="form-text" id="loan-renewal-info">
                                        <p class="text-muted p-0 fst-italic">For loan renewal</p>
                                    </div>
                                    @error('loan_balance')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                {{-- <div class="col-2">
                                    <label class="form-label fw-bold mb-0">Net Proceeds</label>
                                    <input type="number" step="0.01" name="net_proceeds" class="form-control text-center" value="{{(($item->approved_loan_amount - 150) - $item->interest) - (($item->approved_loan_amount * 0.01) + ($item->approved_loan_amount * 0.25)) }}">
                                </div> --}}
                            </div>
                            {{-- <div class="row mb-5">
                                <div class="col-2">
                                    <label class="form-label fw-bold mb-0">Monthly Amortization</label>
                                    <input type="number" step="0.01" name="monthly_amortization" class="form-control form-control-sm text-center" value="{{round((($item->approved_loan_amount / 12) + ($item->interest / 12)),2)}}">
                                </div>
                                <div class="col-2">
                                    <label class="form-label fw-bold mb-0">Per Payroll Deduction</label>
                                    <input type="number" step="0.01" name="per_payroll_deduction" class="form-control form-control-sm text-center" value="{{round(((($item->approved_loan_amount / 12) + ($item->interest / 24))/2),2)}}">
                                </div>
                            </div> --}}
                            <div class="row mb-0 p-1" style="background-color: #000000">
                                <h6 class="text-white">Loan Status</h6>
                                <div class="col-4 mb-1">
                                    <select class="form-select form-select-sm" name="loan_status" required>
                                        <option value="" hidden>Select Loan Status</option>
                                        <option value="Approved">Appoved</option>
                                        <option value="Disapproved">Disapproved</option>
                                    </select>
                                </div>
                                <div class="col-4"></div>
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
            @endif
         @empty
            <p class="text-danger">No Loan Yet</p>
        @endforelse
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
                        <th class="bg-success text-white">CBU</th>
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
                   @if ($loan_computed)
                        @forelse ( $loan_computed as $l_computed)
                            @if($l_computed->loan_id == $item->member_id)
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
                   @endif
                </tbody>
            </table>
        </div>

    </div>
@endsection
