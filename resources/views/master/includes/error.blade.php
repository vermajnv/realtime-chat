@if ($errors->any())
    @foreach ($errors->all() as $key => $error)
        toastr.error('{{$error}}');
    @endforeach
@endif
