<?php 
include("config/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Social</title>
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
			<a href="users.php">
			<i class="fa fa-users"></i>
			</a>
			<i class="fa fa-list-alt"></i>
		</div>
		<div class="navdiv">
		</div>
	</nav>

	<main id="container">

</main>
<footer>
	<div id="sunmoon"></div>	
</footer>

<script type="text/javascript">
    var sunmoon = document.getElementById("sunmoon");
    var d = new Date();
    var n = d.getHours();
    //var bodytag = document.getElementsByTagName("body")[0];
    if (n >= 7 && n < 11) {
    	sunmoon.innerHTML = " ☀️ Good Morning!";      
    	//bodytag.style.backgroundImage = "linear-gradient(to bottom left, #3EC6CF, #5961E3)"; 
    } else if (n >= 11 && n < 19) {
    	sunmoon.innerHTML = " ⛅ Good Day!";
    	//bodytag.style.backgroundImage = "linear-gradient(to bottom left, #3EC6CF, #5961E3)"; 
    } else {
    	sunmoon.innerHTML = " 🌙 Good Night!";
    	//bodytag.style.backgroundImage = "linear-gradient(to bottom left, #D49C84, #303F8A)"; 
    }
      
</script>
</body>
</html>