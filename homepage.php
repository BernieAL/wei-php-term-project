<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content = "ie=edge"/>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Find a Tutor</title>
  </head>
  <body>

<?php
    include('docs/includes/header.php');
  
      //check if session exists already, if it does, then get the name of the person already logged in and display 
      //with greeting
?>

<br></br>
<br></br>
<p text-align="center">Welcome to the official site of finding the best available tutor for you!
Here at Find a Tutor, we provide you the best tools to find and schedule tutors of your 
choice! </p>

  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="docs/images/first.jpg" alt="First" style="width:100%;">
        </div>

        <div class="item">
          <img src="docs/images/second.jpg" alt="Second" style="width:100%;">
        </div>

        <div class="item">
          <img src="docs/images/third.jpg" alt="Third" style="width:100%;">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


</body>
</html>