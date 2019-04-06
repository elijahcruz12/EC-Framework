<?php
/**
 * This file works with the config folder's variables.
 */

//Creates a Site Title Variable
$sitetitle = $config['sitetitle'];

//URL
$siteurl = $config['siteurl'];

function base_url(){
    global $siteurl;
    
    echo $siteurl;
}

//Function for showing variables through the console even if Devmode is disabled
if($config['debugging'] == true) {
    function console_log( $data ){
      echo '<script>';
      echo 'console.log('. json_encode( $data ) .')';
      echo '</script>';
    }
}
else {
    function console_log($data) {
        //Does nothing if debugging isn't enabled.
        return;
    }
}

//We Need to check if the site is in Development Mode
if($config['devmode'] == true){
    //Show ALL errors
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
}