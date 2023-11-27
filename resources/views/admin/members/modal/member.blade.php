{{-- Deactivate Member --}}
<div class="modal fade" id="deactivate-member-{{$member->id}}">
    <div class="modal-dialog">
        <div class="modal-content border-danger">
            <div class="modal-header border-danger">
                <h3 class="h5 modal-title text-danger">
                    <i class="fa-solid fa-user-large-slash"></i> Deactivate Member
                </h3>
            </div>
            <div class="modal-body">
                Are you sure you want to deactivate member <span class="fw-bold">{{$member->first_name}} {{$member->first_name}}</span>?
            </div>
            <div class="modal-footer border-0">
                <form action="{{route('admin.member.deactivate', $member->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btn-sm">Deactivate</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Ativate Member --}}
<div class="modal fade" id="activate-member-{{$member->id}}">
    <div class="modal-dialog">
        <div class="modal-content border-success">
            <div class="modal-header border-success">
                <h3 class="h5 modal-title text-success">
                    <<i class="fa-solid fa-user-check"></i> Aactivate Member
                </h3>
            </div>
            <div class="modal-body">
                Are you sure you want to activate member <span class="fw-bold">{{$member->first_name}} {{$member->first_name}}</span>?
            </div>
            <div class="modal-footer border-0">
                <form action="{{route('admin.member.activate', $member->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <button type="button" class="btn btn-outline-success btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success btn-sm">Activate</button>
                </form>
            </div>
        </div>
    </div>
</div>
