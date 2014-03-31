<?php


session_start();

function view_header($title){
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
     <body role="document">
   <?php
}

function view_nav($username){
   ?>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">LolFace</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/about.php">About</a></li>
            <!--
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
         -->
        </div><!--/.nav-collapse -->
      </div>
    </div>
   <div class="container">
   <div class="row">
   <div class="col-sm-3">
      <h2><?php echo $username; ?></h2>
      <div class="list-group">
         <a href="/" class="list-group-item"><span class="glyphicon glyphicon-refresh"></span> Refresh</a>
         <a href="/logout.php" class="list-group-item"><span class="glyphicon glyphicon-off"></span> Logout</a>
      </div>
   </div>
   <div class="col-sm-8">
      <h3>Say something!</h3>
      <form method="POST" action="new_post.php" role="form" class="well">
      <fieldset>
         <div class="form-group">
            <textarea class="form-control" rows="3" name="message"></textarea>
         </div>
         <div class="form-group">
            <label class="checkbox-inline">
               <input type="checkbox" name="private"> Private?
            </label>
            <label class="checkbox-inline">
               <input type="checkbox" name="cow"> Cow?
            </label>
         </div>
         <input type="submit" value="Post" class="btn btn-primary">
      </fieldset>
      </form>
      <h1>My Feed</h1>
      <hr />
   <?php
}

function view_footer(){
   ?>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
  </body>
</html>
   <?php
}

function view_post($username, $message){
   ?>
   <div class="panel panel-default">
      <div class="panel-heading"><strong><?php echo $username; ?></strong></div>
      <div class="panel-body">
         <p><?php echo $message; ?></p>
      </div>
   </div>
   <?php
}

function view_landing(){
   ?>
    <link href="/static/css/cover.css" rel="stylesheet">
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
          </div>
          <div class="inner cover">
            <h1 class="cover-heading">LolFace.</h1>
            <p class="lead">Connect with the people that matter to you the most. LolFace is a <strong>robust</strong> platform that expedites <strong>cutting-edge</strong> interaction between users. With a <strong>throughput-focused</strong> architecture, LolFace has re-engineered the <strong>flexibility</strong> of <strong>human communication</strong>.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Register</a>
              or
              <a href="#" class="btn btn-lg btn-default">Login</a>
            </p>
          </div>
        </div>
      </div>
    </div>
   <?php
}
