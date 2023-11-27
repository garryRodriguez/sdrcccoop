@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <div class="container-fluid bg-white p-5">
        <div class="row justify-content-center">
            <div class="col-12">
                @if (Auth::user()->role_id  == 1)
                    <div class="card w-100 mb-3 text-center bg-dark text-white">
                        <div class="card-body">
                        <h5 class="card-title">Welcome admin, <span class="fw-bold">{{Auth::user()->name}}</span></h5>
                        <p class="card-text">You have successfully login!</p>
                        </div>
                    </div>
                    <div class="row justify-content-center my-2 pt-5">
                        <div class="col-sm-4">
                            <a href="{{ route('landingpagesubmenu.loansmenu') }}" class="btn btn-outline-success w-100 p-5  mb-2"><span class="fw-bold h3">Loans</span></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-outline-success w-100 p-5 mb-2"><span class="fw-bold h3">Members</span></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-outline-success w-100 p-5 mb-2"><span class="fw-bold h3">Interest</span></a>
                        </div>
                    </div>
                    <div class="row justify-content-center my-2">
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-outline-success w-100 p-5 mb-2"><span class="fw-bold h3">CBU</span></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-outline-success w-100 p-5 mb-2"><span class="fw-bold h3">Revenue</span></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-outline-success w-100 p-5 mb-2"><span class="fw-bold h3">Reports</span></a>
                        </div>
                    </div>
                </div>
                @else
                    <div class="card w-75 mb-3 text-center">
                        <div class="card-body">
                        <h5 class="card-title">Welcome to our portal, you have successfully registered in our system.</h5>
                        <p class="card-text">Our staff will reach out to you shortly.</p>
                        <p class="card-text">Thank you for registering!</p>
                        <a href="#" class="btn btn-dark">Login with your account</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>

@endsection
