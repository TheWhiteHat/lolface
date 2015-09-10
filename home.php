<?php
require_once("view.php");
require_once("dbfuncs.php");

if(!isset($_SESSION["auth"]) || !$_SESSION["auth"]){
   $_SESSION["errormsg"] = "You must be logged in to view this page!";
   header("Location: /index.php");
   exit;
}

$postsSQL = "SELECT * FROM post WHERE NOT (username <> '" . $_SESSION["username"] .
   "' AND is_private = 1) ORDER BY id DESC";

$posts = getSelect($postsSQL);

view_header("LolFace");
view_nav($_SESSION["username"]);
foreach($posts as $post) {
   echo "<h3>" . $post[3] . "</h3>";
   view_post($post[1], $post[2], ord($post[3]) == 1 ? true : false);
}
view_footer();
?>
