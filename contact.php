
  <html>
	<head>
		<meta charset="UTF-8">
		<title>Bajirao Shop</title>
		<meta name="description" content="Bajirao Shop ">
        <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
    <link rel="stylesheet"  href="index1.php">
    <link rel="stylesheet"  href="about.php">
		<link rel="stylesheet"  href="contact.php">
    <link rel="stylesheet"  href="product.php">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>
	<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#myNavbar">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
           
          
         <div class="brand brand-name navbar-left logo"> 
     <img class="img1" src="https://image3.mouthshut.com/images/imagesp/925895805s.png">
          </div>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
            <ul class="nav navbar-nav">
            <li><a href="index1.php">Home</a></li>
   				<li><a href="about.php">About</a></li>
   				<li><a href="product.php">Product</a></li>
    			<li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>


  <!-- Contact -->
  <section id="contact">
    <div class="container">

      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Contact</h2>
          <hr class="star-primary">
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 ">
       
    <h3>contact us if you have any query</h3>
    <form action='' method="POST">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Message:</label>
            <textarea class="form-control" name="message" required></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>

    </div>
  
        <div class="col-lg-6">
          <div class="embed-responsive-item">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106060.55008181452!2d-117.95986053127125!3d33.8279951552879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd2808fb8655ad%3A0x535d20ee21ffc70f!2sClash+of+Clans+Attack+Strategy!5e0!3m2!1ssr!2srs!4v1448058178196" width="580" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>

      </div>

    </div><!-- /.container -->
  </section>
<br><br>
  <footer>
    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <p>11761 <small>Total Points</small> 31 <small>Wars Won</small> War Frequency: <u>Always</u></p>
        </div>

      </div>
    </div> <!-- ./container -->
  </footer>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
<?php


require('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
      
   
    $name = $_POST["name"]; 
    $email = $_POST["email"]; 
    $message = $_POST["message"];

$sql = "INSERT into contactus (name,email,message,created_date) VALUES('" . $name . "','" . $email . "','" . $message . "','" . date('Y-m-d') . "')";


$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo "Thank You For Contacting Us ";


$mysqli->close();
}

?>
