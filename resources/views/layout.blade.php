<!DOCTYPE html>
<html>
<head>
	<title>doctor - @yield('title')</title>

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/1.14.7/umd/poper.min.js"></script>

</head>
<body>
   
   @section('navbar')
   <nav class="navbar navbar-expand-sm bg-light">
 
    <ul class="nav navbar-nav">
      
      <li class="nav-item">
      	<a id="index" class="navbar-brand" href="{{url('http://127.0.0.1:8000/')}}">About</a>
      <li class="nav-item">
        <a id="index" class="navbar-brand" href="{{url('News')}}">News</a>

      </li>
      </li>
      <li class="nav-item">
        <a id="index" class="navbar-brand" href="{{url('Signup')}}">Sign Up</a>

      </li>
      <li class="nav-item">
        <a id="index" class="navbar-brand" href="{{url('login')}}">Log In</a>

      </li>

      </ul>
 
</nav>
 
    @show

</body>
</html>