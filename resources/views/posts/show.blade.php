@extends('layouts.master')

@section('content')
	<h1 >
		{{ $post->title }}
	</h1>
	<p style="float: left;width: 700px;">{{ $post->body }}</p>
	@include('layouts.sidebar')
@endsection


