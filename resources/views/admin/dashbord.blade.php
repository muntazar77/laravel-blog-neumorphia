
@extends('layouts.admin')


@section('title', 'Dashbord')
@section('page-title', 'Welcome to Dashbord')
@section('content')
    




<div class="cards  m-3">
    <div class="row justify-content-center ">
        <div class="col-lg-3 col-md-4 col-sm-6 card-dash p-3 ">
                <div class="row no-gutters align-items-center">
                    <div class="icon col-md-4">
                        <i class="fas fa-users fa-3x"></i>
                    </div>
                    <div class="col-md-8">
                            <span>Users</span>
                            <h1>{{count($users)}}</h1>
                            <p>Out ot 10</p>
                    </div>
            </div>
        </div>
    
        <div class="col-lg-3 col-md-4 col-sm-6  card-dash p-3">
            <div class="">
                <div class="row no-gutters align-items-center">
                    <div class="icon col-md-4">
                        <i class="fas fa-cart-arrow-down fa-3x"></i>
    
                    </div>
                    <div class="col-md-8">
                        <span>categories</span>
                        <h1>{{count($categories)}}</h1>
                        <p>Out ot 10</p>
                    </div>
                </div>
            </div>
        </div>
    
    
        <div class="col-lg-3 col-md-4 col-sm-6 card-dash ">
            <div class="p-3">
                <div class="row no-gutters align-items-center">
                    <div class="icon col-md-4">
                        <i class="fas fa-bookmark fa-3x"></i>
    
                    </div>
                    <div class="col-md-8">
                        <span>Saves</span>
                        <h1>350</h1>
                        <p>Out ot 10</p>
                    </div>
                </div>
            </div>
        </div>
    
    
        <div class="col-lg-3 col-md-4  col-sm-6 card-dash ">
            <div class="p-3">
                <div class="row no-gutters align-items-center">
                    <div class="icon col-md-4">
                        <i class="fab fa-usps fa-3x"></i>
                    </div>
                    <div class="col-md-8">
                        <span>Posts</span>
                        <h1>{{count($posts)}}</h1>
                        <p>Out ot 10</p>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>

        



         



            <!-- table -->
            <div class="table">
                <div class="head">
                    <h4>Table Posts</h4>
                    <button onclick="onclick()"> <a href="{{route('posts.index')}}" id="openModalButton" > Go to Posts Page </a></button> 
                   
                </div>

                <table>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Created By</th>
                    <th>Created At</th>

                  
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><img src="{{asset('images/'.$post->image)}}" alt="" style="width: 65px; height: 65px;"></td>
                        <td>{{$post->title}}</td>
                        @if ($post->user == null)
                        <td>Unknown</td>
                        @else
                        <td>{{$post->user->name}}</td>
                        @endif
                        <td>{{$post->created_at->format('Y-m-d')}}</td>
                   
                    </tr>
                
@endforeach
                </table>

            </div>


            <div class="">
                <div class="row">
                    <div class="col-md-8">
                        <div class="table">
                            <div class="head">
                                <h4>Table Users</h4>

                                 <button onclick="onclick()"> <a href="{{route('users.index')}}" id="openModalButton" > &#9776; </a></button> 

            
                            </div>
            
                            <table>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Create At</th>
                                
            
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at->format('Y-m-d')}}</td>
                                </tr>
                                @endforeach
                       
                            </table>
            
                        </div>
                    </div>

                    {{-- Categories Table --}}
                    <div class="col-md-4">
                        <div class="table">
                            <div class="head">
                                <h4>Table Categories</h4>
                                <button > <a href="{{route('users.index')}}" id="openModalButton" > &#9776; </a></button> 

            
                            </div>
            
                            <table>
                                <th>id</th>
                                <th>Name</th>
                                <th>Create At</th>
                                
            
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->created_at->format('Y-m-d')}}</td>
                           
                                </tr>
                                @endforeach
                            </table>
            
                        </div>
                </div>
            </div>


            @endsection
