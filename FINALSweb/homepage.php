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
						<a class="navbar-brand" href="cartshow.php"><span class="glyphicon glyphicon-shopping-cart"></span> Flight Cart</a>
					</li>


					<li class="dropdown" id = "new">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"> Sign in&nbsp;</span><span class="caret"></span>
						</a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
						  <li><a href="signup.php">Register</a></li>
						  
						  <li class="dropdown-submenu">
							<a tabindex="-1" href="#">Sign in</a>
							<ul class="dropdown-menu">
							  <li><a href="customersignin.php">Customer Sign in</a></li>
							  </li>
						
					
							</ul>
						  </li>
						
						</ul>
					</li>
					  <li class="dropdown" id = "old">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user" id="wuser">Welcom!</span>
						<span class="caret"></span>
						</a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
							<li><a href="showhistory.php">My Flights</a></li>							
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

	<div class="container" id="homepage">
	
		<h1><b><center>Search Flights</center></b></h1>
		<br />
		<p><b><center>Choose your flight option</center></b></p>
		<div class="btn-group btn-group-justified">			
			<div class="btn-group">
			<button id="button1" type="button" href="#oneway" class="btn btn-primary">One-way</button>
			</div>
			<div class="btn-group">
			<button id="button2" type="button" href="#roundtrip" class="btn btn-primary">Round-trip</button>
			</div>
			<div class="btn-group">
			<button id="button3" type="button" href="#all" class="btn btn-primary">Search all flights</button>
			</div>
		</div>
		<hr />
	<div id="oneway">
		<form role="form" action="SearchResultOneway.php" method="post">
		  <div class="row">
		  <div class="col-sm-6">
		    <label for="from">From:</label>
		    <select name = "from">
		    <option value="AAV" class="form-control" id="from"  placeholder="City or Code" required>Allah Valley Airport</option>
		   <option value="BAG" class="form-control" id="from"  placeholder="City or Code" required>Laokan Airport</option>
		   <option value="BCD" class="form-control" id="from"  placeholder="City or Code" required>Bacolod Airport</option>
		   <option value="BPH" class="form-control" id="from"  placeholder="City or Code" required>Baganga Airport</option>
		   <option value="BQA" class="form-control" id="from"  placeholder="City or Code" required>Bislig Airport</option>
		   <option value="BSO" class="form-control" id="from"  placeholder="City or Code" required>Baler Airport</option>
		   <option value="BXU" class="form-control" id="from"  placeholder="City or Code" required>Basco Airport</option>
		   <option value="CBO" class="form-control" id="from"  placeholder="City or Code" required>Butuan Airport</option>
		   <option value="CDY" class="form-control" id="from"  placeholder="City or Code" required>Awang Airport</option>
		   <option value="CEB" class="form-control" id="from"  placeholder="City or Code" required>Mactan-Cebu Airport</option>
		   <option value="CGM" class="form-control" id="from"  placeholder="City or Code" required>Mambajao Airport</option>
		   <option value="CGY" class="form-control" id="from"  placeholder="City or Code" required>Cagayan De Oro Airport</option>
		   <option value="CRK" class="form-control" id="from"  placeholder="City or Code" required>Diosdado Macapagal Airport
</option>
		   <option value="CRM" class="form-control" id="from"  placeholder="City or Code" required>National Airport</option>
		   <option value="CUJ" class="form-control" id="from"  placeholder="City or Code" required>	
Culion Airport</option>
		   <option value="CYP" class="form-control" id="from"  placeholder="City or Code" required>Calbayog Airport</option>
		   <option value="CYU" class="form-control" id="from"  placeholder="City or Code" required>Cuyo Airport</option>
		   <option value="CYZ" class="form-control" id="from"  placeholder="City or Code" required>Cauayan Airport</option>
		   <option value="DGT" class="form-control" id="from"  placeholder="City or Code" required>Dumaguete Airport</option>
		   <option value="DPL" class="form-control" id="from"  placeholder="City or Code" required>Dipolog Airportt</option>
		   <option value="DTE" class="form-control" id="from"  placeholder="City or Code" required>Naga Airport</option>
		   <option value="DVO" class="form-control" id="from"  placeholder="City or Code" required>Francisco Bangoy Airport</option>
		   <option value="ENI" class="form-control" id="from"  placeholder="City or Code" required>	
El nido Airport</option>
		   <option value="EUQ" class="form-control" id="from"  placeholder="City or Code" required>Evelio Javier Airport</option>
		   <option value="GES" class="form-control" id="from"  placeholder="City or Code" required>General Santos Airport</option>
		   <option value="ICO" class="form-control" id="from"  placeholder="City or Code" required>Sicogon Island Airport</option>
		   <option value="IGN" class="form-control" id="from"  placeholder="City or Code" required>	
Maria Cristina Airport</option>
		   <option value="ILO" class="form-control" id="from"  placeholder="City or Code" required>Iloilo International Airport</option>
		   <option value="IPE" class="form-control" id="from"  placeholder="City or Code" required>Ipil Airport</option>
		   <option value="JOL" class="form-control" id="from"  placeholder="City or Code" required>	
Jolo Airport</option>
		   <option value="KLO" class="form-control" id="from"  placeholder="City or Code" required>Kalibo Airport</option>
		   <option value="LAO" class="form-control" id="from"  placeholder="City or Code" required>Laoag Airport</option>
		   <option value="LBX" class="form-control" id="from"  placeholder="City or Code" required>Lubang Airport</option>
		   <option value="LGP" class="form-control" id="from"  placeholder="City or Code" required>Legazpi Airport</option>
		   <option value="MBO" class="form-control" id="from"  placeholder="City or Code" required>Mamburao Airport</option>
		   <option value="MBT" class="form-control" id="from"  placeholder="City or Code" required>Masbate Airport</option>
		   <option value="MLP" class="form-control" id="from"  placeholder="City or Code" required>Malabang Airport</option>
		   <option value="MNL" class="form-control" id="from"  placeholder="City or Code" required>Ninoy Aquino Airport</option>
		   <option value="MPH" class="form-control" id="from"  placeholder="City or Code" required>Malay Airport</option>
		   <option value="MRQ" class="form-control" id="from"  placeholder="City or Code" required>Marinduque Airport</option>
		   <option value="MXI" class="form-control" id="from"  placeholder="City or Code" required>melda Romualdez Airport</option>
		   <option value="NSP" class="form-control" id="from"  placeholder="City or Code" required>NAF Airport</option>
		   <option value="OMC" class="form-control" id="from"  placeholder="City or Code" required>Ormoc Airport</option>
		   <option value="OZC" class="form-control" id="from"  placeholder="City or Code" required>Labo Airport</option>
		   <option value="PAG" class="form-control" id="from"  placeholder="City or Code" required>Pagadian Airport</option>
		   <option value="PPS" class="form-control" id="from"  placeholder="City or Code" required>Puerto Princesa Airport</option>
		   <option value="RXS" class="form-control" id="from"  placeholder="City or Code" required>Roxas City Airport</option>
		   <option value="RZP" class="form-control" id="from"  placeholder="City or Code" required>CLR Airport</option>
		   <option value="SFE" class="form-control" id="from"  placeholder="City or Code" required>San Fernando Airport</option>
		   <option value="SGL" class="form-control" id="from"  placeholder="City or Code" required>Sangley Point NAS Airport</option>
		   <option value="SGS" class="form-control" id="from"  placeholder="City or Code" required>Sanga Sanga Airport</option>
		   <option value="SJI" class="form-control" id="from"  placeholder="City or Code" required>Mcguire fld Airport</option>
		   <option value="SSV" class="form-control" id="from"  placeholder="City or Code" required>Siasi Airport</option>
		   <option value="SUG" class="form-control" id="from"  placeholder="City or Code" required>Surigao Airport</option>
		   <option value="TAC" class="form-control" id="from"  placeholder="City or Code" required>D.Z. Romualdez Airport</option>
		   <option value="TAG" class="form-control" id="from"  placeholder="City or Code" required>Tagbilaran Airport</option>
		   <option value="TBH" class="form-control" id="from"  placeholder="City or Code" required>Romblon Airport</option>
		   <option value="TDG" class="form-control" id="from"  placeholder="City or Code" required>Tandag Airport</option>
		   <option value="TGB" class="form-control" id="from"  placeholder="City or Code" required>Tagbita Airport</option>
		   <option value="TUG" class="form-control" id="from"  placeholder="City or Code" required>Tuguegarao Airport</option>
		   <option value="TWT" class="form-control" id="from"  placeholder="City or Code" required>Tawitawi Airport</option>
		   <option value="USU" class="form-control" id="from"  placeholder="City or Code" required>Puerto Princesa Airport</option>
		   <option value="VRC" class="form-control" id="from"  placeholder="City or Code" required>Virac Airport</option>
		   <option value="WNP" class="form-control" id="from"  placeholder="City or Code" required>Naga Airport</option>
		   <option value="XCN" class="form-control" id="from"  placeholder="City or Code" required>Coron Airport</option>
		   <option value="XMA" class="form-control" id="from"  placeholder="City or Code" required>Maramag Airport</option>
		   <option value="XSO" class="form-control" id="from"  placeholder="City or Code" required>Sicogon Airport</option>
		   <option value="ZAM" class="form-control" id="from"  placeholder="City or Code" required>Zamboanga Airport</option>
		  


		</select>
		  </div>
		  <div class="col-sm-6">
		    <label for="to">To:</label>
		   <select name = "to">
		    <option value="AAV" class="form-control" id="to"  placeholder="City or Code" required>Allah Valley Airport</option>
		   <option value="BAG" class="form-control" id="to"  placeholder="City or Code" required>Laokan Airport</option>
		   <option value="BCD" class="form-control" id="to"  placeholder="City or Code" required>Bacolod Airport</option>
		   <option value="BPH" class="form-control" id="to"  placeholder="City or Code" required>Baganga Airport</option>
		   <option value="BQA" class="form-control" id="to"  placeholder="City or Code" required>Bislig Airport</option>
		   <option value="BSO" class="form-control" id="to"  placeholder="City or Code" required>Baler Airport</option>
		   <option value="BXU" class="form-control" id="to"  placeholder="City or Code" required>Basco Airport</option>
		   <option value="CBO" class="form-control" id="to"  placeholder="City or Code" required>Butuan Airport</option>
		   <option value="CDY" class="form-control" id="to"  placeholder="City or Code" required>Awang Airport</option>
		   <option value="CEB" class="form-control" id="to"  placeholder="City or Code" required>Mactan-Cebu Airport</option>
		   <option value="CGM" class="form-control" id="to"  placeholder="City or Code" required>Mambajao Airport</option>
		   <option value="CGY" class="form-control" id="to"  placeholder="City or Code" required>Cagayan De Oro Airport</option>
		   <option value="CRK" class="form-control" id="to"  placeholder="City or Code" required>Diosdado Macapagal Airport
</option>
		   <option value="CRM" class="form-control" id="to"  placeholder="City or Code" required>National Airport</option>
		   <option value="CUJ" class="form-control" id="to"  placeholder="City or Code" required>	
Culion Airport</option>
		   <option value="CYP" class="form-control" id="to"  placeholder="City or Code" required>Calbayog Airport</option>
		   <option value="CYU" class="form-control" id="to"  placeholder="City or Code" required>Cuyo Airport</option>
		   <option value="CYZ" class="form-control" id="to"  placeholder="City or Code" required>Cauayan Airport</option>
		   <option value="DGT" class="form-control" id="to"  placeholder="City or Code" required>Dumaguete Airport</option>
		   <option value="DPL" class="form-control" id="to"  placeholder="City or Code" required>Dipolog Airportt</option>
		   <option value="DTE" class="form-control" id="to"  placeholder="City or Code" required>Naga Airport</option>
		   <option value="DVO" class="form-control" id="to"  placeholder="City or Code" required>Francisco Bangoy Airport</option>
		   <option value="ENI" class="form-control" id="to"  placeholder="City or Code" required>	
El nido Airport</option>
		   <option value="EUQ" class="form-control" id="to"  placeholder="City or Code" required>Evelio Javier Airport</option>
		   <option value="GES" class="form-control" id="to"  placeholder="City or Code" required>General Santos Airport</option>
		   <option value="ICO" class="form-control" id="to"  placeholder="City or Code" required>Sicogon Island Airport</option>
		   <option value="IGN" class="form-control" id="to"  placeholder="City or Code" required>	
Maria Cristina Airport</option>
		   <option value="ILO" class="form-control" id="to"  placeholder="City or Code" required>Iloilo International Airport</option>
		   <option value="IPE" class="form-control" id="to"  placeholder="City or Code" required>Ipil Airport</option>
		   <option value="JOL" class="form-control" id="to"  placeholder="City or Code" required>	
Jolo Airport</option>
		   <option value="KLO" class="form-control" id="to"  placeholder="City or Code" required>Kalibo Airport</option>
		   <option value="LAO" class="form-control" id="to"  placeholder="City or Code" required>Laoag Airport</option>
		   <option value="LBX" class="form-control" id="to"  placeholder="City or Code" required>Lubang Airport</option>
		   <option value="LGP" class="form-control" id="to"  placeholder="City or Code" required>Legazpi Airport</option>
		   <option value="MBO" class="form-control" id="to"  placeholder="City or Code" required>Mamburao Airport</option>
		   <option value="MBT" class="form-control" id="to"  placeholder="City or Code" required>Masbate Airport</option>
		   <option value="MLP" class="form-control" id="to"  placeholder="City or Code" required>Malabang Airport</option>
		   <option value="MNL" class="form-control" id="to"  placeholder="City or Code" required>Ninoy Aquino Airport</option>
		   <option value="MPH" class="form-control" id="to"  placeholder="City or Code" required>Malay Airport</option>
		   <option value="MRQ" class="form-control" id="to"  placeholder="City or Code" required>Marinduque Airport</option>
		   <option value="MXI" class="form-control" id="to"  placeholder="City or Code" required>melda Romualdez Airport</option>
		   <option value="NSP" class="form-control" id="to"  placeholder="City or Code" required>NAF Airport</option>
		   <option value="OMC" class="form-control" id="to"  placeholder="City or Code" required>Ormoc Airport</option>
		   <option value="OZC" class="form-control" id="to"  placeholder="City or Code" required>Labo Airport</option>
		   <option value="PAG" class="form-control" id="to"  placeholder="City or Code" required>Pagadian Airport</option>
		   <option value="PPS" class="form-control" id="to"  placeholder="City or Code" required>Puerto Princesa Airport</option>
		   <option value="RXS" class="form-control" id="to"  placeholder="City or Code" required>Roxas City Airport</option>
		   <option value="RZP" class="form-control" id="to"  placeholder="City or Code" required>CLR Airport</option>
		   <option value="SFE" class="form-control" id="to"  placeholder="City or Code" required>San Fernando Airport</option>
		   <option value="SGL" class="form-control" id="to"  placeholder="City or Code" required>Sangley Point NAS Airport</option>
		   <option value="SGS" class="form-control" id="to"  placeholder="City or Code" required>Sanga Sanga Airport</option>
		   <option value="SJI" class="form-control" id="to"  placeholder="City or Code" required>Mcguire fld Airport</option>
		   <option value="SSV" class="form-control" id="to"  placeholder="City or Code" required>Siasi Airport</option>
		   <option value="SUG" class="form-control" id="to"  placeholder="City or Code" required>Surigao Airport</option>
		   <option value="TAC" class="form-control" id="to"  placeholder="City or Code" required>D.Z. Romualdez Airport</option>
		   <option value="TAG" class="form-control" id="to"  placeholder="City or Code" required>Tagbilaran Airport</option>
		   <option value="TBH" class="form-control" id="to"  placeholder="City or Code" required>Romblon Airport</option>
		   <option value="TDG" class="form-control" id="to"  placeholder="City or Code" required>Tandag Airport</option>
		   <option value="TGB" class="form-control" id="to"  placeholder="City or Code" required>Tagbita Airport</option>
		   <option value="TUG" class="form-control" id="to"  placeholder="City or Code" required>Tuguegarao Airport</option>
		   <option value="TWT" class="form-control" id="to"  placeholder="City or Code" required>Tawitawi Airport</option>
		   <option value="USU" class="form-control" id="to"  placeholder="City or Code" required>Puerto Princesa Airport</option>
		   <option value="VRC" class="form-control" id="to"  placeholder="City or Code" required>Virac Airport</option>
		   <option value="WNP" class="form-control" id="to"  placeholder="City or Code" required>Naga Airport</option>
		   <option value="XCN" class="form-control" id="to"  placeholder="City or Code" required>Coron Airport</option>
		   <option value="XMA" class="form-control" id="to"  placeholder="City or Code" required>Maramag Airport</option>
		   <option value="XSO" class="form-control" id="to"  placeholder="City or Code" required>Sicogon Airport</option>
		   <option value="ZAM" class="form-control" id="to"  placeholder="City or Code" required>Zamboanga Airport</option>
			</select>
		  </div>
		  </div>
		  <hr >
		  <div class="row">
			  <div class="col-sm-6">
			    <label for="depart">Depart:</label>
			    <input type="date" class="form-control" id="depart" name="depart" required>
			  </div>
		  </div>   
		   <div class="row">
		   <hr >
		  <div class="col-sm-6">
		    <label for="class">Class:</label>
		    <select class="form-control" name="class">
		      <option value="Economy">Economy</option>
		      <option value="Business">Business</option>   
		    </select>
		  </div> 
		  </div> 
		  <br>
		  <div class="row">
		  <div class="col-sm-6"> 
		    <label class="radio-inline">
		      <input type="radio" name="stop" value="nonstop" checked>Non-Stop
		    </label>
		    <label class="radio-inline">
		      <input type="radio" name="stop" value="1stop">1 Stop
		    </label>
		  </div> 
		  </div> 
		  <br>
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


	<div id="roundtrip">
		<form role="form" action="SearchResultRoundtrip.php" method="post">
			 <div class="row"> 
			  <div class="col-sm-6">
			    <label for="from">From:</label>
			     <select name = "from">
		    <option value="AAV" class="form-control" id="from"  placeholder="City or Code" required>Allah Valley Airport</option>
		   <option value="BAG" class="form-control" id="from"  placeholder="City or Code" required>Laokan Airport</option>
		   <option value="BCD" class="form-control" id="from"  placeholder="City or Code" required>Bacolod Airport</option>
		   <option value="BPH" class="form-control" id="from"  placeholder="City or Code" required>Baganga Airport</option>
		   <option value="BQA" class="form-control" id="from"  placeholder="City or Code" required>Bislig Airport</option>
		   <option value="BSO" class="form-control" id="from"  placeholder="City or Code" required>Baler Airport</option>
		   <option value="BXU" class="form-control" id="from"  placeholder="City or Code" required>Basco Airport</option>
		   <option value="CBO" class="form-control" id="from"  placeholder="City or Code" required>Butuan Airport</option>
		   <option value="CDY" class="form-control" id="from"  placeholder="City or Code" required>Awang Airport</option>
		   <option value="CEB" class="form-control" id="from"  placeholder="City or Code" required>Mactan-Cebu Airport</option>
		   <option value="CGM" class="form-control" id="from"  placeholder="City or Code" required>Mambajao Airport</option>
		   <option value="CGY" class="form-control" id="from"  placeholder="City or Code" required>Cagayan De Oro Airport</option>
		   <option value="CRK" class="form-control" id="from"  placeholder="City or Code" required>Diosdado Macapagal Airport
</option>
		   <option value="CRM" class="form-control" id="from"  placeholder="City or Code" required>National Airport</option>
		   <option value="CUJ" class="form-control" id="from"  placeholder="City or Code" required>	
Culion Airport</option>
		   <option value="CYP" class="form-control" id="from"  placeholder="City or Code" required>Calbayog Airport</option>
		   <option value="CYU" class="form-control" id="from"  placeholder="City or Code" required>Cuyo Airport</option>
		   <option value="CYZ" class="form-control" id="from"  placeholder="City or Code" required>Cauayan Airport</option>
		   <option value="DGT" class="form-control" id="from"  placeholder="City or Code" required>Dumaguete Airport</option>
		   <option value="DPL" class="form-control" id="from"  placeholder="City or Code" required>Dipolog Airportt</option>
		   <option value="DTE" class="form-control" id="from"  placeholder="City or Code" required>Naga Airport</option>
		   <option value="DVO" class="form-control" id="from"  placeholder="City or Code" required>Francisco Bangoy Airport</option>
		   <option value="ENI" class="form-control" id="from"  placeholder="City or Code" required>	
El nido Airport</option>
		   <option value="EUQ" class="form-control" id="from"  placeholder="City or Code" required>Evelio Javier Airport</option>
		   <option value="GES" class="form-control" id="from"  placeholder="City or Code" required>General Santos Airport</option>
		   <option value="ICO" class="form-control" id="from"  placeholder="City or Code" required>Sicogon Island Airport</option>
		   <option value="IGN" class="form-control" id="from"  placeholder="City or Code" required>	
Maria Cristina Airport</option>
		   <option value="ILO" class="form-control" id="from"  placeholder="City or Code" required>Iloilo International Airport</option>
		   <option value="IPE" class="form-control" id="from"  placeholder="City or Code" required>Ipil Airport</option>
		   <option value="JOL" class="form-control" id="from"  placeholder="City or Code" required>	
Jolo Airport</option>
		   <option value="KLO" class="form-control" id="from"  placeholder="City or Code" required>Kalibo Airport</option>
		   <option value="LAO" class="form-control" id="from"  placeholder="City or Code" required>Laoag Airport</option>
		   <option value="LBX" class="form-control" id="from"  placeholder="City or Code" required>Lubang Airport</option>
		   <option value="LGP" class="form-control" id="from"  placeholder="City or Code" required>Legazpi Airport</option>
		   <option value="MBO" class="form-control" id="from"  placeholder="City or Code" required>Mamburao Airport</option>
		   <option value="MBT" class="form-control" id="from"  placeholder="City or Code" required>Masbate Airport</option>
		   <option value="MLP" class="form-control" id="from"  placeholder="City or Code" required>Malabang Airport</option>
		   <option value="MNL" class="form-control" id="from"  placeholder="City or Code" required>Ninoy Aquino Airport</option>
		   <option value="MPH" class="form-control" id="from"  placeholder="City or Code" required>Malay Airport</option>
		   <option value="MRQ" class="form-control" id="from"  placeholder="City or Code" required>Marinduque Airport</option>
		   <option value="MXI" class="form-control" id="from"  placeholder="City or Code" required>melda Romualdez Airport</option>
		   <option value="NSP" class="form-control" id="from"  placeholder="City or Code" required>NAF Airport</option>
		   <option value="OMC" class="form-control" id="from"  placeholder="City or Code" required>Ormoc Airport</option>
		   <option value="OZC" class="form-control" id="from"  placeholder="City or Code" required>Labo Airport</option>
		   <option value="PAG" class="form-control" id="from"  placeholder="City or Code" required>Pagadian Airport</option>
		   <option value="PPS" class="form-control" id="from"  placeholder="City or Code" required>Puerto Princesa Airport</option>
		   <option value="RXS" class="form-control" id="from"  placeholder="City or Code" required>Roxas City Airport</option>
		   <option value="RZP" class="form-control" id="from"  placeholder="City or Code" required>CLR Airport</option>
		   <option value="SFE" class="form-control" id="from"  placeholder="City or Code" required>San Fernando Airport</option>
		   <option value="SGL" class="form-control" id="from"  placeholder="City or Code" required>Sangley Point NAS Airport</option>
		   <option value="SGS" class="form-control" id="from"  placeholder="City or Code" required>Sanga Sanga Airport</option>
		   <option value="SJI" class="form-control" id="from"  placeholder="City or Code" required>Mcguire fld Airport</option>
		   <option value="SSV" class="form-control" id="from"  placeholder="City or Code" required>Siasi Airport</option>
		   <option value="SUG" class="form-control" id="from"  placeholder="City or Code" required>Surigao Airport</option>
		   <option value="TAC" class="form-control" id="from"  placeholder="City or Code" required>D.Z. Romualdez Airport</option>
		   <option value="TAG" class="form-control" id="from"  placeholder="City or Code" required>Tagbilaran Airport</option>
		   <option value="TBH" class="form-control" id="from"  placeholder="City or Code" required>Romblon Airport</option>
		   <option value="TDG" class="form-control" id="from"  placeholder="City or Code" required>Tandag Airport</option>
		   <option value="TGB" class="form-control" id="from"  placeholder="City or Code" required>Tagbita Airport</option>
		   <option value="TUG" class="form-control" id="from"  placeholder="City or Code" required>Tuguegarao Airport</option>
		   <option value="TWT" class="form-control" id="from"  placeholder="City or Code" required>Tawitawi Airport</option>
		   <option value="USU" class="form-control" id="from"  placeholder="City or Code" required>Puerto Princesa Airport</option>
		   <option value="VRC" class="form-control" id="from"  placeholder="City or Code" required>Virac Airport</option>
		   <option value="WNP" class="form-control" id="from"  placeholder="City or Code" required>Naga Airport</option>
		   <option value="XCN" class="form-control" id="from"  placeholder="City or Code" required>Coron Airport</option>
		   <option value="XMA" class="form-control" id="from"  placeholder="City or Code" required>Maramag Airport</option>
		   <option value="XSO" class="form-control" id="from"  placeholder="City or Code" required>Sicogon Airport</option>
		   <option value="ZAM" class="form-control" id="from"  placeholder="City or Code" required>Zamboanga Airport</option>
		  


		</select>
			  </div>
			  <div class="col-sm-6">
			    <label for="to">To:</label>
			     <select name = "to">
		    <option value="AAV" class="form-control" id="to"  placeholder="City or Code" required>Allah Valley Airport</option>
		   <option value="BAG" class="form-control" id="to"  placeholder="City or Code" required>Laokan Airport</option>
		   <option value="BCD" class="form-control" id="to"  placeholder="City or Code" required>Bacolod Airport</option>
		   <option value="BPH" class="form-control" id="to"  placeholder="City or Code" required>Baganga Airport</option>
		   <option value="BQA" class="form-control" id="to"  placeholder="City or Code" required>Bislig Airport</option>
		   <option value="BSO" class="form-control" id="to"  placeholder="City or Code" required>Baler Airport</option>
		   <option value="BXU" class="form-control" id="to"  placeholder="City or Code" required>Basco Airport</option>
		   <option value="CBO" class="form-control" id="to"  placeholder="City or Code" required>Butuan Airport</option>
		   <option value="CDY" class="form-control" id="to"  placeholder="City or Code" required>Awang Airport</option>
		   <option value="CEB" class="form-control" id="to"  placeholder="City or Code" required>Mactan-Cebu Airport</option>
		   <option value="CGM" class="form-control" id="to"  placeholder="City or Code" required>Mambajao Airport</option>
		   <option value="CGY" class="form-control" id="to"  placeholder="City or Code" required>Cagayan De Oro Airport</option>
		   <option value="CRK" class="form-control" id="to"  placeholder="City or Code" required>Diosdado Macapagal Airport
</option>
		   <option value="CRM" class="form-control" id="to"  placeholder="City or Code" required>National Airport</option>
		   <option value="CUJ" class="form-control" id="to"  placeholder="City or Code" required>	
Culion Airport</option>
		   <option value="CYP" class="form-control" id="to"  placeholder="City or Code" required>Calbayog Airport</option>
		   <option value="CYU" class="form-control" id="to"  placeholder="City or Code" required>Cuyo Airport</option>
		   <option value="CYZ" class="form-control" id="to"  placeholder="City or Code" required>Cauayan Airport</option>
		   <option value="DGT" class="form-control" id="to"  placeholder="City or Code" required>Dumaguete Airport</option>
		   <option value="DPL" class="form-control" id="to"  placeholder="City or Code" required>Dipolog Airportt</option>
		   <option value="DTE" class="form-control" id="to"  placeholder="City or Code" required>Naga Airport</option>
		   <option value="DVO" class="form-control" id="to"  placeholder="City or Code" required>Francisco Bangoy Airport</option>
		   <option value="ENI" class="form-control" id="to"  placeholder="City or Code" required>	
El nido Airport</option>
		   <option value="EUQ" class="form-control" id="to"  placeholder="City or Code" required>Evelio Javier Airport</option>
		   <option value="GES" class="form-control" id="to"  placeholder="City or Code" required>General Santos Airport</option>
		   <option value="ICO" class="form-control" id="to"  placeholder="City or Code" required>Sicogon Island Airport</option>
		   <option value="IGN" class="form-control" id="to"  placeholder="City or Code" required>	
Maria Cristina Airport</option>
		   <option value="ILO" class="form-control" id="to"  placeholder="City or Code" required>Iloilo International Airport</option>
		   <option value="IPE" class="form-control" id="to"  placeholder="City or Code" required>Ipil Airport</option>
		   <option value="JOL" class="form-control" id="to"  placeholder="City or Code" required>	
Jolo Airport</option>
		   <option value="KLO" class="form-control" id="to"  placeholder="City or Code" required>Kalibo Airport</option>
		   <option value="LAO" class="form-control" id="to"  placeholder="City or Code" required>Laoag Airport</option>
		   <option value="LBX" class="form-control" id="to"  placeholder="City or Code" required>Lubang Airport</option>
		   <option value="LGP" class="form-control" id="to"  placeholder="City or Code" required>Legazpi Airport</option>
		   <option value="MBO" class="form-control" id="to"  placeholder="City or Code" required>Mamburao Airport</option>
		   <option value="MBT" class="form-control" id="to"  placeholder="City or Code" required>Masbate Airport</option>
		   <option value="MLP" class="form-control" id="to"  placeholder="City or Code" required>Malabang Airport</option>
		   <option value="MNL" class="form-control" id="to"  placeholder="City or Code" required>Ninoy Aquino Airport</option>
		   <option value="MPH" class="form-control" id="to"  placeholder="City or Code" required>Malay Airport</option>
		   <option value="MRQ" class="form-control" id="to"  placeholder="City or Code" required>Marinduque Airport</option>
		   <option value="MXI" class="form-control" id="to"  placeholder="City or Code" required>melda Romualdez Airport</option>
		   <option value="NSP" class="form-control" id="to"  placeholder="City or Code" required>NAF Airport</option>
		   <option value="OMC" class="form-control" id="to"  placeholder="City or Code" required>Ormoc Airport</option>
		   <option value="OZC" class="form-control" id="to"  placeholder="City or Code" required>Labo Airport</option>
		   <option value="PAG" class="form-control" id="to"  placeholder="City or Code" required>Pagadian Airport</option>
		   <option value="PPS" class="form-control" id="to"  placeholder="City or Code" required>Puerto Princesa Airport</option>
		   <option value="RXS" class="form-control" id="to"  placeholder="City or Code" required>Roxas City Airport</option>
		   <option value="RZP" class="form-control" id="to"  placeholder="City or Code" required>CLR Airport</option>
		   <option value="SFE" class="form-control" id="to"  placeholder="City or Code" required>San Fernando Airport</option>
		   <option value="SGL" class="form-control" id="to"  placeholder="City or Code" required>Sangley Point NAS Airport</option>
		   <option value="SGS" class="form-control" id="to"  placeholder="City or Code" required>Sanga Sanga Airport</option>
		   <option value="SJI" class="form-control" id="to"  placeholder="City or Code" required>Mcguire fld Airport</option>
		   <option value="SSV" class="form-control" id="to"  placeholder="City or Code" required>Siasi Airport</option>
		   <option value="SUG" class="form-control" id="to"  placeholder="City or Code" required>Surigao Airport</option>
		   <option value="TAC" class="form-control" id="to"  placeholder="City or Code" required>D.Z. Romualdez Airport</option>
		   <option value="TAG" class="form-control" id="to"  placeholder="City or Code" required>Tagbilaran Airport</option>
		   <option value="TBH" class="form-control" id="to"  placeholder="City or Code" required>Romblon Airport</option>
		   <option value="TDG" class="form-control" id="to"  placeholder="City or Code" required>Tandag Airport</option>
		   <option value="TGB" class="form-control" id="to"  placeholder="City or Code" required>Tagbita Airport</option>
		   <option value="TUG" class="form-control" id="to"  placeholder="City or Code" required>Tuguegarao Airport</option>
		   <option value="TWT" class="form-control" id="to"  placeholder="City or Code" required>Tawitawi Airport</option>
		   <option value="USU" class="form-control" id="to"  placeholder="City or Code" required>Puerto Princesa Airport</option>
		   <option value="VRC" class="form-control" id="to"  placeholder="City or Code" required>Virac Airport</option>
		   <option value="WNP" class="form-control" id="to"  placeholder="City or Code" required>Naga Airport</option>
		   <option value="XCN" class="form-control" id="to"  placeholder="City or Code" required>Coron Airport</option>
		   <option value="XMA" class="form-control" id="to"  placeholder="City or Code" required>Maramag Airport</option>
		   <option value="XSO" class="form-control" id="to"  placeholder="City or Code" required>Sicogon Airport</option>
		   <option value="ZAM" class="form-control" id="to"  placeholder="City or Code" required>Zamboanga Airport</option>
			</select>
			  </div>
			 </div>
			 <hr >
			<div class="row">  
			  <div class="col-sm-6">
			    <label for="depart">Depart:</label>
			    <input type="date" class="form-control" id="depart" name="depart" required>
			  </div>  
			  <div class="col-sm-6">
			    <label for="return">Return:</label>
			    <input type="date" class="form-control" id="return" name="return" required>
			  </div>
			 </div>
			 <hr >
			 <div class="row">   
			  <div class="col-sm-6">
			    <label for="class">Class:</label>
			    <select class="form-control" name="class">
			      <option value="Economy">Economy</option>
			      <option value="Business">Business</option>   
			    </select>
			  </div> 
			 </div>
			 <br>
			  <div class="form-group"> 
			    <label class="radio-inline">
			      <input type="radio" name="stop" value="nonstop" checked>Non-Stop
			    </label>   
			  </div> 
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