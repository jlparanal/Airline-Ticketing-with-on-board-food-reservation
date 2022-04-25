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
    <h2><p>Choose your meals option</p></h2>
     
  </div>
<?php
include_once 'dbconnect2.php';
$sql = mysqli_query($con,"UPDATE book
SET paid = '1'
WHERE username = '$user'");
mysqli_close($con);
?>
  

  <div class="container" id="homepage">
    <div class="btn-group btn-group-justified">     
    </div>
    <form action = "fooddb.php" method="POST">
    <hr>
      <div class="row">
      <div class="col-sm-6">
        <center><label for="fish">Fish</label></center>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="ratings.css">
        <center><span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span> 
        <span class="fa fa-star"></span> </center>
    <center><img src="fish.jpg" width="180" height="200"></center>
  
      </div>
      <label><input type = "radio" name = "food" value = "Fish"> Pan Seared Mahi Mahi with Honey Lime Coleslaw (P250.00)</input></label>
   <p> * Pan seared mahi mahi recipe coated with a blend of savory and sweet spices.
   Each fillet is served with a crunchy and refreshing honey lime coleslaw.</p>
   <p>Ingredients:

    1 lb Mahi mahi, fillets
    Produce
    1 cup Carrots
    1/4 cup Cilantro, leaves
    1/2 clove Garlic
    1/2 tsp Garlic powder
    1 cup Green cabbage
    1/2 cup Green onions
    1/2 tsp Onion powder
    1/4 tsp Oregano, dried
    1 cup Red bell pepper
    1 cup Red cabbage
    Condiments
    1 tbsp Honey
    2 tbsp Lime juice
      Baking & Spices
    1/4 tsp Black pepper
    1 tsp Brown sugar, dark
    1/4 tsp Chili powder
    1/2 tsp Kosher salt
    1 1/2 tsp Paprika, smoked
    Oils & Vinegars
    3 tbsp Olive oil
    Nuts & Seeds
    3/4 tsp Mccormick cumin, ground</p>
      </div>
      </div>
      <hr >
      <div class="row">
        <div class="col-sm-6">
         <center> <label for="pork">Pork</label></center>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <center><span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span> 
        <span class="fa fa-star"></span></center> 
        <center><img src="pork.jpg" width="180" height="200"></center>
      </div>
      <label><input type = "radio" name = "food" value = "Pork"> SWEET CARAMELIZED PORK (P300.00)</input></label>
   <p> * A super easy, quick and delicious sticky pork recipe that will make you want to sink your teeth into these juicy bits.</p>
   <p>Ingredients:
    1 1/2 lbs boneless pork rib meat
    1/2 cup brown sugar
    1 tsp cayenne (or paprika for less heat)
    1 tsp ground ginger powder
    1/2 tsp black pepper
    1 tsp salt
    1 medium onion
    2 tbsp oil
    1 green onion (for garnish)</p>
        </div>
      </div>   
       <div class="row">
       <hr >
      <div class="col-sm-6">
    <center><label for="beef">Beef</label></center>
    <center><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span> 
        <span class="fa fa-star"></span> 
    <center><img src="beef.jpg" width="180" height="200"></center>
      </div>
        <label><input type = "radio" name = "food" value = "beef"> Chinese Broccoli Beef (P350.00)</input></label>
    <p> A super easy, quick and delicious Chinese brocolli recipe that will make you want to sink your teeth into these juicy bits.</p>
    Ingredients:

    1/2 pound flank or sirloin steak
    1 1/2 teaspoons soy sauce
    1 teaspoon cornstarch
    Freshly ground black pepper
    1 pound broccoli cut into bite-size florets
    1 tablespoon high-heat cooking oil canola, vegetable, rice
    2 cloves garlic finely minced
    1 teaspoon grated fresh ginger</p>
      </div> 
      </div>
      <br>
  
    
        </div>
      
        </div>
      </div>
      <div class="btn-group btn-group-justified"> 
        <div class="btn-group">
          <center><button type="submit" class="btn btn-success">Submit</a><center></button>
        </div>
        <div class="btn-group">
          <button type="reset"  class="btn btn-info" value="Reset">Reset</button>
        </div>
    </form>
  </div>

  
  
</body>
</html>