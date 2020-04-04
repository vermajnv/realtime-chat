@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid">
    @include('partials.breadcrum', ['title' => 'Create Court Type', 'breadcrums' => ['Home', 'Type']])
</div><!-- /.container-fluid -->
@stop
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-12">
            <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">English</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Hindi</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <form role="form" action="{{route('court-type.store')}}" method="post">
                        @csrf
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                <div class="card card-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group required">
                                                    <label for="title" class="control-label">Title</label>
                                                    <input type="text" class="form-control" id="title" placeholder="Title" name="title_en" value="{{old('title')}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea class="form-control" id="description" placeholder="Description" name="description_en" value="{{old('description')}}"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                <div class="card card-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group required">
                                                    <label for="title" class="control-label">Title</label>
                                                    <input type="text" class="form-control" id="title" placeholder="Title" name="title_hi" value="{{old('title')}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea class="form-control" id="description" placeholder="Description" name="description_hi" value="{{old('description')}}"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<script type="text/javascript">
    @include('master.includes.error')
    @include('master.includes.message')
</script>
@stop
