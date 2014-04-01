<?php
require_once("view.php");

if (!isset($_SESSION["auth"])){
   view_header("LolFace");
   view_landing();
   view_footer();
}
else {
   http_redirect("home.php");
}

?>
