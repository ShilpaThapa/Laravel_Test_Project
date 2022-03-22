@extends('layouts.home')

@section('content')
<div class="col-10 col-s-7 col-m-9">
    <div class="row justify-content-center mt-6">   
      <div class="col-md-8 col-sm-10">
        <div class="card">
          <div class="card-body">
            <h4>Users</h4>

            <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
              @csrf

                <div class="form-group row">
                  <div class="col-sm-12 col-md-3">
                    <label for=""><small>Name</small></label>
                  </div>
                  <div class="col-sm-12 col-md-9">
                    <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" id="" aria-describedby="emailHelp" placeholder="Enter name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                </div>
                    
                <div class="form-group row">
                  <div class="col-sm-12 col-md-3">
                    <label for=""><small>Age</small></label>
                  </div>
                  <div class="col-sm-12 col-md-9">
                    <input type="number" name="age" class="form-control form-control-sm @error('age') is-invalid @enderror" id="" aria-describedby="emailHelp" placeholder="Enter age">
                    @error('age')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12 col-md-3">
                    <label for=""><small>Bio</small></label>
                  </div>
                  <div class="col-sm-12 col-md-9">
                    <textarea class="form-control @error('bio') is-invalid @enderror" name="bio" id="bio" placeholder="Enter bio"></textarea>
                    @error('bio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12 col-md-3">
                    <label for=""><small>Image</small></label>
                  </div>
                  <div class="col-sm-12 col-md-9">
                    <input type="file" class="form-control form-control-sm @error('image') is-invalid @enderror" name="image" id="image">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                </div>
                
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus-circle mr-1" aria-hidden="true"></i>Create</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div> 
  </div>
  @endsection