<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
</head>
<body>

<div class="jumbotron text-center">
	<h2>Vaši podaci su uspešno ubačeni u bazu!</h2>
	<a href="index.html"><input type="submit" value="Back to Form!" class="btn btn-info"></a>
</div>

<?php
	// prvo ova strana mora da biti povezana sa connect.php stranom
	// require nije funkcija nego izjava
	require "connect.php";

	//ako su nam poslati podaci sa pocetne strane (forme koju popunjava user) onda ih ubaci u varijable
	// $_POST je arrey
	if ($_POST["name"] && $_POST["city"] && $_POST["nation"]){
		$name = $_POST["name"];
		$city = $_POST["city"];
		$nation = $_POST["nation"];

	//ubaci u tabelu fudbalski-klubovi u kolone name, city i nationality vrednosti varijabli $name, $city i $nation
		$query = "INSERT INTO `fudbalski-klubovi` (`name`, `city`, `nationality`) VALUES ('$name', '$city', '$nation')";

	// vrsi upit u bazi, uzima varijablu $connectionToDatabase iz strane connect.php i varijablu $query sa ove strane
		mysqli_query($connectionToDatabase, $query);

	}else{
		echo "Nisu uneta sva polja!";
	}
?>

<script src="main.js"></script>
</body>
</html>
