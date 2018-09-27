@extends('layouts.master')

@section('content')

	<div class="col-sm-8 blog-main">

		<div class="blog-post">

			<h2 class="blog-post-title">{{ $post->title }}</h2>

			<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>

			<p>{{ $post->body }}</p>

			<hr>

			<div class="comments">
				<ul class="list-group">
					@foreach($post->comments as $comment)
						<li class="list-group-item">
							<strong>
								{{ $comment->created_at->diffForHumans() }}: &nbsp;
							</strong>
							{{ $comment->body }}
						</li>
					@endforeach
				</ul>
			</div>

			<hr>

			{{--Add a comment--}}
			<div class="card">
				<div class="card-body">
					<form action="/posts/{{ $post->id }}/comments" method="POST">
						{{ csrf_field() }}
						<div class="form-group">
							<textarea name="body" class="form-control" placeholder="Your comment here" required></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Add Comment</button>
						</div>
					</form>
				</div>
			</div>

			{{--Display Errors--}}
			@include('layouts.errors')

		</div><!-- /.blog-post -->
	</div>

@endsection