@extends('layouts.master')

@section('content')
<section class="row new-post">
	<div class="col-md-6 col-md-offset-3">
		<header><h3> What's on your mind?</h3></header>
		<form action="">
			<div class="form-group">
				<textarea  class="form-control" name="new-post" id="new-post" rows="10" placeholder="Start typing here..."></textarea>
			</div>
			<button type="submit" class="btnn btn-primary">Submit</button>
		</form>
	</div>
</section>
<section class="row posts">
	<div class="col-md-6 col-md-offset-3">
			<header><h3>What's new...</h3></header>
			<article class="post">
				<p> Example Text</p>

				<div class="info">
				<small> Posted by Jambo 13/08/2018</small>
				</div>
				<div class="interaction">
					<a href="#">Like</a>
					<a href="#">Dislike</a>
					<a href="#">Edit</a>
					<a href="#">Delete</a>
				</div>

	</div>
</section>
@endsection