<?php
session_start();
if(isset($_SESSION['ecom']))
{    
	$i=$_GET['i'];
    $conn=mysqli_connect("localhost","root","","e commerce");
    $q="select * from product  where id='$i'";
	$res=mysqli_query($conn,$q);
	$row=mysqli_fetch_assoc($res);
	$q="INSERT INTO `e commerce`.`cart`(`quanity`,`price`,`productid`,`userid`) values ('1','".$row['price']."','$i';'".$_SESSION['ecom']."')";
mysqli_query($conn,$q);
}
else{
	
	header("location:signin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
</head>
<style type="text/css">
	*{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
	.container{
		
		width: 100%;
		height:60vh;
padding-top:3%;
padding-bottom:3%;

		
	}
	.cart{
		width: 20%;
		height: 50vh;
		float:left;
		margin:10% 3% 0% 9%;
		background-color:  white;
	}
	.cart1{
	
		width: 100%;
		height: 50vh;
		float:left;
		padding:2% 0% 0% 4%;
		background-color:  white;
		border-radius: 30px;
	}
	#cart1{
		
		width: 25%;
		height: 40vh;
		float:left;
		margin:10% 3% 0% 4%;
		background-color:  white;
	
		border-radius: 30px;
		
	}
	.cart img{
width: 100%;
height: 50vh;
	}
	.cart1 h3{
		margin:2% 0% 0% 4%;
		padding:2% 0% 0% 4%;
		font-size: 20px;
	}
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
	
.cart1 input{
width: 95%;
margin:1% 1.5% 1% 2%;
}
.cart1 h2{
font-size: 20px;
text-align: center;
}
.cart1 .s1{
	margin:4% 1.5% 1% 2%;

}
.cart1 .s1:hover{
background-color: blue;
color: white;
}
.star{
	padding: 2% 0% 0% 7%;
}
.cart1 button{
	margin: 15% 0% 0% 16%;
	padding: 2%;
}
.cart1 button:hover{
cursor: pointer;
background-color: blue;
color: white;

}
.cart:hover{
	-ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1); /* Safari 3-8 */
  transform: scale(1.3); 
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
	
<div class="cart"><img src="<?php echo $row['image'] ?>">
</div>
<div id="cart1">
<div class="cart1">
	
<h3>Product Name:<?php echo $row['name']; ?></h3>
 <div class="star">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
		</div>
<h3>price:<?php echo $row['price']; ?></h3>
<h3>Available: IN STOCK <i class="fa fa-check-square-o" aria-hidden="true"></i>
</h3>
<a href="visit.php"><button>ADD TO CART</button></a>
</div></div>
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
</html
