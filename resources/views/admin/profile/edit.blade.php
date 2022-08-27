@extends('admin.master')
@section('title')
    Profile Edit
@endsection
@section('body')
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">edit profile</h4>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <ul class="text-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form action="{{route('update.profile')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" value="{{Auth()->user()->name}}">
                                <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Email</label>
                            <div class="col-md-8">
                                <input type="email" name="email" class="form-control" value="{{Auth()->user()->email}}">
                                <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Phone</label>
                            <div class="col-md-8">
                                <input type="number" name="phone" class="form-control" value="{{Auth()->user()->userDetail->phone}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Address</label>
                            <div class="col-md-8">
                                <textarea name="address" id="" cols="30" rows="5" class="form-control">{{Auth()->user()->userDetail->address}}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Description</label>
                            <div class="col-md-8">
                                <textarea name="description" id="" cols="30" rows="5" class="form-control">{{Auth()->user()->userDetail->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Nid</label>
                            <div class="col-md-8">
                                <input type="number" name="nid" class="form-control" value="{{Auth()->user()->userDetail->nid}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image">
                                @if(isset(Auth()->user()->userDetail->image))
                                <img src="{{asset(Auth()->user()->userDetail->image)}}" alt="" style="height: 100px; width: 100px;">
                                @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label for=""><input type="radio" name="status" value="1" {{Auth()->user()->userDetail->status == 1 ? 'checked' : ''}}>Published</label>
                                <label for=""><input type="radio" name="status" value="0" {{Auth()->user()->userDetail->status == 0 ? 'checked' : ''}}>UnPublished</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success" value="Update Profile">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
