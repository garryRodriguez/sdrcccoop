@extends('layouts.app')

@section('title', 'Member Search')

@section('content')
    <p class="h2 text-muted mb-4 text-center">Search results for "<span class="fw-bold">{{$search}}</span>"</p>
    @forelse($members as $member)
        <div class="row align-items-center mb-3">
            <div class="col-3">
                @if ($member->image)
                    <img src="{{$member->image}}" alt="{{$member->first_name}} {{$member->last_name}}" style="width: 240px; height: 240px;">
                @else
                    <i class="fa-solid fa-circle-user"></i>
                @endif
                <img src="" alt="">
            </div>
            <div class="col bg-white p-3 rounded rounded-3 shadow-lg">
                {{-- Add route for profile.show here --}}
                <a href="{{route('member.show.profile', $member->id)}}" class="text-decoration-none text-dark fw-bold">Member: {{$member->first_name}} {{$member->middle_name}} {{$member->last_name}}</a>
                <p class="text-muted mb-0">Email: {{$member->email_address}}</p>
                <p class="text-muted mb-0">Contact No: {{$member->contact_number}}</p>
                <p class="text-muted mb-0">Date of Membership: {{$member->created_at}}</p>
                <p class="mb-0">Member Loan Status: @if (!empty($member->loan->member_id)) <span class="badge rounded-pill text-bg-primary">With Loan</span> @else <span class="badge rounded-pill text-bg-secondary">Without Loan</span> @endif</p>
                {{-- <p class="mb-0">With Loan: {{$member->loan->member_id}}</p> --}}
                <p class="mb-0">Member State: Active</p>
                <hr class="horizontal-divider">
                <a href="{{route('member.show.profile', $member->id)}}" class="btn btn-dark text-white btn-sm">Profile</a>
                <a href="{{route('member.make.payment', $member->id)}}}" class="btn btn-dark text-white btn-sm">Add Payment</a>
                {{-- <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#add-payment">
                    Add Payment
                </button> --}}
                {{-- <i class="fa-solid fa-wallet fa-3x text-dark" data-bs-toggle="modal" data-bs-target="#add-payment" style="cursor: pointer;"></i> --}}
                {{-- Modal To Add Payment --}}
                <div class="modal fade" id="add-payment" tabindex="-1" aria-labelledby="payment-form" aria-hidden="true">
                    <div class="modal-dialog modal-lg bg-white">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-5">
                                <h1 class="display-4 fw-bold text-info text-center"><i class="fa-solid fa-box"></i> Add Payment</h1>
                                <form action="#" method="post" class="w-75 mx-auto pt-4 p-5">
                                    <div class="row mb-3">
                                        <div class="col-md">
                                            <label for="amount-to-pay" class="form-label small text-secondary">Amount To Pay</label>
                                            <input type="number" name="amount_to_pay" id="amount-to-pay" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <button type="submit" class="btn btn-info w-100" name="add_product">Post</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <p class="lead text-muted text-center">No Members Yet</p>
    @endforelse
@endsection
