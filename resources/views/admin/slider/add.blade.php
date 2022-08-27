@extends('admin.master')
@section('title')
    Add Slider
@endsection
@section('body')
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">add slider</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('new-slider')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Title</label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Description</label>
                            <div class="col-md-8">
                                <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success" value="Add Slider">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
