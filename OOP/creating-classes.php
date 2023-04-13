<?php

class Product
{
   public $name = 'soap';
   public $price = 5;
}



$soapObject = new Product();
print $soapObject->name . "<br>";
print $soapObject->price . "<br>";
$soapObject->name = 'toothpaste';
$soapObject->price = 2;
print $soapObject->name . "<br>";
print $soapObject->price . "<br>";
// Creating class
// $product = new Product();
// $anotherProduct = new Product();
// var_dump($product);
// var_dump($anotherProduct);
?>