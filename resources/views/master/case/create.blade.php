@section('css')
    <link rel="stylesheet" href="{{ asset('css/dropzone/basic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropzone/dropzone.min.css') }}">
@endsection
@extends('adminlte::page')

@section('title', 'Court Create')

@section('content_header')
<div class="container-fluid">
    @include('partials.breadcrum', ['title' => 'Create Case', 'breadcrums' => ['Home', 'List']])
</div><!-- /.container-fluid -->
@stop
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-12">
            <div class="card card-primary card-tabs">
                @include('master.includes.tab-header')
                <div class="card-body">
                    <form role="form" action="{{route('case.store')}}" method="post">
                        @csrf
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
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
                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
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
                        <div class="form-group">
                            <label>Court</label>
                            <select class="form-control select2 state" style="width: 100%;" name="court" id="court">
                                @forelse ($courts as $key => $court)
                                    <option selected="selected" value="{{$court->id}}">{{$court->title}}</option>
                                @empty

                                @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <label>State</label>
                            <select class="form-control select2 state" style="width: 100%;" name="state" id="state">
                                @forelse ($states as $key => $state)
                                    <option selected="selected" value="{{$state->id}}">{{$state->title}}</option>
                                @empty

                                @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <select class="form-control select2" style="width: 100%;" name="city" id="city">
                                <option selected="selected" value="">Select City</option>
                            </select>
                        </div>
                        <div class="form-group" id="my-dropzone">
                            <label for="document">Documents</label>
                            <div class="needsclick dropzone" id="document-dropzone">

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
    $('.select2').select2();
    let getCityUrl = '{{ route('get-city')}}';
    @include('master.includes.error')
    @include('master.includes.message')
</script>
<script type="module" src="{{asset('js/ajax/select-change.js')}}"></script>
<script src="{{asset('js/dropzone/dropzone.min.js')}}"></script>
<script>
var uploadedDocumentMap = {}
  Dropzone.options.documentDropzone = {
    url: '{{route('case.store')}}',
    maxFilesize: 2, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
      uploadedDocumentMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedDocumentMap[file.name]
      }
      $('form').find('input[name="document[]"][value="' + name + '"]').remove()
    },
    init: function () {
      @if(isset($project) && $project->document)
        var files =
          {!! json_encode($project->document) !!}
        for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
        }
      @endif
    }
  }
</script>
@stop
