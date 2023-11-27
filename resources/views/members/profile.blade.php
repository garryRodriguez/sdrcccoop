@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="container-fluid">
        <div class="bg-dark p-4 text-white">
            <h2><i class="fa-solid fa-user"></i> Member Profile</h2>
        </div>
        <form action="#" class="border border-secondary p-1 w-100 shadow-lg" autocomplete="off">
            @csrf
            <table class="table">
                <tr>
                    <td class="container w-75">
                        <div class="row">
                            <div class="col-4">
                                <label for="first-name" class="form-label fw-bold">First Name</label>
                                <input type="text" name="first_name" id="first-name" class="form-control mb-2" value="{{$member_details->first_name}}">
                            </div>
                            <div class="col-4">
                                <label for="middle-name" class="form-label fw-bold">Middle Name</label>
                                    <input type="text" name="middle_name" id="middle-name" class="form-control mb-2" value="{{$member_details->middle_name}}">
                            </div>
                            <div class="col-4">
                                <label for="last-name" class="form-label fw-bold">Last Name</label>
                                    <input type="text" name="last_name" id="last-name" class="form-control mb-2" value="{{$member_details->last_name}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="dob" class="form-label fw-bold">Date Of Birth</label>
                                <input type="date" name="dob" id="dob" class="form-control mb-2" value="{{$member_details->date_of_birth}}">
                            </div>
                            <div class="col-4">
                                <label for="pob" class="form-label fw-bold">Place Of Birth</label>
                                    <input type="text" name="pob" id="pob" class="form-control mb-2" value="{{$member_details->place_of_birth}}">
                            </div>
                            <div class="col-4">
                                <label for="contact-no" class="form-label fw-bold">Contact Number</label>
                                    <input type="text" name="contact_no" id="contact-no" class="form-control mb-2" value="{{$member_details->contact_number}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="email-address" class="form-label fw-bold">E-mail Address</label>
                                    <input type="email" name="email_address" id="email-address" class="form-control mb-2" value="{{$member_details->email_address}}">
                            </div>
                            <div class="col-6">
                                <label for="present-address" class="form-label fw-bold">Present Address</label>
                                    <input type="text" name="present_address" id="present-address" class="form-control" value="{{$member_details->present_address}}">
                            </div>
                            <div class="col-3">
                                <label for="civil-status" class="form-label fw-bold">Civil Status</label>
                                    <input type="text" name="civil_status" id="civil-status" class="form-control" value="{{$member_details->civil_status}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                    <!-- <a href="#" class="btn btn-dark mb-2 mt-2">Loan Details</a> -->
                                    <div class="dropdown">
                                        <button class="btn btn-dark text-white shadow-lg" data-bs-toggle="dropdown">
                                            Loan Details
                                        </button>

                                        <div class="dropdown-menu">

                                            <a href="{{route('member.loan.application', $member_details->id)}}" class="dropdown-item btn btn-dark text-dark"><i class="fa-solid fa-bars-staggered"></i> Apply Loan</a>

                                            <a href="{{route('member.loan.computation', $member_details->id)}}" class="dropdown-item btn btn-dark text-dark"><i class="fa-solid fa-calculator"></i> Loan Computation</a>

                                            <a href="{{route('member.view.loan.amortization', $member_details->id)}}" class="dropdown-item btn btn-dark text-dark"><i class="fa-solid fa-chart-column"></i> Amortization</a>

                                            <a href="#" class="dropdown-item btn btn-dark text-dark"><i class="fa-solid fa-clock-rotate-left"></i> Loan History</a>

                                            <!-- <button class="dropdown-item text-dark" data-bs-toggle="modal" data-bs-target="#add-cbu-{{$member_details->id}}"><i class="fa-solid fa-bars-staggered"></i> Loan Details</button>

                                            <button class="dropdown-item text-dark" data-bs-toggle="modal" data-bs-target="#amort-sched-{{$member_details->id}}"><i class="fa-solid fa-chart-column"></i> Amortization</button>

                                            <button class="dropdown-item text-dark" data-bs-toggle="modal" data-bs-target="#loan-history-{{$member_details->id}}"><i class="fa-solid fa-clock-rotate-left"></i> Loan History</button> -->
                                        </div>

                                        {{-- Insert modal here --}}
                                        @include('members.modals.addcbu')
                                    </div>
                            </div>
                        </div>
                    </td>
                <td>
                    <div class="card">
                        <div class="card-body">
                            <img src="{{$member_details->image}}" alt="{{$member_details->firstname}}" class="d-block" style="width: 300px; height: 300px;">
                        </div>
                    </div>
                </td>
                </tr>
            </table>
        </form>

    </div>
@endsection
