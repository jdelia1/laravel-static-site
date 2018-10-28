@extends('layouts.app')

@section('title', 'Homepage')

@section('stylesheets')
@endsection

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to our Yeet!</h1>
        <p class="lead">Yeet the fucking baby.</p>
        <hr class="my-4">
        <p>Made using Laravel 5.7. Smack that mf yeet button below.</p>
        <a class="btn btn-primary btn-lg" href="/" role="button"><i class="fab fa-twitter"></i> Yeet Button</a>
    </div>
@endsection

@section('scripts')
@endsection