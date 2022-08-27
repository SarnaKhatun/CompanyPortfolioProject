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
                        @foreach($serviceCategories as $serviceCategory)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$serviceCategory->name}}</td>
                                <td>{{$serviceCategory->status == 0 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('serviceCategories.change-status', ['id' => $serviceCategory->id])}}" class="btn btn-{{$serviceCategory->status == 0 ? 'primary' : 'warning'}} fa fa-{{$serviceCategory->status == 0 ? 'eye' : 'eye-slash'}}"></a>
                                    <a href="{{route('serviceCategories.edit', $serviceCategory->id)}}" class="btn btn-secondary fa fa-edit"></a>
                                    <form action="{{route('serviceCategories.destroy', $serviceCategory->id)}}" method="post" onsubmit="return confirm('are you sure??')" style="display: inline-block">
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
