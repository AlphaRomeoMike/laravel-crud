@extends('master')
</style>

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 align="center">Student Data</h3>
            <br>
            @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p class="text-success">{{$message}}</p>
            </div>
            @endif
            <div align="right">
                <a href="{{route('student.create')}}" class="btn btn-outline-success">Add</a>
            </div>
            <br><br>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $row)
                            <tr>
                                <td>{{$row['first_name']}}</td>
                                <td>{{$row['last_name']}}</td>
                                <td><div class="form-group" style="display: inline"><a href="{{action('StudentController@edit', $row['id'])}}" class="btn btn-outline-primary">Edit</a>
                                <form action="" method="POST" class="delete_form" action="{{action('StudentController@destroy', $row['id'])}}">{{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form></div></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('.delete_form').on('submit', function() {
                    if(confirm("Are you sure you want to delete this data?")) {
                        return true;
                    } else {
                        return false;
                    }
                })
            })
        </script>
@endsection