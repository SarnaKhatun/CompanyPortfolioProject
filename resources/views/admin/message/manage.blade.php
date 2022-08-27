@extends('admin.master')
@section('title')
    Manage Message
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center text-capitalize">manage message</h4>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>Sl. No:</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->subject}}</td>
                                <td>{{$message->message}}</td>
                                <td>{{$message->status == 'pending' ? 'pending' : 'Read'}}</td>
                                <td>
                                    <a href="{{route('message.change-status', ['id' => $message->id])}}" class="btn btn-{{$message->status == 'pending' ? 'warning' : 'success'}} fa fa-{{$message->status == 'pending' ? 'eye-slash' : 'eye'}}"></a>
                                    <a href="{{route('delete.message', ['id' => $message->id])}}" class="btn btn-danger fa fa-trash" onclick="deleteMessage({{$message->id}})"></a>
                                    <form action="{{route('delete.message', ['id' => $message->id])}}" method="post" id="deleteOne{{$message->id}}">
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
        function deleteMessage(id) {
            event.preventDefault();
            var message = confirm('Are you sure want to delete this????');
            if (message)
            {
                document.getElementById('deleteOne'+id).submit();
            }
        }
    </script>
@endsection
