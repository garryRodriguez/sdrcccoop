<div class="bg-light p-3">
    {{-- The whole world belongs to you. --}}
    <h1 class="h3 lead fs-4">Members Data Report</h1>
    <form method="post">
        <div class="row align-items-center g-3">
            <div class="col-auto">
                <input type="text" wire:model.live="search"  name="" id="" class="form-control bg-light text-success" placeholder="Search here..">
            </div>
            <div class="col-auto">
                <select wire:model.live="pagination" class="p-1 text-success">
                    <option value="10">10</option>
                    <option value="20">20</option>
                </select>
            </div>
        </div>
    </form>
    <table class="table table-small text-center table-hover table-sm w-75 mt-2">
        <thead class="table-success">
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Contact No</th>
                <th>Email</th>
                <th>Membership Date</th>
                <th>Tin No</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <div wire:key="{{$user->id}}">
                <tr>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->contact_number }}</td>
                    <td>{{ $user->email_address}}</td>
                    <td>{{ $user->created_at}}</td>
                    <td>{{ $user->tin_no}}</td>
                    <th><a href="#" class="btn btn-sm bg-success text-white">View Details</a></th>
                </tr>
            </div>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
