<!DOCTYPE html>
<html>
	<head>
		<title>Lab 4</title>
	</head>
	<body>
		<pre><?php 
		
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if(isset($_POST["startValue"]) && isset($_POST["endValue"]))
		{
			$startValue = ($_POST["startValue"]);
			$endValue = ($_POST["endValue"]);
		
			if (is_numeric($startValue) && is_numeric($endValue))
			{
				if(abs($startValue - $endValue)+1 < 11)
				{
					
				
					echo "X" . "\t";
					for ($ct = $startValue; $ct <= $endValue; $ct++)
					{
						echo $ct . "\t";					
					}
					for ($rs = $startValue; $rs <= $endValue; $rs++)
					{
						echo "\n";
						echo $rs . "\t";
						for ($mt = $startValue; $mt <= $endValue; $mt++)
						{
							echo ($rs * $mt) . "\t";
						}
					}	
				}	
				else
				{ 
				echo "Please use a range of numbers under 10 values of each other.";
				
				}
			}	
			else
			{
		
			echo "One or both of the inputs is not valid.";
			}
				
		}		
	}
	
	else
	{	
	?>
		
	</pre>	
	<form method="post" action="lab4.php" name="form">
		Start Value: <input type="text" name="startValue"><br>
		End Value: <input type="text" name="endValue"><br>
		<input type="submit" value="Submit">
	</form>
	
	<?php 
	}	
		
	?>	
			
	
	
	</body>
</html>