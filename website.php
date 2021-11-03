<?php
$conn=mysqli_connect("localhost","root","","e commerce");
$q="select * from product";
$res=mysqli_query($conn,$q);
?>


<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
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
	.nav li:hover{
		color: black;
	}
	.nav a{
		color: white;
	}
	.container{
		width: 100%;
		height: 85vh;
		background-image: url(sports-shoes-sneakers-green-background-place-inscription-copy-space-176364558.jpg);
		background-repeat: no-repeat;
		background-size: 100% 100%;
	}
	#product{
		width: 100%;
		margin: 3% 0% 3% 0%;
		height: 750px;
  background-color: #cccccc;
  background-image: radial-gradient(lightgrey, black,grey,black);
}
	.product{
		width: 20%;
		height: 50vh;
		float: left;
		margin:2%;
	}
	.product img{
		width: 100%;
		height: 30vh;
	}
	.product h6{
		font-size: 20px;
		padding:1px 0px 1px 7px;
		color: white;
	}
	.product input{
		margin: 7px 0px 0px 7px;
		height: 5vh;
		width: 30%;
		font-size: 15px;
	}
	.product input:hover{
		background-color: blue;
		color: white;
	}
	.footer{
		width: 100%;
		height: 22vh;
		background-color: black;
		margin: 3% 0% 3% 0%;
		padding: 1% 0% 1% 0%;
	}
	.header img{
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
		margin:  0.5% 0% 0.5% 0%;
		width: auto;
		float: left;
	}
	.icons{
		color: black;
	}
		.footer img{
		width: 10%;
		height: 7vh;
		margin: 2% 0% 0% 4%;
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
	.star{
		float: left;
		font-size: 15px;
		padding:1% 8% 0% 0%;
	}
</style>
<body>
<div id="container">
	<div class="header">
		<img src="logo.PNG">
		<div class="icon">
			<i class="fa fa-facebook"></i>
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
			<a href="signin.php"><li>signin</li></a>
			<a href="http://localhost/e%20commerce/sign%20up.php"><li>signup</li></a>
		</ol>

	</div>
	<div class="container">
		
	</div>
	<div id="product">
		<?php
while ($row=mysqli_fetch_assoc($res))
 {
?>
<div class="product">
	<img src="<?php echo $row['image'];?>">
	<h6><?php echo $row['name'] ?></h6>
			<h6><?php echo $row['description'] ?></h6>
		    <h6><div class="star">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
		</div>		<?php echo $row['price'] ?></h6>
			<a href="checkout.php?i=<?php echo $row['id'] ?>"><input type="button" name="" value="checkout"></a></div>
	
	<?php
}
	?></div>
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