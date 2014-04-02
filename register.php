<?php
require_once("view.php");
require_once("dbfuncs.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
   if(!isset($_REQUEST["username"]) || !isset($_REQUEST["password"])){
      $_SESSION["errormsg"] = "Please fill in all fields";
   }
   else{
      $username = $_POST["username"];
      $password = $_POST["password"];
      $regSQL = "INSERT INTO users(username, password) VALUES ('" .
         mysql_real_escape_string($_REQUEST["username"]) .  "', '" . md5(mysql_real_escape_string($_REQUEST["password"])) .
         "')";
      $inserted = insertQuery($regSQL);
      if($inserted === false) {
         $_SESSION["errormsg"] = "Unable to register!";
      }
      else {
         $_SESSION["errormsg"] = "Unable to register!";
         echo 'Details updated! Excellent.';
      }
   }
}
