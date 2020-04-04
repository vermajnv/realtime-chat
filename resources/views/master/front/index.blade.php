@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid">
    @include('partials.breadcrum', ['title' => 'Front User', 'breadcrums' => ['Home', 'Front User']])
    <div class="row mb-2 flex-end">
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-success">Create</a>
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
                    <th style="width: 30%">
                        Name
                    </th>
                    <th style="width: 29%">
                        Email
                    </th>
                    <th class="text-right" style="width: 40%">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $key => $user)
                <tr>
                    <td>
                        {{$key + 1}}
                    </td>
                    <td>
                        <a>
                            {{$user->name}}
                        </a>
                        <br />
                        <small>
                            Created {{$user->created_at}}
                        </small>
                    </td>
                    <td>
                        <a>
                            {{$user->email}}
                        </a>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-eye">
                            </i>
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                        </a>
                        <form class="inline-block" action="{{ route('permissions.destroy', $user->id) }}" method="POST">
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
