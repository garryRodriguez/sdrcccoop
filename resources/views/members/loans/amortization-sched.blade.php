@extends('layouts.app')

@section('title', 'Amortization')

@section('content')
    <div class="container bg-white shadow p-3">
        <div class="h2 text-center">
            Amortization Schedule
        </div>

        @forelse ($amort_data as $amortization_data)

            <table class="table table-sm table-hover align-middle bg-white border text-secondary w-75 mx-auto shadow">
                <tr class="text-align-start">
                    <td class="h6" colspan="5"><span class="fw-bold small">Name:</span> <span class="small">{{$amortization_data->first_name}} {{$amortization_data->last_name}}</span></td>
                </tr>
                <tr class="text-align-start">
                    <td class="h6" colspan="5"><span class="fw-bold small">Date Granted:</span> <span class="small">{{$amortization_data->created_at->format('d-m-Y')}}</span></td>
                </tr>
                <tr class="text-align-start">
                    <td class="h6" colspan="5"><span class="fw-bold small">Maturity Date:</span> <span class="small"></span> </td>
                    <!--<td class="h6" colspan="5"><span class="fw-bold small">Maturity Date:</span> <span class="small">{{$amortization_data->created_at->addDays(360)->format('d-m-Y')}}</span> </td>-->
                </tr>
                <tr class="text-align-start">
                    <td class="h6" colspan="5"><span class="fw-bold small">Member ID:</span><span class="small"> 000{{$amortization_data->member_id}}</span></td>
                </tr>
                <tr class="text-align-start" rowspan="5">
                    <td class="h6" colspan="3"><span class="fw-bold small">Loan Amount:</span> <span class="small">{{$amortization_data->approved_loan_amount}}</span></td>
                    <td class="h6" colspan="1"><span class="fw-bold small"><span class="small">Current Balance:</span></span></td>
                </tr>
                <tr>
                    <td class="h6 text-start" colspan="5"><span class="fw-bold small">Due Date:</span> <span class="text-danger small">Every 5th & 20th of the Month</span> </td>
                </tr>
                {{-- <thead class="small">
                    <tr>
                        <td class="h6"><span class="fw-bold">Name:</span> {{$amortization_data->first_name}} {{$amortization_data->last_name}}</td>
                    </tr>
                    <tr>
                        <td class="h6"><span class="fw-bold">Date Granted:</span> {{$amortization_data->created_at->format('d-m-Y')}}</td>
                    </tr>
                    <tr>
                        <td class="h6"><span class="fw-bold">Maturity Date:</span> {{$amortization_data->created_at->addDays(360)->format('d-m-Y')}} </td>
                    </tr>
                    <tr>
                        <td class="h6"><span class="fw-bold">Member ID: 000</span>{{$amortization_data->member_id}}</td>
                    </tr>
                    <tr>
                        <td class="h6"><span class="fw-bold">Loan Amount:</span> {{$amortization_data->approved_loan_amount}}</td>
                        <td class="h6"><span class="fw-bold">Due Date:</span> Every 5 & 30 of Month </td>
                        <td class="h6"><span class="fw-bold">Current Balance:</span></td>
                    </tr>
                </thead> --}}
                {{-- <tbody class="text-center"> --}}
                    {{-- <tr>
                        <td colspan="4" class="bg-white"></td>
                    </tr> --}}
                    <tr class="text-center">
                        <th class="bg-dark text-white">No</th>
                        <th class="bg-dark text-white">Principal</th>
                        <th class="bg-dark text-white">Interest</th>
                        <th class="bg-dark text-white">Total Payable</th>
                        <th class="bg-dark text-white">Balance</th>
                    </tr>
                        @for ($i = 1; $i <= $amortization_data->term_of_loan * 2; $i++)
                            <tr class="text-center">
                                <td>{{$i}}</td>
                                <td>{{number_format(($amortization_data->approved_loan_amount / $amortization_data->term_of_loan)  / 2, 2)}}</td>
                                <td>{{number_format(($amortization_data->interest_rate / 100) * $amortization_data->approved_loan_amount * $amortization_data->term_of_loan / $amortization_data->term_of_loan / 2,2)}}</td>
                                <td>{{number_format(($amortization_data->approved_loan_amount / $amortization_data->term_of_loan)  / 2 + ($amortization_data->interest_rate / 100) * $amortization_data->approved_loan_amount * $amortization_data->term_of_loan / $amortization_data->term_of_loan / 2, 2)}}</td>
                                <td></td>
                            </tr>
                        @endfor
                    <tr class="mt-3 text-center">
                        <td class="fw-bold text-danger">Total: </td>
                        <td class="fw-bold text-danger">{{number_format(($amortization_data->approved_loan_amount / $amortization_data->term_of_loan)  / 2 * ($amortization_data->term_of_loan * 2), 2)}}</td>
                        <td class="fw-bold text-danger">{{number_format(($amortization_data->interest / $amortization_data->term_of_loan) * $amortization_data->term_of_loan, 2)}}</td>
                        <td class="fw-bold text-danger">{{number_format(($amortization_data->approved_loan_amount / $amortization_data->term_of_loan)  / 2 * ($amortization_data->term_of_loan * 2) + ($amortization_data->interest / $amortization_data->term_of_loan) * $amortization_data->term_of_loan, 2)}}</td>
                        <!--<td class="fw-bold text-danger">{{number_format(($amortization_data->approved_loan_amount + $amortization_data->interest), 2)}}</td>-->
                        <td></td>
                    </tr>


                {{-- </tbody> --}}
            </table>
        @empty
            <p>Member has no loans yet.</p>
        @endforelse

    </div>
@endsection
