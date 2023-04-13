<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="sanitize_validate.php" method="post">
      username:<br>
      <input type="text" name="username">
      age:<br>
      <input type="text" name="age">
      email:<br>
      <input type="text" name="email">
      <input type="submit" name="login">
   </form>
</body>
</html>

<?php
   // if(isset($_POST["login"])) {
   //    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

   //    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

   //    $email = filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL);

   //    echo "Hello {$username}";
   //    echo "You are {$age} years old";
   // }

   $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
   $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_INT);

?>