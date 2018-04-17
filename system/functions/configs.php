<?php
/**
 * These are functions that are created based on site configs.
 */

//  Site URL
function site_url(){
    global $siteurl;
    return $siteurl;
}

$ecdesc = $config['sitedesc'];
function site_desc(){
    global $ecdesc;
    return $ecdesc;
}

$echeader = '<meta name="generator" content="EC-Framework" /> <!-- leave this for stats -->';