@extends('layouts.home')
@section('content')
      <div class="col-10 col-s-7 col-m-9">
        <div class="row justify-content-center mt-6">   
          
          <div class="col-10 col-s-7 col-m-9">
            <a href="{{ route('post.create') }}">            
            <button type="button" class="btn btn-success btn-sm mb-2"><i class="fa fa-plus-circle mr-1" aria-hidden="true"></i>Add Post</button>
            </a>

            <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                  @isset($posts)
                  @foreach ($posts as $post)
                  <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{$post->title}}</td>
                  <td>{{ \Illuminate\Support\Str::limit($post->description, 80, $end='...') }}
                  </td>
                  <td>
                      @if ($post->status==1)
                        Active
                      @else
                        Inactive
                      @endif
                    </td>
                  <td><img src="{{ asset($post->image) }}" alt="" width="70px"></td>
                  <td>
                      <div class="row">
                        <a href="{{ route('post.edit',$post->id) }}">
                            <button type="button" class="btn btn-info btn-sm ml-3 mr-2"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                          </a>
                          <form action="{{ route('post.destroy',$post->id) }}" method="POST">
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
          </div>   
        </div> 
      </div>
  @endsection