@extends("components.master")

@section('title','Add Forum')

@section('content')
	<div class="container jumbotron bg-secondary add-forum text-light">
		<h4 class="ml-5">Forum Data</h4>
		<form method="post" action="/thread/doAdd" class="container row">
			{{ csrf_token() }}
			<label class="col-lg-3 text-right">Name</label>
				<input type="text" name="name" class="col-lg-9 ">

			<label class="col-lg-3 text-right">Category</label>
				
				  <select class="custom-select col-lg-9">
				  	@foreach ($categories as $category)
					    <option value="{{ $category->id }}"> {{ $category->description }}</option>
					@endforeach
				  </select>

			<label class="col-lg-3 text-right">Description</label>
				<textarea name="description" class="col-lg-9 "></textarea>

			<button class="btn col-lg-1 offset-lg-3 text-light">Add</button>
		</form>

	</div>
@stop