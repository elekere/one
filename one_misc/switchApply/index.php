<!DOCTYPE html>
<html>
<body>
	
<?php

// I display today's date.
$date = date('l, F jS Y.'); 
echo "Today is " .$date."</p>";

?>
	
	<form action = "" method = "POST">
	<label for = "somenum">Enter A Number</label>
	<input type = "text" name = "somenum"
					value = "<?php if(isset($_POST['somenum'])) echo $_POST['somenum'] ?>">
	<button name ="submit">Go</button>
	</form>
<?php

// We care about what number a  user inputs.
if (isset($_POST['submit'])) {

switch ($_POST['somenum']) {
	case 1:
		$output = " Great!";
		break;
	case 2:
		$output = " Awesome!";
		break;
	case 4:
		$output = " Look-a-that!";
		break;
	case 3:
		$output = " Terrific!";
		break;
	default:
		$output = " Woohuu!";
		break;
}

 if (is_numeric($_POST['somenum'])) {
		echo $output;
	}
	
	else {echo "That's not a number!";} 
}

  
?>
</body>
</html>