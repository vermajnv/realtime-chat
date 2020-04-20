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
                    <form role="form" action="{{route('court.update', ['court' => $court])}}" method="post">
                        @csrf
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group required">
                                            <label for="title" class="control-label">Title</label>
                                            <input type="text" class="form-control" id="title" placeholder="Title" name="en_title" value="{{$court->translate('en')->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" placeholder="Description" name="en_description">{{$court->translate('en')->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group required">
                                            <label for="title" class="control-label">Title</label>
                                            <input type="text" class="form-control" id="title" placeholder="Title" name="hi_title" value="{{$court->translate('hi')->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" placeholder="Description" name="hi_description">{{$court->translate('hi')->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Court Type</label>
                            <select class="form-control select2 court-type" style="width: 100%;" name="court_type">
                                @forelse ($courtTypes as $key => $courtType)
                                    <option value="{{$courtType->id}}" {{ $courtType->id == $court->court_type_id ? "selected=selected" : ''}}>{{$courtType->title}}</option>
                                @empty
                                    
                                @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <label>State</label>
                            <select class="form-control select2 state" style="width: 100%;" name="state" id="state">
                                <option selected="selected">Select State</option>
                                @forelse ($states as $key => $state)
                                    <option value="{{$state->id}}" {{ $state->id == $court->state_id ? "selected=selected" : ''}}>{{$state->title}}</option>
                                @empty

                                @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <select class="form-control select2 city" style="width: 100%;" name="city" id="city">
                                @forelse ($cities as $key => $city)
                                    <option value="{{$city->id}}" {{ $city->id == $court->city_id ? "selected=selected" : ''}}>{{$city->title}}</option>
                                @empty
                                    <option selected="selected" value="">Select City</option>
                                @endforelse
                            </select>
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
    $('.court-type').select2();
    $('.state').select2();
    $('.city').select2();

    let getCityUrl = '{{ route('get-city')}}';
    @include('master.includes.error')
    @include('master.includes.message')
</script>
<script type="module" src="{{asset('js/ajax/select-change.js')}}"></script>
@stop
v
