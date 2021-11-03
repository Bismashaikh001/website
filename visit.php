<?php
$conn=mysqli_connect("localhost","root","","e commerce");
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
<style type="text/css">
	*{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
.s1{
	color: white;
	background-color: black;
	font-size: 20px;
}
.s1:hover{
	color: white;
	background-color: blue;
}
	.container{
		width: 100%;
		height:60vh;

padding-top:3%;
padding-bottom:3%;
}
#container{
	width: 95%;
	margin: auto;
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
		float: right;

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
		.cart{
		width: 40%;
		height: 50vh;
		float:left;
		margin:3% 0% 0% 2%;
		background-color:  white;
	}
	.cart1 h2{
		color: black;
		padding: 0px 0px 0px 5px;
	}
	.cart1{
	
		width: 40%;
		height: 55vh;
		float:right;
		margin:3% 2% 0% 0%;
		background-color:  white;
	}
	.cart img{
		width: 100%;
		height: 100%;
	}
	.cart1 input{
	margin:2% 5% 0% 5%;	
	width: 90%;
	}
	.container h2{
		color: white;
		padding: 0% 0% 0% 2%;
	}
	.cart1 button{
		font-size: 20px;
	width: 20%;
	margin: 0% 0% 0% 40%;
	color: white;
background-color: black;

	}
	.cart1 button:hover{
color: white;
background-color: blue;
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
	<h2>Visa is the world's second largest</h2> <h2>card payment organisation debit and </h2> <h2> cradit cards combined</h2>

	<div class="cart">
		<img src="maxresdefault.jpg"></div>
	<div class="cart1">
		<h2 style="color: black; padding: 0px 0px 0px 18px;">Payment Details</h2>
		<form method="post" action="visit.php">
		<input type="text" name="name" placeholder="Card Name" required="">
		<br>
		<input type="text" name="number" placeholder="card Number" required="">
		<br>
		<input type="date" name="date" placeholder=" Expiration Date" required="">
        <br>
        <input type="text" name="amount" placeholder="payment amount" required="">
		<br>
		<input type="submit" name="sub" value="pay" class="s1"></form>
		<br>
		<a href="signin.php"><button>logout</button></a>
	</div>
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
<?php
if (isset($_POST['sub'])) {
	# code...
	$cardname=$_POST['name'];
    $cardnumber=$_POST['number'];
     $date=$_POST['date'];
	$paymentamount=$_POST['amount'];
$q="INSERT INTO `e commerce`.`checkout` (`name`, `number`, `date`,`amount`) values ('$cardname', '$cardnumber', '$date','$paymentamount')";
mysqli_query($conn,$q);
//locatin website.php
}
?>
