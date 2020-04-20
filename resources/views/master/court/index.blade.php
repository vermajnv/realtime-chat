@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid">
    @include('partials.breadcrum', ['title' => 'Court', 'breadcrums' => ['Home', 'Court']])
    <div class="row mb-2 flex-end">
        <div class="row">
            <div class="col-12">
                @role('Super Admin')
                    <a href="{{route('court.create')}}" class="btn btn-success">Create</a>
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
        <h3 class="card-title">Court</h3>

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
                    <th style="width: 15%">
                        Court Type
                    </th>
                    <th style="width: 15%">
                        Title
                    </th>
                    <th style="width: 39%">
                        Description
                    </th>
                    <th style="width: 5%">
                        State
                    </th>
                    <th style="width: 5%">
                        City
                    </th>
                    <th style="width: 20%" class="text-right">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($courts as $key => $court)
                <tr>
                    <td>
                        {{$key + 1}}
                    </td>
                    <td>
                        {{($court->courtType) ? $court->courtType->translate('en')->title : ''}}
                    </td>
                    <td>
                        <a>
                            {{$court->title}}
                        </a>
                        <br />
                        <small>
                            Created {{$court->created_at}}
                        </small>
                    </td>
                    <td>
                        <a>
                            {{$court->description}}
                        </a>
                    </td>
                    <td>
                        <a>
                            {{$court->state ? $court->state->title : '-'}}
                        </a>
                    </td>
                    <td>
                        <a>
                            {{$court->city ? $court->city->title : '-'}}
                        </a>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{route('court.edit', ['court' => $court])}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{route('court.destroy', ['court' => $court])}}"   method="POST" class="inline-block">
                            {{ method_field('DELETE')}}
                            @csrf
                            <button class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                    <td class="project-actions text-right">
                    </td>
                </tr>
                @empty
                    @include('master.includes.data-not-found', ['colspan' => 4])
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
