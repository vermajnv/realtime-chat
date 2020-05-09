<div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="signinModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
                        <div class="card card-signin-signup">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ __('Login') }}</h5>
                                <form class="form-signin-signup" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-label-group">
                                        <input type="email" id="inputUsername" class="form-control"
                                            placeholder="Username" name="email" required autofocus>
                                        <label for="inputUsername">Username</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword" class="form-control"
                                            placeholder="Password" name="password" required>
                                        <label for="inputPassword">Password</label>
                                    </div>

                                    <div class="custom-control custom-checkbox mb-3">
                                        {{-- <input type="checkbox" class="custom-control-input" id="customCheck" name="remember-me"> --}}
                                        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="remember">Remember Me</label>
                                    </div>
                                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="signin">Sign In</button>
                                    <hr class="my-4">
                                    <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fa fa-google mr-2"></i> Sign in with Google</button>
                                    <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fa fa-facebook-f mr-2"></i> Sign in with Facebook</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>