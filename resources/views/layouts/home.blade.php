
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>@yield('page_titel')</title>



<!-- Fontawesome -->
<link type="text/css" href="/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Pixel CSS -->
<link type="text/css" href="/css/neumorphism.css" rel="stylesheet">
{{-- <link type="text/css" href="/css/style.css" --}}

</head>

<body>
    <header class="header-global">
    <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light">
        <div class="container position-relative">
            <a class="navbar-brand shadow-soft py-2 px-3 rounded border border-light mr-lg-4" href="{{route('home')}}">
                <img class="navbar-brand-dark" src="/images/home/brand/dark.svg" alt="Logo light">
                <img class="navbar-brand-light" src="/images/home/brand/dark.svg" alt="Logo dark">
            </a>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="home.html" class="navbar-brand shadow-soft py-2 px-3 rounded border border-light">
                                <img src="/images/home/brand/dark.svg" alt="Themesberg logo">
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
                            <span class="nav-link-inner-text">Categories</span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="#">{{$category->name}}</a></li>
                          
                            @endforeach
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
                        <a href="{{route('home.about')}}" class="nav-link">
                            <span class="nav-link-inner-text">About</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{route('home.contact')}}" class="nav-link"  >
                            <span class="nav-link-inner-text">Contact</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="d-flex align-items-center">
             

                @if (Route::has('login'))
           
               <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                   
                {{-- Logout Button--}}
                    <div class="Logout">
                            <a class="btn btn-primary mr-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                      </div>
                

                    @else

                {{-- login Button--}}
                        <a  href="{{ route('login') }}" class="btn btn-primary mr-2"  >
                            Log in
                        </a>


                        @if (Route::has('register'))
                            {{-- <a href="{{ route('register') }}" class="btn btn-primary mr-2" >
                                Register
                            </a> --}}
                            <!-- Button Modal -->
                            {{-- <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#modal-form">Sign
                                In</button> --}}

                                <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#modal-form-signup">Sign
                                    Up</button>

                        @endif
                    @endauth
                </nav>
            @endif

            </div>
        </div>
    </nav>
</header>








    

<!-- Modal Content -->
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
                        <form method="POST" action="{{route('register')}}">
                            @csrf
                            <!-- Name-->
                            <div class="form-group">
                                <label for="exampleInputIcon4">Your Name</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                    </div>
                                    <input class="form-control" id="name" placeholder="Name" type="text" aria-label="name" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                            <!-- Email-->
                            <div class="form-group">
                                <label for="exampleInputIcon4">Your email</label>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                    </div>
                                    <input class="form-control" id="exampleInputIcon4" placeholder="example@company.com" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        
                                <!-- Password -->
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputPassword7">Password</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                        </div>
                                        <input class="form-control" id="exampleInputPassword7" placeholder="Password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" >
                                     @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <!-- End of Password -->

                                <!-- Confirm Password -->
                                <div class="form-group">
                                    <label for="exampleConfirmPassword7">Confirm Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                        </div>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
                        <div class="d-block d-sm-flex justify-content-center align-items-center mt-4">
                            <span class="font-weight-normal">
                                Already have an account?
                                <a href="#" class="font-weight-bold">Login here</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal Content -->

        <!--#######################  End of Modals content  #######################-->




    <main>

  @if ($errors->any())
      <div class="container mt-7 " style="z-index: 200;" >
          <!--alert Error  -->
          @foreach ($errors->all() as $error)
          <div class="alert  alert-danger alert-dismissible shadow-soft fade show" role="alert">
              <span class="alert-inner--icon"><span class="fas fa-exclamation-circle"></span></span>
              <span class="alert-inner--text"><strong>Error!</strong> {{$error}} </span>
              <button type="button" class="close text-dark" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          @endforeach

          @endif

          <!--alert success  -->
          @if (session('success'))
          <div class="alert alert-success alert-dismissible shadow-soft fade show" role="alert">
              <span class="alert-inner--icon"><span class="far fa-thumbs-up"></span></span>
              <span class="alert-inner--text"><strong>Well done!</strong> {{session('success')}}</span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>

          @endif
      </div>

        @yield('content')

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
                <h5>Categories</h5>
                <ul class="footer-links list-unstyled mt-2">
                    @foreach ($categories as $category)
                    <li class="mb-1">
                        <a class="p-2" href="#">{{$category->name}}</a>
                    </li>
                 
                    @endforeach
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


<script src="/vendor/jquery/dist/jquery.min.js"></script>
<script src="/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/vendor/headroom.js/dist/headroom.min.js"></script>

<!-- Vendor JS -->
<script src="/vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="/vendor/nouislider/distribute/nouislider.min.js"></script>
<script src="/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="/vendor/jquery.counterup/jquery.counterup.min.js"></script>
<script src="/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="/vendor/prismjs/prism.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="/js/main.js"></script>
<script src="/js/neumorphism.js"></script>

</body>

</html>