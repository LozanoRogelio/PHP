<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <!-- <form action="math_functions.php" method="post">
      <label>x:</label>
      <input type="text" name="x">
      <label>y:</label>
      <input type="text" name="y">
      <label>z:</label>
      <input type="text" name="z">
      <input type="submit" value="total">
   </form> -->
   <form actio="math_functions.php" method="post">
      <label>radius:</label>
      <input type="text" name="radius">
      <input type="submit" name="calculate">
   </form>
</body>
</html>

<?php
   // $x = $_POST["x"];
   // $y = $_POST["y"];
   // $z = $_POST["z"];

   // $total = null;

   // $total = abs($x);
   // $total = round($x);
   // $total = floor($x);
   // $total = ceil($x);
   // $total = pow($x, $y);
   // $total = max($x, $y, $z);
   // $total = min($x, $y, $z);
   // $total = pi();
   // $total = rand(1, 100);

   // echo $total;

   $radius = $_POST["radius"];
   $circumference = null;
   $area = null;
   $volume = null;

   $circumference = 2 * pi() * $radius;

   $circumference = round($circumference, 2);

   $area = pi() * pow($radius, 2);
   $area = round($area, 2);

   $volume = 4/3 * pi() * pow($radius, 3);
   $volume = round($volume, 2);

   echo "Circumference = {$circumference}cm <br>";
   echo "Area = {$area}cm^2 <br>";
   echo"Volume = {$volume}cm^3 <br>";
?>