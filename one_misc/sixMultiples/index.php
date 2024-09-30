 <!DOCTYPE html>
<html>
	<?php
		
		echo "SOME MULTIPLES OF SIX <p>";

		$minfactor= 1;
		$maxfactor = 12;
		$i=6;

		while ($minfactor <= $maxfactor) {
			
			$product= $i*$minfactor; // 
			 echo "<p>"."$i x $minfactor = $product";

			$minfactor++;
		}
		

	?>
<body>

</body>
</html>