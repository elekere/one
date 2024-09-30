<?php
session_start();
session_destroy();
header("location: plogin.php");
?>