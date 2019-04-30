<?php
//Get composer autoload.
if(file_exists("vendor/autoload.php"));

//  Get the config files
foreach (glob("app/config/*") as $filename) {
  require $filename;
}
//  Get the file that uses the config files.
require("system/configedit.php");

// This file creates the Page names.
require("system/pagination.php");


//  Get the function files we use. Also will auto include all.
foreach (glob("system/functions/*") as $filename) {
  require $filename;
}
//Get the header file.
include_once("app/views/template/header.php");

//  Now that we have the header, we can display the page. This is done by matching the url
//  with the page of the same name in the views/ folder (home is home.php in the views/ folder)
require("system/views.php");

include_once("app/views/template/footer.php");

?>