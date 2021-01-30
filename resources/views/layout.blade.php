<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Student Management</title>
 
</head>
<body>
<nav class="navbar navbar-default">
  <div style="background-color: black; " class="container-fluid">
    <div  class="navbar-header">
      <a class="navbar-brand" href="#"><img style="border: 2px solid black; border-radius: 80px;" src="{{URL('images/png.png')}}" width="64px" alt=""></a>
    </div>
    <ul  class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="list">Lists</a></li>
      <li><a href="add">Add</a></li>
    </ul>
  </div>
</nav>
<div class="container">
        @yield('content')
    </div>
</body>
</html>