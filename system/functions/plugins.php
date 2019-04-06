<?php
/**
 * EC-Framework Plugin File
 * THIS FILE IS REQUIRED TO USE PLUGINS
 */
 
 //Be sure to create the system/plugins/ folder
 
 
 foreach (glob("system/plugins/*.php") as $filename) {
  require $filename;
}