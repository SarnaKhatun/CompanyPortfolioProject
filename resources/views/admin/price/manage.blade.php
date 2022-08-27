@extends('admin.master')
@section('title')
    Manage Price
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center text-capitalize">manage price</h4>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>Sl. No:</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($prices as $price)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$price->name}}</td>
                                <td>{{$price->price}}</td>
                                <td>{{$price->description}}</td>
                                <td>{{$price->status == 0 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('price.change-status', ['id' => $price->id])}}" class="btn btn-{{$price->status == 0 ? 'primary' : 'warning'}} fa fa-{{$price->status == 0 ? 'eye' : 'eye-slash'}}"></a>
                                    <a href="{{route('edit-price', ['id' => $price->id])}}" class="btn btn-secondary fa fa-edit"></a>
                                    <a href="{{route('delete-price', ['id' => $price->id])}}" class="btn btn-danger fa fa-trash" onclick="deletePrice({{$price->id}})"></a>
                                    <form action="{{route('delete-price', ['id' => $price->id])}}" method="post" id="delete{{$price->id}}">
                                        @csrf
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

    <script>
        function deletePrice(id) {
            event.preventDefault();
            var price = confirm('Are you sure????');
            if (price)
            {
                document.getElementById('delete'+id).submit();
            }
        }
    </script>
@endsection
