
@extends('layouts.home')
@section('content')




        <!--#######################  slide section  #######################-->

        <div class="section ">
            <div class="container">
                <div class="row justify-content-center">
                   
                    <div id="Carousel4" class="carousel slide shadow-soft border border-light p-4 rounded" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#Carousel4" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel4" data-slide-to="1"></li>
                            <li data-target="#Carousel4" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner rounded">
                            <div class="carousel-item overlay-primary active">
                                <img class="d-block w-100" src="/images/home/image-2.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block text-dark">
                                    <h3 class="h5">First Title</h3>
                                    <p>Start your development with a Pixel Design System for Bootstrap 4. It is creative and it features many components that can help you create amazing websites.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item overlay-primary">
                                <img class="d-block w-100" src="/images/home/image-3.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block text-dark">
                                    <h3 class="h5">Second Title</h3>
                                    <p>Start your development with a Pixel Design System for Bootstrap 4. It is creative and it features many components that can help you create amazing websites.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item overlay-primary">
                                <img class="d-block w-100" src="/images/home/image-1.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block text-dark">
                                    <h3 class="h5">Third Title</h3>
                                    <p>Start your development with a Pixel Design System for Bootstrap 4. It is creative and it features many components that can help you create amazing websites.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#Carousel4" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#Carousel4" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>




                </div>
            </div>        
        </div>
        <!--#######################  End of slide section  #######################-->
  


        <!--####################### All posts section  #######################-->

<section class="section section-lg pt-0">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <h2 class="h1">Posts</h2>
        </div>
        <div class="row">


            @foreach ($posts as $post)

            <div class="col-12 col-md-4 mb-3">
                <div class="card bg-primary border-light shadow-soft">
                    <div class="card-header p-3">
                        <img src="/images/{{$post->image}}" class="card-img-top rounded" alt="Designer desk"style="width: 315px;height: 177px;">
                    </div>
                    <div class="card-body pt-2">
                        <div class="media d-flex align-items-center justify-content-between">
                            <div class="post-group">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="" >
                                    <img class="avatar-sm mr-2 img-fluid rounded-circle" src="/images/home/team/profile-picture-2.jpg" alt="Jo portrait"> {{$post->user ? $post->user->name : 'not found'}}
                                </a>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="small"><span class="far fa-calendar-alt mr-2"></span>{{$post->created_at->diffForHumans()}}</span>
                            </div>
                        </div> 
                        <a href="{{route('home.post.show',$post->title)}}">
                        <h3 class="h5 card-title mt-4">{{Str::limit($post->title, 60)}}</h3></a>
                        <p class="card-text">{{Str::limit($post->content, 100)}} </p>
                        <a href="{{route('home.post.show',$post->title)}}" class="btn btn-primary btn-sm">Learn More</a>
                    </div>
                </div>
            </div>
                @endforeach


        </div>
        {{-- {{ $posts->links() }} --}}
        {{ $posts->links('layouts.pagination') }}

        {{-- <div class="container row justify-content-center mt-5 ">
            <nav aria-label="Blog page navigation" class="row">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" aria-label="first link" href="#"><span class="fas fa-angle-double-left"></span></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2</a>
                    </li>
                  
                    <li class="page-item">
                        <a class="page-link" aria-label="first link" href="#"><span class="fas fa-angle-double-right"></span></a>
                    </li>
                </ul>
            </nav>
           </div>
    </div> --}}
</section>

    <!--#######################  End of posts section  #######################-->







        <!--#######################  Featured and Trending posts section  #######################-->

<section class="posts">
        <div class="container_posts">
            <div class="row">

                <div class="col-8 col-md-8 mb-4">
                    <div class="row mb-2">
                        <h2 class="h2 text-left">Featured posts </h2>

                    </div>
                        <div class="row">

                            @foreach($posts_fovourite as $post)
                
                            <div class="col-6 col-md-6 mb-3">
                                <div class="card bg-primary shadow-soft border-light">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-md-4">
                                            <img src="/images/{{$post->image}}" class="card-img rounded-left" alt="Artist desk"style="width: 155px;height: 165px;">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <a href="{{route('home.post.show',$post->title)}}"><h3 class="h5 card-title">{{Str::limit($post->title,30)}}</h3></a>
                                                <p class="card-text">{{Str::limit($post->content, 50)}} </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="card-text small"><span class="far fa-calendar-alt mr-2"></span>{{$post->created_at->diffForHumans()}}</span>
                                                    <a href="#" class="small"><span class="far fa-comments mr-2"></span>21</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        @endforeach
                        
           
          

                        </div>
                      </div>
        


                        
                <div class="col-4 col-md-4 ">
                    <div class="row mb-2">
                        <h2 class="h2 text-left">Trending</h2>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-12" >
                            <div class="card bg-primary shadow-soft border-light mb-3 border-top">
                                <div class="row no-gutters align-items-center text-left">
                                    <div class="col-md-1 text-right">
                                        <h3 class="h5 card-title w-100" style="color: rgba(62, 59, 59, 0.476);">1</h3>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="card-body">
                                            <a href="#"><h3 class="h5 card-title">We partnered up with Google</h3></a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="card-text small"><span class="far fa-calendar-alt mr-2"></span>15 March 2020</span>
                                                <a href="#" class="small"><span class="far fa-comments mr-2"></span>21</a>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>

                 
 

                        </div>
                        
                        
                    </div>
                </div>
            </div>

    </div>

</section>
     
    <!--#######################  End of Hero section  #######################-->





        <!--#######################  Email address section  #######################-->

    <section class="section section-sm pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-primary shadow-soft border-light px-4 py-5">
                        <div class="card-header pb-0 text-center">
                            <h2 class="h1 mb-3">Get the most out of your network.</h2>
                            <p class="mb-5 lead">
                                Contact management designed for teams and individuals
                            </p>
                        </div>
                        <div class="card-body pt-2 px-0 px-lg-7">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="h6 font-weight-light text-gray" for="subscribeInputEmail">Email address</label>
                                        <div class="d-flex flex-row justify-content-center">
                                            <div class="input-group">
                                                <input class="form-control form-control-xl border-light" id="subscribeInputEmail" placeholder="example@company.com" type="email">
                                                <div class="input-group-prepend">
                                                    <button type="submit" class="btn btn-primary rounded-right">Subscribe</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--#######################  End of Email address section  #######################-->



@endsection