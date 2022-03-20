@extends('layouts.home')
@section('content')

      <div class="col-10 col-s-7 col-m-9">
        <div class="row justify-content-center mt-6">   
          
          <div class="col-10 col-s-7 col-m-9">
            <a href="{{ route('user.create') }}">            
            <button type="button" class="btn btn-success btn-sm mb-2"><i class="fa fa-plus-circle mr-1" aria-hidden="true"></i>Add User</button>
            </a>

            <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Bio</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                        $i=1;
                  @endphp
                  @isset($users)
                  @foreach ($users as $user)
                  <tr>
                    <td>{{ $i++ }}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->age}}</td>
                  <td>{{$user->bio}}</td>
                  <td><img src="{{ asset($user->image) }}" alt="" width="60px"></td>
                  <td>
                    <div class="row">
                      <a href="{{ route('user.edit',$user->id) }}">
                        <button type="button" class="btn btn-info btn-sm mr-2 ml-3"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                      </a>
                      <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm mr-2"><i class="fa fa-trash" aria-hidden="true"></i></button>
                      </form>
                      <a href="{{ route('post.index',$user->id) }}">
                        <button type="button" class="btn btn-info btn-sm mr-2"><i class="fa fa-eye mr-1" aria-hidden="true"></i>My Posts</button>
                      </a>
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