<?php


session_start();
$nav_links = array(
                  'Home' => '/home.php',
                  'Login' => '/login.php', 
                  'Send Message' => '/sendmessage.php', 
                  'View Messages' => '/messages.php', 
                  'Edit Profile' => '/editprofile.php',
                  'Load Template' => '/template.php?load=loadme'
                  );

function site_header($title){
   ?>
   <!DOCTYPE html>
   <html lang="en">
     <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="description" content="LolFace, connect with friends">
       <meta name="author" content="LolFace Incorporated">

       <title><?php echo $title ?></title>

       <link href="/static/css/bootstrap.min.css" rel="stylesheet">
       <link href="/static/css/lolface.css" rel="stylesheet">
     </head>
   <?php
}
