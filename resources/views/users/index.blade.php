@extends('layouts.home')
@section('content')

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