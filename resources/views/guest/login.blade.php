@extends('components.master')

@section('title','login')

@section('content')
	<div class="container jumbotron bg-secondary login text-light">
		<h4 class="ml-5">Login</h4>
		<form method="post" action="#" class="container row">
			<label class="col-lg-3 text-right">Email</label>
				<input type="text" name="email" placeholder="example@example.com" class="col-lg-9 ">
			<label class="col-lg-3 text-right">Password</label>
				<input type="password" name="password" placeholder="examp***" class="col-lg-9 ">
			<label class="offset-lg-3 mt-3 col-lg-9" style="padding: 0;">
				<input type="checkbox" name="remember" class="mr-2">Remember Me</label>
			<button class="btn col-lg-1 offset-lg-3 text-light">Submit</button>
		</form>

	</div>
@stop