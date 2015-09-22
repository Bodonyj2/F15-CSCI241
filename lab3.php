<!DOCTYPE html>
<html>
	<head>
		<title>Lab 3</title>
	</head>
	<body>
		

		<pre><?php 
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$invoiceItem1 = ($_POST["invoiceItem1"]);
		$invoiceItem2 = ($_POST["invoiceItem2"]);
		$invoiceItem3 = ($_POST["invoiceItem3"]);
		$invoiceItem4 = ($_POST["invoiceItem4"]);
		$priceItem1 = ($_POST["priceItem1"]);
		$priceItem2 = ($_POST["priceItem2"]);
		$priceItem3 = ($_POST["priceItem3"]);
		$priceItem4 = ($_POST["priceItem4"]);	
		$includeTax = ($_POST["includeTax"]);
		
			if(isset($_POST["includeTax"]))
     			{
     			echo "Invoice Item 1:" + $invoiceItem1 + "Price" + (($priceItem1 * .07) + $priceItem1);
	  			echo "Invoice Item 2:" + $invoiceItem1 + "Price" + (($priceItem2 * .07) + $priceItem2);
	  			echo "Invoice Item 3:" + $invoiceItem1 + "Price" + (($priceItem3 * .07) + $priceItem3);
	  			echo "Invoice Item 4:" + $invoiceItem1 + "Price" + (($priceItem4 * .07) + $priceItem4);
				}
			else 
				{
				echo "Invoice Item 1:" + $invoiceItem1 + "Price" + $priceItem1;
	  			echo "Invoice Item 2:" + $invoiceItem1 + "Price" + $priceItem2;
	  			echo "Invoice Item 3:" + $invoiceItem1 + "Price" + $priceItem3;
	  			echo "Invoice Item 4:" + $invoiceItem1 + "Price" + $priceItem4;
				}	
    ?>
    </pre>	
	<form method="post" action="lab3.php" name="form">
		Invoice Item 1: <input type="text" name="invoiceItem1"> Price: <input type="text" name="priceItem1"><br>
		Invoice Item 2: <input type="text" name="invoiceItem2"> Price: <input type="text" name="priceItem2"><br>
		Invoice Item 3: <input type="text" name="invoiceItem3"> Price: <input type="text" name="priceItem3"><br>
		Invoice Item 4: <input type="text" name="invoiceItem4"> Price: <input type="text" name="priceItem4"><br>
		Include Tax? <input type="checkbox" name="includeTax">
		<input type="submit" value="Submit">
	</form>
	<?php
