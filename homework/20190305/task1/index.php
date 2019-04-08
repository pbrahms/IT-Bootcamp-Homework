<!DOCTYPE html>
<html>
<head>
	<title>Converter</title>
</head>
<body>

	<form action="index.php" method="POST">
		<input type="number" name="number">
		<br><br>
		From:
		<select name="from">
			<option value="eur">EUR</option>
			<option value="rsd">RSD</option>
			<option value="usd">USD</option>
			<option value="chf">CHF</option>
		</select>
		To:
		<select name="to">
			<option value="eur">EUR</option>
			<option value="rsd">RSD</option>
			<option value="usd">USD</option>
			<option value="chf">CHF</option>
		</select>
		<br><br><br>
		<input type="submit" name="convert" value="Convert">
		<br><br>
		<br><br>
	</form>

<section>

<?php

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		$number = $_POST['number'];
		$refeur;
		

		if (!empty($_POST['number'])) {

			switch ($_POST['from']) {
				case 'eur':
					$refeur = $number;
					break;
				case 'rsd':
					$refeur = $number / 118.02;
					break;
				case 'usd':
					$refeur = $number / 1.13;
					break;
				case 'chf':
					$refeur = $number / 1.13;
					break;
			}

			switch ($_POST['to']) {
				case 'eur':
					echo $refeur;
					break;
				case 'rsd':
					echo $refeur * 118.02;
					break;
				case 'usd':
					echo $refeur * 1.13;
					break;
				case 'chf':
					echo $refeur * 1.13;
					break;
			}
		}
	}
?>


</section>



</body>
</html>




