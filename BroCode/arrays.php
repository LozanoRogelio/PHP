<!-- array = "variable" which can hold more than one value at a time  -->
<?php

   $foods = array("apple","orange","banana","coconut");
   // echo $foods[0];

   $foods[0] = "pineapple";

   // add to end
   // array_push($foods, "pineapple");
   // array_pop($foods);
   // array_shift($foods);
   // array_reverse($foods);
      // echo count($foods);

   // list all array items
   foreach($foods as $food) {
      echo $food . "<br>";
   }
?>