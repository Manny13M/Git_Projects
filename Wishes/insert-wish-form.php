<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Assign 3 Insert Wishes</title>
    </head>
    <body>
        <a href="select-wishes.php">See Wishes</a>
        <form action="process-insert-wish-form.php" method="POST">
            Your Name           <input name="yourName"      type="text"><br>
            Your Friend's Name  <input name="friendName"    type="text"><br>
            Your Email          <input name="yourEmail"     type="text"><br>
            Your Friends Email  <input name="friendEmail"   type="text"><br>
            Wish                <input name="wish"          type="text"><br>
            Image URL           <input name="imgURL"        type="text"><br>
                                <input                      type="submit">
    </body>
</html>