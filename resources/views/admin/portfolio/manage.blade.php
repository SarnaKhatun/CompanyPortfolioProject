@extends('admin.master')
@section('title')
    Manage Portfolio
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">manage portfolio</h4>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>Sl. No:</th>
                            <th>Category Name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($portfolios as $portfolio)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$portfolio->category->name}}</td>
                                <td>{{$portfolio->title}}</td>
                                <td>{{$portfolio->description}}</td>
                                <td>
                                    <img src="{{asset($portfolio->image)}}" alt="" style="height: 100px; width: 100px;">
                                </td>

                                <td>{{$portfolio->status == 0 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('portfolios.change-status', ['id' => $portfolio->id])}}" class="btn btn-{{$portfolio->status == 0 ? 'primary' : 'warning'}} fa fa-{{$portfolio->status == 0 ? 'eye' : 'eye-slash'}}"></a>
                                    <a href="{{route('portfolios.edit', $portfolio->id)}}" class="btn btn-secondary fa fa-edit"></a>
                                    <form action="{{route('portfolios.destroy', $portfolio->id)}}" method="post" onsubmit="return confirm('are you sure??')" style="display: inline-block">
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
