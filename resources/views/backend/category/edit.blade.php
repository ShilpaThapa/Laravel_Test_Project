@extends('backend.layouts.home')

@section('content')
<div class="col-10 col-s-7 col-m-9">
    <div class="row justify-content-center mt-6">   
      <div class="col-md-8 col-sm-10">
        <div class="card">
          <div class="card-body">
            <h4>Edit Category</h4>
            <form method="POST" action="{{ route('category.update',$category->id) }}">
              @csrf
              @method('PUT')
                <div class="form-group row">
                  <div class="col-sm-12 col-md-3">
                    <label for="">Title</label>
                  </div>  
                  <div class="col-sm-12 col-md-9">
                    <input type="text" name="title" value="{{ $category->title }}" class="form-control form-control-sm" id="" aria-describedby="emailHelp" placeholder="Enter title">
                    @error('title')
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
                    <input type="number" name="position" value="{{ $category->position }}" class="form-control form-control-sm 
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
                    <label for="">Status</label>
                  </div>
                <div class="col-sm-12 col-md-3">
                  <select class="form-control form-control-sm" name="status">
                    <option value="1" 
                    @if ($category->status == 1) selected
                    @endif>Active</option>
                    <option value="0" @if($category->status == 0) selected
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