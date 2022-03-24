@extends('backend.layouts.home')

@section('content')

<div class="col-10 col-s-7 col-m-9">
    <div class="row justify-content-center mt-6">   
      <div class="col-md-8 col-sm-10">
        <div class="card">
          <div class="card-body">
            <h4>Posts</h4>
            <form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
              @csrf
                <div class="form-group row">
                  <div class="col-sm-12 col-md-3">
                    <label for="">Title</label>
                  </div>
                  <div class="col-sm-12 col-md-9">
                    <input type="text" name="title" class="form-control form-control-sm @error('title') is-invalid @enderror" id="" aria-describedby="emailHelp" placeholder="Enter title">
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                </div>
                    
                <div class="form-group row">
                  <div class="col-sm-12 col-md-3">
                    <label for="">Description</label>
                  </div>
                  <div class="col-sm-12 col-md-9">
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Enter description"></textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12 col-md-3">
                    <label for="">Position</label>
                  </div>
                  <div class="col-sm-12 col-md-9">
                    <input type="number" name="position" class="form-control form-control-sm 
                    @error('position') is-invalid @enderror" aria-describedby="emailHelp" placeholder="Enter position">
                    @error('position')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12 col-md-3">
                    <label for="">Image</label>
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

                  <div class="form-group row">
                    <div class="col-sm-12 col-md-3">
                      <label for="">Select Category</label>
                    </div>
                    <div class="col-sm-12 col-md-9">
                    <select class="form-control form-control-sm @error('category_id') is-invalid @enderror" name="category_id">
                        <option>Select</option>
                        @isset($categories)
                        @foreach ($categories as $id=>$title)
                        <option value="{{ $id }}">{{ $title }}</option>
                        @endforeach
                        @endisset
                      </select>
                      @error('category_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    </div>
  
                  <div class="form-group row">
                    <div class="col-sm-12 col-md-3">
                      <label for="">Status</label>
                    </div>
                    <div class="col-sm-12 col-md-9">
                    <select class="form-control form-control-sm @error('status') is-invalid @enderror" name="status">
                        <option>Select</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>                    
                      </select>
                      @error('status')
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