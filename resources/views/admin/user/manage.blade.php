@extends('admin.master')
@section('title')
    Manage User
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">manage user</h4>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>Sl. No:</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Nid</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    {{$user->access_label == 4 ? 'Admin' : ''}}
                                    {{$user->access_label == 3 ? 'CEO' : ''}}
                                    {{$user->access_label == 2 ? 'Manager' : ''}}
                                    {{$user->access_label == 1 ? 'Accountant' : ''}}
                                    {{$user->access_label == 0 ? 'Staff' : ''}}
                                </td>
                                <td>{{$user->userDetail->address}}</td>
                                <td>{{$user->userDetail->phone}}</td>
                                <td>{{$user->userDetail->nid}}</td>
                                <td><img src="{{asset($user->userDetail->image)}}" alt="" style="height: 100px; width: 100px;"></td>
                                <td>{{$user->userDetail->description}}</td>
                                <td>{{$user->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('users.change-status', ['id' => $user->id])}}" @if($user->status == 1) class="btn btn-success fa fa-eye" @endif @if($user->status == 0) class="btn btn-warning fa fa-eye-slash" @endif ></a>
                                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-secondary">
                                        <i class="bx bx-edit"></i>edit</a>
                                    <form action="{{route('users.destroy', $user->id)}}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure want to delete this???????')">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" value="delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
