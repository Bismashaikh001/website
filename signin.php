<?php
session_start();
if(isset($_POST['sub']))
{
	$conn=mysqli_connect("localhost","root","","e commerce");
	$name=$_POST['name'];
	$pw=$_POST['password'];
	$q="select * from user where name='$name' and password='$pw'";
	$res=mysqli_query($conn,$q);
	if(mysqli_num_rows($res)>0)
	{
       $_SESSION['ecom']=$name;
       header("location:website.php");
	}
}////locatin website.php
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	#container{
	width: 95%;
	margin: auto;
	}

	*{
		padding:0;
		margin: 0;
		box-sizing: border-box;
	}
	.header{
		width: 100%;
		height: 12vh;
		background: grey;
	}
	.nav {
		width: 100%;
		height: 5vh;
		background-color: #5d851c;
		color: white;
	}
	#containerr{
		width: 100%;
		height: 590px;
  background-color: #cccccc;
  background-image: radial-gradient(lightgrey, black,grey,black);
	}
	.nav li:hover{
		color: black;
	}
	.nav a{
		color: white;
	}.header img{
		width: 15%;
		height: 7vh;
		margin: 1% 0% 0% 4%;
	}
	.nav ol{
		list-style:  none;

	}
	.nav ol li{
	margin: 0% 3% 0% 3%;
	float: left;
	font-size: 23px;
	cursor: pointer;
	text-transform:uppercase;
	}
	.nav .d-flex{
		border: solid 1px black;
		float: right;

	}
	
.container{
width:50%;
height:auto;
padding-top:3%;
padding-bottom:3%;

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
h5 a{

margin:3%;
color: white;
}
h5:hover{

color: blue;
cursor: pointer;
}
.icon{
		width: 20%;
		float: right;
		color: white;
		margin:1.5% 0% 0% 0%;
	}
	.icon i{
		padding: 0% 0% 0% 3%;
		font-size: 25px;
		cursor: pointer;
	}
	.icon i:hover{
		color:black;
	}
	.icons{
		color: black;
	}
	.footer{
		width: 100%;
		height: 22vh;
		background-color: black;
		margin: 3% 0% 3% 0%;
		padding: 1% 0% 1% 0%;
	}
		.footer img{
		width: 10%;
		height: 7vh;
		margin: 2% 0% 0% 4%;
	}
	.navlist{
		color: white;
		width: 30%;
		float: right;
		margin: 3% 3% 3% 3%;
	}
	.navlist ol{
		list-style: none;
	}
	.navlist ol li{
	margin: 0% 3% 0% 3%;
	float: left;
	font-size: 15px;
	text-transform:uppercase;
	}
	.navlist li:hover{
		cursor: pointer;
		color: green;
	}
	.icons{
		width: 100%;
		height: auto;
		float: left;
		padding: 2% 0% 0% 20%;
		margin:1.5% 0% 0% 0%;
	}
	.icons i{
		padding: 0% 0% 0% 3%;
		font-size: 20px;
		cursor: pointer;
		color: white;
	}
	.icons i:hover{
		color:green;
	}
</style>
<body>
	<div id="container">
	<div class="header">
		<img src="logo.PNG">
		<div class="icon">
			<i class="fa fa-facebook "></i>
			<i class="fa fa-instagram"></i>
			<i class="fa fa-youtube"></i>
			<i class="fa fa-whatsapp"></i>
			<i class="fa fa-skype"></i>
		</div>
	</div>
	<div class="nav">
		<ol>
			<li>home</li>
			<li>about</li>
			<li>gallery</li>
			<li>contact</li>
			<a href="http://localhost/e commerce/signin.php"><li>signin</li></a>
			<a href="http://localhost/e commerce/sign%20up.php"><li>signup</li></a>
		</ol>
	</div>
	<div id="containerr">
<div class="container">
	<h1>SIGN IN</h1>
 <form method="post" action="signin.php">
	<input type="text" name="name" placeholder="username" required="">
	<br>
    <input type="password" name="password" placeholder="password" required="">
    <br>
    <input type="submit" name="sub" class="s1" value="sign in">
</form>
<h5><a href="http://localhost/e%20commerce/sign%20up.php">Create Account</a></h5>
</div>
</div>
	<div class="footer">
				<img src="logo.PNG">
				<div class="navlist">
<ol>
			<li>home</li>
			<li>about</li>
			<li>gallery</li>
			<li>contact</li>
</ol>			
<div class="icons">
			<i class="fa fa-facebook"></i>
			<i class="fa fa-instagram"></i>
			<i class="fa fa-youtube"></i>
			<i class="fa fa-whatsapp"></i>
			<i class="fa fa-skype"></i>
		</div>		
				</div>

	</div>
</div>
</body>
</html>
