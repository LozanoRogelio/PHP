<!-- associative array = An array made of key=>value pairs
countries => capitals
id => username
item => price -->

<?php
   $capitals = array("USA"=>"Washington",
                  "Japan"=>"Kyoto",
);
   $capitals["USA"] = "Las Vegas";
   // remove last
   array_pop($capitals);
   // shift
   array_shift($capitals);
   // get keys
   $keys = array_keys($capitals);
   $values = array_values($capitals);
   // flips keys and values
   $flip_array = array_flip($capitals);

   foreach($capitals as $key => $value) {
      echo "{$key} {$value} <br>";
   }
?>