<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/neumorphism.css">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="minet">

        <div class="menu">
            <h3 class="logo">Logo</h3>
            <div class="linkes">
                <a href="{{route('admin.index')}}">Dashbord</a>
                <a href="{{route('users.index')}}">Usrts</a>
                <a href="{{route('posts.index')}}">Posts</a>
                <a href="{{route('categories.index')}}">Categories</a>

                <p>Disghen by Montazar </p>
            </div>
        </div>

        <div class="body">
            <!-- Title  Page-->
            <div class="navbar">
                <!-- <div class="title-page">
                    <h2>Welcom to my Web</h2>
                    <img src="1.jpg" alt="" width="50" height="50" srcset="">
                </div> -->

                <div class="search-bar">
                    <input type="text" class="search-input" placeholder="Search">
                    <button type="submit" class="search-button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>



                <div class="right-content">
                    <div class="user">
                        <img src="/1.jpg" alt="" width="40" height="40" srcset="">
                        <span>Montazar</span>
                    </div>

                    <!-- Notifications Menu -->
                    <div class="menu-bar notifications-menu">
                        <button class="menu-button">
                            <i class="fas fa-bell"></i>
                        </button>
                        <div class="menu-content">
                            <!-- Add your notifications here -->
                            <p>No new notifications</p>
                        </div>
                    </div>

                    <!-- Login/Logout Menu -->
                    <div class="menu-bar login-logout-menu">
                        <button class="menu-button">
                            <i class="fas fa-user"></i>
                        </button>
                        <div class="menu-content">
                            <!-- Add your login/logout options here -->
                            <a href="#">Login</a><br>
                            <a href="#">Logout</a>
                        </div>
                    </div>

                </div>
            </div>


             <div class="welcome-title">
                <h3>@yield('page-title')</h3>
            </div> 
            
            

            {{-- <div class="mt-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-gray breadcrumb-transparent">
                        <li class="breadcrumb-item"><a href="#">Dashbord</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>

            </div> --}}
            
          
         
              
                 @yield('content')





        </div>

    </div>
 




    {{-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> --}}

    {{-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> --}}


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