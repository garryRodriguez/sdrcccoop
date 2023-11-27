<div class="modal fade" id="add-cbu-{{$member_details->id}}">
    <div class="modal-dialog">
        <div class="modal-content border-dark">
            <div class="modal-header border-dark">
                <h3 class="h5 modal-title text-dark">
                    <i class="fa-solid fa-plus"></i> Add CBU
                </h3>
            </div>
            <div class="modal-body">
                <p class="h3 text-center">Enter CBU Amount</p>
                <form action="#" method="POST">
                    @csrf
                    <input type="number" name="cbu" id="cbu" class="form-control">
                    @error('cbu')
                        <p class="text-danger small">{{$message}}</p>
                    @enderror
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark btn-sm" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-dark btn-sm">Save</button>
            </div>
        </div>
    </div>
</div>
