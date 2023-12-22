@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">SDRCCCOOP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            @if (Auth::user()->role_id  === 1)
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('landingpagesubmenu.loansmenu') }}">Loans</a>    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            @endif
        </ul>
      </div>
    </div>
  </nav>

  <!-- Jumbotron -->
  <div class="jumbotron" style="background-color: #343a40">
    <div class="container">
      <h1 class="display-4">Salon De Rose Credit Cooperative System</h1>
      <p class="lead">An inhouse credit cooperative system designed for your needs</p>
    </div>
  </div>

  <!-- Features -->
  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 feature-item">
          <h3>Employee Loans</h3>
          <p>Our Employee Loan Services offer competitive and affordable interest rates, ensuring that you can access the funds you need without burdening yourself with high repayment costs.</p>
        </div>
        <div class="col-lg-4 feature-item">
          <h3>Flexible Repayment Options</h3>
          <p>We understand that everyone's financial situation is unique. That's why our loan program provides flexible repayment options tailored to your needs. Whether you prefer monthly installments or a customized repayment plan, we've got you covered.</p>
        </div>
        <div class="col-lg-4 feature-item">
          <h3>Quick Approval Process</h3>
          <p>Emergencies don't wait, and neither should you. Our streamlined approval process ensures that you can get the funds you need quickly, with minimal paperwork and hassle. Apply online, and our dedicated team will work to process your application promptly</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    <div class="container">
      <p>&copy; 2023 Salon De Rose Credit Cooperative. All rights reserved.</p>
    </div>
  </div>



    {{-- <div class="container-fluid bg-white p-5">
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
        </div> --}}

@endsection
