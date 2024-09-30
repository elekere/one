<?php

include "body.html.php";

$score = 0;

if (isset($_POST["submit"])){
	
	#1
		
		if (isset($_POST["ques1"]) && $_POST["ques1"] == "A")
			{$ques1 = $_POST["ques1"]; $score = $score + 10;} else {$score = $score + 0; }
	#2
		
		if (isset($_POST["ques2"]) && $_POST["ques2"] == "D")
			{$score = $score + 10; $ques2 = $_POST["ques2"];} else {$score = $score + 0; }
	#3	
		if (isset($_POST["ques3"]) && $_POST["ques3"] == "D")
			{$score = $score + 10; $ques3 = $_POST["ques3"];} else {$score =  $score + 0; }
	#4	
		if (isset($_POST["ques4"]) && $_POST["ques4"] == "C")
			{$score = $score + 10; $ques4 = $_POST["ques4"];} else {$score = $score + 0;}
	#5	
		if (isset($_POST["ques5"]) && $_POST["ques5"] == "C")
			{$score = $score + 10; $ques5 = $_POST["ques5"];} else {$score = $score + 0;}
	#6	
		if (isset($_POST["ques6"]) && $_POST["ques6"] == "C")
			{$score = $score + 10; $ques6 = $_POST["ques6"];} else {$score = $score + 0; }
	#7
		if (isset($_POST["ques7"]) && $_POST["ques7"] == "D")
			{$score = $score + 10; $ques7 = $_POST["ques7"];} else {$score = $score + 0; }
	#8	
		if (isset($_POST["ques8"]) && $_POST["ques8"] == "D")
			{$score = $score + 10; $ques8 = $_POST["ques8"];} else {$score =  $score + 0; }
	#9	
		if (isset($_POST["ques9"]) && $_POST["ques9"] == "C")
			{$score = $score + 10; $ques9 = $_POST["ques9"];} else {$score = $score + 0;}
	#10	
		if (isset($_POST["ques10"]) && $_POST["ques10"] == "C")
			{$score = $score + 10; $ques10 = $_POST["ques10"];} else {$score = $score + 0;}
		if ($score >= 70) {$remark = "A";} elseif ($score >= 60) {$remark = "B";}
		elseif ($score >= 50 ) {$remark = "C";} elseif ($score >= 40) {$remark = "D";}
			else {$remark = "R";}
	
		echo "Dear User, you scored <b>$score</b>
			marks in the test. And your grade is: <b>$remark.</b>";
		}
	
	


?>