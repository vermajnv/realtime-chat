@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid">
    @include('partials.breadcrum', ['title' => 'Admin User', 'breadcrums' => ['Home', 'Admin User']])
    <div class="row mb-2 flex-end">
        <div class="row">
            <div class="col-12">
                @role('Super Admin')
                <a href="{{route('user.create')}}" class="btn btn-success">Create</a>
                @endrole
            </div>
        </div>
    </div>
</div><!-- /.container-fluid -->
@stop

@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Users</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        Id
                    </th>
                    <th style="width: 24%">
                        Name
                    </th>
                    <th style="width: 25%">
                        Email
                    </th>
                    <th style="width: 25%">
                        Roles
                    </th>
                    <th style="width: 25%">
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($admins as $key => $admin)
                <tr>
                    <td>
                        {{$key + 1}}
                    </td>
                    <td>
                        <a>
                            {{$admin->name}}
                        </a>
                        <br />
                        <small>
                            Created {{$admin->created_at}}
                        </small>
                    </td>
                    <td>
                        <a>
                            {{$admin->email}}
                        </a>
                    </td>
                    <td>
                        @forelse ($admin->roles as $key => $role)
                            <a>
                                {{$role->name}}
                            </a>
                            {{-- <br/> --}}
                        @empty
                            <a>
                                --
                            </a>
                        @endforelse
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.profile', ['id' => $admin->id])}}">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        @role('Super Admin')
                            <a class="btn btn-info btn-sm" id="modal_assign_role" href="" data-toggle="modal"  data-target="#modal-assign-role" title="Assign Role" data-myval="{{$admin->id}}">
                                <i class="fas fa-fw fa-share">
                                </i>
                            </a>
                        @endrole
                        <form action="" method="">
                            {{ method_field('DELETE')}}
                            @csrf
                            <button class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                    No data fond.
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@stop

@include('master.includes.assign-role', ['roles' => $roles]);

@section('js')
    <script type="text/javascript">
        $('.select2').select2();
        @include('master.includes.error')
        @include('master.includes.message')
    </script>
    <script src="{{asset('js/admin/toggle-querystring.js')}}">

    </script>
    <script src="{{asset('js/waitme/init.js')}}"></script>
    <script type="module" src="{{ asset('js/ajax/user/assign-role.js')}}"></script>
@stop
