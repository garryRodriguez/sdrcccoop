@extends('layouts.app')

@section('title', 'Add Payment')

@section('content')
    <div class="container bg-white shadow p-2">
        <div class="h2 text-center">
            Add Payment
        </div>
        {{-- Use this to insert into payment controller member_id --}}
        {{-- {{$loan->member_id}} --}}

        <form action="{{ route('member.postpayment') }}" method="post" class="w-50 mx-auto p-2 mb-3">
            @csrf
            <p class=" text-danger p-0 m-0">Loan ID : {{ $loan_id_to_pay }} | Member ID: {{ $loan->member_id }}</p>
            <div class="mb-2">
                <input type="number" name="loan_id" id="loan-id" value="{{ $loan_id_to_pay }}" class="form-control mb-2" hidden>
                <input type="number" name="member_id" id="member-id" value="{{ $loan->member_id }}" class="form-control mb-2" hidden>
                <input type="number" name="principal_amount" id="principal-amount" class="form-control mb-2" step="0.01" placeholder="Principal">
                <input type="date" name="date_of_payment" id="date-of-payment" class="form-control mb-2">
                <input type="number" name="interest_payment" id="interest-payment" class="form-control mb-2" step="0.01" placeholder="Interest">
                <input type="number" name="total_payment_paid" id="total-payment-paid" class="form-control mb-2" step="0.01" placeholder="Total Payment">
            </div>

            <button type="submit" class="btn btn-success">Save Payment</button>
        </form>
        <div style="height: 300px; overflow: scroll">
            <table class="table text-center">
                <thead>
                    <th>Principal Amount</th>
                    <th>Interest Amount</th>
                    <th>Total Payment</th>
                    <th>Date Of Payment</th>
                </thead>
                <tbody>
                    @foreach ($loan_payment as $p)
                    <tr>
                        <td>{{ $p->principal_amount }}</td>
                        <td>{{ $p->interest_payment }}</td>
                        <td>{{ $p->total_amount_paid }}</td>
                        <td>{{ $p->date_of_payment }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
