{{-- The data here is coming from Admin\UsersController --}}
@extends('layouts.app')

@section('title', 'Admin: Members')

@section('content')
    <table class="table table-hover align-middle text-center bg-white border text-secondary w-100">
        <thead class="small table-success text-secondary">
            <tr>
                <th></th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact No</th>
                <th>Email Address</th>
                <th>Date Of Membership</th>
                <th>Status</th>
                <th>With Loan</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($all_members as $member)
            <tr>
                <td>

                        @if ($member->image)
                            <a href="#" class="text-decoration-none text-dark">
                                <img src="{{$member->image}}" alt="{{$member->first_name}}" class="rounded-circle d-block" style="width: 3rem; height: 3rem; object-fit: cover;">
                            </a>

                        @else
                            <i class="fa-solid fa-circle-user text-dark"></i>
                        @endif

                </td>
                <td>
                    <a href="#" class="text-decoration-none text-dark fw-bold">{{$member->first_name}}</a>
                </td>
                <td>
                    <a href="#" class="text-decoration-none text-dark fw-bold">{{$member->last_name}}</a>
                </td>
                <td>
                    <p>{{$member->contact_number}}</p>
                </td>
                <td>
                    <p>{{$member->email_address}}</p>
                </td>
                <td>
                    <p>{{$member->created_at->format('Y-m-d')}}</p>
                </td>
                <td>
                    @if ($member->trashed())
                        <span class="badge text-bg-secondary">Deactivated</span>
                    @else
                        <span class="badge text-bg-success">Active</span>
                    @endif
                </td>
                <td>
                    <span class="badge text-bg-success">Yes</span>
                </td>
                <td>
                    {{-- @if (Auth::user()->id != $member->id) --}}
                        <div class="dropdown">
                            <button class="btn btn-sm" data-bs-toggle="dropdown">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                            <div class="dropdown-menu">
                                @if ($member->trashed())
                                    <button class="dropdown-item text-success" data-bs-toggle="modal"
                                    data-bs-target="#activate-member-{{$member->id}}">
                                        <i class="fa-solid fa-user-check"></i> Activate {{$member->first_name}} {{$member->last_name}}
                                    </button>
                                @else
                                    <button class="dropdown-item text-danger" data-bs-toggle="modal"
                                    data-bs-target="#deactivate-member-{{$member->id}}">
                                        <i class="fa-solid fa-user-large-slash"></i> Deactivate {{$member->first_name}} {{$member->last_name}}
                                    </button>
                                @endif

                            </div>
                        </div>
                        {{-- Insert Modal Here --}}
                        @include('admin.members.modal.member')
                    {{-- @endif --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$all_members->links()}}
@endsection
