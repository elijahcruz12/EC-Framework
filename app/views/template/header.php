<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $pagetitle;?> - <?php echo $sitetitle; ?></title>
        <meta charset="UTF-8">
        <meta name="description" content="<?php echo site_desc();?>">
        <meta name="keywords" content="<?php echo $sitekeywords;?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php echo $echeader?>
        
        <!-- Bootstrap is provided in cdn form to allow you to change it. -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Your actual Stylesheet is located here -->
        <link rel="stylesheet" href="<?php echo $siteurl; ?>assets/css/style.css" type="text/css" />
    </head>
    <body>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#"><?php echo $sitetitle; ?></a>
            </div>
            <ul class="nav navbar-nav">
              <li class="<?php echo active_class("home"); ?>"><a href="<?php echo $siteurl;?>home">Home</a></li>
              <li class="<?php echo active_class("about"); ?>"><a href="<?php echo $siteurl;?>about">About</a></li>
            </ul>
          </div>
        </nav>
        
        <div class="jumbotron">
            <div class="container">
              <h1 class="display-3">Hello, world!</h1>
              <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
              <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
          </div>
