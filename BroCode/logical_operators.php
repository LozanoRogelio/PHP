<!-- Logical operators = combine conditional statements
if (condition1 && condition2)

&& = true if both conditions are true
|| = true if at least one condition is true
! = true if false. false if true -->

<?php
   $temp = 100;
   $cloudy = true;

   if($temp >= 0 && $temp <= 30) {
      echo"The weather is good";
   } else {
      echo"The weather is bad<br>";
   }

   if(!$cloudy) {
      echo"Its sunny";
   } else {
      echo"Its cloudy";
   }

?>