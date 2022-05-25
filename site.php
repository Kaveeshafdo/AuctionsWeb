<html>
    <head>
        <title></title>
    </head>
        <body>
            <?php
            $vimname = "lakshan kaluarachchi";
            $vimname[0] = "k";

            echo str_replace("kakshan","vimukthi",$vimname);
            echo substr($vimname, 8, 4);
            echo floor(3.9);
            $friend = array("vimukthi", "kaveesha", "ashan");
            echo count($friend);
            echo "$friend[0]";


?>



                      <form action="site.php" method="post">
                            Name : <input type="text" name="username">

                            <input type="number" name = "num1">
                            <input type="number" name = "num2">
                            <input type = "submit">


                      </form>
<br>

Your Name is
<br>
<?php

    echo $_POST["username"];
    echo $_POST["num1"];


 ?>

        </body>
</html>
