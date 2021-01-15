@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12"> 
            <h3 align="center">Add data</h3>
            <br><br>

            @if (count($errors) > 0)
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
              @endif
              @if(\Session::has('success'))
                  <div class="alert alert-success">
                    <p>{{ \Session::get('success')}}</p>
                  </div>
              @endif
            <form action="{{url('student')}}" method="post">
              {{csrf_field()}}
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name Here">
                </div>
                <div class="form-group">
                  <label for="last_name">First Name</label>
                  <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name Here">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-outline-primary" />
                </div>
            </form>
        </div>
    </div>
@endsection