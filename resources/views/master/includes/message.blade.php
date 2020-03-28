@if (session()->has('message'))
    toastr.info('{{session()->has('message')}}');
@endif
