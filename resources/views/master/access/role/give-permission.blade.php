@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="container-fluid">
        @include('partials.breadcrum', ['title' => 'Assign Permissions', 'breadcrums' => ['Home', 'Roles', 'Give Permission']])
        {{-- <div class="row mb-2 flex-end">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('roles.create')}}" class="btn btn-success">Create</a>
                </div>
            </div>
        </div> --}}
    </div><!-- /.container-fluid -->
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Assign Permissions To : {{$role->name}}</h3>
                </div>
                <form role="form" method="post" action="{{ route('roles.permission.store', ['id' => $role->id]) }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Permissions</label>
                            <select multiple="multiple" class="form-control" name="permission_ids[]">
                                @foreach ($permissions as $key => $permission)
                                    <option value="{{$permission->id}}">{{ $permission->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
