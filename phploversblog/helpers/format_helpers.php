<?php
/*
 function to format date
*/
  function formatDate($date){
     return date('F j, Y, g:i a', strtotime($date));
  }


function shortenText($text, $chars=450){
     $text=$text." ";
     $text=substr($text,0,$chars);
     //to no cut the world in the middle we do this
     $text=substr($text,0,strrpos($text,' '));
     $text=$text."  ......";
     return $text;
}
