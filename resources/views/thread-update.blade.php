@extends("components.master")

@section('title','Add Forum')

@section('content')
	<div class="container jumbotron bg-secondary add-forum text-light">
		<h4 class="ml-5">Forum Data</h4>
		<form method="post" action="#" class="container row">
			<label class="col-lg-3 text-right">Name</label>
				<input type="text" name="name" class="col-lg-9 ">

			<label class="col-lg-3 text-right">Category</label>
				
				  <select class="custom-select col-lg-9">
				    <option value="0">Choose Category</option>
				    <option value="1">Audi</option>
				    <option value="2">BMW</option>
				    <option value="3">Citroen</option>
				    
				    
				  </select>
				

			<label class="col-lg-3 text-right">Description</label>
				<textarea name="description" class="col-lg-9 "></textarea>

			<button class="btn col-lg-1 offset-lg-3 text-light">Update</button>
		</form>

	</div>
@stop