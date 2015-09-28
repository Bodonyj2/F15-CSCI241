<!DOCTYPE html>
<html>
	<head>
		<title>Lab 3</title>
	</head>
	<body>
		
	
	<?php 
    
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
		
		
			if(isset($_POST["includeTax"]))
     			{
     			$subTotal = ($priceItem1 + $priceItem2 + $priceItem3 + $priceItem4);
					if(isset($_POST["includeTax"]))
					{
					$total = (($subTotal * .07) + $subTotal);
					}	
					else 
					{
					$total = $subTotal;	
					}
 
     			echo "Invoice Item 1: " . $invoiceItem1 . "<br>" . " Price: $" . number_format(($priceItem1 * .07) + $priceItem1, 2) . "<br>" . "<br>";
	  			echo "Invoice Item 2: " . $invoiceItem2 . "<br>" . " Price: $" . number_format(($priceItem2 * .07) + $priceItem2, 2) . "<br>" . "<br>";
	  			echo "Invoice Item 3: " . $invoiceItem3 . "<br>" . " Price: $" . number_format(($priceItem3 * .07) + $priceItem3, 2) . "<br>" . "<br>";
	  			echo "Invoice Item 4: " . $invoiceItem4 . "<br>" . " Price: $" . number_format(($priceItem4 * .07) + $priceItem4, 2) . "<br>" . "<br>";
				echo "Subtotal: $" . number_format($subTotal, 2) . "<br>";
				echo "Total: $" . number_format($total, 2);
				}
			else 
				{
				echo "Invoice Item 1: " . $invoiceItem1 . "<br>" . " Price: $" . $priceItem1 . "<br>" . "<br>";
	  			echo "Invoice Item 2: " . $invoiceItem2 . "<br>" . " Price: $" . $priceItem2 . "<br>" . "<br>";
	  			echo "Invoice Item 3: " . $invoiceItem3 . "<br>" . " Price: $" . $priceItem3 . "<br>" . "<br>";
	  			echo "Invoice Item 4: " . $invoiceItem4 . "<br>" . " Price: $" . $priceItem4 . "<br>" . "<br>";
				}
		}		
	else		
		{			
    ?>
  	
		<form method="post" action="lab3.php" name="form">
		Invoice Item 1: <input type="text" name="invoiceItem1"> Price: <input type="text" name="priceItem1"><br>
		Invoice Item 2: <input type="text" name="invoiceItem2"> Price: <input type="text" name="priceItem2"><br>
		Invoice Item 3: <input type="text" name="invoiceItem3"> Price: <input type="text" name="priceItem3"><br>
		Invoice Item 4: <input type="text" name="invoiceItem4"> Price: <input type="text" name="priceItem4"><br>
		Include Tax? <input type="checkbox" name="includeTax">
		<input type="submit" value="Submit">
		</form>
	<?php
		}
	?>
	</body>
	</html>
	