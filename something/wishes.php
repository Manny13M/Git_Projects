<!-- must use the following link to access on web http://localhost:8888/Wishes_And_Database/wishes/select-wishes.php -->

<?php ?>

<a href="insert-wish-form.php">Insert record</a>

<?php 
    $wishId = $_GET["wishId"];

    //connect to database
	$dsn        = "mysql:host=localhost;dbname=wishes_database;charset=utf8mb4";
	$dbusername = "root";
	$dbpassword = "root";
	$pdo = new PDO($dsn, $dbusername, $dbpassword);

    //prepare
	$stmt = $pdo->prepare("SELECT * FROM `wishes`;");

	//execute
	if($stmt->execute() == true)
    {
        //If wish id is passed into the URL all data for that wishId will be displayed
        if(isset($wishId))
        {
            //prepare
            $stmt = $pdo->prepare("SELECT * FROM `wishes` 
            WHERE `wishes`.`wishId` = $wishId;");

            if($stmt->execute() == true)
            {
                $row = $stmt->fetch();
                ?><br>
                yourName:   <?= $row['yourName'] ?><br>
                friendName: <?= $row['friendName'] ?><br>
                yourName:   <?= $row['yourEmail'] ?><br>
                friendName: <?= $row['friendEmail'] ?><br>
                wish:       <?= $row['wish'] ?><br>
                imgURL:     <?= $row['imgURL'] ?><br>
                <a href="select-wishes.php">See wishes</a>
                <?php
            }
        }

        //If wishId is not passed into the URL, wishId and wish will be displayed
        else
        {?>
            <ul><?php
                while($row = $stmt->fetch()) 
                {
                    ?>  <li>    <?=$row["wishId"]?> -
                                <?=$row["wish"]?> <br>
                        <a href="edit-wish-form.php?wishId=<?= $row["wishId"] ?>">Update</a>
                        <a href="delete-wish-form.php?wishId=<?= $row["wishId"] ?>">Delete</a> 
                        <br>
                        <br>
                        </li><?php
                }
                ?>
            </ul><?php
        }

	}

    else
    {
		?><p>Oops something went wrong</p><?php
	}
 
?>
