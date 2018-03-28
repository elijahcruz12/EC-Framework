<?php
$pagebase = $_GET['page'];

if($pagebase == null){
    $pagebase = "home";
}

if($pagebase == "home" || empty($pagebase)){
    $pagetitle = "Home";
}
else{
    $pagetitle = ucfirst($pagebase);
}