@extends('layouts.home')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-2 col-s-5 col-m-3" >
          <div class="sidebar-container" id="sidebar" >
              <div class="sidebar-logo">
                <a href="index.html">
                <span>Home</span>
                </a>
                <a href="" id="togglesidebar">            
                  <i class="fa fa-bars float-right" id="toggle-icon" aria-hidden="true"></i>         
                </a>
              </div>
              <ul class="sidebar-navigation">
                <li>
                  <a href="home.html">
                    <i class="fa fa-home" aria-hidden="true"></i><span>Home</span> 
                  </a>
                </li>
                <li>
                  <a href="user.html">
                    <i class="fa fa-user" aria-hidden="true"></i><span>Users</span>
                    
                  </a>
                </li>
              </ul>
          </div>
      </div>

      <div class="col-10 col-s-7 col-m-9">
        <div class="row justify-content-center mt-6">   
          <div class="col-10 col-s-7 col-m-9">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                    <th scope="row"></th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->age}}</td>
                    <td>{{$user->bio}}</td>
                    <td>{{$user->name}}</td>
                    <td>
                        <button type="button" class="btn btn-info btn-sm"><i class="fa fa-pencil mr-2" aria-hidden="true"></i>Edit</button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash mr-2" aria-hidden="true"></i>Delete</button>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>   
        </div> 
      </div>
    </div>
  </div>
  @endsection