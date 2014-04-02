<?php
require_once("view.php");
require_once("dbfuncs.php");


if($_SERVER["REQUEST_METHOD"] == "POST"){
   if(!isset($_REQUEST["message"])){
      $_SESSION["errormsg"] = "Empty message!";
      header("Location: /home.php");
      exit;
   }
   if(isset($_REQUEST["cow"])){
      $m = $_REQUEST["message"];
      $message = "<pre>".`perl /usr/games/cowsay $m`."</pre>";
   }else{
      $message = $_REQUEST["message"];
   }
   $is_private = isset($_REQUEST["private"]) ? 1 : 0;
   $postSQL = "INSERT INTO post(username, message, is_private) VALUES (
               '" . $_SESSION["username"]. "',
               '" . $message . "',
               " . $is_private . ")";
   $inserted = insertQuery($postSQL);
   if($inserted === false) {
      $_SESSION["errormsg"] = "Unable to make post!";
   }
   header("Location: /home.php");
}
