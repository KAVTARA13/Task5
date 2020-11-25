@extends("layouts.main")
@section('content')
	@include("inc.header")
	<div class="container card">
		<form method="POST" action="{{route("store")}}">
			@csrf
	  		<div class="form-group">
	    		<label for="exampleInputEmail1">IMG</label>
	    		<input type="text" class="form-control" placeholder="enter link" name="img_link"></div>
	    	<div class="form-group">
	    		<label for="exampleInputEmail1">Category</label>
	    		<input type="text" class="form-control" placeholder="enter category" name="category"></div>
	    	<div class="form-group">
	    		<label for="exampleInputEmail1">Title</label>
	    		<input type="text" class="form-control" placeholder="enter title" name="title"></div>
	    	<div class="form-group">
	    		<label for="exampleInputEmail1">short description</label>
	    		<textarea class="form-control" placeholder="short description" name="short_description"></textarea></div>
	    	<div class="form-group">
	    		<label for="exampleInputEmail1">Description</label>
	    		<textarea class="form-control" placeholder="description" name="description"></textarea></div>
	  <button type="submit" class="btn btn-primary">Save</button>
	</form>

	</div>
	@include("inc.footer")
	@endsection