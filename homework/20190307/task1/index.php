<!DOCTYPE html>
<html>
<head>
	<title>Comments</title>
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
    <div id="sunmoon">
		</div>
	</nav>

	<main id="container">

<?php
	$users = 
    [
      [
        "userID" => 1,
        "username" => "Bret",
        "firstName" => "Leanne",
        "lastName" => "Johnson",
        "email" => "Sincere@april.biz",
      ],
      [
        "userID" => 2,
        "username" => "Antonette",
        "firstName" => "Ervin",
        "lastName" => "Howell",
        "email" => "Shanna@melissa.tv",
      ],
      [
        "userID" => 3,
        "username" => "Samantha",
        "firstName" => "Clementine",
        "lastName" => "Bauch",
        "email" => "Nathan@yesenia.net",
      ],
      [
        "userID" => 4, 
        "username" => "Karianne",
        "firstName" => "Patricia",
        "lastName" => "Lebsack",
        "email" => "Julianne.OConner@kory.org",
      ],
      [
        "userID" => 5,
        "username" => "Kamren",
        "firstName" => "Chelsey",
        "lastName" => "Dietrich",
        "email" => "Lucio_Hettinger@annie.ca",
      ],
    ];

  $posts = 
    [
      [
        "postID" => 1,
        "userID" => 1,
        "bodyText" => "A human being without a friend is like a tree in a desert.",
        "timeOfCreation" => "07.03.2019 11:30",
      ],
      [
        "postID" => 2,
        "userID" => 1,
        "bodyText" => "When nature is your home, you don’t visit it.",
        "timeOfCreation" => "08.03.2019 12:30",
      ],
      [
        "postID" => 3,
        "userID" => 2,
        "bodyText" => "A human being without a friend is like a tree in a desert.",
        "timeOfCreation" => "09.03.2019 13:30",
      ],
      [
        "postID" => 4,
        "userID" => 3,
        "bodyText" => "Little by little.",
        "timeOfCreation" => "03.03.2019 14:30",
      ],
      [
        "postID" => 5,
        "userID" => 4,
        "bodyText" => "Be a nice human.",
        "timeOfCreation" => "02.03.2019 15:30",
      ],
      [
        "postID" => 6,
        "userID" => 5,
        "bodyText" => "Sea you in the morning.",
        "timeOfCreation" => "01.03.2019 16:30",
      ],
      [
        "postID" => 7,
        "userID" => 5,
        "bodyText" => "Escape the ordinary.",
        "timeOfCreation" => "11.03.2019 17:30",
      ],
    ];
?>
<?php 
	
foreach ($posts as $value) {

  $timeOfCreation = $value["timeOfCreation"];
  $bodyText = $value["bodyText"];
  $userID = $value["userID"];

  foreach ($users as $value) {

    if($userID == $value["userID"]) {

        $firstName = $value["firstName"];
        $lastName = $value["lastName"];
        $username = $value["username"];

        echo "<section>";
        echo "<img class='element' src='images/" . $username . ".jpg'/>";
        echo "<div class='element'>" . $firstName . " " . $lastName . " on " . $timeOfCreation . "<br>" . $bodyText . "</div>";
        echo "</section>";
    }
  }
}

?>

  <script type="text/javascript">
    var sunmoon = document.getElementById("sunmoon");
    var d = new Date();
    var n = d.getHours();
    var bodytag = document.getElementsByTagName("body")[0];
    if (n >= 19 || n < 6) {
      sunmoon.innerHTML = "☾ It's Night!";
      bodytag.style.backgroundImage = "linear-gradient(to bottom left, #D49C84, #303F8A)"; 
    }
    else {
      sunmoon.innerHTML = "☀ It's Day!";
      bodytag.style.backgroundImage = "linear-gradient(to bottom left, #3EC6CF, #5961E3)"; 
    }
  </script>
  
</main>
</body>
</html>