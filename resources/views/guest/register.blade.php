@extends('components.master')

@section('title','register')

@section('content')
	<div class="container jumbotron bg-secondary login text-light">
		<h4 class="ml-5">Register</h4>
		<form method="post" action="#" class="container row">
			<label class="col-lg-3 text-right">Name</label>
				<input type="text" name="name" class="col-lg-9 ">

			<label class="col-lg-3 text-right">Email</label>
				<input type="text" name="email" class="col-lg-9 ">

			<label class="col-lg-3 text-right">Password</label>
				<input type="password" name="password" class="col-lg-9 ">

			<label class="col-lg-3 text-right">Confirm Password</label>		
				<input type="password" name="password" class="col-lg-9 ">

			<label class="col-lg-3 text-right">Phone</label>
				<input type="text" name="phone" class="col-lg-9 ">

			<label class="col-lg-3 text-right">Address</label>
				<textarea name="address" class="col-lg-9 "></textarea>

			<label class="col-lg-3 text-right">Birthday</label>
				<input type="text" name="birthday" placeholder="dd/mm/yyyy" class="col-lg-9 ">

			<label class="col-lg-3 text-right">Gender</label>
				<label class="col-lg-1"><input type="radio" name="male" >Male</label>
				<label class="col-lg-8"><input type="radio" name="female" >Female</label>

			<label class="col-lg-3 text-right">Photo</label>
				<input type="file" name="photo" class="col-lg-9">

			<label class="offset-lg-3 mt-3 col-lg-9" style="padding: 0;">
				<input type="checkbox" name="remember" class="mr-2">Remember Me</label>

			<button class="btn col-lg-1 offset-lg-3 text-light">Register</button>
		</form>

	</div>
@stop