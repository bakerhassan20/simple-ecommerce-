<?php

    session_start();

    if( !isset($_SESSION["user"]) )
    {
        header("Location:login.php");
    }
        
    include("database.php");

    if( isset( $_POST["checkout"] ) )
    {
        foreach ($_SESSION["cart"] as $p) {
            $sql = "update products set quantity=quantity-1 where id = " . $p[0] ;
            // echo $sql . "<br>";
            $db->exec($sql);
        }
        unset($_SESSION["cart"]);
        header("Location:home.php");

}

?>







<!doctype html>
<html lang="en">
<head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="x-ua-compatible" content="ie=edge" />
         
         <link rel="stylesheet" href="css/cart.css">
<link rel="stylesheet" type="text/css"href="fun/css/all.css">
<title>Cart</title>

</head>
<body>

<section class="v4">
<div class="v1">
<a href="home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
<a href="logout.php"><i class="fas fa-sign-out-alt"></i>LoGout</a>
</div>

<h2 class="v2"><span>C</span>art</h2>




</section>



<table>



<tr class="v5">
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    
</tr>

<?php




            if( isset( $_SESSION["cart"] ) )
            {
   
    foreach ($_SESSION["cart"] as $p) {
        echo "<tr>";
        echo '<td>'.$p[0].'</td>';
        echo '<td>'.$p[1].'</td>';
        echo '<td>'.$p[2].'</td>';
        echo "</tr>";
    }
  
?>


</table>

<form action="" method="post">
                <input type="hidden" name="checkout">
                <button class="v10">Check Out</button>
            </form>
            <?php
            }
            ?>




<script src="js/cart.js"></script>
</body>
</html>