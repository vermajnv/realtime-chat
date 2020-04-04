@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid">
    @include('partials.breadcrum', ['title' => 'Court Type', 'breadcrums' => ['Home', 'Type']])
    <div class="row mb-2 flex-end">
        <div class="row">
            <div class="col-12">
                @role('Super Admin')
                    <a href="{{route('court-type.create')}}" class="btn btn-success">Create</a>
                @endrole
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Types</h3>

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
                    <th style="width: 33%">
                        Title
                    </th>
                    <th style="width: 33%">
                        Description
                    </th>
                    <th style="width: 33%">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($courtTypes as $key => $court_type)
                <tr>
                    <td>
                        {{$key + 1}}
                    </td>
                    <td>
                        <a>
                            {{$court_type->title}}
                        </a>
                        <br />
                        <small>
                            Created {{$court_type->created_at}}
                        </small>
                    </td>
                    <td>
                        <a>
                            {{$court_type->description}}
                        </a>
                    </td>
                    <td class="project-actions text-right">
                        <form action="{{route('court-type.destroy', ['court_type' => $court_type])}}" method="POST" class="inline-block">
                            {{ method_field('DELETE')}}
                            @csrf
                            <button class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                        <a class="btn btn-primary btn-sm" href="{{route('court-type.edit', ['court_type' => $court_type])}}">
                            <i class="fas fa-edit">
                            </i>
                            {{-- View --}}
                        </a>
                    </td>
                    <td class="project-actions text-right">
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

@section('js')
    <script type="text/javascript">
        @include('master.includes.error')
        @include('master.includes.message')
    </script>
@stop
