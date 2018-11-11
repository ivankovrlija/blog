@extends ('layouts.master')

@section('content')
	<h1 style="font-size: 90px;">My blog</h1>
	<p style="font-size: 20px;color: gray">First Laravel blog</p>
	<br>
	<h2 style="font-size: 40px;">Create a Post</h2>
	<br><hr>

	<form style="float:left;width: 720px;" method="post" action="/posts">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title:</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Body:</label>
    <textarea name="body" id="body" class="form-control"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Publish</button>
  @include('layouts.errors')
</form>


</div>
@include('layouts.sidebar')
@endsection
