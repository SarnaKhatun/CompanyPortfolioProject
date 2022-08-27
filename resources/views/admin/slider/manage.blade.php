@extends('admin.master')
@section('title')
    Manage Slider
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">manage slider</h4>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>Sl. No:</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$slider->title}}</td>
                                <td>{{$slider->description}}</td>
                                <td><img src="{{asset($slider->image)}}" alt="" style="height: 100px; width: 100px;"></td>
                                <td>{{$slider->status == 0 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('slider.change-status', ['id' => $slider->id])}}" class="btn btn-{{$slider->status == 1 ? 'warning' : 'primary'}} fa fa-{{$slider->status == 1 ? 'eye-slash' : 'eye'}}" ></a>
                                    <a href="{{route('edit-slider', ['id' => $slider->id])}}" class="btn btn-secondary fa fa-edit"></a>
                                    <a href="" class="btn btn-danger fa fa-trash" onclick="deleteSlider({{$slider->id}})"></a>
                                    <form action="{{route('delete-slider', ['id' => $slider->id])}}" method="post" id="delete{{$slider->id}}">
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
        function deleteSlider(id) {
            event.preventDefault();
            var slider = confirm('Are you sure ????????');
            if (slider)
            {
                document.getElementById('delete'+id).submit();
            }
        }
    </script>
@endsection
