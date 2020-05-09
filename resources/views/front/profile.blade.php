@extends('front.layouts.app')
@section('content')
    <!-- Main Content Body Start -->
    <div class="main-content">
        <div class="row custom-row">
            <!-- Profile Pic Card Start -->
            <div class="col-md-4">
                <div class="profile-card-4 z-depth-3">
                    <div class="card">
                        <div class="card-body text-center theme-gradient">
                            <div class="user-box">
                                <img src="{{ asset('images/front/adv_Harish_Salve_1.jpg')}}" alt="Profile Picture">
                            </div>
                            <h5 class="mb-1 text-white">Harish Salve</h5>
                            <h6 class="text-light">Queen's Counsel</h6>
                        </div>
                        <div class="card-body">
                            <div class="col card-body-top-row">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="m-0">
                                            <i class="fa fa-phone-square"> </i>
                                            <small class="custom-small">Mobile Number</small>
                                        </h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="col m-0 pb-1">+44 12345 67890</p>
                                </div>
                            </div>
                            <div class="col card-body-mid-row">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="m-0">
                                            <i class="fa fa-envelope"> </i>
                                            <small class="custom-small">Email Address</small>
                                        </h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="col m-0 pb-1">harish_salve_1955@gmail.com</p>
                                </div>
                            </div>
                            <div class="col card-body-bottom-row">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="m-0">
                                            <i class="fa fa-globe"> </i>
                                            <small class="custom-small">Website Address</small>
                                        </h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="col m-0 pb-1">www.harish-salve-rocks.com</p>
                                </div>
                            </div>
                            <div class="row text-center pt-4">
                                <div class="col p-1">
                                    <h4 class="m-0 line-height-5">154</h4>
                                    <small class="m-0 font-weight-bold">Following</small>
                                </div>
                                <div class="col p-1">
                                    <h4 class="m-0 line-height-5">2.2k</h4>
                                    <small class="m-0 font-weight-bold">Followers</small>
                                </div>
                                <div class="col p-1">
                                    <h4 class="m-0 line-height-5">9.1k</h4>
                                    <small class="m-0 font-weight-bold">Views</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Profile Pic Card End -->

            <!-- User Details Body Start -->
            <div class="col-md-8">
                <div class="col">
                    <div class="row z-depth-3">

                        <!-- User Profile Nav Bar Starts -->
                        <div class="card w-100 border-bottom-0">
                            <div class="card-body p-0">
                                <div class="user-profile-nav">
                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#timeline"
                                                role="tab">Timeline</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#about" role="tab"> About
                                            </a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">
                                                Reviews </a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#social"
                                                role="tab">Social</a>
                                            <div class="slide"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- User Profile Nav Bar Ends -->

                        <!-- User Profile Content Starts -->
                        <div class="card w-100 border-top-0">
                            <div class="card-body p-3 tab-content">

                                <!-- User Profile Timeline Starts -->
                                <div class="tab-pane user-profile-content active show" id="timeline">

                                    <div class="card user-timeline-card">
                                        <img class="card-img-top user-timeline-img" src="{{ asset('images/front/LadyJustice.jpg')}}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Article Title</h5>
                                            <p class="card-text text-justify">This is a wider card with supporting
                                                text below as
                                                a natural lead-in to additional content. This content is a little
                                                bit longer.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
                                                sed, architecto error sit veritatis maiores consequatur at voluptas
                                                nisi cupiditate exercitationem ipsa! Quis, quam itaque. Odio
                                                molestiae a incidunt enim!
                                            </p>
                                            <a href="">Continue Reading</a>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                    ago</small></p>
                                        </div>
                                    </div>

                                    <div class="card user-timeline-card">
                                        <img class="card-img-top user-timeline-img" src="{{ asset('images/front/LadyJustice.jpg')}}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Article Title</h5>
                                            <p class="card-text text-justify">This is a wider card with supporting
                                                text below as
                                                a natural lead-in to additional content. This content is a little
                                                bit longer.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
                                                sed, architecto error sit veritatis maiores consequatur at voluptas
                                                nisi cupiditate exercitationem ipsa! Quis, quam itaque. Odio
                                                molestiae a incidunt enim!
                                            </p>
                                            <a href="">Continue Reading</a>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                    ago</small></p>
                                        </div>
                                    </div>

                                    <div class="card user-timeline-card">
                                        <img class="card-img-top user-timeline-img" src="{{ asset('images/front/LadyJustice.jpg')}}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Article Title</h5>
                                            <p class="card-text text-justify">This is a wider card with supporting
                                                text below as
                                                a natural lead-in to additional content. This content is a little
                                                bit longer.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
                                                sed, architecto error sit veritatis maiores consequatur at voluptas
                                                nisi cupiditate exercitationem ipsa! Quis, quam itaque. Odio
                                                molestiae a incidunt enim!
                                            </p>
                                            <a href="">Continue Reading</a>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                    ago</small></p>
                                        </div>
                                    </div>

                                    <div class="card user-timeline-card">
                                        <img class="card-img-top user-timeline-img" src="{{ asset('images/front/LadyJustice.jpg')}}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Article Title</h5>
                                            <p class="card-text text-justify">This is a wider card with supporting
                                                text below as
                                                a natural lead-in to additional content. This content is a little
                                                bit longer.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
                                                sed, architecto error sit veritatis maiores consequatur at voluptas
                                                nisi cupiditate exercitationem ipsa! Quis, quam itaque. Odio
                                                molestiae a incidunt enim!
                                            </p>
                                            <a href="">Continue Reading</a>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                    ago</small></p>
                                        </div>
                                    </div>

                                </div>
                                <!-- User Profile Timeline Ends -->

                                <!-- User Profile About Starts -->
                                <div class="tab-pane user-profile-content" id="about">

                                    <!-- Know Me More Starts -->
                                    <div class="card border-bottom-only">
                                        <div class="card-body">
                                            <h5>Know Me More</h5>
                                            <p class="text-justify p-2">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Nesciunt
                                                dignissimos enim omnis officia nostrum explicabo placeat, sint
                                                repudiandae, tempore atque voluptas aut fuga? Rerum, eveniet
                                                ducimus? Quod cum itaque deleniti?</p>
                                        </div>
                                    </div>
                                    <!-- Know Me More Ends -->

                                    <!-- Work and Experience Starts -->
                                    <div class="card border-bottom-only">
                                        <div class="card-body">
                                            <h5>Work and Experience</h5>

                                            <div class="row p-2 pt-2">
                                                <div class="col-sm-1">
                                                    <img class="medium-avatar" src="{{ asset('images/front/queensCounselLogo.png')}}"
                                                        alt="Queens Counsel">
                                                </div>
                                                <div class="col-sm-8 p-1 pl-3">
                                                    <h6 class="m-0">
                                                        Queen's Counsel,
                                                        <small>London</small>
                                                    </h6>
                                                    <p class="text-justify">

                                                        <small>Present</small>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="row p-2 pt-2">
                                                <div class="col-sm-1">
                                                    <img class="medium-avatar" src="{{ asset('images/front/indianSCLogo.png')}}"
                                                        alt="Supreme Court of India">
                                                </div>
                                                <div class="col-sm-8 p-1 pl-3">
                                                    <h6 class="m-0">
                                                        Supreme Court of India,
                                                        <small>New Delhi</small>
                                                    </h6>
                                                    <p class="text-justify">
                                                        Sr. Advocate,
                                                        <small>15+ years</small>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="row p-2 pt-2">
                                                <div class="col-sm-1">
                                                    <img class="medium-avatar" src="{{ asset('images/front/delhiHCLogo.jpg')}}"
                                                        alt="Delhi High Court">
                                                </div>
                                                <div class="col-sm-8 p-1 pl-3">
                                                    <h6 class="m-0">
                                                        High Court,
                                                        <small>New Delhi</small>
                                                    </h6>
                                                    <p class="text-justify">
                                                        Sr. Advocate,
                                                        <small>10+ years</small>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="row p-2 pt-2">
                                                <div class="col-sm-1">
                                                    <img class="medium-avatar" src="{{ asset('images/front/lucknowDCLogo.png')}}"
                                                        alt="Lucknow District Court">
                                                </div>
                                                <div class="col-sm-8 p-1 pl-3">
                                                    <h6 class="m-0">
                                                        District Court,
                                                        <small>Lucknow</small>
                                                    </h6>
                                                    <p class="text-justify">
                                                        Advocate,
                                                        <small>3 years</small>
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Work and Experience Ends -->


                                    <!-- Notable Work Starts -->
                                    <div class="card border-bottom-only">
                                        <div class="card-body">
                                            <h5>Notable Work</h5>

                                            <ul class="list-group list-group-flush">

                                                <li class="list-group-item">
                                                    Represented Anil Ambani's Reliance Natural Resources Limited in
                                                    Krishna Godavari Basin gas dispute case.
                                                </li>
                                                <li class="list-group-item">
                                                    Represented Ratan Tata and Tata Group companies seveal times.
                                                </li>
                                                <li class="list-group-item">
                                                    Represented Vodafone in $2.5 billion tax dispute with the Indian
                                                    Government. Won the case in Supreme Court of India.
                                                </li>
                                                <li class="list-group-item">
                                                    Represented Bilkis Bano, a Gujarat Riots victim, at the behest
                                                    of of the National Human Rights Commission.
                                                </li>
                                                <li class="list-group-item">
                                                    Represented India before the International Court of Justice in
                                                    the Kulbhushan Jadhav case.
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                    <!-- Notable Work Ends -->

                                    <!-- Education Starts -->
                                    <div class="card border-bottom-only">
                                        <div class="card-body">
                                            <h5>Education</h5>

                                            <div class="row p-2 pt-2">
                                                <div class="col-sm-1">
                                                    <img class="medium-avatar" src="{{ asset('images/front/graduationLogo.png')}}"
                                                        alt="College">
                                                </div>
                                                <div class="col-sm-8 p-1 pl-3">
                                                    <h6 class="m-0">
                                                        Nagpur University,
                                                        <small>Nagpur</small>
                                                    </h6>
                                                    <p class="text-justify">

                                                        <small>B.Com, LLB</small>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="row p-2 pt-2">
                                                <div class="col-sm-1">
                                                    <img class="medium-avatar" src="{{ asset('images/front/graduationLogo.png')}}"
                                                        alt="College">
                                                </div>
                                                <div class="col-sm-8 p-1 pl-3">
                                                    <h6 class="m-0">
                                                        Institute of Chartered Accountants of India,
                                                        <small>New Delhi</small>
                                                    </h6>
                                                    <p class="text-justify">

                                                        <small></small>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="row p-2 pt-2">
                                                <div class="col-sm-1">
                                                    <img class="medium-avatar" src="{{ asset('images/front/schoolLogo.png')}}"
                                                        alt="Delhi High Court">
                                                </div>
                                                <div class="col-sm-8 p-1 pl-3">
                                                    <h6 class="m-0">
                                                        Hogwarts School of Witchcraft and Wizardry,
                                                        <small>Scotland</small>
                                                    </h6>
                                                    <p class="text-justify">

                                                        <small>Higher Secondary</small>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="row p-2 pt-2">
                                                <div class="col-sm-1">
                                                    <img class="medium-avatar" src="{{ asset('images/front/schoolLogo.png')}}" alt="Lucknow District Court">
                                                </div>
                                                <div class="col-sm-8 p-1 pl-3">
                                                    <h6 class="m-0">
                                                        Durmstrang Institute for Magical Learning,
                                                        <small>Northern Europe</small>
                                                    </h6>
                                                    <p class="text-justify">

                                                        <small>Matriculation</small>
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Education Ends -->



                                </div>
                                <!-- User Profile About Ends -->


                                <!-- User Client Review Starts -->
                                <div class="tab-pane user-profile-content" id="reviews">

                                    <button type="button" class="btn btn-primary mb-1" data-toggle="modal"
                                        data-target="#writeReview"> Write Review </button>

                                    <!-- Modal of Review Form Starts-->
                                    <div class="modal fade" id="writeReview" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <!-- <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button> -->
                                                    <h4 class="modal-title w-100 text-center">Write Review
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form>

                                                        <!-- <div class="form-group">
                                                            <label for="name"> Full Name </label>
                                                            <input type="text" class="form-control" id="name"
                                                                placeholder="Narendra Damodardas Modi" required>
                                                        </div> -->

                                                        <!-- <div class="form-group">
                                                            <label for="email"> Email Address </label>
                                                            <input type="email" class="form-control" id="email"
                                                                placeholder="name@example.com" required>
                                                        </div> -->

                                                        <div class="form-group">
                                                            <label for="caseType"> Case Type </label>
                                                            <select class="form-control" id="caseType" required>
                                                                <option value=""></option>
                                                                <option value="civilCase">Civil Case</option>
                                                                <option value="criminalCase">Criminal Case</option>
                                                                <option value="ipCase">Intellectual Property Case
                                                                </option>
                                                                <option value="cyberCase">Cyber Crime Case</option>
                                                                <option value="divorceCase">Divorce Case</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <h6>Rating </h6>
                                                            <div class="rating">
                                                                <input type="radio" name="rating" value="5" id="5">
                                                                <label for="5">☆</label>
                                                                <input type="radio" name="rating" value="4" id="4">
                                                                <label for="4">☆</label>
                                                                <input type="radio" name="rating" value="3" id="3">
                                                                <label for="3">☆</label>
                                                                <input type="radio" name="rating" value="2" id="2">
                                                                <label for="2">☆</label>
                                                                <input type="radio" name="rating" value="1" id="1"
                                                                    required>
                                                                <label for="1">☆</label>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <small class="d-block"> Note: Please do not write review
                                                                for any pending
                                                                legal matter. </small>
                                                            <label for="clientComment"> Your Comment </label>
                                                            <textarea class="form-control" id="clientComment"
                                                                rows="3" required></textarea>
                                                        </div>

                                                </div>

                                                <div class="modal-footer">

                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>

                                                    <button type="button" class="btn btn-default border"
                                                        data-dismiss="modal">Close</button>
                                                </div>

                                            </div>
                                            <!-- Modal Ends -->

                                        </div>
                                    </div>
                                    <!-- Modal of Review Form Ends-->

                                    <!-- Review Comments Starts -->

                                    <div class="card border-bottom-only">
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-sm-1">
                                                    <img class="small-avatar" src="{{ asset('images/front/adv_1.jpg')}}"
                                                        alt="User Profile Picture">
                                                </div>

                                                <div class="col-sm-11 pt-2">
                                                    <h6 class="d-flex align-items-center">
                                                        Harry Potter
                                                    </h6>

                                                    <div class="rating">
                                                        <input type="radio" name="rating" value="5" id="5" checked>
                                                        <label for="5">☆</label>
                                                        <input type="radio" name="rating" value="4" id="4">
                                                        <label for="4">☆</label>
                                                        <input type="radio" name="rating" value="3" id="3">
                                                        <label for="3">☆</label>
                                                        <input type="radio" name="rating" value="2" id="2">
                                                        <label for="2">☆</label>
                                                        <input type="radio" name="rating" value="1" id="1" required>
                                                        <label for="1">☆</label>
                                                    </div>

                                                    <p class="text-justify">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Maiores
                                                        nisi quasi atque itaque ex, alias praesentium aliquid.
                                                        Labore
                                                        tenetur voluptates atque id cum facere minus cupiditate
                                                        nobis
                                                        voluptas! Debitis, tenetur!
                                                    </p>
                                                    <small>Reviewed on 14 November 2019</small>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card border-bottom-only">
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-sm-1">
                                                    <img class="small-avatar" src="{{ asset('images/front/adv_1.jpg')}}"
                                                        alt="User Profile Picture">
                                                </div>

                                                <div class="col-sm-11 pt-2">
                                                    <h6 class="d-flex align-items-center">
                                                        Harry Potter
                                                    </h6>

                                                    <div class="rating">
                                                        <input type="radio" name="rating" value="5" id="5">
                                                        <label for="5">☆</label>
                                                        <input type="radio" name="rating" value="4" id="4">
                                                        <label for="4">☆</label>
                                                        <input type="radio" name="rating" value="3" id="3">
                                                        <label for="3">☆</label>
                                                        <input type="radio" name="rating" value="2" id="2">
                                                        <label for="2">☆</label>
                                                        <input type="radio" name="rating" value="1" id="1" required>
                                                        <label for="1">☆</label>
                                                    </div>

                                                    <p class="text-justify">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Maiores
                                                        nisi quasi atque itaque ex, alias praesentium aliquid.
                                                        Labore
                                                        tenetur voluptates atque id cum facere minus cupiditate
                                                        nobis
                                                        voluptas! Debitis, tenetur!
                                                    </p>
                                                    <small>Reviewed on 14 November 2019</small>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card border-bottom-only">
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-sm-1">
                                                    <img class="small-avatar" src="{{ asset('images/front/adv_1.jpg')}}"
                                                        alt="User Profile Picture">
                                                </div>

                                                <div class="col-sm-11 pt-2">
                                                    <h6 class="d-flex align-items-center">
                                                        Harry Potter
                                                    </h6>

                                                    <div class="rating">
                                                        <input type="radio" name="rating" value="5" id="5">
                                                        <label for="5">☆</label>
                                                        <input type="radio" name="rating" value="4" id="4">
                                                        <label for="4">☆</label>
                                                        <input type="radio" name="rating" value="3" id="3">
                                                        <label for="3">☆</label>
                                                        <input type="radio" name="rating" value="2" id="2">
                                                        <label for="2">☆</label>
                                                        <input type="radio" name="rating" value="1" id="1" required>
                                                        <label for="1">☆</label>
                                                    </div>

                                                    <p class="text-justify">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Maiores
                                                        nisi quasi atque itaque ex, alias praesentium aliquid.
                                                        Labore
                                                        tenetur voluptates atque id cum facere minus cupiditate
                                                        nobis
                                                        voluptas! Debitis, tenetur!
                                                    </p>
                                                    <small>Reviewed on 14 November 2019</small>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card border-bottom-only">
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-sm-1">
                                                    <img class="small-avatar" src="{{ asset('images/front/adv_1.jpg')}}"
                                                        alt="User Profile Picture">
                                                </div>

                                                <div class="col-sm-11 pt-2">
                                                    <h6 class="d-flex align-items-center">
                                                        Harry Potter
                                                    </h6>

                                                    <div class="rating">
                                                        <input type="radio" name="rating" value="5" id="5">
                                                        <label for="5">☆</label>
                                                        <input type="radio" name="rating" value="4" id="4">
                                                        <label for="4">☆</label>
                                                        <input type="radio" name="rating" value="3" id="3">
                                                        <label for="3">☆</label>
                                                        <input type="radio" name="rating" value="2" id="2">
                                                        <label for="2">☆</label>
                                                        <input type="radio" name="rating" value="1" id="1" required>
                                                        <label for="1">☆</label>
                                                    </div>

                                                    <p class="text-justify">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Maiores
                                                        nisi quasi atque itaque ex, alias praesentium aliquid.
                                                        Labore
                                                        tenetur voluptates atque id cum facere minus cupiditate
                                                        nobis
                                                        voluptas! Debitis, tenetur!
                                                    </p>
                                                    <small>Reviewed on 14 November 2019</small>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card border-bottom-only">
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-sm-1">
                                                    <img class="small-avatar" src="{{ asset('images/front/adv_1.jpg')}}"
                                                        alt="User Profile Picture">
                                                </div>

                                                <div class="col-sm-11 pt-2">
                                                    <h6 class="d-flex align-items-center">
                                                        Harry Potter
                                                    </h6>

                                                    <div class="rating">
                                                        <input type="radio" name="rating" value="5" id="5">
                                                        <label for="5">☆</label>
                                                        <input type="radio" name="rating" value="4" id="4">
                                                        <label for="4">☆</label>
                                                        <input type="radio" name="rating" value="3" id="3">
                                                        <label for="3">☆</label>
                                                        <input type="radio" name="rating" value="2" id="2">
                                                        <label for="2">☆</label>
                                                        <input type="radio" name="rating" value="1" id="1" required>
                                                        <label for="1">☆</label>
                                                    </div>

                                                    <p class="text-justify">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Maiores
                                                        nisi quasi atque itaque ex, alias praesentium aliquid.
                                                        Labore
                                                        tenetur voluptates atque id cum facere minus cupiditate
                                                        nobis
                                                        voluptas! Debitis, tenetur!
                                                    </p>
                                                    <small>Reviewed on 14 November 2019</small>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Review Comments Ends -->

                                </div>
                                <!-- User Client Review Ends -->

                                <!-- User Social Starts -->
                                <div class="tab-pane user-profile-content" id="social">

                                    <div class="card text-center">
                                        <div class="card-header">
                                            <ul class="nav nav-tabs card-header-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" role="tab"
                                                        href="#followers">Followers</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" role="tab"
                                                        href="#following">Following</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body tab-content">

                                            <div class="tab-pane user-profile-content active show" id="followers">
                                                <div class="row p-3">
                                                    <form class="w-100">
                                                        <div class="input-group mb-4 border rounded-pill p-1">
                                                            <div class="input-group-prepend border-0">
                                                                <button id="button-addon4" type="button"
                                                                    class="btn btn-link text-info"><i
                                                                        class="fa fa-search"></i></button>
                                                            </div>
                                                            <input type="search" placeholder="Search Followers..."
                                                                aria-describedby="button-addon4"
                                                                class="form-control bg-none border-0">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="row">

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{asset('images/front/followersAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Harry Potter,
                                                                    <small>New Delhi</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Beginner Magician
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">Supreme Court of
                                                                        India</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{asset('images/front/followersAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Harry Potter,
                                                                    <small>New Delhi</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Beginner Magician
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">Supreme Court of
                                                                        India</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{asset('images/front/followersAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Harry Potter,
                                                                    <small>New Delhi</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Beginner Magician
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">Supreme Court of
                                                                        India</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{asset('images/front/followersAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Harry Potter,
                                                                    <small>New Delhi</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Beginner Magician
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">Supreme Court of
                                                                        India</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{asset('images/front/followersAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Harry Potter,
                                                                    <small>New Delhi</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Beginner Magician
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">Supreme Court of
                                                                        India</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{asset('images/front/followersAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Harry Potter,
                                                                    <small>New Delhi</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Beginner Magician
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">Supreme Court of
                                                                        India</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{ asset('images/front/followersAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Harry Potter,
                                                                    <small>New Delhi</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Beginner Magician
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">Supreme Court of
                                                                        India</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{asset('images/front/followersAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Harry Potter,
                                                                    <small>New Delhi</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Beginner Magician
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">Supreme Court of
                                                                        India</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{asset('images/front/followersAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Harry Potter,
                                                                    <small>New Delhi</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Beginner Magician
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">Supreme Court of
                                                                        India</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="text-center w-100 pt-3">
                                                        <a href="">See All</a>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="tab-pane user-profile-content" id="following">
                                                <div class="row p-3">
                                                    <form class="w-100">
                                                        <div class="input-group mb-4 border rounded-pill p-1">
                                                            <div class="input-group-prepend border-0">
                                                                <button id="button-addon4" type="button"
                                                                    class="btn btn-link text-info"><i
                                                                        class="fa fa-search"></i></button>
                                                            </div>
                                                            <input type="search" placeholder="Search Following..."
                                                                aria-describedby="button-addon4"
                                                                class="form-control bg-none border-0">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="row">

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{ asset('images/front/followingAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Albus Persivile Wolfrik Brian Dumbledore,
                                                                    <small>United Kingdom</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Expert in All Arts
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">International Court of
                                                                        Justice</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{ asset('images/front/followingAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Albus Persivile Wolfrik Brian Dumbledore,
                                                                    <small>United Kingdom</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Expert in All Arts
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">International Court of
                                                                        Justice</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{ asset('images/front/followingAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Albus Persivile Wolfrik Brian Dumbledore,
                                                                    <small>United Kingdom</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Expert in All Arts
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">International Court of
                                                                        Justice</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{ asset('images/front/followingAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Albus Persivile Wolfrik Brian Dumbledore,
                                                                    <small>United Kingdom</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Expert in All Arts
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">International Court of
                                                                        Justice</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{ asset('images/front/followingAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Albus Persivile Wolfrik Brian Dumbledore,
                                                                    <small>United Kingdom</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Expert in All Arts
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">International Court of
                                                                        Justice</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{ asset('images/front/followingAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Albus Persivile Wolfrik Brian Dumbledore,
                                                                    <small>United Kingdom</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Expert in All Arts
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">International Court of
                                                                        Justice</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{ asset('images/front/followingAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Albus Persivile Wolfrik Brian Dumbledore,
                                                                    <small>United Kingdom</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Expert in All Arts
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">International Court of
                                                                        Justice</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{ asset('images/front/followingAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Albus Persivile Wolfrik Brian Dumbledore,
                                                                    <small>United Kingdom</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Expert in All Arts
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">International Court of
                                                                        Justice</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-4 pb-1">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <img src="{{ asset('images/front/followingAvatarTest.png')}}"
                                                                    class="card-img-top social-card-img"
                                                                    alt="Followers">
                                                            </div>
                                                            <div class="card-body p-1 text-sm-left">
                                                                <h5 class="card-title m-0">
                                                                    Albus Persivile Wolfrik Brian Dumbledore,
                                                                    <small>United Kingdom</small>
                                                                </h5>
                                                                <p class="card-text m-0">
                                                                    Expert in All Arts
                                                                </p>
                                                                <h6>
                                                                    <small class="pb-2 w-100">International Court of
                                                                        Justice</small>
                                                                </h6>
                                                                <a href="#" class="btn btn-primary">
                                                                    Follow
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="text-center w-100 pt-3">
                                                        <a href="">See All</a>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                                <!-- User Social Ends -->

                            </div>
                        </div>
                        <!-- User Profile Content Ends -->

                    </div>
                </div>
            </div>
            <!-- User Details Body End -->
        </div>
    </div>
    <!-- Main Content Body End --> 
@endsection

@push('scripts')
    <script src="{{asset('js/front/search.js')}}"></script>
    <script src="{{asset('js/front/carousel.js')}}"></script>
    <script src="{{asset('js/front/signupForm.js')}}"></script>
@endpush