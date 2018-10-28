@extends('layouts.app')

@section('title', 'Contact Us')

@section('stylesheets')
@endsection

@section('content')
	<div class="row">
		<div class="col-sm-6 offset-sm-3">
			<h1>Contact Us</h1>
			<hr>
			<form action="{{ route('contact.send') }}" method="POST">
				@csrf

				<label for="name">Name</label>
				<input type="text" name="name" class="form-control">

				<label for="email" class="mt-3">Email</label>
				<input type="email" name="email" class="form-control">

				<label for="message" class="mt-3">Message</label>
				<textarea name="message" class="form-control"></textarea>

				<button type="submit" class="btn btn-success btn-block my-3">Send Message</button>
			</form>
		</div>
	</div>
@endsection

@section('scripts')
@endsection