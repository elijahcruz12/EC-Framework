<?php
/**
 * This function adds things to the header.php
 */
 $echeader_array = array();
 
 function EC_Header_Add($append, $comment) {
  global $echeader_array;
  
  if($comment) {
   array_push($echeader_array, "<!--".$comment."-->");
  }
  
  array_push($echeader_array, $append);
  return $echeader_array;
 }
 
 function EC_Header(){
  global $echeader_array;
  $actualheader = implode("", $echeader_array);
  return $actualheader;
 }