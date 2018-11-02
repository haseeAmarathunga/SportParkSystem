@extends('layouts.app')

@section('content')

<div class="signin-form profile">
			<h3>Sign Up</h3>
			<div class="login-form">
				<form action="#" method="post">
					<input type="text" name="name" placeholder="Username" required="">
					<input type="email" name="email" placeholder="E-mail" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input type="password" name="password" placeholder="Confirm Password" required="">
					<input type="submit" value="Sign Up">
					</br>or</br>
					<a href=""><button class="btn btn-success">Login</button></a>
				</form>
			</div>
			
		</div>
@endsection