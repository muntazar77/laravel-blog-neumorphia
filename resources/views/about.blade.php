
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Blog</title>



<!-- Fontawesome -->
<link type="text/css" href="vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Pixel CSS -->
<link type="text/css" href="css/neumorphism.css" rel="stylesheet">


</head>

<body>
    <header class="header-global">
    <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light">
        <div class="container position-relative">
            <a class="navbar-brand shadow-soft py-2 px-3 rounded border border-light mr-lg-4" href="index.html">
                <img class="navbar-brand-dark" src="assets/img/brand/dark.svg" alt="Logo light">
                <img class="navbar-brand-light" src="assets/img/brand/dark.svg" alt="Logo dark">
            </a>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="home.html" class="navbar-brand shadow-soft py-2 px-3 rounded border border-light">
                                <img src="assets/img/brand/dark.svg" alt="Themesberg logo">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" >
                            <span class="nav-link-inner-text">Pages</span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Pricing</a></li>
                            <li><a class="dropdown-item" href="/about.html">About</a></li>
                            <li><a class="dropdown-item" href="/contact.html">Contact</a></li>
            
                        </ul>
                    </li>
              
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" >
                            <span class="nav-link-inner-text">Support</span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg">
                            <div class="col-auto px-0" data-dropdown-content>
                                <div class="list-group list-group-flush">
                                    <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <span class="icon icon-sm icon-secondary"><span class="fas fa-microphone-alt"></span></span>
                                        <div class="ml-4">
                                            <span class="text-dark d-block">Support</span>
                                            <span class="small">Looking for answers? Ask us!</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="about.html" class="nav-link">
                            <span class="nav-link-inner-text">About</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="contact.html" class="nav-link"  >
                            <span class="nav-link-inner-text">Contact</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="d-flex align-items-center">
                <!-- <a href="#" target="_blank" class="btn btn-primary text-secondary d-none d-md-inline-block mr-3"> login</a> -->
                <!-- Button Modal -->
                    <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#modal-form"> Login </button>
                    <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#modal-form-signup">Sign Up</button>
                <!-- <a href="#" target="_blank" class="btn btn-primary"></i> Sign up</a> -->
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
</header>







        <!--#######################  Modals Content   #######################-->

<!-- Modal for login -->

<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-primary shadow-soft border-light p-4">
                    <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="card-header text-center pb-0">
                        <h2 class="h4">Sign in to our platform</h2>
                        <span>Login here using your username and password</span>   
                    </div>
                    <div class="card-body">
                        <form action="#" class="mt-4">
                            <!-- Form -->
                            <div class="form-group">
                                <label for="exampleInputIcon3">Your email</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                    </div>
                                    <input class="form-control" id="exampleInputIcon3" placeholder="example@company.com" type="text" aria-label="email adress">
                                </div>
                            </div>
                            <!-- End of Form -->
                            <div class="form-group">
                                <!-- Form -->
                                <div class="form-group">
                                    <label for="exampleInputPassword6">Password</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                        </div>
                                        <input class="form-control" id="exampleInputPassword6" placeholder="Password" type="password" aria-label="Password" required>
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="d-block d-sm-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check mb-2 mb-sm-0">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                                        <label class="form-check-label" for="defaultCheck5">
                                            Remember me
                                        </label>
                                    </div>
                                    <div><a href="#" class="small text-right">Lost password?</a></div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal for Sign Up -->

<div class="modal fade" id="modal-form-signup" tabindex="-1" role="dialog" aria-labelledby="modal-form-signup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-primary shadow-soft border-light p-4">
                    <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="card-header text-center pb-0">
                        <h2 class="mb-0 h5">Create Account</h2>                               
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <!-- Form -->
                            <div class="form-group">
                                <label for="exampleInputIcon4">Your email</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                    </div>
                                    <input class="form-control" id="exampleInputIcon4" placeholder="example@company.com" type="text" aria-label="email adress">
                                </div>
                            </div>
                            <!-- End of Form -->
                            <div class="form-group">
                                <!-- Form -->
                                <div class="form-group">
                                    <label for="exampleInputPassword7">Password</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                        </div>
                                        <input class="form-control" id="exampleInputPassword7" placeholder="Password" type="password" aria-label="Password" required>
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <!-- Form -->
                                <div class="form-group">
                                    <label for="exampleConfirmPassword7">Confirm Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                        </div>
                                        <input class="form-control" id="exampleConfirmPassword7" placeholder="Confirm password" type="password" aria-label="Password" required>
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                                    <label class="form-check-label" for="defaultCheck6">
                                        I agree to the <a href="#">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                        </form>
                        <div class="mt-3 mb-4 text-center">
                            <span class="font-weight-normal">or</span>
                        </div>
                        <div class="btn-wrapper my-4 text-center">
                            <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook mr-2" type="button" aria-label="facebook button" title="facebook button">
                                <span aria-hidden="true" class="fab fa-facebook-f"></span>
                            </button>
                            <button class="btn btn-icon-only btn-pill btn-outline-light text-twitter mr-2" type="button" aria-label="twitter button" title="twitter button">
                                <span aria-hidden="true" class="fab fa-twitter"></span>
                            </button>
                            <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook" type="button" aria-label="github button" title="github button">
                                <span aria-hidden="true" class="fab fa-github"></span>
                            </button>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!--#######################  End of Modals content  #######################-->











        <main>
            <!-- Hero -->
            <div class="section section-header pb-7">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h1 class="display-2 mb-4">We are Themesberg</h1>
                            <p class="lead mb-5">Themesberg is an independent branding & experience design company working at the intersection of culture, design, and technology. </p>
                            <a class="btn btn-primary" href="./contact.html"><span class="fas fa-book-reader mr-2"></span>Our works</a></div>
                    </div>
                </div>        
            </div>
            <!-- End of Hero section -->
            <section class="section section-lg pt-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card bg-primary shadow-soft border-light p-4">
                                <div class="row">
                                    <div class="col-12 col-lg-4 px-md-0 mb-4 mb-lg-0">
                                        <div class="card-body text-center bg-primary py-5">
                                            <div class="icon icon-shape shadow-inset border-light rounded-circle mb-3">
                                                <span class="far fa-eye"></span>
                                            </div>
                                            <!-- Heading -->
                                            <h2 class="h4 mr-2">
                                                Audience
                                            </h2>
                                            <!-- Text -->
                                            <p class="mb-0">At Themesberg, we use human, brand, and cultural insights to unlock strategic business opportunities for clients.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 px-md-0 mb-4 mb-lg-0">
                                        <div class="card-body text-center bg-primary py-5">
                                            <div class="icon icon-shape shadow-inset border-light rounded-circle mb-3">
                                                <span class="fas fa-medal"></span>
                                            </div>
                                            <!-- Heading -->
                                            <h2 class="h4 mr-2">
                                                Branding
                                            </h2>
                                            <!-- Text -->
                                            <p class="mb-0">Despite being cautioned not to judge a book by its cover, we all do it every day. We making your site looks better.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 px-md-0">
                                        <div class="card-body text-center bg-primary py-5">
                                            <div class="icon icon-shape shadow-inset border-light rounded-circle mb-3">
                                                <span class="fas fa-puzzle-piece"></span>
                                            </div>
                                            <!-- Heading -->
                                            <h2 class="h4 mr-2">
                                                Production
                                            </h2>
                                            <!-- Text -->
                                            <p class="mb-0">Today, truly creative sells. Get innovative ideas and polished finish pieces from our creative agency.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section -->
            <section class="section section-lg pt-0">
                <div class="container">
                    <div class="row align-items-center justify-content-around">
                        <div class="col-md-6 col-xl-6 mb-5">
                            <div class="card bg-primary shadow-soft border-light organic-radius p-3">
                                <img class="organic-radius img-fluid" src="assets/img/about-us-1.jpg" alt="modern desk">
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5 text-center text-md-left">
                            <h2 class="h1 mb-4">Design with us, Develop Anything.</h2>
                            <p class="lead">Themesberg is an experienced and passionate group of designers, developers, project managers, writers and artists. Every client we work with becomes a part of the team. Together we face the challenges and celebrate the victories.</p>
                            <p class="lead">Our small team is active in the creative community, endlessly interested in what’s next, and generally pleasant to be around.</p>
                            <img src="assets/img/signature.svg" alt="signature" class="mt-4" width="150">
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of section -->
            <!-- Section -->
            <section class="section section-lg pt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-4 col-lg-4 text-center">
                            <!-- Visit Box -->
                            <div class="icon-box mb-4">
                                <div class="icon icon-shape shadow-soft border border-light rounded-circle mb-4">
                                    <span class="far fa-smile-beam"></span>
                                </div>
                                <h3 class="h5">Team Members</h3>
                                <span class="counter display-3 text-gray d-block">500</span>
                            </div>
                            <!-- End of Visit Box -->
                        </div>
                        <div class="col-12 col-sm-4 col-lg-4 text-center">
                            <!-- Call Box -->
                            <div class="icon-box mb-4">
                                <div class="icon icon-shape shadow-soft border border-light rounded-circle mb-4">
                                    <span class="far fa-eye"></span>
                                </div>
                                <h3 class="h5">Projects Published</h3>
                                <span class="counter display-3 text-gray d-block">2400</span>
                            </div>
                            <!-- End of Call Box -->
                        </div>
                        <div class="col-12 col-sm-4 col-lg-4 text-center">
                            <!-- Email Box -->
                            <div class="icon-box mb-4">
                                <div class="icon icon-shape shadow-soft border border-light rounded-circle mb-4">
                                    <span class="fas fa-globe-europe"></span>
                                </div>
                                <h3 class="h5">Countries</h3>
                                <span class="counter display-3 text-gray d-block">80</span>
                            </div>
                            <!-- End of Email Box -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of section -->
            <!-- Section -->
            <section class="section section-lg pt-0">
                <div class="container">
                    <div class="row justify-content-center mb-5">
                        <h2 class="h1">Our Team</h2>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <!-- Profile Card -->
                            <div class="card bg-primary shadow-soft border-light text-center py-4 mb-5">
                                <div class="profile-image shadow-inset border border-light bg-primary rounded-circle p-3 mx-auto">
                                    <img src="assets/img/team/profile-picture-1.jpg" class="card-img-top shadow-soft p-2 border border-light rounded-circle" alt="Neil Avatar">
                                </div>
                                <div class="card-body">
                                    <h3 class="h5 mb-2">Neil Sims</h3>
                                    <span class="h6 font-weight-normal text-gray mb-3">Co-Founder Themesberg</span>
                                    <ul class="list-unstyled d-flex justify-content-center my-3">
                                        <li>
                                            <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3">
                                                <span class="fab fa-slack-hash"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3">
                                                <span class="fab fa-dribbble"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End of Profile Card -->
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <!-- Profile Card -->
                            <div class="card bg-primary shadow-soft border-light text-center py-4 mb-5">
                                <div class="profile-image shadow-inset border border-light bg-primary rounded-circle p-3 mx-auto">
                                    <img src="assets/img/team/profile-picture-3.jpg" class="card-img-top shadow-soft p-2 border border-light rounded-circle" alt="Bonnie Avatar">
                                </div>
                                <div class="card-body">
                                    <h3 class="h5 mb-2">Bonnie Green</h3>
                                    <span class="h6 font-weight-normal text-gray mb-3">Marketing Specialist</span>
                                    <ul class="list-unstyled d-flex justify-content-center my-3">
                                        <li>
                                            <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3">
                                                <span class="fab fa-slack-hash"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3">
                                                <span class="fab fa-dribbble"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End of Profile Card -->
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <!-- Profile Card -->
                            <div class="card bg-primary shadow-soft border-light text-center py-4 mb-5">
                                <div class="profile-image shadow-inset border border-light bg-primary rounded-circle p-3 mx-auto">
                                    <img src="assets/img/team/profile-picture-2.jpg" class="card-img-top shadow-soft p-2 border border-light rounded-circle" alt="Christopher avatar">
                                </div>
                                <div class="card-body">
                                    <h3 class="h5 mb-2">Christopher Wood</h3>
                                    <span class="h6 font-weight-normal text-gray mb-3">Web Designer</span>
                                    <ul class="list-unstyled d-flex justify-content-center my-3">
                                        <li>
                                            <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3">
                                                <span class="fab fa-slack-hash"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3">
                                                <span class="fab fa-dribbble"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End of Profile Card -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of section -->
        </main>




        <!--#######################  footer section  #######################-->

<footer class="d-flex pb-5 pt-6 pt-md-7 border-top border-light bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <p><strong>Botren Blog</strong> is a Bootstrap UI Kit built based on the newest design trend called Neumorphism.</p>
                <ul class="d-flex list-unstyled mb-5 mb-lg-0">
                    <li class="mr-2">
                        <a href="" target="_blank" class="btn btn-icon-only btn-pill btn-primary" aria-label="twitter social link"
                        data-toggle="tooltip" data-placement="top" title="Follow @themesberg on Twitter">
                            <span aria-hidden="true" class="fab fa-twitter"></span>
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="#" target="_blank" class="btn btn-icon-only btn-pill btn-primary" aria-label="facebook social link"
                        data-toggle="tooltip" data-placement="top" title="Like @themesberg on Facebook">
                            <span aria-hidden="true" class="fab fa-facebook"></span>
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="#" target="_blank" class="btn btn-icon-only btn-pill btn-primary" aria-label="github social link"
                        data-toggle="tooltip" data-placement="top" title="Open source projects">
                            <span aria-hidden="true" class="fab fa-github"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="btn btn-icon-only btn-pill btn-primary" aria-label="dribbble social link"
                        data-toggle="tooltip" data-placement="top" title="Follow us on Dribbble">
                            <span aria-hidden="true" class="fab fa-dribbble"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-5 mb-lg-0">
                <h5>Links</h5>
                <ul class="footer-links list-unstyled mt-2">
                    <li class="mb-1"><a class="p-2" target="_blank" href="#">Blog</a></li>
                    <li class="mb-1"><a class="p-2" target="_blank" href="#">About Us</a></li>
                    <li><a class="p-2" target="_blank" href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 mb-5 mb-lg-0">
                <h5>Other</h5>
                <ul class="footer-links list-unstyled mt-2">
             
                    <li class="mb-1">
                        <a class="p-2" href="#" target="_blank">Changelog</a>
                    </li>
                    <li class="mb-1">
                        <a class="p-2" target="_blank" href="#">License</a>
                    </li>
        
                </ul>
            </div>
            <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                <h5>Subscribe</h5>
                <p class="text-gray font-small mt-2">Join our mailing list. We write rarely, but only the best content.</p>
                <form action="#">
                    <div class="form-row mb-2">
                        <div class="col-12">
                            <label class="h6 font-weight-normal d-none" for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control mb-2" placeholder="example@company.com" name="email" aria-label="Subscribe form" id="exampleInputEmail3" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block" data-loading-text="Sending">
                                <span>Subscribe</span>
                            </button>
                        </div>
                    </div>
                </form>
                <p class="text-gray font-small m-0">We’ll never share your details. See our <a class="text-black" href="#">Privacy Policy</a></p>
            </div>
        </div>
        <hr class="my-5">
        <div class="row">
            <div class="col">

            <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo">
                <p class="font-weight-normal font-small mb-0">Copyright © Muntadher
                    <span class="current-year">2024</span>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--#######################  End of footer section  #######################-->


    <!-- Core -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendor/headroom.js/dist/headroom.min.js"></script>

<!-- Vendor JS -->
<script src="vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="vendor/nouislider/distribute/nouislider.min.js"></script>
<script src="vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="vendor/jarallax/dist/jarallax.min.js"></script>
<script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>
<script src="vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="vendor/prismjs/prism.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Neumorphism JS -->
<script src="assets/js/neumorphism.js"></script>
</body>

</html>