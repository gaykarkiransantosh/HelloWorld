<!-- tab gallery w3 schools -->
  <html>
	<head>
		<meta charset="UTF-8">
		<title> Bajirao Shop</title>
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


    <div class="container">

      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Add Product</h2>
          <hr class="star-primary">
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
       
    <h3>Add Product</h3>
    <form action='' method="POST" >
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>price:</label>
            <input type="price" name="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea class="form-control" name="desc" required></textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image"  required>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>

    </div>

       

      </div>

    </div><!-- /.container -->


  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
<?php


require('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
      
 




    $name = $_POST["name"]; 
    $price = $_POST["price"]; 
    $desc = $_POST["desc"];

     $image = $_POST["image"];

$sql = "INSERT into tbl_products (name,price,Details,Image) VALUES('" . $name . "','" . $price . "','" . $desc . "','". $image ."')";


$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo "Product added successfully ";


$mysqli->close();
}

?>
