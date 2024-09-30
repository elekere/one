<html>
<head>
	<title>Simple Currency Converter</title>
	<link rel="stylesheet" href="style.css">	
</head>
<body>
	<div id="head">
	<h1>My Simple Currency Converter</h1>
</div>
<div class="welcome">
	<form action="converter.php" METHOD="GET">
		<input type=text name="curr" placeholder="Type Local Amount">
		<select name="operator">
			<option>Choose  Currency</option>
			<option>Dollars</option>
			<option>Pounds</option>
			<option>Euros</option>
			<option>Franc</option>
		</select>
		<br>
		<button class="submit" name="submit">Convert</button>
		<p>Amount</p>
</form>


		<?php
		if (isset($_GET['submit'])) {
			$curr=$_GET['curr'];
			$operator=$_GET['operator'];

			switch ($operator) {
				case "Choose Currency":
				echo "Choose A Currency";
					# code...
				break;


				case "Dollars":
				$amount=$curr/300;
				echo "$amount Dollars";
					# code...
				break;

				case "Pounds":	
				$amount=$curr/500;
				echo "$amount Pounds";
					# code...
				break;

				case "Euros":
				$amount=$curr/1000;
				echo "$amount Euros";
						# code...
				break;

				case "Franc":
				$amount=$curr/800;
				echo "$amount Franc";
						# code...
					# code...
					break;
			}
			# code...
		}
		?>
	</div>	
	</body>
	</html>