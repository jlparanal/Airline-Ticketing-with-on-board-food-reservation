<!DOCTYPE html>
<html lang="en">
<head>
	<title>Airprice Company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="forcompany2.css">
	<link rel="stylesheet" href="homepage.css">
	<link rel="stylesheet" href="AdminSignin.css">
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
		<h1>AirTAXI.com</h1> 
		<p>We specialize in your air plan!</p> 
	</div>

	<div class="container" id="homepage">
	
		<h1><b>Search Flights</b></h1>
		<br />
		<p><b>Choose your flight option</b></p>
		<div class="btn-group btn-group-justified">			
			<div class="btn-group">
			<button id="button1" type="button" href="#Fish" class="btn btn-primary">Pan Seared Mahi Mahi with Honey Lime Coleslaw </button>
			</div>
			<div class="btn-group">
			<button id="button2" type="button" href="#Pork" class="btn btn-primary">SWEET CARAMELIZED PORK </button>
			</div>
			<div class="btn-group">
			<button id="button3" type="button" href="#Beef" class="btn btn-primary">Chinese Broccoli Beef</button>
			</div>
		</div>
		<hr />
	<div id="Fish">
		<form role="form" action="" method="post">
		<center><img src="fish.jpg" width="180" height="200"></center>
		 <label>Pan Seared Mahi Mahi with Honey Lime Coleslaw (P250.00)</label>
	 <p> * Pan seared mahi mahi recipe coated with a blend of savory and sweet spices.
	 Each fillet is served with a crunchy and refreshing honey lime coleslaw.</p>
	 <p>Ingredients</p>
	 <table align = "center">
	
		<input type = "checkbox" name = "ing1" value = "yes"> 1 lb Mahi mahi, fillets Produce </input><br>
		<input type = "checkbox" name = "ing2" value = "yes">1 cup Carrots</input><br>
		<input type = "checkbox" name = "ing3" value = "yes">1/4 cup Cilantro, leaves</input><br>
		<input type = "checkbox" name = "ing4" value = "yes">1/2 clove Garlic</input><br>
		<input type = "checkbox" name = "ing5" value = "yes">1/2 tsp Garlic powder</input><br>
		<input type = "checkbox" name = "ing6" value = "yes">1 cup Green cabbage</input><br>
		<input type = "checkbox" name = "ing7" value = "yes">1/2 cup Green onions</input><br>
		<input type = "checkbox" name = "ing8" value = "yes">1/2 tsp Onion powder</input><br>
		<input type = "checkbox" name = "ing9" value = "yes">1/4 tsp Oregano, dried</input><br>
		<input type = "checkbox" name = "ing10" value = "yes">1 cup Red bell pepper</input><br>
		<input type = "checkbox" name = "ing11" value = "yes">1 cup Red cabbage Condiments</input><br>
		<input type = "checkbox" name = "ing12" value = "yes">1 tbsp Honey</input><br>
		<input type = "checkbox" name = "ing13" value = "yes">2 tbsp Lime juice Baking & Spices</input><br>
		<input type = "checkbox" name = "ing14" value = "yes">1/4 tsp Black pepper</input><br>
		<input type = "checkbox" name = "ing15" value = "yes">1 tsp Brown sugar, dark</input><br>
		<input type = "checkbox" name = "ing16" value = "yes">1/4 tsp Chili powder</input><br>
		<input type = "checkbox" name = "ing17" value = "yes">1/2 tsp Kosher salt</input><br>
		<input type = "checkbox" name = "ing18" value = "yes">1 1/2 tsp Paprika, smoked Oils & Vinegars</input><br>
		<input type = "checkbox" name = "ing19" value = "yes">3 tbsp Olive oil Nuts & Seeds</input><br>
		<input type = "checkbox" name = "ing20" value = "yes">3/4 tsp Mccormick cumin, ground</input><br>

	</table>
		  </div>
		  </div>
		  <hr >
		  <div class="btn-group btn-group-justified">	
				<div class="btn-group">
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
				<div class="btn-group">
					<button type="reset"  class="btn btn-info" value="Reset">Reset</button>
				</div>
		  </div>
		</form>
	</div>


	<div id="Pork">
		<form role="form" action=".php" method="post">
			<center><img src="pork.jpg" width="180" height="200"></center>
			<label>SWEET CARAMELIZED PORK (P300.00)</label>
	 <p> * A super easy, quick and delicious sticky pork recipe that will make you want to sink your teeth into these juicy bits.</p>
	 <p>Ingredients</p>

		<input type = "checkbox" name = "ing20" value = "yes">1 1/2 lbs boneless pork rib meat</input><br>
		<input type = "checkbox" name = "ing20" value = "yes">1/2 cup brown sugar</input><br>
		<input type = "checkbox" name = "ing20" value = "yes">1 tsp cayenne (or paprika for less heat)</input><br>
		<input type = "checkbox" name = "ing20" value = "yes">1 tsp ground ginger powder</input><br>
		<input type = "checkbox" name = "ing20" value = "yes">1/2 tsp black pepper</input><br>
		<input type = "checkbox" name = "ing20" value = "yes">1 tsp salt</input><br>
		<input type = "checkbox" name = "ing20" value = "yes">1 medium onion</input><br>
		<input type = "checkbox" name = "ing20" value = "yes">2 tbsp oil</input><br>
		<input type = "checkbox" name = "ing20" value = "yes">1 green onion (for garnish)</input><br>		
			 </div>
			 <hr >
			</form>
	</div>
	<div id="all">
		<form role="form" action="SearchResultAll.php" method="post">
			 <div class="row"> 
			  <div class="col-sm-6">
			  <label for="selectdate">Select a date:</label>
			  <input type="date" class="form-control" id="selectdate" name="selectdate" required>
			  </div>
			 </div>
			 <br>
			<div class="row">   
			  <div class="col-sm-6">
			  <button type="submit" class="btn btn-primary">Show ALL</button>
			  </div>
			</div> 
			</form>

	</div>	

	</div>	

	
	<footer class="container-fluid text-center">
		<a href="#signUpPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<p>We'll fly you above and ahead of everyone else.</p>		
	</footer>
</body>
</html>