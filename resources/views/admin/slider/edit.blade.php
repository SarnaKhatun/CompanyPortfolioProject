@extends('admin.master')
@section('title')
    Edit Slider
@endsection
@section('body')
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">edit slider</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('update-slider', ['id' => $slider->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Title</label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control" value="{{$slider->title}}">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Description</label>
                            <div class="col-md-8">
                                <textarea name="description" id="" cols="30" rows="5" class="form-control">{{$slider->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image">
                                <img src="{{asset($slider->image)}}" alt="" style="height: 100px; width: 100px;">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success" value="Update Slider">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
