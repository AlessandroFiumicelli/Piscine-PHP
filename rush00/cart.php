<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<link rel="stylesheet" href="style_cart.css">
	</head>
	<body>
		<br />
		<div class="container" style="width: 700px;">
		<h3 align="center">Shopping Cart</h3><br />
		<?php
		$query = "SELECT * FROM ";
		$reuslt = mysqli_query($connect, $query);
		if (mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_array($result))
			{
		?>
		<div class="col-md4">
			
		</div>
		<?php
			}
		}
		?>
