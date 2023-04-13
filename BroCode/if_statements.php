<?php
   // if statement = if some condition is true, do something
   //    if condition is false, don't do it

   // $age = 15;
   //  if($age >= 18) {
   //    echo"You may enter";
   //  } elseif ($age <= 0) {
   //    echo"wtf you were just born";
   //  } else {
   //    echo"You may NOT enter";
   //  }

   $hours = 50;
   $rate = 15;
   $weekly_pay = null;

   if($hours <= 0) {
      $weekly_pay = 0;
   }
   elseif($hours <= 40) {
      $weekly_pay = $rate * $hours;
   } else {
      $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
   }

   echo"You made \${$weekly_pay} this week";
?>