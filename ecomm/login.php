

<style>

.massege{
      text-align: center;
        position: relative;
   z-index:100;
        top:265px;
    left: 50%;
        transform: translate(-50%,-50%);
        font-size:20px;
        color: rgb(238, 12, 12);}
</style>




<?php


if(isset($_POST["username"]))


{

include("database.php");
$sql="select*from users where username=? and password=?";


$q= $db->prepare($sql);

$q->execute( [$_POST["username"], $_POST["password"]] );
if($q->rowcount()==1){

session_start();
$_SESSION["user"]=$q->fetch();
header("Location:home.php");

}
else{
      echo"<h2 class='massege'>failed to login</h2>";
}

}

?>






<!doctype html>
<html lang="en">
<head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="x-ua-compatible" content="ie=edge" />
         
         <link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" type="text/css"href="fun/css/all.css">
      <title>login</title>

</head>
<body>
<a href="index.php"class="register">Sign up</a>

<div class="z6">
<h2 class="z3">No<span class="z5">Name</span></h2>
</div>

<form action="" method="post"onsubmit="return click7()"class="a1">

<p id="a2">Login</p>
<div id="a9">

<input type="username" name="username" id="a10"placeholder="Username"onclick="click8()"autocomplete="off">
<input type="password" name="password" id="a11"placeholder="Password"onclick="click9()"autocomplete="off">
<button id="but5"type="submit">login</button>
</div>
</form>  

<script src="js/login.js"></script>
</body>
</html>



