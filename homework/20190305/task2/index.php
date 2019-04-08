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
		</div>
	</nav>

	<main id="container">


<?php
	$users = 
    [
      [
        "id" => 1,
        "name" => "Leanne Johnson",
        "username" => "Bret",
        "age" => "23",
        "address" => "188 Shub Farm St. Riverview, FL 33569",
      ],
      [
        "id" => 2,
        "name" => "Ervin Klein",
        "username" => "Antonette",
        "age" => "27",
        "address" => "778 Gregory Ave. Muncie, IN 47302",
      ],
      [
        "id" => 3,
        "name" => "Clementine Werwick",
        "username" => "Samantha",
        "age" => "29",
        "address" => "7012 Summit Court Mentor, OH 44060",
      ],
      [
        "id" => 4,
        "name" => "Patricia Swarowski",
        "username" => "Karianne",
        "age" => "32",
        "address" => "803 3rd Court Auburndale, FL 33823",
      ],
      [
        "id" => 5,
        "name" => "Chelsey Crush",
        "username" => "Kamren",
        "age" => "25",
        "address" => "68 School Drive Danville, VA 24540",
      ]
    ];
?>
<?php 
	


foreach ($users as $value) {
	echo "<a href='user.php?id=".$value["id"]."&name=".$value["name"]."&username=".$value["username"]."&age=".$value["age"]."&address=".$value["address"]."'><section>";
	echo "<img class='element' src='images/" . $value["username"] . ".jpg'/>";
	echo "<div class='element'>".$value["name"]."<br/>".$value["username"]."</div>";
	echo "</section></a>";
}

/*
	echo "<div id='container'>";
	foreach ($users as $user) {
		echo "<div class='box'>";
		echo "<div class='slika'><img src='".$user['username'].".png'></div>";
		echo "<div class='ime'>".$user['name']."<br>".$user['username']."</div>";
		echo "<div class='button'>"."<a href=user.php?id=".$user['id'].'&username='.$user['username'].'&age='.$user['age'].'&address='.$user['address'].">"."<button>View profile</button>"."</a>"."</div>";
		echo "</div>";
	}
		echo "</div>"
	?>*/

?>
</main>
</body>
</html>