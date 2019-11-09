@extends('layout')
@section('title','Log In')
@section('navbar')

<!DOCTYPE html>
<html>
<head>
	<title>Assignment - @yield('title')</title>
</head>
<body style="background-color: lightgray">
<br><Br><br><br>
<center> 
	<h1>Login Form</h1>
	<br>
	<hr>
	<div class=container>
		<center>
			<h3> Login </h3>
			<br>
			
			<label> Username </label>
			<input type="text" name="nm" placeholder="Username"><br>
			<label> Password </label>
			<input type="text" name="nm" placeholder="Password"><br>
			<br>
			<center>
				<button>Login</button>
			</center>
		</center>
	</div>
        
     


     </body>
</html>