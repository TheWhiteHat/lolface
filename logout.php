<?php
require_once("view.php");

$_SESSION["auth"] = false;
header("Location: /index.php");
?>
