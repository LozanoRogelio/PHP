
<?php

use Product as GlobalProduct;

class Product
{
   public $name;
   public $price;

   public function __construct($name = 'Roger', $price = 40)
   {
      $this->name = $name;
      $this->price = $price;
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