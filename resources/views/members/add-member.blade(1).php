@extends('layouts.app')

@section('title', 'Add Member')

@section('content')
        <div class="container-fluid bg-dark text-white p-1 ps-5">
            <h3 class="display-6 text-center">Add New Member</h3>
        </div>
        <div class="container-fluid bg-light p-1">
            <div class="row">
                <div class="col">
                    <a class="btn btn-dark text-white col-6 d-block ms-auto text-truncate" href="#">
                        <i class="me-1 fas fa-lock"></i> Change Password
                    </a>
                </div>
                <div class="col">
                    <a class="btn btn-danger col-6 d-block me-auto text-truncate" href="#">
                        <i class="me-1 fas fa-trash-alt"></i> Delete Account
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="{{route('member.store')}}" enctype="multipart/form-data" class="bg-white p-2" method="post" autocomplete="off">
                @csrf
                <div class="row">
                    <div class="col-8 px-5">
                        <div class="row">
                            <p class="">Member Details</p>
                            <div class="col-4">
                                <div class="">
                                    <input type="text" name="first_name" class="form-control form-control-sm" id="first-name" placeholder="First Name" value="{{ old('first_name') }}" autofocus>
                                    {{-- <label for="first-name">First Name</label> --}}
                                    @error('first_name')
                                        <p class="text-danger small">{{ $message }}</p>
                                     @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-1">
                                    <input type="text" name="middle_name" class="form-control form-control-sm" id="middle-name" placeholder="Middle Name" value="{{ old('middle_name') }}">
                                    {{-- <label for="middle-name">Middle Name</label> --}}
                                    @error('middle_name')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-1">
                                    <input type="text" name="last_name" class="form-control form-control-sm" id="last-name" placeholder="Last Name" value="{{ old('last_name') }}">
                                    {{-- <label for="last-name">Last Name</label> --}}
                                    @error('last_name')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <input type="file" name="image" class="form-control form-control-sm" aria-label="Choose Photo" accept="image/*">
                    </div>
                    <div class="row">
                        <div class="col-8 px-5">
                            <div class="row mb-1">
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="date" name="date_of_birth" class="form-control form-control-sm" id="date-of-birth" placeholder="Date Of Birth" value="{{ old('date_of_birth') }}">
                                        {{-- <label for="date-of-birth">Date Of Birth</label> --}}
                                        @error('date_of_birth')
                                            <p class="text-danger small">{{ $message }}</p>
                                         @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="place_of_birth" class="form-control form-control-sm" id="place-of-birth" placeholder="Place Of Birth" value="{{ old('place_of_birth') }}">
                                        {{-- <label for="place-of-birth">Place Of Birth</label> --}}
                                    </div>
                                    @error('place_of_birth')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="contact_number" class="form-control form-control-sm" id="contact-number" placeholder="Contact Number" value="{{ old('contact_number') }}">
                                        {{-- <label for="contact-number">Contact Number</label> --}}
                                    </div>
                                    @error('contact_number')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Email address, number of dependents, Religion --}}
                        <div class="col-12 px-5">
                            <div class="row mb-1">
                                <hr>
                                <div class="col-4">

                                    <div class="mb-1">
                                        <input type="text" name="email_address" class="form-control form-control-sm" id="email-address" placeholder="Email Address" value="{{ old('email_address') }}">
                                        {{-- <label for="email-address">Email Address</label> --}}
                                    </div>
                                    @error('email_address')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="no_of_dependents" class="form-control form-control-sm" id="no-of-dependents" placeholder="Number Of Dependents" value="{{ old('no_of_dependents') }}">
                                        {{-- <label for="no-of-dependents">Number Of Dependents</label> --}}
                                    </div>
                                    @error('no_of_dependents')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="religion" class="form-control form-control-sm" id="religion" placeholder="Religion" value="{{ old('religion') }}">
                                        {{-- <label for="religion">Religion</label> --}}
                                    </div>
                                    @error('religion')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-4">

                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="col-12 px-5">
                            <div class="row mb-1">
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="nationality" class="form-control form-control-sm" id="nationality" placeholder="Nationality" value="{{ old('nationality') }}">
                                        {{-- <label for="nationality">Nationality</label> --}}
                                    </div>
                                        @error('nationality')
                                            <p class="text-danger small">{{ $message }}</p>
                                        @enderror
                                </div>
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="present_address" class="form-control form-control-sm" id="present-address" placeholder="Present Address" value="{{ old('present_address') }}">
                                        {{-- <label for="present-address">Present Address</label> --}}
                                    </div>
                                    @error('present_address')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <div class="mb-1">
                                        <select name="civil_status" class="form-control form-control-sm bg-light" id="civil-status" placeholder="Civil Status" value="{{old('civil_status')}}">
                                            <option value="" selected hidden>Select Civil Status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Separated">Separated</option>
                                        </select>
                                        {{-- <label for="civil-status">Civil Status</label> --}}
                                    </div>
                                    @error('civil_status')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 px-5">
                            <div class="row mb-1">
                                <hr>
                                {{-- <p class="">Spouse Details</p> --}}
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="spouse_first_name" class="form-control form-control-sm" id="spouse-first-name" placeholder="Spouse First Name" value="{{ old('spouse_first_name') }}">
                                        {{-- <label for="spouse-first-name">Spouse First Name</label> --}}
                                    </div>
                                        @error('spouse_first_name')
                                            <p class="text-danger small">{{ $message }}</p>
                                        @enderror
                                </div>
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="spouse_middle_name" class="form-control form-control-sm" id="spouse-middle-name" placeholder="Spouse Middle Name" value="{{ old('spouse_middle_name') }}">
                                        {{-- <label for="spouse-middle-name">Spouse Maiden Name</label> --}}
                                    </div>
                                    @error('spouse_middle_name')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <div class="mb-1">
                                        <input type="text" name="spouse_last_name" class="form-control form-control-sm" id="spouse-last-name" placeholder="Spouse Last Name" value="{{ old('spouse_last_name') }}">
                                        {{-- <label for="spouse-last-name">Spouse Last Name</label> --}}
                                    </div>
                                    @error('spouse_last_name')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                    <div class="mb-1">
                                        <input type="text" name="tin_no" id="tin-no" class="form-control form-control-sm" placeholder="TIN No" required>
                                        @error('tin_no')
                                            <p class="text-danger small">${{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-md-3 ms-4">
                            <input type="text" name="tin_no" id="tin-no" class="form-control form-control-sm" value="{{old('tin_no')}}" placeholder="TIN No" required>
                            @error('tin_no')
                                <p class="text-danger small">{{ $message }}</p>
                            @enderror
                        </div>

                    </div> --}}
                </div>
                <div class="row justify-content-center">
                    <button class="btn btn-dark w-25">Save</button>
                </div>

            </form>
        </div>


        <hr class="my-3">

        @if (session('new-member'))
            <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>{{session('new-member')}}</strong>
            </div>
        @endif
        {{-- <h3 class="text-center">Show alert message here for successful adding member</h3> --}}
        {{-- <ul class="list-group">
            @forelse ($all_books as $book)
                <li class="list-group-item">
                    <div class="row">
                        <div class="col">
                            <a href="#">
                                {{ $book->title }}
                            </a>
                        </div>
                        <div class="col text-end">
                            <a href="#" title="Edit"
                                class="btn btn-outline-warning btn-sm border-0"><i class="fa-solid fa-file-pen "></i></a>
                            <a href="#" title="Delete"
                                class="btn btn-outline-danger btn-sm border-0"><i class="fa-solid fa-trash-can "></i></a>
                        </div>
                    </div>
                </li>
            @empty
                <h4 class="text-center">No books yet</h4>
            @endforelse
        </ul> --}}
@endsection
