@extends('admin.master')
@section('title')
    Edit Category
@endsection
@section('body')
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">edit category</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('serviceCategories.update', $serviceCategory->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" value="{{$serviceCategory->name}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success" value="Update Category">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
