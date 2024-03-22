
@extends('layouts.admin')

@section('title', 'Category')
@section('page-title', 'Categories Page')
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


            <!-- table -->
            <div class="table">
                <div class="head">
                    <h4>Table Category</h4>
                    <button type="button" id="openModalButton"  data-toggle="modal" data-target="#modal-form">Create New Category</button>
                
                </div>

                <table>
                    <th>id</th>
                    <th>Name</th>
                    <th>Crated Data</th>
                    <th>Action</th>

                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{$category->created_at->format('Y-m-d')}}</td>
                            <td>
                                <a class="actionButton editButton" href="{{route('categories.edit',$category->id)}}">Edit</a>
                                {{-- <button type="submit" class="actionButton editButton"">Edit</button> --}}
                              
                                <form style="display: inline;" method="POST" action="{{route('categories.destroy', $category->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="actionButton deleteButton ">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                

                </table>

            </div>
 
      




<!-- Modal Content -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-primary shadow-soft border-light p-4">
                    <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="card-header text-center pb-0">
                        <h2 class="h4">Create New Category</h2>
                        <span>create new user here</span>   
                    </div>
                    <div class="card-body">
                        <form action="{{route('categories.store')}}" method="POST" class="mt-3 text-left">
                            <!-- Form -->
                            @csrf
                            @method('POST')
                            <div class="form-group ">
                                <label for="exampleInputIcon3">Category Name</label>
                                <div class="input-group mb-4">
                                    <input  class="form-control" name="name" id="exampleInputIcon3"  type="text" aria-label="name" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary mb-3">create</button>
                        </form>
                            <!-- End of Form -->
                     
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal Content -->


            @endsection
