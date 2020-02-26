@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid">
    @include('partials.breadcrum', ['title' => 'Roles', 'breadcrums' => ['Home', 'Roles']])
    <div class="row mb-2 flex-end">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('roles.create')}}" class="btn btn-success">Create</a>
            </div>
        </div>
    </div>
</div><!-- /.container-fluid -->
@stop

@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Roles</h3>

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
                    <th style="width: 20%">
                        Title
                    </th>
                    <th style="width: 30%">
                        Guard Name
                    </th>
                    <th style="width: 30%">
                        Permissions
                    </th>
                    <th style="width: 8%" class="text-center">
                        Status
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($roles as $key => $role)
                <tr>
                    <td>
                        {{$key + 1}}
                    </td>
                    <td>
                        <a>
                            {{$role->name}}
                        </a>
                        <br />
                        <small>
                            Created {{$role->created_at}}
                        </small>
                    </td>
                    <td>
                        <a>
                            {{$role->guard_name}}
                        </a>
                    </td>
                    <td>
                        @forelse ($role->permissions as $key => $permission)
                            <a>
                                {{$permission->name}}
                            </a>
                            {{-- <br/> --}}
                        @empty
                            <a>
                                --
                            </a>
                        @endforelse
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            {{-- View --}}
                        </a>
                        {{-- <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a> --}}
                        <a class="btn btn-info btn-sm" href="{{ route('roles.givepermission', $role->id)}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            {{-- Give Permission --}}
                        </a>
                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                            {{ method_field('DELETE')}}
                            @csrf
                            <button class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                                {{-- Delete --}}
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
