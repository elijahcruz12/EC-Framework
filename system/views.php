<?php
$pagebase = $_GET['page'];
if(isset($pagebase)){
    if($pagebase == "home"){
        $pagelink = "app/views/pages/home.php";
    }
    else{
        $pagelink = "app/views/pages/".$pagebase.".php";
    }
}
else{
    $pagelink = "app/views/pages/home.php";
}

if(file_exists($pagelink)){
    require $pagelink;
}
else{
    require fourohfour();
}