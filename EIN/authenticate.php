<?php
session_start();
$NAME=$_COOKIE['Username'];
echo $_COOKIE["Username"];
if(isset($NAME))
{
      if($NAME=='USERNAME')
      {
          echo "success";
      }
      else
     {
          echo "error";       
     }    
 }
?>
