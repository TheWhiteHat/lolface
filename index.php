<?php
require_once("view.php");

if (!isset($_SESSION["auth"]) || $_SESSION["auth"] == false){
   view_header("LolFace");
   view_landing();
   view_footer();
}
else {
   header("Location: /home.php");
}

?>
