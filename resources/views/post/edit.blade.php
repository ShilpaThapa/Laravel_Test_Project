@extends('layouts.home')

@section('content')
<div class="col-10 col-s-7 col-m-9">
    <div class="row justify-content-center mt-6">   
      <div class="col-md-8 col-sm-10">
        <div class="card">
          <div class="card-body">
            <h4>Posts</h4>
            <form method="POST" action="{{ route('post.update',$post->id) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="form-group row">
                  <div class="col-sm-12 col-md-3">
                    <label for=""><small>Title</small></label>
                  </div>  
                  <div class="col-sm-12 col-md-9">
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control form-control-sm" id="" aria-describedby="emailHelp" placeholder="Enter title">
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                </div>
                    
                <div class="form-group row">
                  <div class="col-sm-12 col-md-3">
                    <label for=""><small>Description</small></label>
                  </div>
                  <div class="col-sm-12 col-md-9">
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Enter description">{{ $post->description }}</textarea>
                    @error('description')
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
                    <div class="mt-3">
                      <img src="{{ asset($post->image) }}" alt="" width="100px">
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12 col-md-3">
                    <label for=""><small>Status</small></label>
                  </div>
                <div class="col-sm-12 col-md-3">
                  <select class="form-control form-control-sm" name="status">
                    <option value="1" 
                    @if ($post->status == 1) selected
                    @endif>Active</option>
                    <option value="0" @if($post->status == 0) selected
                    @endif>Inactive</option>                    
                  </select>
                  @error('status')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                </div>

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-pencil mr-1" aria-hidden="true"></i>Update</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div> 
  </div>
  @endsection