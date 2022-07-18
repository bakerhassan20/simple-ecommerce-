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
$sql="select * from users where username=?";
$q=$db->prepare($sql);
$q->execute( [$_POST["username"] ] );
if($q->rowcount()==0){

$sql="insert into users (username,password,first_name,last_name,address,mobile)
values('".$_POST["username"] ."',
'".$_POST["password"] ."',
'".$_POST["first_name"] ."',
'".$_POST["last_name"] ."',
'".$_POST["address"] ."',
'".$_POST["mobile"] ."')";


$db->exec($sql);


header("Location:login.php");

}
else{
      echo"<h2 class='massege'>this username is use try agein</h2>";
}

}


?>





<!doctype html>
<html lang="en">
<head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="x-ua-compatible" content="ie=edge" />
         
         <link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" type="text/css"href="fun/css/all.css">
      <title>Sign up</title>

</head>
<body>

<a href="login.php"class="login">LoGin</a>



 <div class="z6">
<h2 class="z3">No<span class="z5">Name</span></h2>
</div>


<form action="" method="post"onsubmit="return click7()"class="a1">

<p id="a2">Sign up</p>

<div id="a3">
<input type="text" name="first_name" id="a4"placeholder="First Name"onclick="click2()" autocomplete="off">
<input type="text" name="last_name" id="a5"placeholder="Last Name"onclick="click3()"autocomplete="off">
<button id="but1"onclick="click1()"type="button">next</button>
</div>


<div id="a6">
<input type="text" name="address" id="a7"placeholder="Address"onclick="click5()"autocomplete="off">
<input type="text" name="mobile" id="a8"placeholder="Mobile"onclick="click6()"autocomplete="off">
<button id="but2"onclick="click10()"type="button">previous</button>
<button id="but3"onclick="click20()"type="button">next</button>
</div>


<div id="a9">
<input type="username" name="username" id="a10"placeholder="Username"onclick="click8()"autocomplete="off">
<input type="password" name="password" id="a11"placeholder="Password"onclick="click9()"autocomplete="off">
<button id="but4"onclick="click11()"type="button">previous</button>
<button id="but5"type="submit">register</button>
</div>

</form>  


<div class="icons">
<i class="fas fa-circle" id="icon1"></i>
<i class="fas fa-circle" id="icon2"></i>
<i class="fas fa-circle" id="icon3"></i>
</div>

<script src="js/index.js"></script>
</body>
</html>