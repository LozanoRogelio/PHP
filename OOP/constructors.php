
<?php

use Product as GlobalProduct;

class Product
{
  
   public function __construct(public $name = "Roger", public $price = 100)
   {
     
   }

   public function priceAsCurrency($divisor = 1, $currencySymbol = '$')
   {
      $priceAsCurrency = $this->price / $divisor;
      return $currencySymbol . $priceAsCurrency;
   }
}

$product = new Product(price: 100);
print $product->name . PHP_EOL;
print $product->price . PHP_EOL;

?>