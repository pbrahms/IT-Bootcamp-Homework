<!DOCTYPE html>
<html>
<head>
	<title>Top Users</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<nav>
		<a href="index.php">
		<div class="navdiv">
			<i class="fa fa-bars"></i>
		</div>
		</a>
		<div class="navdiv">
			<i></i>
		</div>
	</nav>
	<main id="container">

<?php 

    echo "User id: ".$_GET['id']."<br>"; 
    echo "Full name: ".$_GET['name']."<br>";
    echo "Username: ".$_GET['username']."<br>";
    echo "Age: ".$_GET['age']."<br>";
    echo "Address: ".$_GET['address']."<br>";

?>
</main>
</body>
</html>