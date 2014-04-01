<?php
require_once("consts.php");

$dbcon= null;

function connect() {
   global $dbcon;
   $dbcon= mysql_connect(DB_HOST, DB_USER, DB_PASS);

   if(!$dbcon){
      die("Unable to connect to: " . DB_USER . ":" . DB_PASS . "@" . DB_HOST . ". Error: " . mysql_error());
   }

   if($dbcon!== null){
      mysql_select_db(DB_DB, $dbcon);
   }
}

function getSelect($query) {
   global $dbcon;
   if($dbcon=== null)
      connect();

   if(is_resource($dbcon)) {
      $result = mysql_query($query, $dbcon);
      if($result !== null && is_resource($result)) {
         $rows = array();
         while($row = mysql_fetch_row($result)) {
            $rows[] = $row;
         }
         return $rows;
      }
   }
}

function insertQuery($query, $update = false) {
   global $dbcon;

   if($dbcon=== null){
      connect();
   }

   if(is_resource($dbcon)) {
      $result = mysql_query($query, $dbcon);
      if($result !== true) {
         return false;
      }

      return ($update === false) ? true : mysql_insert_id();
   }
}
