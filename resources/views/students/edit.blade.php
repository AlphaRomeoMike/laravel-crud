@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12"> 
            <h3 align="center">Edit data</h3>
            <br><br>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-warning">
                    <p>{{$message}}</p>
                </div>
            @endif
            <form action="{{action('StudentController@update', $id ?? '')}}" method="post">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name Here" value="{{$student->first_name}}">
                </div>
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name Here" value="{{$student->last_name}}">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-outline-warning" value="Edit" />
                  <a href="{{url('student')}}" class="btn btn-outline-success">Index</a>
                </div>
            </form>
        </div>
    </div>
@endsection