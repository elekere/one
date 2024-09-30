<!DOCTYPE html>
<html>
<head>
	<title>currency check</title>
</head>
<body>
<h1>My Currency Converter</h1>
<form action="currency.php" method="POST">
	<input type="text" name="currency">
	<select name="operators">
		<option>Currency</option>
		<option>Pounds</option>
		<option>Franc</option>
		<option>Euros</option>
		<option>Dollars</option>
	</select>
	<br><button name="submit">Convert</button>
</form>
<?php
if (isset($_POST['submit'])) {
	$currency=$_POST['currency'];
	$operators=$_POST['operators'];
switch ($operators) {
	case 'choose currency':
		echo "choose a currency";
		ss;
	
	case "Pounds":
		$amount=$currency /500;
		echo "$amount Pounds";
		break;

	case "Euros":
		$amount=$currency /1000;
		echo "$amount Euros";
		break;

	case "Dollars":
		$amount=$currency /300;
		echo "$amount Dollars";
		break;

	case "Franc":
		$amount=$currency /200;
		echo "$amount Franc";
		break;

}
}
?>
</body>
</html>