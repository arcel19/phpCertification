<?php
   $is_logged = false;
   $name = "chronoxx";
  

   $message = "welcome" . ($is_logged ? "back" : "!");

   echo $message;

   $name = isset($name) ? $name : "joe";
   $name = $name ?: "joe";
   echo $name;

 ?>