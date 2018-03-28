<?php
//Navbar Functions

// Active Class (Returns active depending on which page is on.)
function active_class($page){
    global $pagebase;
    
    if($pagebase == $page){
        return "active";
    }
    else{
        return "";
    }
}