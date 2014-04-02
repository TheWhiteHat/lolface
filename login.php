<?php
require_once("view.php");
require_once("dbfuncs.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
   if(!isset($_REQUEST["username"]) || !isset($_REQUEST["password"])){
      $_SESSION["errormsg"] = "Please fill in all fields";
   }
   else {
      $username = $_POST["username"];
      $password = $_POST["password"];
      $authSQL = "SELECT * FROM users WHERE username = '" . $_REQUEST["username"] .
                  "' AND password = '" . md5($_REQUEST['password']) . "'";
      $authed = getSelect($authSQL);
      
      if(!$authed) {
         $_SESSION["errormsg"] = "Invalid Login";
         header("Location: /index.php");
      }
      else {
         $_SESSION["auth"] = true;
         //$_SESSION["username"] = $authed[0][1];
         $_SESSION["username"] = $_REQUEST["username"];
         header("Location: /home.php");
      }
   }
}
?>
