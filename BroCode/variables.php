<!-- Start PHP syntax -->
<!-- <?php
   // echo"I love pizza <br>";
   // echo"Its really good";
   // This is a comment
?> -->

<?php
   // variable = a reusable container that holds data
   // string, integer, float, boolean
   $name = "Roger Code";
   $food = "pizza";
   $email = "fake123@gmail.com";

   $age = 21;
   $users = 2;
   $quantity = 3;

   $gpa = 2.5;
   $price = 4.99;

   $employed = true;
   $online = false;
   $for_sale = true;

   $total = null;
   $total = $quantity * $price;

   echo"You have ordered {$quantity} x {$food}s<br>";
   echo"Your total is: \${$total}<br>";
   echo"Hello {$name}<br>";
   echo"You like {$food}<br>";
   echo"Your email is {$email}<br>";
   echo"You are {$age} years old <br>";
   echo"There are {$users} users online<br>";
   echo"You would like to buy {$quantity} items<br>";
   echo"Your gpa is {$gpa}<br>";
   echo"Your pizza is \${$price}<br>";
   echo"Online status: {$online}";
?>
