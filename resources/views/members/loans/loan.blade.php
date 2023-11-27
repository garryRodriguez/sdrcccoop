@extends('layouts.app')

@section('title', 'Loan Application')

@section('content')
	<div class="container p-2">
        <div class="p-3 text-white" style="background-color: #000000">
            <h2><i class="fa-solid fa-landmark"></i> Loan Application</h2>
        </div>
        <form action="{{route('member.process.loan.application', $m_details->id)}}" method="post" class="border border-secondary p-1 w-100 shadow-lg" autocomplete="off">
            @csrf
            <table class="table">
                <tr>
                    <td class="container w-75">
                    	<div class="row">
                    		<p class="fw-bold h4">Applicant Details</p>
                    	</div>
                        <div class="row">
                            <div class="col-4">
                                <label for="first-name" class="form-label mb-0">First Name</label>
                                <input type="text" name="first_name" id="first-name" class="form-control form-control-sm fw-bold text-secondary" value="{{old('first_name', $m_details->first_name)}}">
                                @error('first_name')
                                	<p class="text-danger small">$message</p>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="middle-name" class="form-label mb-0">Middle Name</label>
                                    <input type="text" name="middle_name" id="middle-name" class="form-control form-control-sm fw-bold text-secondary" value="{{old('first_name', $m_details->middle_name)}}">
                                    @error('middle_name')
                                		<p class="text-danger small">$message</p>
                                	@enderror
                            </div>
                            <div class="col-4">
                                <label for="last-name" class="form-label mb-0">Last Name</label>
                                    <input type="text" name="last_name" id="last-name" class="form-control form-control-sm fw-bold text-secondary" value="{{old('first_name', $m_details->last_name)}}">
                                    @error('last_name')
                                		<p class="text-danger small">$message</p>
                                	@enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                        	<div class="col-8">
                        		<label class="form-label">Residence Address</label>
                        		<input type="text" name="member_residence_address" class="form-control form-control-sm" value="{{old('member_residence_address', $m_details->present_address)}}">
                        		@error('member_residence_address')
                                	<p class="text-danger small">$message</p>
                                @enderror
                        	</div>
                        	<div class="col-4">
                        		<label class="form-label">Tel/Mobile No</label>
                        		<input type="text" name="contact_no" class="form-control form-control-sm" value="{{old('contact_no', $m_details->contact_number)}}">
                        		@error('contact_no')
                                	<p class="text-danger small">$message</p>
                                @enderror
                        	</div>
                        </div>

                        <div class="row p-2" style="background-color: #000000;">
                        	<div class="col-4">
                        		<p class="fw-bold h4 text-white">Nature Of Loan </p>

                        		<input type="checkbox" name="nature_of_loan" value="new" class="form-check-input">
                        		<label class="form-check-label text-white">New</label>

                        		<input type="checkbox" name="nature_of_loan" value="renewal" class="form-check-input">
                        		<label class="form-check-label text-white">Renewal</label>
                        	</div>
                        	@error('nature_of_loan')
                                <p class="text-danger small">$message</p>
                            @enderror
                        </div>

                        <div class="row p-2" style="background-color: #000000;">
                        	<div class="col-4 text-white">
                        		Date of Application <input type="date" name="date_of_application" class="form-control form-control-sm">
                        		@error('date_of_application')
                                	<p class="text-danger small">$message</p>
                            	@enderror
                        	</div>
                        	<div class="col-4 text-white">
                        		Monthly Salary (Gross) <input type="number" name="monthly_salary" step="0.01" class="form-control form-control-sm" value="{{old('monthly_salary')}}" placeholder="Enter amount here">
                        		@error('monthly_salary')
                                	<p class="text-danger small">$message</p>
                            	@enderror
                        	</div>
                        	<div class="col-4 text-white">
                        		Other Income (Commision, etc) <input type="number" name="other_income" step="0.01" class="form-control form-control-sm" value="{{old('other_income')}}" placeholder="Enter amount here">
                        		@error('other_income')
                                	<p class="text-danger small">$message</p>
                            	@enderror
                        	</div>
                        </div>
                        <div class="row p-2" style="background-color: #000000;">
                        	<div class="col-4 text-white">
                        		(Less: Deduction) <input type="number" name="less_deduction" step="0.01" class="form-control form-control-sm" value="{{old('less_deduction')}}" placeholder="Enter amount of deduction here">
                        		@error('less_deduction')
                                	<p class="text-danger small">$message</p>
                            	@enderror
                        	</div>
                        	<div class="col-4 text-white">
                        		Monthly Net Pay <input type="number" name="monthly_net_pay" step="0.01" class="form-control form-control-sm" value="{{old('monthly_net_pay')}}" placeholder="Enter total net income here">
                        		@error('monthly_net_pay')
                                	<p class="text-danger small">$message</p>
                            	@enderror
                        	</div>
                        </div>

                        <div class="row p-2" style="background-color: #000000;">
                        	<div class="col-4 text-white">
                        		Term of Payment (How many months?)
                                <input type="number" name="term_of_loan" id="term_of_loan" class="form-control" value="{{old('term_of_loan')}}" placeholder="Enter number of months here">
                        		 {{-- <select class="form-select" name="term_of_loan">
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
								 @error('term_of_loan')
                                	<p class="text-danger small">$message</p>
                            	@enderror
                        	</div>

                        	<div class="col-4 text-white">
                        		Comaker's Name <input type="text" name="comakers_name" class="form-control form-control-sm" value="{{old('comakers_name')}}">
                        		@error('comakers_name')
                                	<p class="text-danger small">$message</p>
                            	@enderror
                        	</div>
                        </div>

                        <div class="row p-2" style="background-color: #000000;">
                        	<p class="fw-bold h4 text-white">Pre-Approval Of Loan </p>
                        	<div class="col-4 text-white">
                        		Loan Balance <input type="number" name="loan_balance" step="0.01" class="form-control form-control-sm" value="{{old('loan_balance')}}" placeholder="Put zero (0) if the loan is new">
                        	</div>
                        	@error('loan_balance')
                                <p class="text-danger small">$message</p>
                            @enderror
                        	<div class="col-4 text-white">
                        		Approved Loan <input type="number" name="approved_loan" step="0.01" class="form-control form-control-sm">
                        	</div>
                        	@error('approved_loan')
                                <p class="text-danger small">$message</p>
                            @enderror
                        </div>
                        <div class="row p-3 mb-3 text-white" style="background-color: #000000;">
                            <div class="col-4">
                        		CBU <input type="number" name="cbu_data" step="0.01" class="form-control form-control" placeholder="Enter amount of CBU here">
                        	</div>

                            <div class="col-4">
                        		Monthly Interest Rate (1%, 2% 3%) <input type="number" step="0.01" name="monthly_interest_rate" class="form-control form-control" placeholder="Enter interest rate here">
                        	</div>

                        </div>
                        <div class="row p-2" style="background-color: #000000;">
                        	<p class="fw-bold h4 text-white">Notes/Comments </p>
                        	<div class="col-8">
                        		<textarea class="form-control" name="notes_comments" rows="3" placeholder="Add your notes or comments here"></textarea>
                        	</div>
                        	@error('notes_comments')
                                <p class="text-danger small">$message</p>
                            @enderror

                        </div>


                    </td>
                    <!-- <td class="container w-50">
                    	adsd
                    </td> -->
                </tr>
            </table>

            <button type="submit" class="btn text-white w-25" style="background-color: #000000;">Save Details</button>
        </form>

    </div>
@endsection
