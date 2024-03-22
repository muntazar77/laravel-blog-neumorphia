
@extends('layouts.admin')

@section('title', 'Pists')
@section('page-title', 'Posts Page')
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
                    <h4>Table Posts</h4>
                    <a class="actionButton " href="{{route('posts.create')}}"><button >Create New Post</button></a>
                    
                  
                
                </div>

                <table>
                    <th>id</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Crated By</th>

                    <th>Crated Data</th>
                    <th>Action</th>

                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td><img src="{{asset('images/'.$post->image)}}" alt="" style="width: 65px; height: 65px;"></td>
                            <td>{{ $post->title }}</td>
                            <td>{{$post->user ? $post->user->name : 'not found'}}</td>
                             <td>{{$post->created_at->format('Y-m-d')}}</td>
                            <td>
                                <a class="actionButton editButton" href="{{route('posts.edit',$post->id)}}">Edit</a>
                                <form style="display: inline;" method="POST" action="{{route('posts.destroy', $post->id)}}">
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
                        <h2 class="h4">Create New Post</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('posts.store')}}" method="POST" class="mt-1 text-left">
                            <!-- Form -->
                            @csrf
                            @method('POST')
                            <div class="form-group ">
                                <label for="exampleInputIcon3">Title</label>
                                <div class="input-group mb-4">
                                    <input  class="form-control" name="title" id="exampleInputIcon3"  placeholder="Title" type="text" aria-label="name" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Post Creator </label>
                                <select name="post_creator" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                    <option selected>Choose...</option>
                                    <option value="1">United States</option>
                
                                </select>
                            </div>

                            <div class="form-group ">
                                <div class="form-group">
                                    <label for="exampleInputPassword6">Content</label>
                                    <div class="input-group mb-4">
                                        <textarea  class="form-control" name="content" id="" cols="30" rows="10" id="exampleInputconnent" placeholder="content" aria-label="content" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="form-group">
                                    <label for="exampleInputPassword6">Image</label>
                                    <div class="input-group mb-4">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group ">
                                <div class="form-check square-check">
                                    <input class="form-check-input" name="featured" type="checkbox" value="" id="defaultCheck222">
                                    <label class="form-check-label" for="defaultCheck222">
                                      Featured 
                                    </label>
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
