<?php 

    $wishId = $_POST["wishId"];
    //DELETE the specified record

    //connect to database
	$dsn        = "mysql:host=localhost;dbname=wishes_database;charset=utf8mb4";
	$dbusername = "root";
	$dbpassword = "root";
	$pdo = new PDO($dsn, $dbusername, $dbpassword);

    //prepare
	$stmt = $pdo->prepare("DELETE FROM `wishes` 
        WHERE `wishes`.`wishId` = $wishId");

	//execute
	if($stmt->execute() == true)
    {
        ?>
        <p>Record Deleted 
            <a href="select-wishes.php">See Wishes</a>
        </p> <?php
    }
    else
    {
        ?> <p>Could not delete record</p><?php
    }
?>