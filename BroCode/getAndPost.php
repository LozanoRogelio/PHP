<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="getAndPost.php" method="post">
      <label>quantity</label><br>
      <input type="text" name="quantity">
      <input type="submit" value="total">
   </form>
</body>
</html>
<?php
   $item = "pizza";
   $price = 5.99;
   $quantity = $_POST["quantity"];
   $total = $quantity * $price;

   echo"You have order {$quantity} x {$item}/s";
   echo"Your total is: \${$total}";



   // echo "{$_GET["username"]} <br>";
   // echo "{$_GET["password"]}<br>";
   // echo "{$_POST["username"]} <br>";
   // echo "{$_POST["password"]}<br>";


   // $_GET, $_POST = special variables used to collect data from an HTML form data is sent to the file in the action attribute of <form>
   //    <form action="some_file.php" method="get">

   // $_GET = Data is appended to the url
   //    NOT SECURE
   //    char limit
   //    Bookmark is possible w/ values
   //    GET requests can be cached
   //    Better for a search page

   // $_POST = Data is packaged inside the body of the HTTP request
   //    MORE SECURE
   //    No data limit
   //    Cannot bookmark
   //    GET requests are not cached
   //    Better for submitting credentials



?>