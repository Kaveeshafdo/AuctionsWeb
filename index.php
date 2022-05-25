<?php
  require_once('service/userservice.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
  //  include 'header.html';
    $userService = new UserService();
    $userService->__constructWithoutId('Kaveesha', 'Kaveesh@gmail.com', '1234', '1999/06/11', '0763490745', 'm');
    $userService->insertUser();

    ?>
</body>

</html>