@extends('backend.layouts.home')

@section('content')
      <div class="col-10 col-s-7 col-m-9">
        <div class="row justify-content-center mt-6">   
          
          <div class="col-9 col-s-7 col-m-9">
            <a href="{{ route('category.create') }}">            
            <button type="button" class="btn btn-success btn-sm mb-2"><i class="fa fa-plus-circle mr-1" aria-hidden="true"></i>Add Category</button>
            </a>

            <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $i=1;
                  @endphp
                  @isset($categories)
                  @foreach ($categories as $category)
                  <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{$category->title}}</td>
                  <td>{{$category->slug}}</td>
                  <td>
                      @if ($category->status==1)
                        Active
                      @else
                        Inactive
                      @endif
                    </td>
                  <td>
                      <div class="row">
                        <a href="{{ route('category.edit',$category->id) }}">
                            <button type="button" class="btn btn-info btn-sm ml-3 mr-2"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                          </a>
                          <form action="{{ route('category.destroy',$category->id) }}" method="category">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                          </form>
                      </div>
                  </td>
                  </tr>
                  @endforeach
                  @endisset
                </tbody>
            </table>
            {{ $categories->links() }}
          </div>   
        </div> 
      </div>
  @endsection