<!DOCTYPE HTML>
<html lang="en-us">
<head>

<title>CS 313</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" > </script>

<script type="text/javascript" src="CS313_week02js.js"></script>
<link rel="stylesheet" type="text/css" href="homepage_style.css">

</head>
<body > 
    <h1>Coleen Hull</h1><br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4"> 
	    <p>About Me</p>
	  </div>
      <div class="col-md-4">
        <img class="img-responsive" src="/Mom.jpg" alt="Me"style="max-height:420px" >
      </div>
      <div class="col-md-4">
        
      <!-- </div>
    </div>
  </div> -->
  <!-- <div class="container"> -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
		<li data-target="#myCarousel" data-slide-to="5"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/Ashley.jpg" alt="Los Angeles" style="width:80%;">
        </div>

        <div class="carousel-item">
          <img src="/Katelynn3.jpg" alt="Chicago" style="width:80%;">
        </div>
    
        <div class="carousel-item">
          <img src="/Kristine.jpg" alt="New york" style="width:80%;">
        </div>
		<div class="carousel-item">
          <img src="/Scott2.jpg" alt="Chicago" style="width:80%;">
        </div>
    
        <div class="carousel-item">
          <img src="/Kristine.jpg" alt="New york" style="width:80%;">
        </div>
		<div class="carousel-item">
          <img src="/Kristine.jpg" alt="New york" style="width:80%;">
        </div>
		
      </div>
	  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

      <!-- Left and right controls -->
     <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a> -->
    </div>
  </div>
  </div>
  </div>

 
   <br><br>
   <div id="time">
     <?php
     date_default_timezone_set("America/New_York");
     echo "The time is " . date("h:i:sa");
     ?>
   </div>
</body>
</html>