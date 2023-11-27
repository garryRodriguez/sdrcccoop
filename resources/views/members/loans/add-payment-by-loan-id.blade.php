@extends('layouts.app')

@section('title', 'Add Payment By Loan ID')

@section('content')
    <h3>Select which loan to pay</h3>
        @foreach ($member_loan_ids as $members_id)
            {{-- Add new route here to query table --}}
            <a href="{{ route('member.viewPaymentById', $members_id->loan_id) }}">Loan Id: {{ $members_id->loan_id }} </a><br>
        @endforeach
@endsection
