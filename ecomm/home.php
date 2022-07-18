
<?php
    session_start();

    if( !isset($_SESSION["user"]) )
    {
        header("Location:login.php");
    }
    
    include("database.php");
    
        
    $sql = "select * from categories";
    $q = $db ->prepare( $sql );
    $q->execute( [] ) ;
    $categories = $q->fetchAll();

    $sql = "select * from products";
    $q = $db->prepare( $sql );
    $q->execute( [] ) ;
    $products = $q->fetchAll();

    if( isset($_POST["product_id"]) )
    {
        $_SESSION["cart"][ $_POST["product_id"] ][0] = $_POST["product_id"] ;
        $_SESSION["cart"][ $_POST["product_id"] ][1] = $_POST["product_name"] ;
        $_SESSION["cart"][ $_POST["product_id"] ][2] = $_POST["price"] ;
    }

?>


<!doctype html>
<html lang="en">
<head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="x-ua-compatible" content="ie=edge" />
         
         <link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" type="text/css"href="fun/css/all.css">
      <title>Home</title>

</head>
<body>

 <section id="home">

 <div class="z2">
 <div class="z6">
 <i class="fas fa-list-alt"id="z7"onclick="click1()"></i>
 <h2 class="z3">No<span>Name</span></h2>
 
 </div>
<div id="z4">
<a href="#home">Home</a>
<a href="#Books">Books</a>
<a href="#Magazines">Magazines</a>
<a href="#Kids">Kids</a>
<a href="#Contact">Contact</a>
<a href="logout.php">Logout</a>
</div>

</div>


<article class="sear">         <!--button  للبحث-->

<input type="search" name="search" id="search"placeholder="search">
<button type="search" id="searchbut"><i class="fas fa-search"></i></button>
</article>

</section>



              <!--button للصعود لاعلي-->

<i class="fas fa-arrow-alt-circle-up" id="q1"></i>


<div class="con">
<h1 class="head">اقتباسات<h1>

<div class="linehover"></div>
</div>



<section class="info">
<div class="icos">
<i class="fab fa-reacteurope"></i>
<h3>"Literacy is a bridge from misery to hope."</h3>
</div>

<div class="icos">
<i class="fas fa-book"></i>
<h3>"Books are a uniquely portable magic." </h3>
</div>

<div class="icos">
<i class="fas fa-pen"></i>
<h3>"People say that life is the thing, but I prefer reading." </h3>
</div>
</section>




<div class="line"></div>










<section id="Books">

<div class="x2">
<select name="sele1" id="x3">
<option value="">All categories</option>
<?php
     foreach ($categories as $cat) {
    echo  '<option value="'.$cat["id"].'">'.$cat["name"].'</option>';                   
     }
?>
</select>
<a href="cart.php"id="x7"><i class="fas fa-cart-arrow-down"></i>Cart(
                    <?php 
                        if( isset($_SESSION["cart"]))
                        {
                            echo count($_SESSION["cart"]);
                        }
                        else{
                            echo "0";
                        } 
                    ?>
                    )</a>
</div>



   
    <div class="x4"> 
<?php

                foreach ($products as $product) {
                    echo '

                    <div class="product cat'.$product["cat_id"].'">
                        <form method="post" action=""class="x5" id="c11">
                            <input type="hidden" name="product_id" value="'.$product["id"].'">
                            <input type="hidden" name="product_name" value="'.$product["name"].'">
                            <input type="hidden" name="price" value="'.$product["price"].'">
<div class="x11">
<img src="img/'.$product["id"].'.jpg"class="x20">
<div class="x6">
<h2>'.$product["price"].'$</h2>
<i class="fa fa-arrow-right" id="x8"></i>
</div>
</div>
<div class="x8">
<h3 class="x9">'.$product["name"].'</h3>
<button class="x10"type="supmit">add</button>
</div>



</form>

</div>


';                   
}

?>

</div>
</section>

<!--***************************************************************** -->
<div class="line"></div>
<section class="textsection">

<div class="conphoto">
    <img src="img/8.jpg">

</div>
<div class="context">
<h3>Reading has a lot of benefits.</h3>
<p>It always helps improve your vocabulary and a person who is an avid reader always finds the best expression to let others know what they feel. Reading a good book improves one’s imagination and creativity</p>
</div>



</section>



<form action="" method="post"onsubmit="return ceack()">
<section class="contact">

<div class="headico">
<i class="fas fa-arrow-alt-circle-up"></i>
<h1>Contact</h1>
</div>

<div class="inputs">
<input type="text" name="firstname" id="firstname" placeholder="FirstName"onclick="ceack1()">
<input type="text" name="lastname" id="lastname"placeholder="LastName"onclick="ceack2()"><br>
<input type="email" name="email" id="email" placeholder="Email"onclick="ceack3()"><br>
<textarea name="massage" id="massage" cols="30" rows="10"placeholder="Massage" onclick="ceack4()"></textarea><br>
<input type="submit" value="send massage" id="sendmassage">
</div>
</section>

</form>

<section class="end"id="Contact">  
            <div class="icons5">
               <a href="https://www.facebook.com/profile.php?id=100009918422023">
                   <i  class="fab fa-facebook-square"></i></a><br>
               
               
                   <a href="https://www.sarahau.com/w/763737">
                       
                       <i  class="fas fa-mail-bulk"></i></a><br>
           
                       <a href="https://www.linkedin.com/in/abo-baker-20359319a">
           
                           <i  class="fab fa-linkedin"></i></a><br>
               
                           <a href = "mailto:abobakerhassan60@gmail.com?subject =hello,clint">
                              
                           <i class="fas fa-envelope"></i></a><br>
           </div>
           
           <div class="icon6">
               <p>Copyright &copy; 2020. All Right Reserved</p>
           
           </div>
           </section> 

<!--***************************************************************** -->

<script src="js/jquery.js"></script>
<script src="js/home.js"></script>
</body>
</html>

      