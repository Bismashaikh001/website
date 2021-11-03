<?php
$conn=mysqli_connect("localhost","root","","e commerce");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
  body{
    height: 370px;
  background-color: #cccccc;
  background-image: radial-gradient(lightgrey, black,grey,black);
  }
.container{
border:solid 4px black;
width:50%;
height:auto;
margin-top:2%;
padding-top:2%;
padding-bottom:3%;
border-style:double;
}
input{
width:95%;
margin-top:3%;
padding:2%;
}
.s1{
background:blue;
color:white;
font-size:16px;
}
h1{
font-family:cormorant garamond; font-size:50px;
text-align:center;
color: white;
}
.n1{
  margin-left: -1.5%;
}
</style>
<body>
<div class="container">
  <h1>Create Account</h1>
 <form method="post" action="sign up.php">
	<input type="text" name="name" placeholder="Name" required="">
	<br>
	<input type="text" name="address" placeholder="Address" required="">
  <br>
  <input type="text" name="email" placeholder="email" required="">
  <br>`
  <input type="text" name="nic" placeholder="Nic" required="" class="n1">
  <br>
  <input type="text" name="number" placeholder="Number" required="">
  <br>
  <input type="password" name="password" placeholder="password" required="">
  <br>
  <input type="submit" name="sub" class="s1" value="sign up">
</form>
</div>
</body>
</html>
<?php
if (isset($_POST['sub'])) {
	# code...
	$name=$_POST['name'];
    $address=$_POST['address'];
      $email=$_POST['email'];
	$nic=$_POST['nic'];
  $number=$_POST['number'];
	$password=$_POST['password'];
$q="INSERT INTO `e commerce`.`user`(`name`, `address`, `email`,`nic`,`number`,`password`) values ('$name', '$address', '$email','$nic','$number','$password')";
mysqli_query($conn,$q);
//locatin website.php
 header("location:website.php");
}
?>