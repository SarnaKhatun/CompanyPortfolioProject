@extends('admin.master')
@section('title')
    Manage Category
@endsection
@section('body')
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">manage category</h4>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>Sl. No:</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogCategories as $blogCategory)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$blogCategory->name}}</td>
                                <td>{{$blogCategory->status == 0 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('blogCategories.change-status', ['id' => $blogCategory->id])}}" class="btn btn-{{$blogCategory->status == 0 ? 'primary' : 'warning'}} fa fa-{{$blogCategory->status == 0 ? 'eye' : 'eye-slash'}}"></a>
                                    <a href="{{route('blogCategories.edit', $blogCategory->id)}}" class="btn btn-secondary fa fa-edit"></a>
                                    <form action="{{route('blogCategories.destroy', $blogCategory->id)}}" method="post" onsubmit="return confirm('are you sure??')" style="display: inline-block">
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
