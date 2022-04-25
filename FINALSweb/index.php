<?php
// Start the session
session_start();

$user = $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>AirPH Company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href=air.png />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="login.js"> </script>
  <script src="jump.js"> </script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="homepage.php"><span class="glyphicon glyphicon-home"></span> Home</a>       
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          
          <li id = "cart">
            <a class="navbar-brand" href="cartshow.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a>
          </li>


          <li class="dropdown" id = "new">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"> Sign in&nbsp;</span><span class="caret"></span>
            </a>
            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="signup.php">Register</a></li>
              
              <li class="dropdown-submenu">
              <a tabindex="-1" href="#">Sign in</a>
              <ul class="dropdown-menu">
                <li><a tabindex="-1" href="Adminpage.php">Manager Sign in</a></li>
                <li><a href="customersignin.php">Customer Sign in</a></li>
                </li>
            
          
              </ul>
              </li>
            
            </ul>
          </li>
            <li class="dropdown" id = "old">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user" id="wuser">Welcome!</span>
            <span class="caret"></span>
            </a>
            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="showhistory.php">History</a></li>              
              <li><a href="#" id="logout">Sign out</a></li>
            </ul>
            </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="jumbotron text-center">
    <h1><img src = "air.png" width="170" height="150">AirPH.com</h1> 
    <h2><p>Rate your Meals option</p></h2>

</div>
<div class="container" id="homepage">
    <div class="btn-group btn-group-justified">     
    <hr>
      <div class="row">
      <div class="col-sm-6">

<center><body onload="showfoodData('getRatingData.php')">
    <div class="container">
        <span id="food_list"></span>
    </div>
</body></center>
</html>

<script type="text/javascript">

    function showfoodData(url)
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("food_list").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", url, true);
        xhttp.send();

    } 

    function mouseOverRating(foodId, rating) {

        resetRatingStars(foodId)

        for (var i = 1; i <= rating; i++)
        {
            var ratingId = foodId + "_" + i;
            document.getElementById(ratingId).style.color = "#ff6e00";

        }
    }

    function resetRatingStars(foodId)
    {
        for (var i = 1; i <= 5; i++)
        {
            var ratingId = foodId + "_" + i;
            document.getElementById(ratingId).style.color = "#9E9E9E";
        }
    }

   function mouseOutRating(foodId, userRating) {
	   var ratingId;
       if(userRating !=0) {
    	       for (var i = 1; i <= userRating; i++) {
    	    	      ratingId = foodId + "_" + i;
    	          document.getElementById(ratingId).style.color = "#ff6e00";
    	       }
       }
       if(userRating <= 5) {
    	       for (var i = (userRating+1); i <= 5; i++) {
	    	      ratingId = foodId + "_" + i;
	          document.getElementById(ratingId).style.color = "#9E9E9E";
	       }
       }
    }

    function addRating (foodId, ratingValue) {
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function ()
            {
                if (this.readyState == 4 && this.status == 200) {

                    showfoodData('getRatingData.php');
                    
                    if(this.responseText != "success") {
                    	   alert(this.responseText);
                    }
                }
            };

            xhttp.open("POST", "insertRating.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            var parameters = "index=" + ratingValue + "&food_id=" + foodId;
            xhttp.send(parameters);
    }
</script>