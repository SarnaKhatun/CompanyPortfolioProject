@extends('admin.master')
@section('title')
    Add Portfolio
@endsection
@section('body')
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">add portfolio</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('portfolios.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <select name="category_id" id="" class="form-control">
                                    <option value="" disabled><--select a category--></option>
                                    @foreach($portfolioCategories as $portfolioCategory)
                                        <option value="{{$portfolioCategory->id}}">{{$portfolioCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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
                                <input type="submit" class="btn btn-success" value="Add Portfolio">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
