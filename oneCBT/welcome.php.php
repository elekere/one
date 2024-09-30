<?php

include "welcome.html.php";

if (isset($_POST['submit'])) {

$regnum = $_POST['regnum'];

$response ="You're welcome to our website, ".

htmlspecialchars($regnum, ENT_QUOTES, "UTF-8").". ".
"Click <a href = http://localhost/one/oneCBT/>here</a> to take a test.";
echo "<center><strong>$response</strong></center>";
}?>