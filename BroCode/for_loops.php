<!-- for loop = repeat some code a certain # of times -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="for_loops.php" method="post">
      <label>Enter a number to count to:</label>
      <input type="text" name="counter">
      <input type="submit" value="start">
   </form>
</body>
</html>
<?php
   $counter = $_POST["counter"];

   for($i = 1;$i <= $counter;$i++) {
      echo $i ."<br>";
   }

   // for($i = 0;$i <= 20;$i++) {
   //    echo $i . "<br>";
   // }


?>