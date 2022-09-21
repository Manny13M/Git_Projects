<?php

    $wishId = $_GET["wishId"];

?>

<h1>Edit records</h1>

<?php

    //connect
    $dsn        = "mysql:host=localhost;dbname=wishes_database;charset=utf8mb4";
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
        <!-- fName:<?= $row['fname'] ?><br>
        lName:<?= $row['lname'] ?><br>
        dob:<?= $row['dob'] ?><br> -->
        <a href="select-wishes.php">No</a>
        
        <form action="process-edit-wish-form.php" method="POST">
                Your Name           <input name="yourName"      type="text"     value="<?= $row['yourName']     ?>"><br>
                Your Friend's Name  <input name="friendName"    type="text"     value="<?= $row['friendName']   ?>"><br>
                Your Email          <input name="yourEmail"     type="text"     value="<?= $row['yourEmail']    ?>"><br>
                Your Friends Email  <input name="friendEmail"   type="text"     value="<?= $row['friendEmail']  ?>"><br>
                Wish                <input name="wish"          type="text"     value="<?= $row['wish']         ?>"><br>
                Image URL           <input name="imgURL"        type="text"     value="<?= $row['imgURL']       ?>"><br>
                                    <input name="wishId"        type="hidden"   value="<?= $row['wishId']       ?>">
                                    <input                      type="submit"                                      >
        </form>
        <?php
    }
    else
    {
        ?> <p>Could no get data</p><?php
    }

?>

