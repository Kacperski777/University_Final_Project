<!DOCTYPE html>
<html>
<head>
	<title>Security Check</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Orbitron:wght@500&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
	<link rel="icon" href="img/icon.png">
</head>



<body>




<div class="container">
<div class="col-lg-12 center">
<h1 class="center"> LOGIN </h1>
<center><img class="center img" src="img/icon.png" alt=""></center>
<form class="center" action="includes/login.inc.php" method="post">
<input class="center" type="text" name="uid" placeholder="User...">
<br>
<br>
<input class="center" type="password" name="pwd" placeholder="Password...">
</br>
<br>
<button class="btn btn-danger submit" type="submit" name="submit">LOGIN</button>
</br>
</div>
</div>





<?php
echo "<link rel='stylesheet' type='text/css' href='css/index.css'>";
	if(isset($_GET["error"])){
		if($_GET["error"] == "emptyinput"){
			echo "<p class='error'>Fill in all the fields</p>";
		}
		else if($_GET["error"] == "wronglogin"){
			echo "<p class='error'>Incorrect login information</p>";
		}
	}

?>


</body>













</html>
