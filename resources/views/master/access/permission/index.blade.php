@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid">
    @include('partials.breadcrum', ['title' => 'Permissions', 'breadcrums' => ['Home', 'Permission']])
    <div class="row mb-2 flex-end">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('permissions.create')}}" class="btn btn-success">Create</a>
            </div>
        </div>
    </div>
</div><!-- /.container-fluid -->
@stop

@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Permissions</h3>

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
                    <th style="width: 8%" class="text-center">
                        Status
                    </th>
                    <th class="text-right" style="width: 20%">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($permissions as $key => $permission)
                <tr>
                    <td>
                        {{$key + 1}}
                    </td>
                    <td>
                        <a>
                            {{$permission->name}}
                        </a>
                        <br />
                        <small>
                            Created {{$permission->created_at}}
                        </small>
                    </td>
                    <td>
                        <a>
                            {{$permission->guard_name}}
                        </a>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" class="inline-block">
                            {{ method_field('DELETE')}}
                            @csrf
                            <button class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                    @include('master.includes.data-not-found', ['colspan' => 5])
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@stop
