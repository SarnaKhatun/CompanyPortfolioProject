@extends('admin.master')
@section('title')
    Edit Service
@endsection
@section('body')
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">edit service</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('services.update', $service->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <select name="category_id" id="" class="form-control">
                                    <option value="" disabled><--select a category--></option>
                                    @foreach($serviceCategories as $serviceCategory)
                                        <option value="{{$serviceCategory->id}}" {{$serviceCategory->id == $service->id ? 'selected' : ''}}>{{$serviceCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Title</label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control" value="{{$service->title}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Short Description</label>
                            <div class="col-md-8">
                                <textarea name="short_description" id="" cols="30" rows="5" class="form-control">{{$service->short_description}}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Long Description</label>
                            <div class="col-md-8">
                                <textarea name="long_description" id="" cols="30" rows="5" class="form-control">{{$service->long_description}}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image">
                                @if(isset($service->image))
                                    <img src="{{asset($service->image)}}" alt="" style="height: 100px; width: 100px;">
                                @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success" value="Update Service">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
