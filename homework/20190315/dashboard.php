<?php
session_start();
include("config/config.php"); 
if (!isset($_SESSION['username']) || !$_SESSION['username']) {
	header('location: index.php');
}
$username = $_SESSION['username'];     
// Create connection
$conn = new mysqli(SERVER, USER, PASS, DB);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php 
	//kod za unos podataka u bazu 
	if (!empty($_POST["submit"])) {
		$postBody = $_POST["post_body"];
		$userid = $_SESSION["userid"];
		$privacy = $_POST["privacy"];

		$sqlInsert = "INSERT INTO posts(id, body, date, userid, privacy) VALUES (null, '".$postBody."', now(), '".$userid."', '".$privacy."')";
		$resultInsert = $conn->query($sqlInsert);  //ova linija salje u bazu
		if ($resultInsert === true) /* ili samo (resultInsert) */ {
			echo "Vas komentar je uspesno postavljen. ";
		} else {
			echo "Imate gresku u konekciji. ".$conn->error;
		}
	}	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Social Network</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<nav>
			<div id="navContent">
				<div id="navLeft">Social Network</div>
				<div id="navRight">
					<a href=""> <img id='navImage' src='images/<?php echo $_SESSION['userid']; ?>.jpg'/> </a>
					<a href=""> <?php echo $_SESSION['username']; ?> </a></br>
					<a href="logout.php">Logout</a>
				</div>
			</div>
		</nav>
	</header>
	<main id="timeline">


<?php
	$userid = $_SESSION["userid"];
    $sql = "SELECT posts.id,
		   users.userid,
		   posts.userid,
	       posts.body,
	       posts.date,
	       users.firstname,
	       users.lastname,
	       users.username,
	       posts.privacy
	       FROM posts INNER JOIN
	       users ON posts.userid = users.userid 
	       WHERE posts.privacy = 'public' 
	       OR posts.userid = $userid
	       ORDER BY posts.id DESC ";
$result = $conn->query($sql);

$userid = $_SESSION["userid"];
echo
<<<HTML
<div class='timelineElement timelineElementPost'>
	<img class='profImg' src='images/$userid.jpg'/></br>
	<form action='dashboard.php' method='post'>
		<select name="privacy">
			<option value='public'>Public</option>
			<option value='private'>Private</option>
		</select>
		<input type='text' name='post_body' placeholder='Whats on your mind?'><br>
		<input type='submit' name='submit' value='Post'><br>
	</form>
</div>
HTML;
        
while($row = $result->fetch_assoc()) {
	$img = $row["userid"];
	$firstname = $row["firstname"];
	$lastname = $row["lastname"];
	$username = $row["username"];
	$body = $row["body"];
	$date = $row["date"];
	$privacy = $row["privacy"];

echo
<<<HTML
<div class="comments">
	<img class="profImg" src="images/$img.jpg"/>
	<br>
	<a href="wall.php?username= $username "><span>$firstname</span>
	<span>$lastname</span></a>
	<span>$body</span>
	<span>$date</span>
	<span>$privacy</span>
</div>
HTML;

}

    $conn -> close();
?>
</main>

<script>
   if ( window.history.replaceState ) {
       window.history.replaceState( null, null, window.location.href );
   }
</script>

</body>
</html>