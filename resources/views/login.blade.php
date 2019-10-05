@extends('layouts.app')

@section('content')
<!-- signup for customers -->
<div class="signin-form profile">
			<h2>Sign Up</h2>
			<div class="login-form">
			<!-- form for give basic details -->
				<form action="#" method="post">
					<input type="text" name="name" placeholder="Username" required="">
					<input type="email" name="email" placeholder="E-mail" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input type="password" name="password" placeholder="Confirm Password" required="">
					<input type="submit" value="Sign Up">
					<br/>or<br/>
					<font color="#ccc">Already have account ??<br/></font>

				</form>
				<a href="loginwin"><button class="btn btn-warning btn-lg">Login</button></a>
			</div>

		</div>
@endsection
