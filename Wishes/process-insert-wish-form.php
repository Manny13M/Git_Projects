<?php 

    //Recieve the variables
    $yourName       = $_POST["yourName"];
    $friendName     = $_POST["friendName"];
    $yourEmail      = $_POST["yourEmail"];
    $friendEmail    = $_POST["friendEmail"];
    $wish           = $_POST["wish"];
    $imgURL         = $_POST["imgURL"];

    //connect to database
	$dsn = "mysql:host=localhost;dbname=wishes_database;charset=utf8mb4";
	$dbusername = "root";
	$dbpassword = "root";
	$pdo = new PDO($dsn, $dbusername, $dbpassword);

    //prepare
	$stmt = $pdo->prepare("INSERT INTO `wishes` (`wishId`, `yourName`, `friendName`, `yourEmail`, `friendEmail`, `wish`, `imgURL`) 
        VALUES (NULL, '$yourName', '$friendName', '$yourEmail', '$friendEmail', '$wish', '$imgURL');");

	//execute
	if($stmt->execute() == true)
    {
		?><p>Your record was inserted</p><?php
	}
    else
    {
		?><p>Oops something went wrong</p><?php
	}
?>

<a href="select-wishes.php">See Wishes</a>