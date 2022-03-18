@extends('layouts.home')

@section('content')
<div class="col-10 col-s-7 col-m-9">
    <div class="row justify-content-center mt-6">   
      <div class="col-8 col-s-11 col-m-11 mt-4">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          A simple success alert!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          A simple danger alert!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>

      <div class="col-md-8 col-sm-10">
        <div class="card">
          <div class="card-body">
            <h4>Users</h4>
            <form>
                <div class="form-group row">
                  <div class="col-sm-12 col-md-3">
                    <label for=""><small>First Name</small></label>
                  </div>
                  <div class="col-sm-12 col-md-9">
                    <input type="text" class="form-control form-control-sm" id="" aria-describedby="emailHelp" placeholder="Enter firstname">
                  </div>
                </div>
                    

                <div class="form-group row">
                  <div class="col-sm-12 col-md-3">
                    <label for="exampleInputEmail1"><small>Last Name</small></label>
                  </div>
                  <div class="col-sm-12 col-md-9">
                    <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter lastname">
                  </div>
                  </div>

                    <div class="form-group row">
                      <div class="col-sm-12 col-md-3">
                        <label for="exampleInputEmail1"><small>Email Address</small></label>
                    </div>
                    <div class="col-sm-12 col-md-9">
                      <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email address">
                      </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12 col-md-3">
                    <label for="exampleInputEmail1"><small>Password</small></label>
                  </div>
                  <div class="col-sm-12 col-md-9">
                    <input type="password" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password">

                  </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                    <small>Remember Me</small> 
                    </label>
                </div>
                <div class="form-group mt-3">
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus-circle mr-1" aria-hidden="true"></i>Create</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fa fa-times mr-1" aria-hidden="true"></i>Cancel</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div> 
  </div>

  @endsection