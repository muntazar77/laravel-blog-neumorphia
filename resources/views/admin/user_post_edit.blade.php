
@extends('layouts.admin')

@section('title', 'Users')
@section('page-title', 'Edit Page')
@section('content')


    
@if ($errors->any())
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

@if (session('success'))


<div class="alert alert-success alert-dismissible shadow-soft fade show" role="alert">
    <span class="alert-inner--icon"><span class="far fa-thumbs-up"></span></span>
    <span class="alert-inner--text"><strong>Well done!</strong> {{session('success')}}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

    @endif


    
    <div class="container">
        <div class="modal-body p-0">
            <div class="card bg-primary shadow-soft border-light p-4">
              
                <div class="card-header text-center pb-0">
                    <h2 class="h4">Edit User</h2>
                    <span>Edit user here</span>   
                </div>
                <div class="card-body">
                    <form action="{{route('users.update',$user->id)}}" method="POST" class="mt-3 text-left">
                        <!-- Form -->
                        @csrf
                        @method('PUT')
                        <div class="form-group ">
                            <label for="exampleInputIcon3">Your Name</label>
                            <div class="input-group mb-4">
                                <input  class="form-control" name="name" id="exampleInputIcon3"  value="{{$user->name}}" type="text" aria-label="name" required>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="exampleInputIcon3">Your email</label>
                            <div class="input-group mb-4">
                                <input  class="form-control" name="email" id="exampleInputIcon3" value="{{$user->email}}" placeholder="example@company.com" type="text" aria-label="email adress" required>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="form-group">
                                <label for="exampleInputPassword6">Password</label>
                                <div class="input-group mb-4">
       dd($request->all());
                                    <input class="form-control" name="password" id="exampleInputPassword6"  placeholder="Password" type="password" aria-label="Password" >
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary mb-3">Update</button>
                    </form>
                        <!-- End of Form -->
                 

                </div>
            </div>
        </div>
    </div>


            @endsection
