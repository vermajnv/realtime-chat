@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid">
    @include('partials.breadcrum', ['title' => 'Admin User', 'breadcrums' => ['Home', 'Admin User']])
</div><!-- /.container-fluid -->
@stop
@section('content')

<div class="container-fluid">
    <form role="form" action="{{route('users.store')}}" method="post">
        @csrf
        <div class="card card-primary">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group required">
                            <label for="firstName" class="control-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="First Name" name="first_name" value="{{old('first_name')}}">
                        </div>
                        <div class="form-group">
                            <label for="mobileNumber">Mobile Number</label>
                            <input type="text" class="form-control" id="mobileNumber" placeholder="Mobile Number" name="mobile_number" value="{{old('mobile_number')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group required">
                            <label for="lastName" class="control-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="{{old('last_name')}}" name="last_name">
                        </div>
                        <div class="form-group required">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" {{old('email')}}>
                        </div>
                    </div>
                    {{-- <div class="col-md-12">
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control select2" style="width: 100%;" name="role" id="role">
                                @forelse ($roles as $key => $role)
                                    <option selected="selected" value="{{$role->name}}">{{$role->name}}</option>
                                @empty

                                @endforelse
                            </select>
                        </div>
                    </div> --}}
                    <div class="col-md-6">
                        <div class="form-group required">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group required">
                            <label for="confirmPassword" class="control-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Enter password" name="confirm_password">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@stop

@section('js')
    <script type="text/javascript">
        $('.select2').select2();
        @include('master.includes.error')
        @include('master.includes.message')
    </script>
@stop
