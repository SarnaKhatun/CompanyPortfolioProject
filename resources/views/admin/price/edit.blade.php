@extends('admin.master')
@section('title')
    Edit Price
@endsection
@section('body')
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center text-capitalize">edit price</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('update-price', ['id' => $price->id])}}" method="post">
                        @csrf
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" value="{{$price->name}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Price</label>
                            <div class="col-md-8">
                                <input type="text" name="price" class="form-control" value="{{$price->price}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Description</label>
                            <div class="col-md-8">
                                <textarea name="description" id="" cols="30" rows="5" class="form-control">{{$price->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit"class="btn btn-success" value="Update Price">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
