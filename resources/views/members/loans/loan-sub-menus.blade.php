@extends('layouts.app')

@section('title', 'Loan Sub Menus')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-2 bg-white rounded mt-5 p-5">
            <div class="col-sm-4 p-5">
                <a href="{{route('home')}}" class="btn btn-outline-success p-5 w-100 fs-3">Apply Loan</a>
            </div>
            <div class="col-sm-4 p-5">
                <a href="#" class="btn btn-outline-success p-5 w-100 fs-3">Apply Renewal</a>
            </div>
            <div class="col-sm-4 p-5">
                <a href="#" class="btn btn-outline-success p-5 w-100 fs-3">View Loan History</a>
            </div>
        </div>
    </div>
@endsection