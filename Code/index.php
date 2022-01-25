<!DOCTYPE html>
<html>
<head>
<title>Saral Samadhan Website</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Saral Smadhan Pvt.Ltd</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">Services</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
      </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="b1.jpg" alt="Phidim" width="1100" height="500">
      <div class="carousel-caption">
      <h3>Coming Soon</h3>
    </div>
</div>
    <div class="carousel-item">
      <img src="b2.jpg" alt="Pathivara" width="1100" height="500">
       <div class="carousel-caption">
      <h3>Our Services</h3>
    </div>
</div>
    
</div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">About Us</h3>
	</div> 
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<img src="z.jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">Saral Smadhan Pvt.Ltd</h2>
			<p class="py-3">I am nothing without my mom and papa.Love encompasses a range of strong and positive emotional and mental states, from the most sublime virtue or good habit, the deepest interpersonal affection.</p>
			<a href="https://www.facebook.com/engineersp/?modal=admin_todo_tour&notif_id=1620561424109795&notif_t=page_invite&ref=notif " class="btn btn-success">More Details</a>
		</div>
	</div>
</div>
	</section>
	<section class="my-5">
	<div class="py-5">
		<h1 class="text-center">Our Groups</h1>

	</div> 
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
  <img class="card-img-top" src="si.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Shisab Pant</h4>
  <h1>CEO</h1>
    <a href="https://www.facebook.com/shisab.pant.999" class="btn btn-primary">See Profile</a>
  </div>
</div>
			</div>
			<div class=" col-md-6 col-12">
			<h2 class="display-4">I Am Shisab Pant</h2>
			<p class="py-3">I am nothing without my mom and papa.Love encompasses a range of strong and positive emotional and mental states, from the most sublime virtue or good habit, the deepest interpersonal affection.</p>

			
	</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h1 class="text-center">Gallary</h1>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<img src="a5.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="a1.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="a2.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="a3.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="a4.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="b2.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="b1.jpg" class="img-fluid pb-4">
				</div>
				
					

			</div>
		</div>
	</section>
	<section class="my-5">
	<div class="py-5">
		<h1 class="text-center">Contact Us</h1>

	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email ID</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comments</label>
				<textarea class="form-control" name="comments">
				</textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button> 
		</form>
	</div>
</section>
<footer>
	
	<h3 class="p-3 bg-dark text-white text-center">@saralsamadhan.90</h3>

	</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>