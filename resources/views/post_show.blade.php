
@extends('layouts.home')
@section('content')



        <!--#######################  Featured and Trending posts section  #######################-->

<section class="container mt-7 ">
      
    <div class="post">
        <div id="Carousel2" class="carousel slide shadow-soft border border-light p-4 rounded" data-ride="carousel">
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/images/{{$post->image}}" alt="First slide">
                </div>
            </div>
        </div>
        
        <div class="content mt-4">
            <div class="d-flex justify-content-between align-items-center post-group">
               <h5> <span class="card-text "><span class="far fa-calendar-alt mr-2 small"></span>{{$post->created_at->diffForHumans()}}</span></h5>
               <div class="d-flex ">
                <img class="avatar-sm mr-2 img-fluid rounded-circle" src="/images/home/team/profile-picture-2.jpg" alt="Jo portrait"> 
                <h5 >{{$post->user ? $post->user->name : 'not found'}}</h5>
            </div>
               <h5> <a href="#" class="small"><span class="far fa-comments mr-2"></span>21</a></h5>
            </div>
            <div class="mt-5">
            <h3 class="display-3 pb-3 text-center">{{$post->title}}</h3>

                <p class="card-text lead text-larg">{{$post->content}} </p>
             
            </div>
        </div>
    </div>
 

</section>
     
    <!--#######################  End of Hero section  #######################-->





@endsection