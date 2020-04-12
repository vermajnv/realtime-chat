<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
                        <div class="card card-signin-signup">
                            <div class="card-body">
                                <h5 class="card-title text-center">Sign Up</h5>
                                <form class="form-signin-signup">
                                    <div class="form-label-group signup-input">
                                        <input type="text" id="fullName" class="form-control" placeholder="Full Name" pattern="[A-Za-z]{1,50}" title="This field can only contain alphabets." required autofocus>
                                        <label for="fullName">Full Name</label>
                                    </div>

                                    <div class="form-label-group signup-input">
                                        <input type="email" id="email" class="form-control" placeholder="Email Id" required>
                                        <label for="email">Email Id</label>
                                    </div>

                                    <div class="form-label-group signup-input">
                                        <input type="tel" id="mobile" class="form-control" placeholder="Mobile Number" pattern="[0-9]{10}" title="This field can only contain numbers." required>
                                        <label for="mobile">Mobile Number</label>
                                    </div>

                                    <div class="form-label-group signup-input">
                                        <input type="password" id="password" class="form-control" placeholder="Password" minlength="6" title="Password must be at least 6 characters." required>
                                        <label for="password">Password</label>
                                    </div>

                                    <div class="form-label-group signup-input">
                                        <input type="password" id="cnfPassword" class="form-control"
                                        placeholder="Confirm Password" required>
                                        <label for="cnfPassword">Confirm Password</label>
                                    </div>

                                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="signup">Sign Up</button>
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