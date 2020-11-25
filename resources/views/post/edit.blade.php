<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container card">
		<form method="POST" action="{{route("update")}}">
			@csrf
			<input type="hidden" name="id" value="{{$post->id}}">
	  <div class="form-group">
	    <label for="exampleInputEmail1">img_link</label>
	    <input type="text" class="form-control" id="img_link" placeholder="enter title" name="img_link" value="{{$post->img_link}}"></div>
	    <div class="form-group">
	    <label for="exampleInputEmail1">category</label>
	    <input type="text" class="form-control" placeholder="enter title" name="category" value="{{$post->category}}"></div>
	    <div class="form-group">
	    <label for="exampleInputEmail1">title</label>
	    <input type="text" class="form-control"  placeholder="enter title" name="title" value="{{$post->title}}"></div>

	    <div class="form-group">
	    <label for="exampleInputEmail1">short description</label>
	    <input type="text" class="form-control" placeholder="enter description" name="short_description" value="{{$post->short_description}}"></div>
	    <div class="form-group">
	    <label for="exampleInputEmail1">description</label>
	    <input type="text" class="form-control" placeholder="enter description" name="description" value="{{$post->description}}"></div>

	  <button type="submit" class="btn btn-primary">update</button>
	</form>

	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" ></script>
</body>
</html>