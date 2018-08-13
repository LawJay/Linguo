@extends('layouts.master')

@section('content')
@include('inc.message-block')
<section class="row new-post">
	<div class="col-md-6 col-md-offset-3">
		<header><h3> What's on your mind?</h3></header>
		<form action="{{ route('post.create') }}" method="POST">
			<div class="form-group">
				<textarea  class="form-control" name="body" id="new-post" rows="10" placeholder="Start typing here..."></textarea>
			</div>
			<button type="submit" class="btnn btn-primary">Submit</button>
			<input type="hidden" name="_token" value="{{ Session::token() }}">
		</form>
	</div>
</section>
<section class="row posts">
	<div class="col-md-6 col-md-offset-3">
			<header><h3>What's new...</h3></header>

				@foreach($posts as $post)
				<article class="post">
				<p>{{$post->body}}</p>

				<div class="info">
				<small> Posted by {{$post->user->name}} {{$post->created_at}}</small>
				</div>
				<div class="interaction">
					<a href="#">Like</a>
					<a href="#">Dislike</a>
					<a href="#">Edit</a>
					<a href="#">Delete</a>
				</div>
				</article>
				@endforeach

			

	</div>
</section>
@endsection