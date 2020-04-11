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
                @include('master.includes.tab-header')
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
                                                    <input type="text" class="form-control" id="title" placeholder="Title" name="en_title" value="{{old('en_title')}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea class="form-control" id="description" placeholder="Description" name="en_description" value="{{old('en_description')}}"></textarea>
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
                                                    <input type="text" class="form-control" id="title" placeholder="Title" name="hi_title" value="{{old('hi_title')}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea class="form-control" id="description" placeholder="Description" name="hi_description" value="{{old('hi_description')}}"></textarea>
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
