@extends('layouts.app')

@section('title', 'Loan Sub Menus')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-2 rounded mt-5 p-5">
            <div class="col p-5">
                <a href="{{route('home')}}" class="btn p-5 fs-3" style="background-color: #343a40; color: #ffffff">Apply Loan</a>
            </div>
            <div class="col p-5">
                <a href="#" class="btn p-5 fs-3" style="background-color: #343a40; color: #ffffff">Apply Renewal</a>
            </div>
            <div class="col p-5">
                <a href="#" class="btn p-5 fs-3" style="background-color: #343a40; color: #ffffff">Loan History</a>
            </div>
        </div>
    </div>
@endsection