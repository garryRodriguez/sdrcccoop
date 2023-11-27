@extends('layouts.app')

@section('title', 'Member List')

@section('content')
<div class="container bg-white p-5 shadow-lg">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Search Member</div>

                <div class="card-body">
                    <form action="{{route('member.search')}}" autocomplete="off">
                        <div class="row">
                            <div class="col-10">
                                <input type="search" name="search" id="search" class="form-control p-3 fs-3 mb-0" placeholder="Enter Family Name to search here" aria-describedby="search-guide" autofocus>
                                <div class="form-text" id="search-guide">
                                    <p class="text-danger">Note: Please use member's family name to search</p>
                                </div>
                            </div>
                            <div class="col-2">
                                <input type="submit" value="Search" class="btn btn-dark">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-2">
        <div class="col-md-12">
            <table class="table table-hover table-striped text-center">
                <thead class="table-dark">
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    <th>View Profile</th>
                    <th>Edit</th>
                </thead>
                <tbody>
                    @foreach ($all_members as $members)
                        <tr>
                            <td>{{$members->first_name}}</td>
                            <td>{{$members->middle_name}}</td>
                            <td>{{$members->last_name}}</td>
                            <td>{{$members->contact_number}}</td>
                            <td>{{Str::upper($members->email_address)}}</td>
                            <td><a href="{{route('member.show.profile', $members->id)}}"><i class="fa-regular fa-eye text-primary fs-4"></i></a></td>
                            <td><a href="{{route('member.edit', $members->id)}}"><i class="fa-solid fa-pen-to-square text-warning fs-4"></i></a></td>
                            {{-- <td><a href="#"><i class="fa-solid fa-trash-can text-dark fs-4"></i></a></td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{$all_members->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
