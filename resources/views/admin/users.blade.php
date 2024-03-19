
@extends('layouts.admin')

@section('title', 'Users')
@section('page-title', 'Welcome to Users')
@section('content')


    


            <!-- table -->
            <div class="table">
                <div class="head">
                    <h2>Table users</h2>
                    <!-- <button onclick="onclick()">&#9776;</button> -->
                    <button id="openModalButton">Create New User </button>

                </div>

                <table>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Crated Data</th>
                    <th>Action</th>

                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a class="actionButton editButton" href="#">Edit</a>
                                <a class="actionButton deleteButton" href="#">Delete</a>
                               
                                {{-- <a class="actionButton editButton" href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
                                <a class="actionButton deleteButton" href="{{ route('admin.users.destroy', $user->id) }}">Delete</a> --}}
                            </td>
                        </tr>
                        @endforeach
                        
               
                
                

                </table>

            </div>





      
                  <!-- The Modal -->
                  <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2>Create a New User</h2><br>
                        <form id="postForm">
                            <div>
                                <label for="title">Name:</label>
                                <input type="text" id="title" name="title">
                            </div>
                            <div>
                                <label for="author">Email:</label>
                                <input type="email" id="email" name="email">
                            </div>
                            <div>
                                <label for="author">Password:</label>
                                <input type="password" id="password" name="password">
                            </div>
                            {{-- <div>
                                <label for="content">Content:</label>
                                <textarea id="content" name="content" cols="30" rows="10"></textarea><br>
                            </div><br> --}}
                        <!-- <button type="button">Submit</button> -->
                            <input class="btn-modal"  type="submit" value="Submit">
                        </form>
                    </div>
                </div>


            @endsection
