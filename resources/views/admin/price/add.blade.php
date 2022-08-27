@extends('admin.master')
@section('title')
    Add Price
@endsection
@section('body')
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center text-capitalize">add price</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('new-price')}}" method="post">
                        @csrf
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Price</label>
                            <div class="col-md-8">
                                <input type="text" name="price" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Description</label>
                            <div class="col-md-8">
                                <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit"class="btn btn-success" value="Add Price">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
