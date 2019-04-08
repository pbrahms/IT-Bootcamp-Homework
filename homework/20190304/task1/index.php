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
		<a href="https://itbcg3-fwa.000webhostapp.com">
		<div class="navdiv">
			<i class="fa fa-bars"></i>
		</div>
		</a>
		<div class="navdiv">
			<i class="fa fa-users"></i>
			<i class="fa fa-list-alt"></i>
		</div>
		<div class="navdiv">
			<i></i>
		</div>
	</nav>
	<main id="container">


<?php
	$users = 
    [
      [
        "id" => 1,
        "name" => "Leanne Graham",
        "username" => "Bret",
        "email" => "Sincere@april.biz"
      ],
      [
        "id" => 2,
        "name" => "Ervin Howell",
        "username" => "Antonette",
        "email" => "Shanna@melissa.tv"
      ],
      [
        "id" => 3,
        "name" => "Clementine Bauch",
        "username" => "Samantha",
        "email" => "Nathan@yesenia.net"
      ],
      [
        "id" => 4,
        "name" => "Patricia Lebsack",
        "username" => "Karianne",
        "email" => "Julianne.OConner@kory.org"
      ],
      [
        "id" => 5,
        "name" => "Chelsey Dietrich",
        "username" => "Kamren",
        "email" => "Lucio_Hettinger@annie.ca"
      ]
    ];
?>
<?php 

foreach ($users as $value) {
	echo "<section>";
	echo "<img class='element' src='images/" . $value["username"] . ".jpg'/>";
	echo "<div class='element'>".$value["name"]."<br/>".$value["username"]."</div>";
	echo "<button class='element' onclick='email()'>Email me</button>";
	echo "</section>";
}

?>
</main>
</body>
</html>