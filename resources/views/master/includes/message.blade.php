@if (session()->has('message'))
    toastr.info('{{session()->get('message')}}');
@endif
