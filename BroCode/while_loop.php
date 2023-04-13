<!-- while loop = do some code infinitely while some condition remains true -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="while_loop.php" method="post">
      <input type="submit" name="stop" value="stop">
   </form>
</body>
</html>
<?php
   $seconds = 0;
   $running = true;

   while($running) {
      // wait 1 second
      if(isset($POST["stop"])) {
         $running = false;
      } else {
         $seconds++;
      echo $seconds . "<br>";
      }
   }

?>