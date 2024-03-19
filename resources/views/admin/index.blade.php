
@extends('layouts.admin')


@section('title', 'Dashbord')
@section('page-title', 'Welcome to Dashbord')
@section('content')
    




<div class="cards">
    <div class="row">

        <div class="col-lg-3 col-md-4 col-sm-6 card-dash p-3">
            <div class="">
                <div class="row no-gutters align-items-center">
                    <div class="icon col-md-4">
                        <i class="fas fa-users fa-3x"></i>
                    </div>
                    <div class="col-md-8">
                            <span>Users</span>
                            <h1>950</h1>
                            <p>Out ot 10</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-lg-3 col-md-4 col-sm-6  card-dash">
            <div class="p-3">
                <div class="row no-gutters align-items-center">
                    <div class="icon col-md-4">
                        <i class="fas fa-cart-arrow-down fa-3x"></i>
    
                    </div>
                    <div class="col-md-8">
                        <span>Down</span>
                        <h1>950</h1>
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
                        <h1>550</h1>
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
                    <h2>Table Posts</h2>
                    <!-- <button onclick="onclick()">&#9776;</button> -->
                    <button id="openModalButton">Create New Post </button>

                </div>

                <table>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>

                    <tr>
                        <td>Alfreds Futterkiste</td>
                        <td>Maria Anders</td>
                        <td>Germany</td>
                    </tr>
                    <tr>
                        <td>Berglunds snabbköp</td>
                        <td>Christina Berglund</td>
                        <td>Sweden</td>
                    </tr>
                    <tr>
                        <td>Centro comercial Moctezuma</td>
                        <td>Francisco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>Ernst Handel</td>
                        <td>Roland Mendel</td>
                        <td>Austria</td>
                    </tr>
                    <tr>
                        <td>Island Trading</td>
                        <td>Helen Bennett</td>
                        <td>UK</td>
                    </tr>

                </table>

            </div>


            <div class="table">
                <div class="head">
                    <h2>Table Users</h2>
                    <button onclick="onclick()">&#9776;</button>
                    <!-- <button id="openModalButton">Create New User </button> -->

                </div>

                <table>
                    <th>id</th>
                    <th>Name</th>
                    <th>old</th>
                    <th>Country</th>
                    

                    <tr>
                        <td>1</td>
                        <td>Alfreds Futterkiste</td>
                        <td>Maria Anders</td>
                        <td>Germany</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Berglunds snabbköp</td>
                        <td>Christina Berglund</td>
                        <td>Sweden</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Centro comercial Moctezuma</td>
                        <td>Francisco Chang</td>
                        <td>Mexico</td>
                    </tr>
           
                </table>

            </div>


            @endsection
