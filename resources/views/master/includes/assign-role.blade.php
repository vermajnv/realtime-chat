<div class="modal fade" id="modal-assign-role">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Assign Role</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="assignRole" action="{{route('master.assign.role', ['user_id' => ''])}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Roles</label>
                        <select class="form-control select2" style="width: 100%;" name="role">
                            @forelse ($roles as $key => $role)
                                <option selected="selected" value="{{$role->name}}">{{$role->name}}</option>
                            @empty

                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
