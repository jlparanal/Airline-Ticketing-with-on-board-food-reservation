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
		<p>We specialize in your air plan!</p> 
	</div>


<div class="row">
			  <div class="col-sm-6">
			   <center> <label for="pork">Pork</label></center>
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<center><img src="pork.jpg" width="180" height="200"></center>
			</div>
			<label>SWEET CARAMELIZED PORK (P300.00)</label>
	 <p> * A super easy, quick and delicious sticky pork recipe that will make you want to sink your teeth into these juicy bits.</p>
	 <p>Ingredients</p><br>
		<input type ="checkbox" name = "ing1" value = "yes">1 1/2 lbs boneless pork rib meat</input><br>
		<input type ="checkbox" name = "ing2" value = "yes">1/2 cup brown sugar</input><br>
		<input type ="checkbox" name = "ing3" value = "yes">1 tsp cayenne (or paprika for less heat)</input><br>
		<input type ="checkbox" name = "ing4" value = "yes">1 tsp ground ginger powder</input><br>
		<input type ="checkbox" name = "ing5" value = "yes">1/2 tsp black pepper</input><br>
		<input type ="checkbox" name = "ing6" value = "yes">1 tsp salt</input><br>
		<input type ="checkbox" name = "ing7" value = "yes">1 medium onion</input><br>
		<input type ="checkbox" name = "ing8" value = "yes">2 tbsp oil</input><br>
		<input type ="checkbox" name = "ing9" value = "yes">1 green onion (for garnish)</p></input><br>
			  </div>







	<div class="container" id="homepage">
	
		<h1><b>Rate our Meals</b></h1>
		<br />
		
		<div class="btn-group btn-group-justified">			
		</div>
		<hr />
	<div id="oneway">
		<form role="form" action="rate.php" method="post">
		  <div class="row">
		  <div class="col-sm-6">
		    
				<style>
        .star{
          color: goldenrod;
          font-size: 2.0rem;
          padding: 0 1rem; /* space out the stars */
        }
        .star::before{
          content: '\2606';    /* star outline */
          cursor: pointer;
        }
        .star.rated::before{
          /* the style for a selected star */
          content: '\2605';  /* filled star */
        }
        
        .stars{
            counter-reset: rateme 0;   
            font-size: 2.0rem;
            font-weight: 900;
        }
        .star.rated{
            counter-increment: rateme 1;
        }
        .stars::after{
            content: counter(rateme) '/5';
        }
    </style>
</head>
<body>
<div class="stars" data-rating="3">
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
    </div>
    
    <script>
        
        //initial setup
        document.addEventListener('DOMContentLoaded', function(){
            let stars = document.querySelectorAll('.star');
            stars.forEach(function(star){
                star.addEventListener('click', setRating); 
            });
            
            let rating = parseInt(document.querySelector('.stars').getAttribute('data-rating'));
            let target = stars[rating - 1];
            target.dispatchEvent(new MouseEvent('click'));
        });
        function setRating(ev){
            let span = ev.currentTarget;
            let stars = document.querySelectorAll('.star');
            let match = false;
            let num = 0;
            stars.forEach(function(star, index){
                if(match){
                    star.classList.remove('rated');
                }else{
                    star.classList.add('rated');
                }
                //are we currently looking at the span that was clicked
                if(star === span){
                    match = true;
                    num = index + 1;
                }
            });
            document.querySelector('.stars').setAttribute('data-rating', num);
        }
        
    </script>
</body>
</html>
	
		  <div class="btn-group btn-group-justified">	
				<div class="btn-group">
					<center><a href="pay1.php" button type="submit" class="btn btn-success">Submit</a><center></button>
				</div>
		  </div>
		</form>
	</div>

	
	<footer class="container-fluid text-center">
		<a href="#signUpPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<p>We'll fly you above and ahead of everyone else.</p>		
	</footer>
</body>
</html>