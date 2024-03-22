
@extends('layouts.admin')

@section('title', 'Posts')
{{-- @section('page-title', 'Create Page') --}}
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
            
    @if($page_type == 'post_edit')
            

        <div class="card bg-primary shadow-soft border-light p-4 mt-1">
            <div class="card-header text-center pb-0">
                <h2 class="h4">Edit Post</h2>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{route('posts.update',$post->id)}}" method="POST" class="mt-3 text-left" >
                    
                    <!-- Form -->
                    @csrf
                    @method('PUT')
                    <div class="form-group ">
                        <label for="exampleInputIcon3">Title</label>
                        <div class="input-group mb-4">
                            <input  class="form-control" name="title" id="exampleInputIcon3" value="{{$post->title}}" type="text" aria-label="name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Post Creator </label>
                        <select name="post_creator" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" required>
                            @foreach ($users as $user)
                            {{-- <option value="{{$user->id}}">{{$user->name}}</option> --}}
                            <option @selected($post->user_id == $user->id) value="{{$user->id}}">{{$user->name}}</option>

                            @endforeach
                        </select>
                    </div>

                    <div class="form-group ">
                        <div class="form-group">
                            <label for="exampleInputPassword6">Content</label>
                            <div class="input-group mb-4">
                                <textarea class="form-control" name="content" id="" cols="30" rows="10" id="exampleInputconnent"  aria-label="content" required>{{$post->content}} </textarea>
                              
                            </div>
                        </div>
                    </div> 
                    <div class="form-group ">
                        <div class="form-group">
                            <label for="exampleInputPassword6">Image</label>
                            <div class="input-group mb-4">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="customFile" >
                                    <label class="custom-file-label" for="customFile">Choose Image</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <div class="form-check square-check">
                            <input class="form-check-input" name="fovourite" @if($post->fovourite == 1)checked @endif type="checkbox" id="defaultCheck111">

                            <label class="form-check-label" for="defaultCheck111">
                                Fovourite 
                            </label>
                        </div>
                    </div>

               
                
                    <button type="submit" class="btn btn-block btn-primary mb-3">Update</button>
                </form>
                    <!-- End of Form -->
            

            </div>
        </div>




            
          

            
        @else
            
                    
        <div class="card bg-primary shadow-soft border-light p-4 mt-1">
            <div class="card-header text-center pb-0">
                <h2 class="h4">Create New Post</h2>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{route('posts.store')}}" method="POST" class="mt-3 text-left" >
                    
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
                        <select name="post_creator" aria-placeholder="Choose..." class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" required>
                            @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
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
                                    <input type="file" class="custom-file-input" name="image" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <div class="form-check square-check">
                            <input class="form-check-input" name="fovourite"  type="checkbox" id="defaultCheck222">
                            <label class="form-check-label" for="defaultCheck222">
                                Fovourite 
                            </label>
                        </div>
                    </div>
                   
                    <button type="submit" class="btn btn-block btn-primary mb-3">create</button>
                </form>
                    <!-- End of Form -->
             

            </div>
        </div>



        @endif

         
        </div>
    </div>


            @endsection
          