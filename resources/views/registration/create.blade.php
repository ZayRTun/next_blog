@extends('layouts.master')

@section('content')

    <div class="col-sm-8">
        <h1>Register</h1>

        <form action="/register" method="POST">

            {{ csrf_field() }}

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control" aria-describedby="name" required>
            </div>

            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" name="email" id="email" class="form-control" aria-describedby="email" required>
            </div>

            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" name="password" id="password" class="form-control" aria-describedby="password" required>
            </div>

            <div class="form-group">
              <label for="password_confirmation">Password Confirmation</label>
              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" aria-describedby="Confirm Password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection
