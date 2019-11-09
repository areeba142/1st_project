@extends('layout')
@section('title','Sign up')
@section('navbar')

<!DOCTYPE html>
<html>
<head>
	<title>Assignment - @yield('title')</title>
</head>
<body style="background-color: silver">
  <Center>	 <h1> <b> <i>SIGN UP </i> </b> </h1> </Center>
            
        <br><hr><Br>
     
        <form>
            <center>
          Signup as <br>
        <input list="Signupas">
        <datalist id="Signupas">
            <option value="Student">
            <option value="Admin">
                <option value="Lecturer">
                </datalist>
            <br>



         USN <br>
        <input type="text" placeholder="USN"><br>
         Password <br>
        <input type="password" placeholder="Enter password"><br>
         Confirm Password <br>
        <input type="password" placeholder="Confirm password"><br>
        <button class="button item">Sign up</button></a>
     
     </center>

 </form>
</body>
</html>