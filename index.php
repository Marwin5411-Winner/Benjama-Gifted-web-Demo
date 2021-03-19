<html>
<head>
<title>Benjamalachanusorn School Web Demo Font End By gifted Student 13</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link href="css/bengifted.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<nav class="navbar navbar-light bg-header">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="logo.png" alt="" width="50" height="50" class="d-inline-block align-center">
      Benjamarachanusorn Gifted Program
    </a>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/banner1.jpg" class="d-block w-100" alt="...">
	  <div class="text-center">ยินดีพี่ ม.6 ด้วยน่ะครับ</div>
    </div>
    <div class="carousel-item">
      <img src="image/banner2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/banner.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link btn btn-outline-danger" aria-current="page" href="#">Network</a>
  </li>
  <li class="nav-item">
    <a class="nav-link btn btn-outline-danger" href="#">Cloud</a>
  </li>
  <li class="nav-item">
    <a class="nav-link btn btn-outline-danger" href="#">E-learning</a>
  </li>
  <li class="nav-item">
    <a class="nav-link btn btn-outline-danger" href="#">Teacher</a>
  </li>
</ul>
<br>
<div class="container">
	<div class="card" style="width:100%; "> 
		<div class="card-header">กิจกรรม</div>
		<div class="card-body">
		<?php include('include/activities.php'); ?>
	</div>
</div>
</div>
</div>
<br>

<div class="footer">
Made By MarVin 
Student Of Benjamarachanusorn Gifted Program
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>