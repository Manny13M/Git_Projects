<?php ?>

<h1>Are you sure you want to delete?</h1>

<?php 
    $wishId = $_GET["wishId"];
?> 


<?php

    //connect
    $dsn = "mysql:host=localhost;dbname=wishes_database;charset=utf8mb4";
    $dbusername = "root";
    $dbpassword = "root";

    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    //prepare
    $stmt = $pdo->prepare("SELECT * FROM `wishes` 
        WHERE `wishes`.`wishId` = $wishId;");

    //execute
    if($stmt->execute() == true)
    {
        $row = $stmt->fetch();
        ?>
        yourName:   <?= $row['yourName']    ?><br>
        friendName: <?= $row['friendName']  ?><br>
        yourName:   <?= $row['yourEmail']   ?><br>
        friendName: <?= $row['friendEmail'] ?><br>
        wish:       <?= $row['wish']        ?><br>
        imgURL:     <?= $row['imgURL']      ?><br>

        <a href="select-wishes.php">No</a>
        
        <form action="process-delete-wish-form.php" method="POST">
            <input type="hidden" name="wishId" value="<?= $row['wishId']?>">
            <input type="submit" value="YES DELETE ME!">
        </form>
        <?php 
    }
    else
    {
        ?><p>cound not show data</p><?php
    }

?>