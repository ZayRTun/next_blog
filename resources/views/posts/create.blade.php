@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        <h1>Create new Post</h1>

        <hr>

        <form action="/posts" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title:</label>
                <input name="title" type="text" class="form-control" id="title" aria-describedby="Post Title">
            </div>

            <div class="form-group">
                <label for="body">Body:</label>
                <textarea name="body" class="form-control" id="body" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

        </form>

        {{--Display Errors--}}
        @include('layouts.errors')

    </div>
@endsection



