<!DOCTYPE html>
<html>
	<head>
		<title>Lab 5</title>
	</head>
	<body>
<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if(isset($_POST["employeeId"]) && isset($_POST["employeeName"]) && isset($_POST["hourlyWage"]) && isset($_POST["hoursWorked"]) && $_POST["employeeId"] != "" && $_POST["employeeName"] != "" 
				&& $_POST["hourlyWage"] != "" && $_POST["hoursWorked"] != "")
		{
			$employeeId = ($_POST["employeeId"]);
			$employeeName = ($_POST["employeeName"]);
			$hourlyWage = ($_POST["hourlyWage"]);
			$hoursWorked = ($_POST["hoursWorked"]);
			
		if(is_numeric($employeeId) && !is_numeric($employeeName) && is_numeric($hoursWorked) && is_numeric($hourlyWage))
		{
			if($hoursWorked > 40)
			{
			 	$overtime = true;	
			}
			else 
			{
				$overtime = false;	
			}
			if($overtime == true)
			{
				$hoursOvertime = ($hoursWorked - 40);
				$hoursRegular = 40;
				$overtimePay = ($hoursOvertime * ($hourlyWage * 1.5));
				$regularPay = ($hoursRegular * $hourlyWage);
				$totalPay = (($regularPay) + ($overtimePay));
				$grossPay = (($regularPay) + ($overtimePay));
			}
			if($overtime == false)
			{
				$hoursOvertime = 0;
				$hoursRegular = $hoursWorked;
				$overtimePay = 0;
				$regularPay = ($hoursWorked * $hourlyWage);
				$totalPay = (($regularPay) + ($overtimePay));
				$grossPay = (($regularPay) + ($overtimePay));
			}
			
			$disb100 = ($totalPay / 100);
			$disb100 = (int) $disb100;
			if ($disb100 < 1)
			{
			$disb100 = 0;
			}
			$payed100 = $disb100 * 100;
			$totalPay = ($totalPay - $payed100);
			
			
			$disb50 = ($totalPay / 50);
			$disb50 = (int) $disb50;
			if ($disb50 < 1)
			{
			$disb50 = 0;
			}
			$payed50 = $disb50 * 50;
			$totalPay = ($totalPay - $payed50);
			
			$disb20 = ($totalPay / 20);
			$disb20 = (int) $disb20;
			if ($disb20 < 1)
			{
			$disb20 = 0;
			}
			$payed20 = $disb20 * 20;
			$totalPay = ($totalPay - $payed20);
			
			$disb10 = ($totalPay / 10);
			$disb10 = (int) $disb10;
			if ($disb10 < 1)
			{
			$disb10 = 0;
			}
			$payed10 = $disb10 * 10;
			$totalPay = ($totalPay - $payed10);
			
			$disb5 = ($totalPay / 5);
			$disb5 = (int) $disb5;
			if ($disb5 < 1)
			{
			$disb5 = 0;
			}
			$payed5 = $disb5 * 5;
			$totalPay = ($totalPay - $payed5);
			
			$disb1 = ($totalPay / 1);
			$disb1 = (int) $disb1;
			if ($disb1 < 1)
			{
			$disb1 = 0;
			}
			$payed1 = $disb1 * 1;
			$totalPay = ($totalPay - $payed1);
			
		
			$disc25 = ($totalPay / .25);
			$disc25 = (int) $disc25;
			if ($disc25 < 1)
			{
			$disc25 = 0;
			}
			$payed025 = $disc25 * .25;
			$totalPay = ($totalPay - $payed025);
			
			$disc10 = ($totalPay / .10);
			$disc10 = (int) $disc10;
			if ($disc10 < 1)
			{
			$disc10 = 0;
			}
			$payed010 = $disc10 * .10;
			$totalPay = ($totalPay - $payed010);
			
			$disc05 = ($totalPay / .5);
			$disc05 = (int) $disc05;
			if ($disc05 < 1)
			{
			$disc05 = 0;
			}
			$payed005 = $disc05 * .05;
			$totalPay = ($totalPay - $payed005);
			
			$disc01 = ($totalPay / .01);
			$disc01 = (int) $disc01;
			if ($disc01 < 1)
			{
			$disc01 = 0;
			}
			$payed001 = $disc01 * .01;
			$totalPay = ($totalPay - $payed001);
			
			$quanTotal = $disb1 + $disb5 + $disb10 + $disb20 + $disb50 + $disb100 + $disc01 + $disc05 + $disc10 + $disc25;
			$payedTotal = $payed1 + $payed5 + $payed10 + $payed20 + $payed50 + $payed100 + $payed001 + $payed005 + $payed010 + $payed025;
			echo "Name: " . $employeeName . "<br/>";
			echo "ID: " . $employeeId . "<br/>" . "<br/>";
			echo "Paystub" . "<br/>" . "<br/>";
			echo "<table border='1'>";
			echo "<tr>";
			echo "<td></td>";
			echo "<td>Hours</td>";
			echo "<td>Gross Pay</td>";
			echo "</tr>"; 
			echo "<tr>";
			echo "<td>Regular:</td>";
			echo "<td>$hoursRegular</td>";
			echo "<td>$$regularPay</td>";
			echo "</tr>"; 
			echo "<tr>";
			echo "<td>Overtime:</td>";
			echo "<td>$hoursOvertime</td>";
			echo "<td>$$overtimePay</td>";
			echo "</tr>"; 
			echo "<tr>";
			echo "<td>Total:</td>";
			echo "<td>$hoursWorked</td>";
			echo "<td>$$grossPay</td>";
			echo "</tr>";
			echo "</table>";
			
			echo "<br/>" . "Disbursement" . "<br/>" . "<br/>";
			echo "<table border='1'>";
			echo "<tr>";
			echo "<td>Denomination</td>";
			echo "<td>Quantity</td>";
			echo "<td>Disbursed</td>";
			echo "</tr>"; 
			echo "<tr>";
			echo "<td>$100</td>";
			echo "<td>$disb100</td>";
			echo "<td>$$payed100</td>";
			echo "</tr>"; 
			echo "<tr>";
			echo "<td>$50</td>";
			echo "<td>$disb50</td>";
			echo "<td>$$payed50</td>";
			echo "</tr>"; 
			echo "<tr>";
			echo "<td>$20</td>";
			echo "<td>$disb20</td>";
			echo "<td>$$payed20</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>$10</td>";
			echo "<td>$disb10</td>";
			echo "<td>$$payed10</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>$5</td>";
			echo "<td>$disb5</td>";
			echo "<td>$$payed5</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>$1</td>";
			echo "<td>$disb1</td>";
			echo "<td>$$payed1</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>$.25</td>";
			echo "<td>$disc25</td>";
			echo "<td>$$payed025</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>$.10</td>";
			echo "<td>$disc10</td>";
			echo "<td>$$payed010</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>$.05</td>";
			echo "<td>$disc05</td>";
			echo "<td>$$payed005</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>$.01</td>";
			echo "<td>$disc01</td>";
			echo "<td>$$payed001</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Total</td>";
			echo "<td>$quanTotal</td>";
			echo "<td>$$payedTotal</td>";
			echo "</tr>";
			echo "</table>";
			
		}
		else
		{
		echo "Please use accurate information.";	
		?>
		<form method="post" action="lab5.php" name="form">
		<input type="text" name="employeeId" placeholder="Employee ID"><br>
		<input type="text" name="employeeName" placeholder="Employee Name"><br>
		<input type="text" name="hourlyWage" placeholder="Hourly Wage"><br>
		<input type="text" name="hoursWorked" placeholder="Hours Worked"><br>
		<input type="submit" value="Submit">
		</form>
		<?php
		}
		}
		else 
		{
		echo "Please complete all fields.";	
		?>
		<form method="post" action="lab5.php" name="form">
		<input type="text" name="employeeId" placeholder="Employee ID"><br>
		<input type="text" name="employeeName" placeholder="Employee Name"><br>
		<input type="text" name="hourlyWage" placeholder="Hourly Wage"><br>
		<input type="text" name="hoursWorked" placeholder="Hours Worked"><br>
		<input type="submit" value="Submit">
		</form>
		<?php
		}	
	}
	else 	
	{

	?>
	
	<form method="post" action="lab5.php" name="form">
	<input type="text" name="employeeId" placeholder="Employee ID"><br>
	<input type="text" name="employeeName" placeholder="Employee Name"><br>
	<input type="text" name="hourlyWage" placeholder="Hourly Wage"><br>
	<input type="text" name="hoursWorked" placeholder="Hours Worked"><br>
	<input type="submit" value="Submit">
	</form>
<?php
}
?>
	
	
	</body>
</html>

