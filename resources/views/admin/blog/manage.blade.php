@extends('admin.master')
@section('title')
    Manage Blog
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">manage blog</h4>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>Sl. No:</th>
                            <th>Category Name</th>
                            <th>Title</th>
                            <th>Author Id</th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$blog->category->name}}</td>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->author_id}}</td>
                                <td>{{$blog->short_description}}</td>
                                <td>{{$blog->long_description}}</td>
                                <td>
                                    <img src="{{asset($blog->image)}}" alt="" style="height: 100px; width: 100px;">
                                </td>

                                <td>{{$blog->status == 0 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('blogs.change-status', ['id' => $blog->id])}}" class="btn btn-{{$blog->status == 0 ? 'primary' : 'warning'}} fa fa-{{$blog->status == 0 ? 'eye' : 'eye-slash'}}"></a>
                                    <a href="{{route('blogs.edit', $blog->id)}}" class="btn btn-secondary fa fa-edit"></a>
                                    <form action="{{route('blogs.destroy', $blog->id)}}" method="post" onsubmit="return confirm('are you sure??')" style="display: inline-block">
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
