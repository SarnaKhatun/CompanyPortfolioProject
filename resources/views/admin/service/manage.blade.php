@extends('admin.master')
@section('title')
    Manage Service
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">manage service</h4>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>Sl. No:</th>
                            <th>Category Name</th>
                            <th>Title</th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$service->category->name}}</td>
                                <td>{{$service->title}}</td>
                                <td>{{$service->short_description}}</td>
                                <td>{{$service->long_description}}</td>
                                <td>
                                    <img src="{{asset($service->image)}}" alt="" style="height: 100px; width: 100px;">
                                </td>

                                <td>{{$service->status == 0 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('services.change-status', ['id' => $service->id])}}" class="btn btn-{{$service->status == 0 ? 'primary' : 'warning'}} fa fa-{{$service->status == 0 ? 'eye' : 'eye-slash'}}"></a>
                                    <a href="{{route('services.edit', $service->id)}}" class="btn btn-secondary fa fa-edit"></a>
                                    <form action="{{route('services.destroy', $service->id)}}" method="post" onsubmit="return confirm('are you sure??')" style="display: inline-block">
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
